<div class="main">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Thùng Rác Sản Phẩm</p>

        <div class="admin_addinformation">
            <a href="index.php?act=quanlysanpham">Quay về trang quản lý</a>
        </div>
        <table class="table_admin">
            <tr>
                <th class="table_admin-id">
                    ID
                </th>
                <th class="table_admin-img">
                    Hình ảnh
                </th>
                <th>
                    Tên sản phẩm
                </th>
                <th>
                    Giá
                </th>
                <th class="table_admin-tonkho">
                    Số lượng tồn kho
                </th>
                <th>
                    Chi tiết sản phẩm
                </th>
                <th>
                    Hành động
                </th>
            </tr>

            <?php
            foreach ($listsanpham as $key => $sanpham) {
                extract($sanpham); ?>
                <tr></tr>
                <td><?= $ma_sp ?></td>
                <td><img src="../content/images/product/nhan1.jpg" alt=""></td>
                <td><?= $ten_sp ?></td>
                <td><?= $gia_sp ?></td>
                <td><?= $soluong_tonkho ?></td>
                <td class="table_admin-detail"><?= $chitiet_sp ?></td>
                <td class="table_admin-act">
                        <button class="admin_updateprd"><a href="index.php?act=thungrac_prd&code_sp=<?= $ma_sp ?>">Khôi phục</a></button>
                </td>
                </tr>
            <?php }
            ?>
        </table>
    </div>
</div>