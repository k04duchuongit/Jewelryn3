<?php
include './model/pdo.php';
include './model/sanpham.php';
include './model/bosuutap.php';
include 'view/header.php';

if (isset($_GET['act']) && $_GET['act'] != '') {
    $act = $_GET['act'];
    switch ($act) {
        case "chitietsanpham":
            if (isset($_GET['ma_sp'])) {
                $one_prd_detail = query_one_sanpham($_GET['ma_sp']);
                $img_one_prd = load_sanpham_img_home($_GET['ma_sp']);
                $id_chatlieu = $one_prd_detail['id_chatlieu'];
                $img_16_prd =  load16_sanpham($id_chatlieu,'');
            }
            include 'view/chitetsanpham.php';
            break;
        case "bosuutap":
            $list_bst =  query_bosuutap('');
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
            if (isset($_GET['id_chatlieu']) || isset($_GET['id_mathang'])) {
                $id_chatlieu = $_GET['id_chatlieu'];
                $id_mathang = $_GET['id_mathang'];
                $prd_16 = load16_sanpham($id_chatlieu, $id_mathang);

            }else if(isset($_GET['id_bst'])){
                $prd_16 = load_prd_collection($_GET['id_bst']);
            }
            else{
                $prd_16 = load16_sanpham('','');
            }
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
