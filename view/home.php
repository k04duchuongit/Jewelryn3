<div class="main">
            <div class="banner" style="background-image: url(content/images/banner/banner1.jpg);">

                <i class="ti-angle-right"><a href=""></a></i>
                <i class="ti-angle-left"><a href=""></a></i>
            </div>
            <div class="listproduct">
                <div class="listproduct_block1 grid wide">
                    <div class="listproduct-title css-content">
                        <h3>HER STYLE</h3>
                        <i>Cùng <span>Jewelryn3.</span> biến tấu phong cách thường nhật trở nên khác biệt.</i>
                    </div>
                    <div class="listproduct-content row">
                        <?php
                        foreach ($prd_inhome8 as $key => $prd) {
                            extract($prd);
                            $img_prd_inhome = load_sanpham_img_home($ma_sp);  //thắc mắc về độ tối ưu
                        ?>
                            <div class="l-3 col">
                                <div class="product">
                                    <div class="product_img" style="background-image: url(content/images/product/<?= $img_prd_inhome['anhsp1'] ?>);">
                                        <button class="product_addcart">
                                            <a href="">Thêm vào giỏ</a>
                                        </button>
                                        <div class="iconsearchprd">
                                            <a href="index.php?act=chitietsanpham&ma_sp=<?= $ma_sp ?>"><i class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <p class="product_name"><?= $ten_sp ?></p>
                                    <p class="product_price"><?= $gia_sp ?>vnđ</p>
                                </div>
                            </div>
                        <?php   }
                        ?>
                    </div>
                    <div class="listproduct_block1__buttonnext">
                        <button><a href="">Xem thêm</a></button>
                    </div>
                </div>

                <div class="listproduct_block2">
                    <div class="listproduct-video">
                        <video src="content/images/video/videobanner.mp4" autoplay loop></video>
                    </div>
                    <div class="grid wide">
                        <div class="listproduct-title css-content">
                            <h3>NHẪN CƯỚI ĐƯỢC ƯA CHUỘNG NHẤT</h3>
                            <i>Hơn cả một thiết kế, nhẫn cưới <span>Jewelryn3.</span>khắc hoạ tình yêu của riêng bạn.</i>
                        </div>
                        <div class="listproduct_block2-content row">
                            <div class="listproduct-content col l-6">
                                <div class="row">
                                    <?php
                                    foreach ($prd_inhome4 as $key => $prd) {
                                        extract($prd);
                                        $img_prd_inhome = load_sanpham_img_home($ma_sp);
                                    ?>
                                        <div class="l-6 col product_block2">
                                            <div class="product">
                                                <div class="product_img" style="background-image: url(content/images/product/<?= $img_prd_inhome['anhsp1'] ?>);">
                                                    <button class="product_addcart">
                                                        <a href="">Thêm vào giỏ</a>
                                                    </button>
                                                    <div class="iconsearchprd">
                                                        <a href="index.php?act=chitietsanpham&ma_sp=<?= $ma_sp ?>"><i class="ti-search"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php   }
                                    ?>
                                </div>
                            </div>
                            <div class="l-6 col listproduct-img_bl2">
                                <div>
                                    <img src="content/images/khac/imgbl2.avif" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="listproduct_block3 grid wide">
                    <div class="banner_block3">
                        <img src="content/images/khac/imgbl3.jpg" alt="">
                    </div>
                    <div class="listproduct-title css-content">
                        <h3>NEW ARRIVALS</h3>
                        <i>Khám phá những mảnh ghép mới cho diện mạo thêm nổi bật</i>
                    </div>
                    <div class="listproduct-content row">
                        <?php
                        foreach ($prd_inhome4 as $key => $prd) {
                            extract($prd);
                            $img_prd_inhome = load_sanpham_img_home($ma_sp);
                        ?>
                            <div class="l-3 col">
                                <div class="product">
                                    <div class="product_img" style="background-image: url(content/images/product/<?= $img_prd_inhome['anhsp1'] ?>);">
                                        <button class="product_addcart">
                                            <a href="">Thêm vào giỏ</a>
                                        </button>
                                        <div class="iconsearchprd">
                                            <a href="index.php?act=chitietsanpham&ma_sp=<?= $ma_sp ?>"><i class="ti-search"></i></a>
                                        </div>
                                    </div>
                                    <p class="product_name"><?= $ten_sp ?></p>
                                    <p class="product_price"><?= $gia_sp ?></p>
                                </div>
                            </div>
                        <?php   }
                        ?>
                    </div>
                    <div class="listproduct_block1__buttonnext">
                        <button><a href="">Xem thêm</a></button>
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
            <div class="news grid wide">
                <div class="news-title css-content">
                    <h3>TIN TỨC</h3>
                    <i>Cập nhật những ưu đãi , sự kiện của <span>Jewelryn3.</span> tại đây !</i>
                </div>
                <div class="news-contents row">
                    <div class="col l-4">
                        <div class="news-content">
                            <div class="news-content__img">
                                <img src="content/images/news/news1.jpg" alt="">
                            </div>
                            <div class="news-title">
                                <p class="news-title__time">7/9/2023</p>
                                <p class="news-title__title">HER - Jewelryn3. Chia Sẻ Bí Quyết Thu Hút Mọi Ánh Nhìn Khi
                                    Xuất Hiện</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4">
                        <div class="news-content">
                            <div class="news-content__img">
                                <img src="content/images/news/news2.jpg" alt="">
                            </div>
                            <div class="news-title">
                                <p class="news-title__time">7/9/2023</p>
                                <p class="news-title__title">HER - Jewelryn3. Chia Sẻ Bí Quyết Thu Hút Mọi Ánh Nhìn Khi
                                    Xuất Hiện</p>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4">
                        <div class="news-content">
                            <div class="news-content__img">
                                <img src="content/images/news/news3.jpg" alt="">
                            </div>
                            <div class="news-title">
                                <p class="news-title__time">7/9/2023</p>
                                <p class="news-title__title">HER - Jewelryn3. Chia Sẻ Bí Quyết Thu Hút Mọi Ánh Nhìn Khi
                                    Xuất Hiện</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>