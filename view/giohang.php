<div class="main">
    <div class="grid wide">
        <table class="carttable">
            <tr>
                <th>
                    Sản Phẩm
                </th>
                <th>
                    Tên Sản Phẩm
                </th>
                <th>
                    Size
                </th>
                <th>
                    Số lượng
                </th>
                <th>
                    Thời Gian Thêm
                </th>
                <th>
                    Đơn giá
                </th>
                <th>
                    Xóa
                </th>
            </tr>
            <?php
            $tong_tien = 0;
            foreach ($list_prd_incart as $key => $prd_content) {
                extract($prd_content); ?>
                <tr>
                    <td>
                        <img src="content/images/product/<?= $anhsp1 ?>" alt="">
                    </td>
                    <td><?= $ten_sp ?></td>
                    <td><?= $id_size ?></td>
                    <td><?= $soluong_sp ?></td>
                    <td><?= $thoi_gian_them ?></td>
                    <td class="carttable-price"><?= $gia_sp * $soluong_sp ?>vnđ</td>
                    <td class="carttable-delete">
                        <a href="index.php?act=delete_prd_incart&ma_sp=<?= $ma_sp ?>"><i class="ti-face-sad"></i></a>
                    </td>
                </tr>
            <?php $tong_tien += $gia_sp * $soluong_sp;
            }
            ?>
            <tr>
                <td colspan="4" class="btnorder">
                    <button>
                        <a href="index.php?act=dathang">Đặt Hàng</a>
                    </button>
                </td>
                <td colspan="1">
                    Tổng tiền
                </td>
                <td colspan="2" class="table_admin-sumprice">
                    <?php
                    echo "<p> $tong_tien vnđ </p>";
                    ?>
                </td>
            </tr>
        </table>
    </div>
</div>