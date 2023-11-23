<?php
include './model/pdo.php';
include './model/sanpham.php';
include './model/header.php'
include 'view/handle_header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case "chitietsanpham":
            include 'view/chitetsanpham.php';
            break;
        case "bosuutap":
            include 'view/bosuutap.php';
            break;
        case "dangnhapdangky":
            include 'view/dangnhapdangky.php';
            break;
        case "dathang":
            include 'view/dathang.php';
            break;
        case "giohang":
            include 'view/giohang.php';
            break;
        case "listsanpham":
            $prd_16 = load16_sanpham();
            $stagnation_prds = stagnation_prd();
            include 'view/listsanpham.php';
            break;
        case "tintuc":
            include 'view/tintuc.php';
            break;
        case "chinhsuataikhoan":
            include 'view/chinhsuataikhoan.php';
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
