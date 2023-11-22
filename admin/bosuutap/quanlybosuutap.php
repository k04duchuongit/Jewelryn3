<div class="main">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Quản Lý Bộ Sưu Tập</p>
        <form action="index.php?act=quanlybosuutap" method="GET">
            <input type="hidden" name="act" value="quanlybosuutap">
            <input type="text" placeholder="Nhập tên bộ sưu tập" class="namebst_searchz" name="namebst_searchz">
            <button type="submit" class="admin_ordered">Tìm Kiếm</button>
        </form>
        <div class="admin_addinformation">
            <a href="index.php?act=thembosuutap">Thêm bộ sưu tập</a>
            <a href="index.php">Quay về trang chủ</a>
        </div>
        <table class="table_admin">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Tên bộ sưu tập
                </th>
                <th>
                    Ảnh
                </th>
                <th>
                    Hành động
                </th>
            </tr>
            <?php
            if (!empty($listbosuutap)) {
                foreach ($listbosuutap as $key => $bosuutap) {
                    extract($bosuutap);
            ?>
                    <tr>
                        <td><?= $id_bst ?></td>
                        <td><?= $ten_bst ?></td>
                        <td>
                            <img src="../content/images/bosuutap/<?= $img_bosuutap ?>" alt="">
                        </td>
                        <td class="table_admin-act">
                            <div>
                                <button class="admin_updateprd"><a href="index.php?act=suabosuutaplist&id_bst=<?= $id_bst ?>">Sửa</a></button>
                                <button class="admin_deletex"><a href="index.php?act=xoabosuutap&id_bst=<?= $id_bst ?>">Xóa</a></button>
                            </div>
                        </td>
                    </tr>
            <?php  }
            }
            ?>

        </table>
    </div>
</div>