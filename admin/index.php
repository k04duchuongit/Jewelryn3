<?php
session_start();
ob_start();

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 1) {

        include '../model/pdo.php';
        include '../model/sanpham.php';
        include '../model/bosuutap.php';
        include '../model/contact_user.php';
        include '../model/donhang.php';
        include '../model/taikhoan/taikhoan.php';
        include '../global.php';
        include './header.php';


        if (isset($_GET['act']) && $_GET['act'] != '') {
            $act = $_GET['act'];
            switch ($act) {
                case "capnhattrangthai_donhang":
                    $id_hoadon = $_POST['id_hoadon'];
                    $status = $_POST['status'];
                    if (isset($_POST['status'])) {
                        echo "ok";
                        updatestt($id_hoadon, $status);
                        header("Location: index.php?act=quanlydonhang");
                    }
                    include 'donhang/quanlydonhang.php';
                    break;
                case "quanlydonhang":
                    if (isset($_GET['nameprd_searchz'])) {
                        $list_bill = queryAll_bill($_GET['nameprd_searchz']);
                    } else {
                        $list_bill = queryAll_bill('');
                    }
                    include 'donhang/quanlydonhang.php';
                    break;
                case "themsanpham":
                    $listmathang = query_mathang();
                    $listchatlieu = query_chatlieu();
                    $listbosuutap = query_bosuutap('');
                    $list_size = querry_size();

                    if (isset($_POST['themmoisanpham'])) {
                        //bien the size san pham
                        $size_sanphams = list_size_focus($list_size);
                        echo "<pre>";
                        print_r($size_sanphams);
                        $ten_sp = $_POST['name_product'];
                        $gia_sp = $_POST['price_product'];
                        $code_sp = $_POST['code_product'];
                        $chitiet_sp = $_POST['detail_product'];
                        $id_chatlieu = $_POST['material_product'];
                        $id_mathang = $_POST['items_product'];
                        $id_bst = $_POST['collection_product'];
                        $soluongtonkho = $_POST['quantity_product'];
                        $target_dir = '../content/images/product/';
                        $imgprds = [];
                        for ($i = 1; $i <= count($_FILES); $i++) {
                            $imgKey = 'img_product' . $i;
                            $imgprd = $_FILES[$imgKey]['name'];
                            $imgprds[] = $imgprd;
                            $target_file = $target_dir . basename($_FILES[$imgKey]['name']);
                            if (move_uploaded_file($_FILES[$imgKey]['tmp_name'], $target_file)) {
                                echo "upload thành công";
                            } else {
                                echo "upload không thành công";
                            }
                        }
                        if (is_array($size_sanphams)) {
                            foreach ($size_sanphams as $key => $size_sanpham) {
                                add_bienthe_size($code_sp, $size_sanpham);
                            }
                        }
                        insert_img_sanpham($code_sp, $imgprds);
                        insert_sanpham($code_sp, $ten_sp, $gia_sp, $chitiet_sp, $id_chatlieu, $id_mathang, $id_bst, $soluongtonkho);
                    }
                    break;
                case "suasanpham_list":
                    $ma_sp = $_GET['code_sp'];
                    $img_prd = query_one_anhsp($ma_sp);
                    $information_prd = query_one_sanpham($ma_sp);
                    $list_chatlieu = query_chatlieu();
                    $list_mathang = query_mathang();
                    $list_bosuutap = query_bosuutap('');
                    $list_size = querry_size();
                    $list_size_prd = querry_sanpham_bienthe($ma_sp);
                    $list_size_prd = array_column($list_size_prd, 'id_size');  // tìm các key id_size tạo thành mảng mới (để loại bỏ key thừa)
                    include 'sanpham/suasanpham.php';
                    break;

                case "suasanpham_update":
                    $listsanpham = query_sanpham('');
                    $list_size = querry_size();
                    $prd_edit = query_one_anhsp($_GET['ma_sp']);
                    if (isset(($_POST['suasansanpham']))) {
                        $ma_sp = $_POST['code_product'];
                        $tensp = $_POST['name_product'];
                        $gia_sp = $_POST['price_product'];
                        $chitiet_sp = $_POST['detail_product'];
                        $id_chatlieu = $_POST['material_product'];
                        $id_mathang = $_POST['items_product'];
                        $id_bst = $_POST['collection_product'];
                        $soluongtonkho = $_POST['quantity_product'];
                        $key_img = 0;
                        $img_update_prds = [];
                        foreach ($_FILES as $key => $imgupdate) {
                            $key_img += 1;
                            if (!empty($imgupdate['name'])) {
                                $target_dir = '../content/images/product/';
                                $img_update_prds[] =  $imgupdate['name'];
                                $target_file = $target_dir . basename($imgupdate['name']);
                                move_uploaded_file($_FILES["$key"]['tmp_name'], $target_file);
                            } else {
                                $img_update_prds[] = $prd_edit['anhsp' . $key_img];
                            }
                        }
                        $list_size_prd = querry_sanpham_bienthe($ma_sp);
                        $past_list_size_prd = array_column($list_size_prd, 'id_size'); //size cũ của sp

                        $size_sanphams_focusForm = list_size_focus($list_size);     //những mảng đang được chọn qua form

                        if (is_array($past_list_size_prd) && !empty($past_list_size_prd)) {
                            foreach ($past_list_size_prd as $key => $size_sanpham_delete) {
                                delete_size_product($ma_sp, $size_sanpham_delete);
                            }
                        }
                        if (is_array($size_sanphams_focusForm) && !empty($size_sanphams_focusForm)) {
                            foreach ($size_sanphams_focusForm as $key => $size_sanpham) {
                                add_bienthe_size($ma_sp, $size_sanpham);
                            }
                        }
                        update_img_prd($prd_edit['ma_sp'], $img_update_prds);
                        update_prd($ma_sp,  $tensp, $gia_sp, $chitiet_sp, $id_chatlieu, $id_mathang, $id_bst, $soluongtonkho);
                    }
                    include 'sanpham/suasanpham.php';
                    header("Location: index.php?act=quanlysanpham");
                    break;

                case "quanlysanpham":
                    if (isset($_POST['submit'])) {
                        $admin_name_searchprd = $_POST['admin_name_searchprd'];
                        $listsanpham = query_sanpham($admin_name_searchprd);
                    } else {
                        $listsanpham = query_sanpham('');
                    }

                    $list_img = anh_sanpham();
                    include 'sanpham/quanlysanpham.php';
                    break;

                case "xoasanpham":
                    $listsanpham = query_sanpham('');
                    $code_sp = $_GET['code_sp'];
                    delete_prd($code_sp);
                    delete_size_product($code_sp, '');
                    delete_img_prd($code_sp);
                    header("Location: index.php?act=quanlysanpham");
                    break;

                case "softdelete_prd":
                    softdelete_prd_fct($_GET['code_sp']);
                    header("Location: index.php?act=quanlysanpham");
                    break;


                case "thungrac_prd":
                    $listsanpham = query_sanpham_reduce();
                    if ($_GET['code_sp']) {
                        restore_sanpham_reduce($_GET['code_sp']);
                    }
                    include 'sanpham/thungrac.php';
                    break;

                case "quanlytaikhoan":
                    if (isset($_GET['sdt_user'])) {
                        $list_acc =  querry_all_account($_GET['sdt_user']);
                    } else {
                        $list_acc =  querry_all_account('');
                    }
                    include 'taikhoan/quanlytaikhoan.php';
                    break;

                case "suataikhoan_list":
                    $acc =  querry_one_account($_GET['id_user']);
                    include "taikhoan/suataikhoan.php";
                    break;

                case "suataikhoan_update":
                    if (isset($_POST['confirm_update_acc'])) {
                        echo "ok";
                        $id_user = $_POST['id_user'];
                        $name_edit = $_POST['name_edit'];
                        $sdt_edit = $_POST['sdt_edit'];
                        $diachi_edit = $_POST['diachi_edit'];
                        $email_edit = $_POST['email_edit'];
                        update_acc_user($id_user, $name_edit, $sdt_edit, $diachi_edit, $email_edit);
                        header("Location: index.php?act=quanlytaikhoan");
                    }
                    include "taikhoan/suataikhoan.php";
                    break;
                case "xoataikhoan":
                    if (isset($_GET['id_user'])) {
                        // detele_acc($_GET['id_user']);
                        header("Location: index.php?act=quanlytaikhoan");
                    }
                    include "taikhoan/suataikhoan.php";
                    break;
                case "dangxuat":
                    session_unset();
                    header('Location: ../index.php');
                    break;

                case "quanlytintuc":
                    include 'tintuc/quanlytintuc.php';
                    break;

                case "suabosuutapupdate":
                    $bosuutap_edit =  query_one_bosuutap($_GET['id_bst']);
                    print_r($bosuutap_edit);
                    if (isset($_POST['editbosuutap'])) {
                        $id_bst = $_POST['id_bst'];
                        $name_bst = $_POST['namebst'];
                        print_r($_FILES['img_bst']['name']);
                        if (!empty($_FILES['img_bst']['name'])) {
                            echo "anh deo vao";
                            $target_dir = '../content/images/bosuutap/';
                            $img_update_bst =  $_FILES['img_bst']['name'];
                            $target_file = $target_dir . basename($_FILES['img_bst']['name']);
                            move_uploaded_file($_FILES['img_bst']['tmp_name'], $target_file);
                        } else {
                            $img_update_bst =  $bosuutap_edit['img_bosuutap'];
                        }
                        edit_bst($id_bst, $name_bst, $img_update_bst);
                    }
                    header("Location: index.php?act=quanlybosuutap");
                    break;
                case "quanlybosuutap":
                    $listbosuutap = query_bosuutap($_GET['namebst_searchz']);
                    include 'bosuutap/quanlybosuutap.php';
                    break;
                case "thembosuutap":
                    include 'bosuutap/thembosuutap.php';
                    if (isset($_POST['addbst'])) {
                        $name_bst = $_POST['namebst'];
                        $target_dir = '../content/images/bosuutap/';
                        $img_bst =  $_FILES['img_bst']['name'];
                        $target_file = $target_dir . basename($_FILES['img_bst']['name']);
                        move_uploaded_file($_FILES['img_bst']['tmp_name'], $target_file);
                        add_bst($name_bst, $img_bst);
                    }
                    break;
                case "suabosuutaplist":
                    $bosuutap_edit =  query_one_bosuutap($_GET['id_bst']);
                    include 'bosuutap/suabosuutap.php';
                    break;

                case "xoabosuutap":
                    delete_bosuutap($_GET['id_bst']);
                    $listbosuutap = query_bosuutap($_GET['namebst_searchz']);
                    include 'bosuutap/quanlybosuutap.php';
                    break;

                case "themtintuc":
                    include 'tintuc/themtintuc.php';
                    break;
                case "suatintuc":
                    include 'tintuc/suatintuc.php';
                    break;

                case "quanlycontact":
                    $list_contact = querry_all_contact($_GET['sdt_search']);
                    include 'contact/quanlycontact.php';
                    break;
            }
        } else {
            include './home.php';
        }
        include './footer.php';
    } else {
        header("Location: ../index.php");
    }
} else {
    header("Location: ../index.php");
}
