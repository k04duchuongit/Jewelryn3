<?php
function add_giohang($name_user, $code_prd, $sizeproduct, $quantity_prd)
{
    $sql = "INSERT INTO giohang (ma_nguoidung, ma_sp, id_size, soluong_sp) VALUES ('$name_user', '$code_prd', '$sizeproduct', '$quantity_prd')";
    pdo_execute($sql);
}

//querry gio hang 
function querry_cart_user($id_user)
{
    $sql = "SELECT * FROM giohang WHERE ma_nguoidung = '$id_user'";
    $list_prd_incart = pdo_query($sql);
    return $list_prd_incart;
}

function querry_content_cart($ma_nguoi_dung)
{
    $sql = "SELECT anhsanpham.anhsp1, sanpham.ten_sp, giohang.thoi_gian_them,giohang.soluong_sp, sanpham.gia_sp, giohang.id_size
        FROM giohang
        JOIN sanpham ON giohang.ma_sp = sanpham.ma_sp
        JOIN anhsanpham ON sanpham.ma_sp = anhsanpham.ma_sp 
        WHERE ma_nguoidung = '$ma_nguoi_dung'";
    $list_content_prd =  pdo_query($sql);

    return $list_content_prd;
}
