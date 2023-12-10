<?php
function add_giohang($name_user, $code_prd, $sizeproduct, $quantity_prd, $time_add_tocart)
{
    $sql = "INSERT INTO giohang (ma_nguoidung, ma_sp, id_size, soluong_sp,thoi_gian_them) VALUES ('$name_user', '$code_prd', '$sizeproduct', '$quantity_prd','$time_add_tocart')";
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
    $sql = "SELECT anhsanpham.anhsp1, sanpham.ten_sp, sanpham.soluong_tonkho,sanpham.gia_sp, giohang.* FROM giohang
        JOIN sanpham ON giohang.ma_sp = sanpham.ma_sp
        JOIN anhsanpham ON sanpham.ma_sp = anhsanpham.ma_sp 
        WHERE ma_nguoidung = '$ma_nguoi_dung'";
    $list_content_prd =  pdo_query($sql);

    return $list_content_prd;
}

// xoa san pham trong gio hang

function delete_prd_incart($ma_sp)
{
    $sql = "DELETE FROM giohang WHERE ma_sp = '$ma_sp'";
    pdo_execute($sql);
}
function delete_ALLprd_incart()
{
    $sql = "DELETE FROM giohang";
    pdo_execute($sql);
}
