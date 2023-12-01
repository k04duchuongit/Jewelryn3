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
                    Giá
                </th>
                <th>
                    Xóa
                </th>
            </tr>
            <?php
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
                    <td class="carttable-price"><?= $gia_sp ?>vnđ</td>
                    <td class="carttable-delete">
                        <a href=""> <i class="ti-face-sad"></i></a>
                    </td>
                </tr>
            <?php  }
            ?>
            <tr>
                <td colspan="5" class="btnorder">
                    <button>
                        <a href="">Đặt Hàng</a>
                    </button>
                </td>
            </tr>
        </table>
    </div>
</div>