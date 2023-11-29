<?php
function add_giohang($name_user, $code_prd, $sizeproduct, $quantity_prd)
{
    $sql = "INSERT INTO giohang (ma_nguoidung, ma_sp, id_size, soluong_sp) VALUES ('$name_user', '$code_prd', '$sizeproduct', '$quantity_prd')";
    pdo_execute($sql);
}
