<?php
//querry one acc
function querry_one_account($id_user)
{
    $sql = " SELECT * FROM nguoidung WHERE $id_user";
    $listaccount = pdo_query_one($sql);
    return $listaccount;
}

//query all acc
function querry_all_account()
{
    $sql = " SELECT * FROM nguoidung ";
    $listaccount = pdo_query($sql);
    return $listaccount;
}
//update tài khoản 

function update_acc_user($id_user, $name_edit, $sdt_edit, $diachi_edit, $email_edit)
{
    $sql = "UPDATE nguoidung SET tendangnhap = '$name_edit' , sodienthoai='$sdt_edit' 
    , diachi = '$diachi_edit',email='$email_edit' WHERE id_nguoidung = '$id_user'";
    pdo_execute($sql);
}


// random mã người dùng chưa đăng nhập

function random_codeUser_noLogin()
{
    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    $codeUser_noLogin = 'UNLOG' . generateRandomString(10);
    return $codeUser_noLogin;
}
