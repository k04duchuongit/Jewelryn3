<?php

$listmathang_mathang = query_loai_mathang();
$listchatlieu = query_chatlieu();
$list_size = querry_size();
// Sửa điều kiện isset
if (isset($_SESSION['id_user_unlogin'])) {
    $list_prd_incart = querry_cart_user($_SESSION['id_user_unlogin']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelryn3</title>

    <link rel="stylesheet" href="content/Css/libary.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="content/font/fontawesome-free-6.4.2-web/fontawesome-free-6.4.2-web/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Edu+TAS+Beginner:wght@400;500;600&family=Nunito+Sans:opsz,wght@6..12,200;6..12,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="content/font/Themifi_icon - Sao chép/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="content/Css/style.css">
    <link rel="stylesheet" href="content/Css/setout.css">


</head>

<body>
    <div class="mycontainer">
        <header>
            <div class="header_top grid wide">
                <div class="header_top-social">
                    <a href=""><i class="fa-brands fa-facebook"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="header_top-namestore">
                    <p>Jewelryn3.</p>
                </div>
                <div class="header_top-users">
                    <div class="users_loginlogout">
                        <i class="ti-user"></i>
                        <?php if (isset($_SESSION['name_login']) && $_SESSION['name_login'] != '') {    ?>
                            <div class="loginlogout_act">
                                <a href="index.php?act=chinhsuataikhoan_list">Sửa thông tin</a>
                                <a href="index.php?act=dangxuat">Đăng xuất</a>
                            </div>
                        <?php  } else { ?>
                            <div class="loginlogout_act">
                                <a href="index.php?act=dangnhap">Đăng nhập</a>
                                <a href="index.php?act=dangky">Đăng ký</a>
                            </div>
                        <?php  }
                        ?>

                    </div>
                    <div class="users_cart">
                        <i class="ti-shopping-cart">
                            <p class="users_cart-quantity">6</p>
                        </i>
                    </div>
                    <!-- CART -->
                    <div class="carthidden">
                        <div class="cart_content">
                            <ul>
                                <li>
                                    <?php
                                    foreach ($list_prd_incart as $key => $prd) {
                                        $List_img_prd =  query_one_anhsp($prd['ma_sp']);
                                        $content_prd  =  query_one_sanpham($prd['ma_sp']);
                                    ?>
                                        <a href="" class="product_incart">
                                            <img src="content/images/product/<?= $List_img_prd['anhsp1'] ?>" alt="">
                                            <div class="product_incart-information">
                                                <p class="product_incart-information-name"><?= $content_prd['ten_sp'] ?></p>
                                                <div class="product_incart-information-quantity">
                                                    <p>Số lượng : </p>
                                                    <p><?= $prd['soluong_sp'] ?></p>
                                                </div>
                                                <div class="product_incart-information-quantity">
                                                    <p>Size : </p>
                                                    <?php
                                                    foreach ($list_size as $key => $value) {
                                                        if ($value['id_size'] == $prd['id_size']) { ?>
                                                            <p><?= $value['so_size'] ?></p>
                                                    <?php  }
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <i class="ti-close deleteprdincart"></i>
                                        </a>
                                    <?php }
                                    ?>
                                </li>
                            </ul>
                            <div class="actcart">
                                <button><a href="index.php?act=listgiohang">Xem giỏ hàng</a><i class="ti-shopping-cart"></i></button>
                                <button><a href="">Đặt hàng ngay</a><i class="ti-bag"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- END CART -->
                </div>
            </div>
            <div class="header_nav grid wide">
                <ul class="header_navs1">
                    <li><a href="index.php">TRANG CHỦ</a></li>
                    <li class="position-relative hoverproduct"><a href="index.php?act=listsanpham">SẢN PHẨM</a>
                        <i class="ti-angle-down"></i>
                        <div class="product_navs2 navs2">
                            <?php
                            foreach ($listchatlieu as $key => $chatlieu) {
                                extract($chatlieu); ?>
                                <ul>
                                    <li><a href="index.php?act=listsanpham&id_chatlieu=<?= $id_chatlieu ?>" class="product_navs2-title product_navs2-gold">TRANG SỨC <?= $ten_chatlieu ?></a></li>
                                    <?php
                                    foreach ($listmathang_mathang as $key => $mathang) {
                                        extract($mathang); ?>
                                        <li><a href="index.php?act=listsanpham&id_chatlieu=<?= $id_chatlieu ?>&id_mathang=<?= $id_mathang ?>"><?= $ten_mathang . ' ' . $ten_chatlieu ?> </a></li>
                                    <?php } ?>
                                </ul>
                            <?php }
                            ?>
                        </div>
                    </li>
                    <li class="position-relative hoverjewewedding"><a href="index.php?act=listsanpham&id_chatlieu=3">TRANG SỨC KIM CƯƠNG</a><i class="ti-angle-down"></i>
                        <div class="navs2 jewewedding_navs2">
                            <ul>
                                <?php
                                foreach ($listmathang_mathang as $key => $mathang) {
                                    extract($mathang); ?>
                                    <li><a href="index.php?act=listsanpham&id_chatlieu=3&id_mathang=<?= $id_mathang ?>"><?= $ten_mathang ?> Kim cương</a></li>
                                <?php   }
                                ?>
                            </ul>
                        </div>
                    </li>
                    <li><a href="index.php?act=bosuutap">BỘ SƯU TẬP</a></li>
                    <li><a href="index.php?act=tintuc">TIN TỨC</a></li>
                    <li><a href="index.php?act=contact">LIÊN HỆ</a></li>
                </ul>
            </div>
        </header>