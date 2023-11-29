<?php
session_start();
ob_start();
include './model/pdo.php';
include './model/sanpham.php';
include './model/contact_user.php';
include './model/bosuutap.php';
include './model/taikhoan/dangnhap.php';
include './model/taikhoan/dangky.php';
include './model/taikhoan/taikhoan.php';
include 'view/header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case "chitietsanpham":
            $list_size = querry_size();
            if (isset($_GET['ma_sp'])) {
                $list_size_of_prd =  querry_sanpham_bienthe($_GET['ma_sp']);
                // echo "<pre>";
                // print_r($list_size_of_prd);
                $one_prd_detail = query_one_sanpham($_GET['ma_sp']);
                $img_one_prd = load_sanpham_img_home($_GET['ma_sp']);
                $id_chatlieu = $one_prd_detail['id_chatlieu'];
                $img_16_prd =  load16_sanpham($id_chatlieu, '');
            }
            include 'view/chitetsanpham.php';
            break;
        case "bosuutap":
            $list_bst =  query_bosuutap('');
            include 'view/bosuutap.php';
            break;
        case "dangnhap":
            if (isset($_POST['dangnhap'])) {
                $namesignin = $_POST['namesignin'];
                $passsignin = $_POST['passsignin'];
                $taikhoan = checkaccount_login($namesignin, $passsignin);
                if (is_array($taikhoan)) {
                    $role = $taikhoan['role'];
                    if ($role == 1) {
                        $_SESSION['role'] = $role;
                        $_SESSION['name_login'] = $taikhoan['tendangnhap'];
                        header('Location: admin/index.php');
                        break;
                    } else if ($role == 0) {
                        $_SESSION['id_user'] = $taikhoan['id_nguoidung'];
                        $_SESSION['name_login'] = $taikhoan['tendangnhap'];
                        $_SESSION['pass_login'] = $taikhoan['matkhau'];
                        $_SESSION['email_login'] = $taikhoan['email'];
                        $_SESSION['sdt_login'] = $taikhoan['sodienthoai'];
                        $_SESSION['diachi_login'] = $taikhoan['diachi'];
                        header('Location: index.php');
                    }
                }
            }
            include 'view/dangnhapdangky.php';
            break;
        case 'dangxuat':
            session_unset();
            header('Location: index.php');
            break;
        case "dangky":
            if (isset($_POST['dangky'])) {
                $namesignup = $_POST['namesignup'];
                $passsignup = $_POST['passsignup'];
                $sdtsignup = $_POST['sdtsignup'];
                $emailsignup = $_POST['emailsignup'];
                create_account($namesignup, $passsignup, $sdtsignup, $emailsignup);
                header('Location: index.php');
                break;
            }
            include 'view/dangnhapdangky.php';
            break;
        case "dathang":
            include 'view/dathang.php';
            break;
        case "giohang":
            include 'view/giohang.php';
            break;
        case "listsanpham":
            if (isset($_GET['id_chatlieu']) || isset($_GET['id_mathang'])) {
                $id_chatlieu = $_GET['id_chatlieu'];
                $id_mathang = $_GET['id_mathang'];
                $prd_16 = load16_sanpham($id_chatlieu, $id_mathang);
            } else if (isset($_GET['id_bst'])) {
                $prd_16 = load_prd_collection($_GET['id_bst']);
            } else {
                $prd_16 = load16_sanpham('', '');
            }
            $stagnation_prds = stagnation_prd();
            include 'view/listsanpham.php';
            break;
        case "tintuc":
            include 'view/tintuc.php';
            break;
        case "chinhsuataikhoan_list":
            $id_usernow = $_SESSION['id_user'];
            $account_user = querry_one_account($id_usernow);
            include 'view/chinhsuataikhoan.php';
            break;

        case "chinhsuataikhoan_update":
            $id_usernow = $_SESSION['id_user'];
            $account_user = querry_one_account($id_usernow);
            if (isset($_POST['confirm_update_acc'])) {
                $id_user = $_POST['id_user'];
                $name_edit = $_POST['name_edit'];
                $sdt_edit = $_POST['sdt_edit'];
                $diachi_edit = $_POST['diachi_edit'];
                $email_edit = $_POST['email_edit'];
                if ($_POST['pass_edit'] == $account_user['matkhau']) {
                    update_acc_user($id_user, $name_edit, $sdt_edit, $diachi_edit, $email_edit);
                }
            }
            header('Location: index.php');
            break;
        case "contact":
            include 'view/contact.php';
            if (isset($_POST['submit_contact'])) {
                if (!empty($_SESSION['id_user'])) {
                    $id_nguoidung = $_SESSION['id_user'];
                } else {
                    $id_nguoidung = '';
                }
                $contact_name = $_POST['contact_name'];
                $contact_sdt = $_POST['contact_sdt'];
                $contact_email = $_POST['contact_email'];
                $contact_title = $_POST['contact_title'];
                $contact_content = $_POST['contact_content'];
                add_title_contact($id_nguoidung, $contact_name, $contact_sdt, $contact_email, $contact_title, $contact_content);
            }
            break;
        case "quenmatkhau":
            include 'view/quenmatkhau.php';
            break;
    }
} else {
    $prd_inhome8 = load8_sanpham_home();
    $prd_inhome4 = load4_sanpham_home();
    include 'view/home.php';
}

include 'view/footer.php';
