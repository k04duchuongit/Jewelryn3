<?php
// add_ hoa hon
function add_hoadon($id_hoadon, $id_nguoidung, $ngaytaohoadon, $hinhthuc_thanhtoan, $giatri_hoadon, $trangthai_donhang, $diachi_nguoidung, $ct_diachi_nguoidung,$paysdt)
{
    $sql = "INSERT INTO hoadon (id_hoadon,id_nguoidung,diachi_nguoidung,sodienthoai,chitiet_diachi,ngaytaohoadon,hinhthuc_thanhtoan,giatri_hoadon,trang_thai_vanchuyen) VALUES ('$id_hoadon','$id_nguoidung','$diachi_nguoidung','$paysdt','$ct_diachi_nguoidung','$ngaytaohoadon','$hinhthuc_thanhtoan','$giatri_hoadon','$trangthai_donhang')";
    pdo_execute($sql);
}



function add_chitiehoadon($id_hoadon, $ma_sp, $so_luong, $id_size)
{
    $sql = "INSERT INTO chitiet_hoadon (id_hoadon,ma_sp,so_luong,id_size) VALUES ('$id_hoadon','$ma_sp','$so_luong','$id_size')";
    pdo_execute($sql);
}


function random_code_bill()
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

    $randomcodebill = 'BILL' . generateRandomString(10);
    return $randomcodebill;
}

// querry all don hang

function queryAll_bill()
{
    $sql = "SELECT hoadon.*, chitiet_hoadon.* FROM chitiet_hoadon JOIN hoadon ON chitiet_hoadon.id_hoadon = hoadon.id_hoadon;";
    $list_bill = pdo_query($sql);
    return $list_bill;
}
