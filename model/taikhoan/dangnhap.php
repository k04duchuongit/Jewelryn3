<?php
function checkaccount_login($namesignin, $passsignin)
{
    $sql = "SELECT * FROM nguoidung WHERE tendangnhap = '$namesignin' AND matkhau = '$passsignin'";
    $taikhoan = pdo_query_one($sql);
    if($taikhoan == null){
        return 0;
    }else{
        return $taikhoan;
    }
}
