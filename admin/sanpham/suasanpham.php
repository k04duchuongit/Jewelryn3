<?php
if (isset($information_prd) || isset($img_prd)) {
    extract($information_prd);
    extract($img_prd);
}

?>

<div class="main-admin">
    <div class="action_admin grid wide">
        <p class="adminaction_title">Sửa Sản Phẩm</p>
        <div class="admin_addinformation">
            <a href="index.php?act=quanlysanpham">Quay về trang quản lý</a>
        </div>
        <form action="index.php?act=suasanpham_update&ma_sp=<?= $ma_sp ?>" class="admin_add_information-wrap" enctype="multipart/form-data" method="POST">
            <div class="admin_add_information">
                <input type="hidden" name="code_product" value="<?= $ma_sp ?>">
            </div>
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập tên sản phẩm" name="name_product" value="<?= $ten_sp ?>">
            </div>
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập giá sản phẩm" name="price_product" value="<?= $gia_sp ?>">
            </div>
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập chi tiết sản phẩm" name="detail_product" value="<?= $chitiet_sp ?>">
            </div>
            <div class="admin_add_information">
                <input type="text" placeholder="Nhập số lượng nhập kho" name="quantity_product" value="<?= $soluong_tonkho ?>">
            </div>
            <div class="admin_add_information">
                <p>Size :</p>
                <div class="size_product">
                    <?php
                    //    echo "<pre>";
                    //    print_r($list_size_prd);
                    foreach ($list_size as $key => $size) {
                        extract($size);
                        if (in_array($id_size, $list_size_prd)) { ?>
                            <p><?= $so_size ?>
                                <input type="checkbox" name="size_prd_<?= $id_size ?>" value="<?= $id_size ?>" checked>
                            </p>
                        <?php } else { ?>
                            <p><?= $so_size ?>
                                <input type="checkbox" name="size_prd_<?= $id_size ?>" value="<?= $id_size ?>">
                            </p>
                        <?php  }
                        ?>
                    <?php }
                    ?>
                </div>
            </div>
            <div class="admin_add_information">
                <p>Loại chất liệu</p>
                <select name="material_product" id="">
                    <?php
                    foreach ($list_chatlieu as $key => $chatlieu) {
                        if ($id_chatlieu == $chatlieu['id_chatlieu']) { ?>
                            <option value="<?= $chatlieu['id_chatlieu'] ?>" selected><?= $chatlieu['ten_chatlieu'] ?></option>
                        <?php  } else { ?>
                            <option value="<?= $chatlieu['id_chatlieu'] ?>"><?= $chatlieu['ten_chatlieu'] ?></option>
                    <?php }
                    }
                    ?>

                    <option value="">Bạc</option>
                </select>
            </div>
            <div class="admin_add_information">
                <p>Loại mặt hàng</p>
                <select name="items_product" id="">
                    <?php
                    foreach ($list_mathang as $key => $mathang) {
                        if ($id_mathang == $mathang['id_mathang']) { ?>
                            <option value="<?= $mathang['id_mathang'] ?>" selected><?= $mathang['ten_mathang'] ?></option>
                        <?php  } else { ?>
                            <option value="<?= $mathang['id_mathang'] ?>"><?= $mathang['ten_mathang'] ?></option>
                    <?php }
                    }
                    ?>
                </select>
            </div>
            <div class="admin_add_information">
                <p>Bộ sưu tập</p>
                <select name="collection_product" id="">
                    <?php
                    foreach ($list_bosuutap as $key => $bst) {
                        if ($id_bst == $bst['id_bst']) { ?>
                            <option value="<?= $bst['id_bst'] ?>" selected><?= $bst['ten_bst'] ?></option>
                        <?php  } else { ?>
                            <option value="<?= $bst['id_bst'] ?>"><?= $bst['ten_bst'] ?></option>
                    <?php }
                    }
                    ?>
                </select>
            </div>
            <div class="admin_add_information">
                <p>Ảnh 1</p>
                <input type="file" name="img_product1">
                <img src="../content/images/product/<?= $anhsp1 ?>" class="admin_imgnow">
            </div>
            <div class="admin_add_information">
                <p>Ảnh 2</p>
                <input type="file" name="img_product2">
                <img src="../content/images/product/<?= $anhsp2 ?>" class="admin_imgnow">
            </div>
            <div class="admin_add_information">
                <p>Ảnh 3</p>
                <input type="file" name="img_product3">
                <img src="../content/images/product/<?= $anhsp3 ?>" class="admin_imgnow">
            </div>
            <div class="admin_add_information">
                <p>Ảnh 4</p>
                <input type="file" name="img_product4">
                <img src="../content/images/product/<?= $anhsp4 ?>" class="admin_imgnow">
            </div>
            <button type="submit" class="admin_add_information-button" name="suasansanpham">
                Sửa sản phẩm
            </button>
        </form>
    </div>
</div>