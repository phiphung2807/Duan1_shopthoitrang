<div class="row">
    <div class="row formtitle mb">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo '<option value="' . $category_id . '">' . $name . '</option>';
            }
            ?>
        </select>
        <input type="submit" name="listok" value="Ok">
    </form>
    <div class="row formcontent">

        <div class="row mb10 formdsloai">

            <table>
                <tr>
                    <th>MÃ SẢN PHẨM</th>
                    <th>TÊN SẢN PHẨM</th>
                    <th>HÌNH ẢNH</th>
                    <th>GIÁ</th>
                    <th>MÔ TẢ</th>
                    <th><a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM"></a></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $product_id;
                    $xoasp = "index.php?act=xoasp&id=" . $product_id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {   
                        $hinh = "<img src = '" . $hinhpath . "' height = '80'>";
                    } else {
                        $hinh = "no photo";
                    }
                    echo '<tr>
                            <td>' . $product_id . '</td>
                            <td>' . $name . '</td>
                            <td>' . $hinh . '</td>
                            <td>' . $price . '</td>
                            <td>' . $description . '</td>
                            <td>  <a class="bg-red-600 text-white rounded-md p-2" href="' . $suasp . '"><input type="button" value="Sửa"></a>
                                  <a href="' . $xoasp . '"><input type="button" value="Xóa"></a> 
                            </td>
                        </tr>';
                }
                ?>

            </table>
        </div>

    </div>
</div>