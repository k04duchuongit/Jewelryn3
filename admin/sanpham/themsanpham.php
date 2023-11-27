<div class="main-admin">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Thêm Sản Phẩm</p>
        <div class="admin_addinformation">
            <a href="index.php?act=quanlysanpham">Quay về trang chủ</a>
        </div>
        <form action="index.php?act=themsanpham" method="POST" class="admin_add_information-wrap" enctype="multipart/form-data">
            <div class="admin_add_information">
                <input type="hidden" name="code_product" value="<?php echo create_code_product(); ?>">
            </div>
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập tên sản phẩm" name="name_product">
            </div>
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập giá sản phẩm" name="price_product">
            </div>
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập chi tiết sản phẩm" name="detail_product">
            </div>
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập số lượng nhập kho" name="quantity_product">
            </div>
            <div class="admin_add_information">
                <p>Size :</p>
                <div class="size_product">
                    <?php
                    foreach ($list_size as $key => $size) {
                        extract($size); ?>
                        <p><?= $so_size ?>
                            <input type="checkbox" name="size_prd_<?= $id_size ?>" value ="<?= $id_size ?>">
                        </p>
                    <?php  }
                    ?>
                </div>
            </div>
            <div class="admin_add_information">
                <p>Loại chất liệu</p>
                <select name="material_product" id="">
                    <?php
                    foreach ($listchatlieu as $chatlieu) {
                        extract($chatlieu);  ?>
                        <option value="<?= $id_chatlieu ?>"><?php echo $ten_chatlieu ?></option>
                    <?php }
                    ?>
                    <?php  ?>
                </select>
            </div>
            <div class="admin_add_information">
                <p>Loại mặt hàng</p>
                <select name="items_product" id="">
                    <?php
                    foreach ($listmathang as $mathang) {
                        extract($mathang); ?>
                        <option value="<?= $id_mathang ?>"><?php echo $ten_mathang ?></option>
                    <?php  }
                    ?>
                    <?php  ?>
                </select>
            </div>
            <div class="admin_add_information">
                <p>Bộ sưu tập</p>
                <select name="collection_product" id="">
                    <?php
                    foreach ($listbosuutap as $bosuutap) {
                        extract($bosuutap); ?>
                        <option value="<?= $id_bst ?>"><?php echo $ten_bst ?></option>
                    <?php  }
                    ?>
                    <?php  ?>
                </select>
            </div>
            <div class="admin_add_information">
                <p>Ảnh 1</p>
                <input type="file" name="img_product1">
            </div>
            <div class="admin_add_information">
                <p>Ảnh 2</p>
                <input type="file" name="img_product2">
            </div>
            <div class="admin_add_information">
                <p>Ảnh 3</p>
                <input type="file" name="img_product3">
            </div>
            <div class="admin_add_information">
                <p>Ảnh 4</p>
                <input type="file" name="img_product4">
            </div>
            <button type="submit" name="themmoisanpham" class="admin_add_information-button">
                <p>Thêm mới</p>
            </button>
        </form>
    </div>
</div>