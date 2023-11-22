<?php
include '../model/pdo.php';
include '../model/sanpham.php';
include '../model/bosuutap.php';
include '../global.php';
include './header.php';


if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case "quanlydonhang":
            include 'donhang/quanlydonhang.php';
            break;

        case "themsanpham":
            $listmathang = query_mathang();
            $listchatlieu = query_chatlieu();
            $listbosuutap = query_bosuutap('');
            include 'sanpham/themsanpham.php';
            if (isset($_POST['themmoisanpham'])) {
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
                insert_img_sanpham($code_sp, $imgprds);
                insert_sanpham($code_sp, $ten_sp, $gia_sp, $chitiet_sp, $id_chatlieu, $id_mathang, $id_bst, $soluongtonkho);
            }
            break;

        case "quanlysanpham":
            $listsanpham = query_sanpham();
            $list_img = anh_sanpham();
            include 'sanpham/quanlysanpham.php';
            break;

        case "xoasanpham":
            $listsanpham = query_sanpham();
            $code_sp = $_GET['code_sp'];
            delete_prd($code_sp);
            delete_img_prd($code_sp);
            header("Location: index.php?act=quanlysanpham");
            break;

        case "softdelete_prd":
            softdelete_prd_fct($_GET['code_sp']);
            header("Location: index.php?act=quanlysanpham");
            break;
        case "suasanpham_update":
            $listsanpham = query_sanpham();
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
                print_r($img_update_prds);
                update_img_prd($prd_edit['ma_sp'], $img_update_prds);
                update_prd($ma_sp,  $tensp, $gia_sp, $chitiet_sp, $id_chatlieu, $id_mathang, $id_bst, $soluongtonkho);
            }
            include 'sanpham/suasanpham.php';
            header("Location: index.php?act=quanlysanpham");
            break;
        case "thungrac_prd":
            $listsanpham = query_sanpham_reduce();
            if($_GET['code_sp']){
                restore_sanpham_reduce($_GET['code_sp']);
            }
            include 'sanpham/thungrac.php';
            break;

        case "suasanpham_list":
            $ma_sp = $_GET['code_sp'];
            $img_prd = query_one_anhsp($ma_sp);
            $information_prd = query_one_sanpham($ma_sp);
            $list_chatlieu = query_chatlieu();
            $list_mathang = query_mathang();
            $list_bosuutap = query_bosuutap('');
            include 'sanpham/suasanpham.php';
            break;

        case "quanlytaikhoan":
            include 'taikhoan/quanlytaikhoan.php';
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
    }
} else {
    include './home.php';
}

include './footer.php';
