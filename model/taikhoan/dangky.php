<?php
// tạo tài khoản
function create_account($namesignup, $passsignup, $sdtsignup, $emailsignup)
{
    $sql = "INSERT INTO nguoidung (tendangnhap,matkhau,email,sodienthoai) VALUES ('$namesignup','$passsignup','$emailsignup','$sdtsignup')";
    pdo_execute($sql);
}
