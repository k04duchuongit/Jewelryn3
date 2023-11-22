<?php
if (is_array($bosuutap_edit)) {
    print_r($bosuutap_edit);
    extract($bosuutap_edit);
   
}
?>
<div class="main">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Sửa Bộ Sưu Tập</p>
        <div class="admin_addinformation">
            <a href="index.php?act=quanlybosuutap">Quay về trang quản lý</a>
        </div>
        <form action="index.php?act=suabosuutapupdate&id_bst=<?= $id_bst ?>" class="admin_add_information-wrap" method="POST" enctype="multipart/form-data">
            <div class="admin_add_information" >
                <input type="hidden"value=" <?= $id_bst ?>" name="id_bst">
            </div>
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập tên bộ sưu tập" value=" <?= $ten_bst ?>" name="namebst">
            </div>
            <div class="admin_add_information">
                <p>Ảnh bộ sưu tập</p>
                <input type="file" name="img_bst">
                <img src="../content/images/bosuutap/<?= $img_bosuutap ?>" class="admin_imgnow">
            </div>

            <button type="submit" class="admin_add_information-button" name="editbosuutap">
                <p>Sửa</p>
            </button>
        </form>
    </div>
</div>