<div class="main">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Quản Lý Tài Khoản</p>
        <form action="index.php" method="GET">
            <input type="hidden" name="act" value="quanlytaikhoan">
            <input type="text" placeholder="Nhập sô điện thoại" class="nameprd_searchz" name="sdt_user">
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
                                <button class="admin_updateprd"><a href="index.php?act=suataikhoan_list&id_user=<?= $id_nguoidung ?>">Sửa</a></button>
                                <button class="admin_deletex"><a href="index.php?act=xoataikhoan&id_user=<?= $id_nguoidung ?>">Xóa</a></button>
                            </div>
                        </td>
                    </tr>
            <?php  }
            }
            ?>
        </table>
    </div>
</div>