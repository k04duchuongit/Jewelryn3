<?php
// add_ hoa hon
function add_hoadon($id_hoadon, $id_nguoidung, $ngaytaohoadon, $hinhthuc_thanhtoan, $giatri_hoadon, $trangthai_donhang, $diachi_nguoidung, $ct_diachi_nguoidung, $paysdt)
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

function queryAll_bill($nameprd_searchz)
{
    if (empty($nameprd_searchz)) {
        $sql = "SELECT * FROM hoadon";
    } else {
        $sql = "SELECT * FROM hoadon WHERE sodienthoai LIKE '%$nameprd_searchz%' ";
    }

    $list_bill = pdo_query($sql);
    return $list_bill;
}

function querryDetail_bill($id_bill)
{
    $sql = "SELECT chitiet_hoadon.*,sanpham.ten_sp,sanpham.gia_sp FROM chitiet_hoadon JOIN sanpham ON chitiet_hoadon.ma_sp = sanpham.ma_sp WHERE id_hoadon = '$id_bill'";
    $Detail_bill = pdo_query($sql);
    return $Detail_bill;
}

// capnhat stt 
function updatestt($id_hoadon, $status)
{
    $sql = "UPDATE hoadon SET trang_thai_vanchuyen = '$status' WHERE id_hoadon = '$id_hoadon'";
    pdo_execute($sql);
}
