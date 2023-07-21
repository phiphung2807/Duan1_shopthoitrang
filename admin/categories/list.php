<div class="row">
    <div class="row formtitle">
        <h1>DANH SÁCH DANH MỤC</h1>
    </div>
    <div class="row formcontent">

        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ LOẠI</th>
                    <th>TÊN LOẠI</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadm = "index.php?act=suadm&id=" . $category_id;
                    $xoadm = "index.php?act=xoadm&id=" . $category_id;
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $category_id . '</td>
                            <td>' . $name . '</td>
                            <td><a href="' . $suadm . '"><input type="button" value="Sửa"></a>  
                                <a href="' . $xoadm . '"><input type="button" value="Xóa"></a> 
                            </td>
                        </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
            <a href="index.php?act=adddm"><input type="button" value="NHẬP THÊM"></a>
        </div>
    </div>
</div>