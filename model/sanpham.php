<?php
function query_chatlieu()
{
    $sql = "SELECT * FROM chatlieu";
    $listchatlieu = pdo_query($sql);
    return $listchatlieu;
}
//query mặt hàng
function query_loai_mathang()
{
    $sql = "SELECT * FROM mathang";
    $listmathang = pdo_query($sql);
    return $listmathang;
}
function update_after_order($masp, $soluong_tonkho)
{
    $sql = "UPDATE sanpham SET soluong_tonkho=$soluong_tonkho WHERE ma_sp = '$masp'";
    pdo_execute($sql);
}
function query_mathang()
{
    $sql = "SELECT * FROM mathang";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
//query 8 sp 
function load8_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE role_prd = 0 ORDER BY ma_sp DESC LIMIT 0,8";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
//querry product with collection
function load_prd_collection($id_collection)
{
    $sql = "SELECT * FROM sanpham WHERE role_prd = 0 AND id_bst =$id_collection ORDER BY ma_sp DESC LIMIT 0,16";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

//query 16 sp 
function load16_sanpham($id_chatlieu, $id_mathang)
{
    if (!empty($id_chatlieu) && !empty($id_mathang)) {
        $sql = "SELECT * FROM sanpham WHERE role_prd = 0 AND id_chatlieu = $id_chatlieu AND id_mathang = $id_mathang ORDER BY ma_sp DESC LIMIT 0,16";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    } else if (!empty($id_chatlieu)) {
        $sql = "SELECT * FROM sanpham WHERE role_prd = 0 AND id_chatlieu = $id_chatlieu ORDER BY ma_sp DESC LIMIT 0,16";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    } else {
        $sql = "SELECT * FROM sanpham WHERE role_prd = 0 ORDER BY ma_sp DESC LIMIT 0,16";
        $listsanpham = pdo_query($sql);
        return $listsanpham;
    }
}

//query 4 sp trang home user
function load4_sanpham_home()
{
    $sql = "SELECT * FROM sanpham WHERE role_prd = 0 ORDER BY ma_sp DESC LIMIT 0,4";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

//query 1 anh sp trang home user tu ma_sp

function load_sanpham_img_home($ma_sp)
{
    $sql = "SELECT * FROM anhsanpham WHERE ma_sp = '$ma_sp'";
    $list_img_prd =  pdo_query_one($sql);
    return $list_img_prd;
}

//query_sanpham
function query_sanpham($admin_name_searchprd)
{
    if (!empty($admin_name_searchprd)) {
        $sql = "SELECT * FROM sanpham WHERE role_prd=0 AND ten_sp LIKE '%$admin_name_searchprd%'";
    } else {
        $sql = "SELECT * FROM sanpham WHERE role_prd=0";
    }

    $list_prd = pdo_query($sql);
    return $list_prd;
}
//querry san pham trong thung rac
function query_sanpham_reduce()
{
    $sql = "SELECT * FROM sanpham WHERE role_prd=1";
    $list_prd_reduce = pdo_query($sql);
    return $list_prd_reduce;
}
// khoi phuc san pham tu thung rac
function restore_sanpham_reduce($code_sp)
{
    $sql = "UPDATE sanpham SET role_prd=0 WHERE ma_sp = '$code_sp'";
    $list_prd_reduce = pdo_query($sql);
    return $list_prd_reduce;
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

function stagnation_prd()
{
    $sql = "SELECT * FROM sanpham WHERE role_prd=0 ORDER BY soluong_tonkho DESC LIMIT 0,8";
    $listmathang = pdo_query($sql);
    return $listmathang;
}
//querry all ảnh sản phẩm
function anh_sanpham()
{
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

function querry_size()
{
    $sql = "SELECT * FROM size";
    $list_size = pdo_query($sql);
    return $list_size;
}

//add bien the size

function add_bienthe_size($ma_sp, $id_size)
{
    $sql = "INSERT INTO bienthe_size (ma_sanpham,id_size) VALUES ('$ma_sp','$id_size')";
    pdo_execute($sql);
}


// query san pham bien the

function querry_sanpham_bienthe($ma_sp)
{
    $sql = "SELECT id_size FROM bienthe_size WHERE ma_sanpham = '$ma_sp'";
    $list_size_prd  =  pdo_query($sql);
    return $list_size_prd;
}

//delete size prd 

function delete_size_product($ma_sp, $id_size)
{
    if (!empty($id_size)) {
        $sql = "DELETE FROM bienthe_size WHERE id_size='$id_size' AND ma_sanpham = '$ma_sp'";
    } else {
        $sql = "DELETE FROM bienthe_size WHERE ma_sanpham = '$ma_sp'";
    }
    pdo_execute($sql);
}

//lay ra cac size mà sản phẩm đang được chọn qua form

function list_size_focus($list_size)
{
    $size_sanphams = [];
    foreach ($list_size as $key => $size) {
        extract($size);
        if (!empty($_POST['size_prd_' . $id_size])) {
            $size_sanphams[] = $_POST['size_prd_' . $id_size];
        }
    }
    return $size_sanphams;
}
