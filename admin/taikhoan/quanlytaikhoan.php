<div class="main">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Quản Lý Tài Khoản</p>
        <form action="">
            <input type="text" placeholder="Nhập sô điện thoại" class="nameprd_searchz">
            <div class="admin_timeprd">
                <input type="date">
                <p>đến</p>
                <input type="date">
            </div>
            <button type="submit" class="admin_ordered">Tìm Kiếm</button>
                <a href="index.php" class="repage_control">Quay về trang chủ</a>
        </form>
        <table class="table_admin">
            <tr>
                <th class="table_admin-id">
                    ID
                </th>
                <th class="table_admin-img">
                    Tên đăng nhập
                </th>
                <th>
                    Mật khẩu
                </th>
                <th>
                    Số điện thoại
                </th>
                <th class="table_admin-tonkho">
                    Địa chỉ
                </th>
                <th>
                    Email
                </th>
            </tr>

            <?php
            if (isset($list_acc)) {
                foreach ($list_acc as $key => $acc) {
                    extract($acc);   ?>
                    <tr>
                        <td> <?= $id_nguoidung ?> </td>
                        <td><?= $tendangnhap ?></td>
                        <td><?= $matkhau ?></td>
                        <td><?= $sodienthoai ?></td>
                        <td><?= $diachi ?></td>
                        <td class="table_admin-detail"><?= $email ?></td>
                        <td class="table_admin-act">
                            <div>
                                <button class="admin_updateprd"><a href="">Sửa</a></button>
                                <button class="admin_deletex"><a href="">Xóa</a></button>
                            </div>
                        </td>
                    </tr>
            <?php  }
            }
            ?>

        </table>
    </div>
</div>