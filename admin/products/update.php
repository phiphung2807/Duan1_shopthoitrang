<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src = '" . $hinhpath . "' height = '80'>";
} else {
    $hinh = "no photo";
}
?>
<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    <option value="0" <?= ($idsp == 0) ? 'selected' : '' ?>>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        $category_id = $danhmuc['category_id'];
                        $category_name = $danhmuc['name'];
                        if ($idsp == $category_id)
                            echo '<option value="' . $category_id . '" selected>' . $category_name . '</option>';
                        else
                            echo '<option value="' . $category_id . '">' . $category_name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" value="<?= $sanpham['name'] ?>">
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp" value="<?= $sanpham['price'] ?>">
            </div>
            <div class="row mb10">
                Hình ảnh <br>
                <?php
                $hinhpath = "../upload/" . $sanpham['img'];
                if (is_file($hinhpath)) {
                    echo "<img src='" . $hinhpath . "' height='80'>";
                } else {
                    echo "no photo";
                }
                ?>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" cols="30" rows="10"><?= $sanpham['description'] ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= $sanpham['product_id'] ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>