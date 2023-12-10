<div class="main-admin">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Quản Lý Sản Phẩm</p>
        <form action="index.php?act=quanlysanpham" method="POST">
            <input type="text" placeholder="Nhập tên sản phẩm" class="nameprd_searchz"  name="admin_name_searchprd">
            <button type="submit" class="admin_ordered" name="submit">Tìm Kiếm</button>
        </form>
        <div class="admin_addinformation">
            <a href="./index.php?act=themsanpham">Thêm sản phẩm</a>
            <div>
                <a href="./index.php">Trỏ về trang chủ</a>
                <a href="./index.php?act=thungrac_prd">Thùng rác</a>
            </div>
        </div>
        <table class="table_admin">
            <tr>
                <th class="table_admin-id">
                    Mã Sản phẩm
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
                $linkimg = $list_img[$key]['anhsp1'];
                extract($sanpham); ?>
                <tr></tr>
                <td><?= $ma_sp ?></td>
                <td><img src="../content/images/product/<?= $linkimg ?>" alt=""></td>
                <td><?= $ten_sp ?></td>
                <td><?= $gia_sp ?></td>
                <td><?= $soluong_tonkho ?></td>
                <td class="table_admin-detail"><?= $chitiet_sp ?></td>
                <td class="table_admin-act">
                    <div>
                        <button class="admin_updateprd"><a href="index.php?act=suasanpham_list&code_sp=<?= $ma_sp ?>">Sửa</a></button>
                        <button class="admin_deletey"><a href="index.php?act=softdelete_prd&code_sp=<?= $ma_sp ?>">Xóa mềm</a></button>
                    </div>
                    <button class="admin_deletex"><a href="index.php?act=xoasanpham&code_sp=<?= $ma_sp ?>">Xóa vĩnh viễn</a></button>
                </td>
                </tr>
            <?php }
            ?>
        </table>
    </div>
</div>