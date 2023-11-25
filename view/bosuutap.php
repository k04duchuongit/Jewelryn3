<?php
// echo "<pre>";
// print_r($list_bst);
?>
<div class="main">
    <div class="grid wide collection">
        <div class="">
            <div class="collection-title css-content">
                <h3>BỘ SƯU TẬP</h3>
                <i>Mỗi một thiết kế có mặt trong 18 bộ sưu tập đều mang nét mới mẻ, độc đáo về thiết kế cũng như
                    đảm bảo đúng theo tiêu chuẩn chất lượng quốc tế, là kết tinh của kỹ thuật chế tác truyền
                    thống cùng kinh nghiệm và sự tài ba của người nghệ nhân trang sức khi chọn lựa khắt khe từ
                    vàng đến đá quý để mang đến những thiết kế trang sức hoàn hảo với những viên đá có nguồn gốc
                    rõ ràng, màu sắc và giác cắt hoàn mỹ.
                </i>
            </div>
            <div class="collectionlist row">
                <?php
                foreach ($list_bst as $key => $bst) {
                    extract($bst);
                    if ($key <= 1) { 
                        ?>
                        <a class="col l-12" href="index.php?act=listsanpham&id_bst=<?= $id_bst ?>">
                            <div class="collection_content collection_content-col12" style="background-image: url(./content/images/bosuutap/<?= $img_bosuutap ?>);">
                                <div class="collection_name">
                                    <i> <?= $ten_bst ?> </i>
                                    <p>Xem chi tiết</p>
                                </div>
                            </div>
                        </a>
                <?php }
                }
                ?>

                <div class="col l-12">
                    <div class="row">
                        <?php
                        foreach ($list_bst as $key => $bst) {
                            extract($bst);
                            if ($key == 2) { ?>
                                <a class="col l-5" href="index.php?act=listsanpham&id_bst=<?= $id_bst ?>">
                                    <div class="collection_content collection_content-col5" style="background-image: url(./content/images/bosuutap/<?= $img_bosuutap ?>);">
                                        <div class="collection_name">
                                            <i><?= $ten_bst ?></i>
                                            <p>Xem chi tiết</p>
                                        </div>
                                    </div>
                                </a>
                            <?php } else if ($key == 3) {   ?>

                                <a class="col l-7" href="index.php?act=listsanpham&id_bst=<?= $id_bst ?>">
                                    <div class="collection_content collection_content-col6" style="background-image: url(./content/images/bosuutap/<?= $img_bosuutap ?>);">
                                        <div class="collection_name">
                                            <i><?= $ten_bst ?></i>
                                            <p>Xem chi tiết</p>
                                        </div>
                                    </div>
                                </a>
                        <?php  }
                        }
                        ?>

                    </div>
                </div>

                <?php
                foreach ($list_bst as $key => $bst) {
                    extract($bst);
                    if ($key > 3) { ?>
                        <a class="col l-12" href="index.php?act=listsanpham&id_bst=<?= $id_bst ?>">
                            <div class="collection_content collection_content-col12" style="background-image: url(./content/images/bosuutap/<?= $img_bosuutap ?>);">
                                <div class="collection_name">
                                    <i> <?= $ten_bst ?> </i>
                                    <p>Xem chi tiết</p>
                                </div>
                            </div>
                        </a>
                <?php }
                }
                ?>
            </div>
        </div>
    </div>
</div>