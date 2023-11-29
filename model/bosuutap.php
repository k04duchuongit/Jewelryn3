<?php
//queryall_bst
function query_bosuutap($namesearch)
{
    if (!empty($namesearch)) {
        $sql = "SELECT * FROM bosuutap WHERE ten_bst LIKE '%$namesearch%'";
        $listbosuutap = pdo_query($sql);
    } else {
        $sql = "SELECT * FROM bosuutap";
        $listbosuutap = pdo_query($sql);
    }
    return $listbosuutap;
}

//query_one_bst
function query_one_bosuutap($id_bst)
{
    $sql = "SELECT * FROM bosuutap WHERE id_bst ='$id_bst'";
    $listbosuutap = pdo_query_one($sql);
    return $listbosuutap;
}

//them bst
function add_bst($name_bst, $img_bst)
{
    $sql = "INSERT INTO bosuutap (ten_bst,img_bosuutap) VALUES ('$name_bst','$img_bst')";
    pdo_execute($sql);
}

//xoa bo suu tap
function delete_bosuutap($id_bst)
{
    $sql = "DELETE FROM bosuutap WHERE id_bst = '$id_bst'";
    pdo_execute($sql);
}

//sua bo suu tap;
function edit_bst($id_bst, $name_bst, $img_update_bst)
{
    $sql = "UPDATE bosuutap SET id_bst = '$id_bst', ten_bst = '$name_bst', img_bosuutap = '$img_update_bst' WHERE id_bst = $id_bst";
    pdo_execute($sql);
}
