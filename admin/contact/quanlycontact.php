<div class="main">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Quản Lý Phản Hồi Người Dùng</p>
        <form action="index.php" method="GET">
            <input type="hidden" value="quanlycontact" name="act">
            <input type="text" placeholder="Nhập sô điện thoại" class="nameprd_searchz" name="sdt_search">
            <button type="submit" class="admin_ordered">Tìm Kiếm</button>
            <a href="index.php" class="repage_control">Quay về trang chủ</a>
        </form>
        <table class="table_admin">
            <tr>
                <th>
                    Tên người dùng
                </th>
                <th>
                    Số điện thoại
                </th>
                <th>
                    Email
                </th>
                <th>
                    Tiêu đề phản hồi
                </th>
                <th>
                    Nội dung phản hồi
                </th>
                <th>
                    Hành động
                </th>
            </tr>
            <?php
            foreach ($list_contact as $key => $contact) {
                extract($contact); ?>
                <tr>
                    <td><?= $contact_name ?></td>
                    <td><?= $contact_sdt ?></td>
                    <td><?= $contact_email ?></td>
                    <td><?= $contact_title ?></td>
                    <td><?= $contact_content ?></td>
                    <td class="table_admin-act">
                        <button class="admin_deletex"><a href="">Xóa</a></button>
                    </td>
                </tr>
            <?php  }
            ?>

        </table>
    </div>
</div>