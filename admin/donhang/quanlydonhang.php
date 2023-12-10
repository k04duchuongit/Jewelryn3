<div class="main">
    <div class="action_admin gridwideaset">
        <p class="adminaction_title">Quản Lý Đơn Hàng</p>
        <form action="index.php" method="GET">
            <input type="hidden" name="act" value="quanlydonhang">
            <input type="text" placeholder="Nhập sô điện thoại" class="nameprd_searchz" name="nameprd_searchz">

            <button type="submit" class="admin_ordered">Tìm Kiếm</button>
            <a href="index.php" class="repage_control">Quay về trang chủ</a>
        </form>
        <table class="table_admin">
            <tr>
                <th class="table_admin-id">
                    ID User
                </th>
                <th class="table_admin-daycreate">
                    Ngày tạo
                </th>
                <th class="table_admin-address">
                    Địa chỉ
                </th>
                <th class="table_admin-sumprice">
                    Tổng bill
                </th>
                <th class="table_admin-phone">
                    SĐT
                </th>
                <th>
                    Trạng thái
                </th>
                <th>
                    Cập nhật trạng thái
                </th>
                <th>
                    Xem chi tiết
                </th>
            </tr>
            <?php
            // echo "<pre>";
            // print_r($list_bill);
            foreach ($list_bill as $key => $bill) {
                // print_r($bill);
                extract($bill); ?>
                <tr>
                    <td class="table_admin-id">
                        <?= $id_nguoidung ?>
                    </td>
                    <td class="table_admin-daycreate">
                        <?= $ngaytaohoadon ?>
                    </td>
                    <td class="table_admin-address">
                        <?= $diachi_nguoidung ?>
                    </td>
                    <td class="table_admin-sumprice">
                        <?= $giatri_hoadon ?>
                    </td>
                    <td class="table_admin-phone">
                        <?= $sodienthoai ?>
                    </td>
                    <td class="list_act_admin">
                        <?php
                        if ($trang_thai_vanchuyen == 1) {
                            echo '<button class="button_status"><a href="">Xét duyệt</a></button>';
                        } else if ($trang_thai_vanchuyen == 2) {
                            echo '<button class="button_status"><a href="">Vận chuyển</a></button>';
                        } else if ($trang_thai_vanchuyen == 3) {
                            echo '<button class="button_status"><a href="">Thành công</a></button>';
                        } else if ($trang_thai_vanchuyen == 4) {
                            echo '<button class="button_status"><a href="">Thất bại</a></button>';
                        }
                        ?>
                    </td>
                    <td class="list_act_admin">
                        <?php
                        for ($i = 1; $i < 5; $i++) {
                            if ($i == $trang_thai_vanchuyen) {
                                continue;
                            }
                        ?>
                            <form action="index.php?act=capnhattrangthai_donhang" method="POST" class="formstt">
                                <input type="hidden" value="<?= $id_hoadon ?>" name="id_hoadon">
                                <button type="submit" class="button_status" name="status" value="<?= $i ?>">
                                    <?php
                                    if ($i == 1) {
                                        echo "Xét duyệt";
                                    } else if ($i == 2) {
                                        echo "Vận chuyển";
                                    } else if ($i == 3) {
                                        echo "Thành công";
                                    } else if ($i == 4) {
                                        echo "Thất bại";
                                    }
                                    ?></button>
                            </form>
                        <?php   }
                        ?>
                        <!-- <form action="">
                        <button class="button_status"><a href="">Thành công</a></button>
                        <button class="button_status"><a href="">Vận chuyển</a></button>
                        <button class="button_status"><a href="">Thất bại</a></button>
                        </form> -->
                    </td>
                    <th class="table_admin-detail">
                        <i class="ti-receipt table_admin-detail__click">
                            <div class="detail__bill-wrap">
                                <div class="detail__bill">
                                    <div class="detail__bill-title">
                                        <p>Chi Tiết Hóa Đơn</p>
                                        <p class="detail__bill-title-clickout">
                                            <i class="ti-close"></i>
                                        </p>
                                    </div>
                                    <table>
                                        <tr>
                                            <th class="detail__bill-prdname">Sản phẩm</th>
                                            <th class="detail__bill-prdqtt">Số Lượng</th>
                                            <th class="detail__bill-prdprice">Đơn giá</th>
                                            <th class="detail__bill-prdsumprice">Tổng</th>
                                        </tr>
                                        <?php
                                        $Detail_bill = querryDetail_bill($bill['id_hoadon']);
                                        $totalBill = 0;
                                        foreach ($Detail_bill as $key => $bill) {
                                        ?>
                                            <tr>
                                                <td class="detail__bill-prdname"><?= $bill['ten_sp'] ?></td>
                                                <td class="detail__bill-prdqtt"><?= $bill['so_luong'] ?></td>
                                                <td class="detail__bill-prdprice"><?= $bill['gia_sp'] ?></td>
                                                <td><?= $bill['so_luong'] * $bill['gia_sp'] ?>vnđ</td>
                                            </tr>
                                        <?php
                                            $totalBill += $bill['so_luong'] * $bill['gia_sp'];
                                        }
                                        ?>

                                        <tr>
                                            <td colspan="2">Thành tiền</td>
                                            <td colspan="3" class="detail__bill-prdsumprice">
                                                <p><?= $totalBill ?>vnđ</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </i>
                    </th>
                </tr>

            <?php  }
            ?>

        </table>
    </div>
</div>