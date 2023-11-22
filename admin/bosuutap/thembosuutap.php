<div class="main">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Thêm Bộ Sưu Tập</p>
        <div class="admin_addinformation">
            <a href="index.php?act=quanlybosuutap">Quay về trang quản lý</a>
        </div>
        <form action="index.php?act=thembosuutap" class="admin_add_information-wrap" enctype="multipart/form-data" method="POST">
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập tên bộ sưu tập" name="namebst">
            </div>
            <div class="admin_add_information">
                <p>Ảnh bộ sưu tập</p>
                <input type="file" name="img_bst">
            </div>

            <button type="submit" class="admin_add_information-button" name="addbst">
                Thêm mới
            </button>
        </form>
    </div>
</div>