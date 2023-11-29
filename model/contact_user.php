<?php
function add_title_contact($id_nguoidung, $contact_name, $contact_sdt, $contact_email, $contact_title, $contact_content)
{
    $sql = "INSERT INTO lienhe (id_nguoidung,contact_name,contact_sdt,contact_email,contact_title,contact_content)
    VALUES ('$id_nguoidung','$contact_name','$contact_sdt','$contact_email','$contact_title','$contact_content')";
    pdo_execute($sql);
}
function querry_all_contact(){
    $sql = "SELECT * FROM lienhe";
    $list_lienhe = pdo_query($sql);
    return $list_lienhe;
}