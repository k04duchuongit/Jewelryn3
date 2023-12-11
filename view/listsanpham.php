<div class="main">
    <div class="listproduct grid wide">
        <div class="listproduct_block1 listproduct_listsp">
            <div class="listproduct-title css-content">
                <h3 class="h3_title">HER STYLE</h3>
            </div>
            <div class="listproduct-content row">
                <?php
                foreach ($prd_16 as $key => $prd) {
                    extract($prd);
                    $img_prd = load_sanpham_img_home($ma_sp);
                ?>
                    <div class="l-3 col">
                        <div class="product">
                            <div class="product_img" style="background-image: url(content/images/product/<?= $img_prd['anhsp1'] ?>);">
                                <button class="product_addcart">
                                    <a href="">Thêm vào giỏ</a>
                                </button>
                                <div class="iconsearchprd">
                                    <a href="index.php?act=chitietsanpham&ma_sp=<?= $ma_sp ?>"><i class="ti-search"></i></a>
                                </div>
                            </div>
                            <p class="product_name"><?= $ten_sp ?></p>
                            <p class="product_price"><?= $gia_sp ?> vnđ</p>
                        </div>
                    </div>
                <?php }
                ?>
            </div>
            <ul class="listproduct_block1__buttonnext listproduct_block1__buttonnext-x">
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
            </ul>
        </div>
        <div class="sameproduct-listprd">
            <div class="sameproduct-listprd__banner">
                <img src="content/images/banner/2_Banner_BST-_PC.jpg" alt="">
            </div>
            <div class="listproduct-title css-content">
                <h3>SẢN PHẨM NỔI BẬT</h3>
                <i>Điểm Đến Trang Sức Chất Lượng Tại Việt Nam</i>
                <p>Với tất cả tâm huyết và khát vọng về một kỷ nguyên cách tân trang sức Việt, thương hiệu Jewelryn2. không chỉ là chuỗi cửa hàng kinh doanh mà còn là nơi kiến tạo ra hàng ngàn kiểu mẫu trang sức.</p>
            </div>
            <div class="listproduct-content row">
                <?php
                foreach ($stagnation_prds as $key => $prd) {
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
                            <p class="product_price"><?= $gia_sp ?> vnđ</p>
                        </div>
                    </div>
                <?php }
                ?>
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
