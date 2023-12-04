<div class="main">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Quản Lý Đơn Hàng</p>
        <form action="">
            <input type="text" placeholder="Nhập sô điện thoại" class="nameprd_searchz">

            <button type="submit" class="admin_ordered">Tìm Kiếm</button>
            <a href="index.php" class="repage_control">Quay về trang chủ</a>
        </form>
        <table class="table_admin">
            <tr>
                <th class="table_admin-id">
                    ID
                </th>
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
                    Xem chi tiết
                </th>
            </tr>
            <?php
            // echo "<pre>";
            // print_r($list_bill);
            foreach ($list_bill as $key => $bill) {
                extract($bill); ?>
                <tr>
                    <td class="table_admin-id">
                        <?= $id_hoadon ?>
                    </td>
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
                                            <th class="detail__bill-prdimg">
                                                Hình ảnh
                                            </th>
                                            <th class="detail__bill-prdqtt">Số Lượng</th>
                                            <th class="detail__bill-prdprice">Đơn giá</th>
                                            <th class="detail__bill-prdsumprice">Tổng</th>
                                        </tr>
                                        <tr>
                                            <td class="detail__bill-prdname">Nhẫn nữ hot 2023</td>
                                            <td class="detail__bill-prdimg">
                                                <img src="../content/images/product/nhan1.jpg" alt="">
                                            </td>
                                            <td class="detail__bill-prdqtt">4</td>
                                            <td class="detail__bill-prdprice">1.232.000</td>
                                            <td>5.403.345</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Thành tiền</td>
                                            <td colspan="3" class="detail__bill-prdsumprice">
                                                <p>12.234.000vnd</p>
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