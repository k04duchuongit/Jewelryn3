<div class="main">
    <div class="grid wide">
        <form action="index.php?act=dathang" method="POST">
            <div class="row wrap_order">
                <div class="col l-8">
                    <div class="buyerinformation">
                        <h5 class="order-title">
                            Thông tin người mua
                        </h5>
                        <input type="text" placeholder="Họ và tên của bạn" value="<?php if (isset($_SESSION['name_login'])) {
                                                                                        echo $_SESSION['name_login'];
                                                                                    } ?>">
                        <div class="row_order">
                            <input type="text" placeholder="Email của bạn" class="payemail" value="<?php if (isset($_SESSION['email_login'])) {
                                                                                                        echo $_SESSION['email_login'];
                                                                                                    } ?>">
                            <input type="text" placeholder="Số điện thoại của bạn" class="paysdt" name="paysdt" value="<?php if (isset($_SESSION['sdt_login'])) {
                                                                                                                echo $_SESSION['sdt_login'];
                                                                                                            } ?>">
                        </div>
                        <h5 class="order-title">Địa chỉ nhận hàng</h5>
                        <input type="text" placeholder="Địa chỉ nhận hàng" name="payaddress">
                        <input type="text" placeholder="Địa chỉ chi tiết" name="detail_payaddress">
                        <h5 class="order-title">Hình thức thanh toán</h5>
                        <div class="payinformation">
                            <div class="payment">
                                <input type="radio" name="payinformation" id="" value="1">
                                <label for="payinformation">
                                    Thanh toán tiền mặt khi nhận hàng (COD)
                                </label>
                            </div>
                            <div class="payment">
                                <input type="radio" name="payinformation" id="" value="2">
                                <label for="payinformation">
                                    Thanh toán bằng thẻ tín dụng
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="billinformation">
                        <h5 class="order-title">Thông tin đơn hàng</h5>
                        <table class="Information_bill">
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                            </tr>
                            <?php
                            $tong_tien = 0;
                            foreach ($list_prd_incart as $key => $prd_content) {
                                extract($prd_content); ?>
                                <tr>
                                    <td>
                                        <img src="content/images/product/<?= $anhsp1 ?>" alt="">
                                    </td>

                                    <td><?= $soluong_sp ?></td>
                                    </td>
                                    <td>
                                        <?= $gia_sp * $soluong_sp ?>vnđ
                                    </td>
                                </tr>
                            <?php
                                $tong_tien += $gia_sp * $soluong_sp;
                            }
                            ?>
                            <tr class="toltalbill">
                                <td colspan="2">Thành tiền</td>
                                <td><?= $tong_tien ?>vnđ </td>
                            </tr>
                        </table>
                        <input type="hidden" name="orderstatus" value="1">
                        <input type="hidden" name="totalbill" value=<?= $tong_tien ?>>
                        <button type="submit" class="ordered" name="order_bill">Đặt mua</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>