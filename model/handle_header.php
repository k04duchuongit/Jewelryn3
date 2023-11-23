<?php

//query loai mat hang (vd : nhẫn , khuyên tai)
function query_loai_mathang()
{
    $sql = "SELECT * FROM mathang";
    $listmathang = pdo_query($sql);
    return $listmathang;
}

// query chất liệu
function query_chatlieu()
{
    $sql = "SELECT * FROM chatlieu";
    $listchatlieu = pdo_query($sql);
    return $listchatlieu;
}
