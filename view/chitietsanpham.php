<?php
if (is_array($one_prd_detail) && is_array($img_one_prd)) {
    extract($one_prd_detail);
    extract($img_one_prd);
}
?>
<div class="main">
    <div class="grid wide detailprd">
        <div class="row">
            <div class="col l-5">
                <div class="detailprd_imgs">
                    <div class="detailprd_img_mainimg">
                        <img src="content/images/product/<?= $anhsp1 ?>" alt="">
                    </div>
                    <div class="detailprd_img_listimg">
                        <img src="content/images/product/<?= $anhsp1 ?>" alt="">
                        <img src="content/images/product/<?= $anhsp2 ?>" alt="">
                        <img src="content/images/product/<?= $anhsp3 ?>" alt="">
                        <img src="content/images/product/<?= $anhsp4 ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col l-6">
                <form action="index.php?act=addgiohang&masp=<?= $ma_sp ?>" class="detailprd_contents" method="POST">
                    <h3 class="product-name"><?= $ten_sp ?></h3>
                    <p class="product-price"><?= $gia_sp ?> vnđ</p>
                    <p class="product-note">* Giá sản phẩm thay đổi tùy theo trọng lượng thực tế của sản
                        phẩm. Vui lòng gọi <strong>1900636526</strong> để được hỗ trợ</p>
                    <a class="product-love" href="">
                        <i class="ti-heart"></i>
                        Yêu Thích Sản Phẩm
                    </a>
                    <input type="hidden" value="<?= $ma_sp ?>" name="code_prd">
                    <div class="product-size">
                        <p>Size : </p>
                        <select name="sizeproduct" id="">
                            <?php
                            foreach ($list_size_of_prd as $key => $id_size) {
                                extract($id_size);
                                foreach ($list_size as $key => $value) {
                                    if ($value['id_size'] == $id_size) {   ?>
                                        <option value="<?= $id_size ?>"> <?= $value['so_size'] ?> </option>
                            <?php }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="product-quantity">
                        <p>Số Lượng: </p>
                        <div class="product-qty">
                            <i class="ti-minus ti-minus__summation"></i>
                            <input type="text" id="quantity__prd" value="1" name="quantity__prdx">
                            <i class="ti-plus ti-plus__subtraction"></i>
                        </div>
                        <button class="addto_cart" type="submit" name="add_prd_cart">
                            Thêm vào giỏ hàng
                        </button>
                    </div>
                </form>
                <div class="detailprd_introduce">
                    <h4 class="detailprd_introduce-title">Jewelryn3. - ĐIỂM ĐẾN TRANG SỨC CHẤT LƯỢNG
                        TẠI
                        VIỆT NAM</h4>
                    <p class="detailprd_introduce-content">
                        <?= $chitiet_sp ?>
                        <br>
                        <br>
                        <hr>
                        Jewelryn3. là thương hiệu trang sức tại thị trường Việt Nam, với nền tảng 20
                        năm kinh nghiệm trong lĩnh vực sản xuất và phân phối trang sức cho các cửa hàng truyền
                        thống trên khắp cả nước, và hợp tác cùng nhiều chuyên gia có bề dày kinh nghiệm trong
                        lĩnh vực trang sức trong nước và thế giới. Mỗi thiết kế trang sức đều được Lộc Phúc trau
                        chuốt từ khâu lên ý tưởng, thiết kế, chế tác cho đến khi hoàn thiện.
                        <br><br>
                        Tự hào tạo ra thiết kế trang sức tinh xảo, bằng cách chỉ chọn lựa những chất liệu thượng
                        hạng và khéo léo đặt chúng vào trong các thiết kế hoàn hảo và tinh tế nhất. Jewelryn3.
                        ứng dụng công nghệ chế tác hiện đại với những thiết kế độc quyền được đầu
                        tư chuyên nghiệp từ sự sáng tạo đến bàn tay tài hoa của nghệ nhân trang sức.
                        Mỗi khách hàng của Jewelryn3. đều có cơ hội được chiêm ngưỡng vẻ đẹp thuần khiết của các
                        loại đá quý hiếm trên thế giới, cùng với thiết kế độc quyền của chúng tôi.
                    </p>
                </div>
            </div>
        </div>
        <div class="sameproduct">
            <div class="sameproduct-listprd">
                <div class="listproduct-title css-content">
                    <h3>SẢN PHẨM CÙNG LOẠI</h3>
                    <i>Cùng <span>Jewelryn3.</span> biến tấu phong cách thường nhật trở nên khác biệt.</i>
                </div>
                <div class="listproduct-content row">
                    <?php
                    foreach ($img_16_prd as $key => $prd) {
                        extract($prd);
                        $img_prd_inhome = load_sanpham_img_home($ma_sp);
                    ?>
                        <div class="l-3 col">
                            <div class="product">
                                <div class="product_img" style="background-image: url(content/images/product/<?= $img_prd_inhome['anhsp1'] ?>);">
                                    <button class="product_addcart">
                                        <a href="">Thêm vào giỏ</a>
                                    </button>
                                </div>
                                <p class="product_name"><?= $ten_sp ?></p>
                                <p class="product_price"><?= $gia_sp ?> vnđ</p>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
                <div class="listproduct_block1__buttonnext">
                    <button><a href="">Xem thêm</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="model row no-gutters ">
        <div class="col l-2-4 position-relative">
            <div class="overlaymodel">
            </div>
            <div>
                <img src="content/images/khac/model1.jpg" alt="">
            </div>
        </div>
        <div class="col l-2-4 position-relative">
            <div class="overlaymodel">
            </div>
            <div>
                <img src="content/images/khac/model2.jpg" alt="">
            </div>
        </div>
        <div class="col l-2-4 position-relative">
            <div class="overlaymodel">
            </div>
            <div>
                <img src="content/images/khac/model3.jpg" alt="">
            </div>
        </div>
        <div class="col l-2-4 position-relative">
            <div class="overlaymodel">
            </div>
            <div>
                <img src="content/images/khac/model1.jpg" alt="">
            </div>
        </div>
        <div class="col l-2-4 position-relative">
            <div class="overlaymodel">
            </div>
            <div>
                <img src="content/images/khac/model2.jpg" alt="">
            </div>
        </div>
    </div>
</div>