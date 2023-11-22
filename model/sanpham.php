<?php
function query_chatlieu()
{
    $sql = "SELECT * FROM chatlieu";
    $listchatlieu = pdo_query($sql);
    return $listchatlieu;
}

function query_mathang()
{
    $sql = "SELECT * FROM mathang";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
//query_sanpham
function query_sanpham()
{
    $sql = "SELECT * FROM sanpham WHERE role_prd=0";
    $listmathang = pdo_query($sql);
    return $listmathang;
}
//quẻy san pham trong thung rac
function query_sanpham_reduce()
{
    $sql = "SELECT * FROM sanpham WHERE role_prd=1";
    $listmathang = pdo_query($sql);
    return $listmathang;
}
// khoi phuc san pham tu thung rac
function restore_sanpham_reduce($code_sp)
{
    $sql = "UPDATE sanpham SET role_prd=0 WHERE ma_sp = '$code_sp'";
    $listmathang = pdo_query($sql);
    return $listmathang;
}
//query_one_sanpham
function query_one_sanpham($code_prd)
{
    $sql = "SELECT * FROM sanpham WHERE ma_sp = '$code_prd'";
    $one_sanpham = pdo_query_one($sql);
    return $one_sanpham;
}
//query_one_imgsanpham
function query_one_anhsp($code_prd)
{
    $sql = "SELECT * FROM anhsanpham WHERE ma_sp = '$code_prd'";
    $one_imgsanpham = pdo_query_one($sql);
    return $one_imgsanpham;
}

//querry all ảnh sản phẩm
function anh_sanpham(){
    $sql = "SELECT * FROM anhsanpham";
    $listimg_sp = pdo_query($sql);
    return $listimg_sp;
}

// Thêm sản phẩm
function insert_sanpham($code_sp, $ten_sp, $gia_sp, $chitiet_sp, $id_chatlieu, $id_mathang, $id_bst, $soluongtonkho)
{
    $sql = "INSERT INTO sanpham (ma_sp,ten_sp,gia_sp,chitiet_sp,id_chatlieu,id_mathang,id_bst,soluong_tonkho) VALUES ('$code_sp','$ten_sp','$gia_sp','$chitiet_sp','$id_chatlieu','$id_mathang','$id_bst','$soluongtonkho')";
    pdo_execute($sql);
}

//xoa san pham , img san pham
function delete_prd($code_sp)
{
    $sql = "DELETE FROM sanpham WHERE ma_sp = '$code_sp' ";
    pdo_execute($sql);
}

function delete_img_prd($code_sp)
{
    $sql = "DELETE FROM anhsanpham WHERE ma_sp = '$code_sp' ";
    pdo_execute($sql);
}
// thêm ảnh sản phẩm 
function insert_img_sanpham($ma_sp, $imgprds)
{

    $valuesimg = [];
    foreach ($imgprds as $key => $imgprd) {
        if (isset($imgprd)) {
            $valuesimg[] = "'$imgprd'";     // những trường ảnh có giá trị đẩy vào một mảng tránh phát sinh cảnh báo
        } else {
            $valuesimg[] = 'Khong co anh';
        }
    }
    $sql = "INSERT INTO anhsanpham (ma_sp,anhsp1,anhsp2,anhsp3,anhsp4) VALUES ('$ma_sp'," . implode(',', $valuesimg) . ")"; // chuyển mảng thành chuỗi insert như bình thường
    pdo_execute($sql);
}

//cập nhật sản phẩm
function update_prd($ma_sp,  $tensp, $gia_sp, $chitiet_sp, $id_chatlieu, $id_mathang, $id_bst, $soluongtonkho)
{
    $sql = "UPDATE sanpham SET ten_sp= '$tensp',gia_sp= '$gia_sp',chitiet_sp='$chitiet_sp',id_chatlieu='$id_chatlieu',id_mathang='$id_mathang',id_bst='$id_bst',soluong_tonkho =$soluongtonkho WHERE ma_sp = '$ma_sp'";
    pdo_execute($sql);
}

//câpj nhật ảnh sản phẩm 
function update_img_prd($ma_sp, $img_update_prds)
{
    $sql = "UPDATE anhsanpham SET anhsp1 = '$img_update_prds[0]',anhsp1 = '$img_update_prds[1]',anhsp1 = '$img_update_prds[2]',anhsp1 = '$img_update_prds[3]' WHERE ma_sp= '$ma_sp'";
    pdo_execute($sql);
}


// softdelete_prd
function softdelete_prd_fct($code_sp)
{
    $sql = "UPDATE sanpham SET role_prd = 1 WHERE ma_sp= '$code_sp'";
    pdo_execute($sql);
}


//Tạo mã sản phẩm

function create_code_product()
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');                     // định dạng thành múi giừo việt nam
    $time_today = date('dmyhis');                                        //lấy ra ngày tháng năm ở thời điểm hiện tại
    $create_code_product =  strtoupper('Je' . $time_today);
    return $create_code_product;
}
