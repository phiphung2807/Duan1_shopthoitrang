<style>
    .text-red {
        color: red;
    }
</style>
<div class="row">
    <div class="row formtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <div class="row mb10">
                Danh mục<br>
                <select name="iddm">
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $category_id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10">
                Tên sản phẩm <br>
                <input type="text" name="tensp" id="tensp">
                <span id="error-tensp"  class="text-red"></span>
            </div>
            <div class="row mb10">
                Giá <br>
                <input type="text" name="giasp" id="giasp">
                <span id="error-giasp"  class="text-red"></span>
            </div>
            <div class="row mb10">
                Hình ảnh <br>
                <input type="file" name="hinh" id="hinh">
                <span id="error-hinh"  class="text-red"></span>
            </div>
            <div class="row mb10">
                Mô tả <br>
                <textarea name="mota" id="mota" cols="30" rows="10"></textarea>
                <span id="error-mota"  class="text-red"></span>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI" onclick="clearValidation()">
                <a href="index.php?act=listsp"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
<script>
    function validateForm() {
        let tensp = document.getElementById("tensp").value;
        let giasp = document.getElementById("giasp").value;
        let hinh = document.getElementById("hinh").value;
        let mota = document.getElementById("mota").value;

        let errorTensp = document.getElementById("error-tensp");
        let errorGiasp = document.getElementById("error-giasp");
        let errorHinh = document.getElementById("error-hinh");
        let errorMota = document.getElementById("error-mota");

        errorTensp.innerHTML = "";
        errorGiasp.innerHTML = "";
        errorHinh.innerHTML = "";
        errorMota.innerHTML = "";

        if (tensp.trim() === "") {
            errorTensp.innerHTML = "Vui lòng nhập tên sản phẩm.";
            return false;
        }

        if (giasp.trim() === "" || isNaN(giasp)) {
            errorGiasp.innerHTML = "Vui lòng nhập giá sản phẩm hợp lệ.";
            return false;
        }

        if (hinh.trim() === "") {
            errorHinh.innerHTML = "Vui lòng chọn hình ảnh sản phẩm.";
            return false;
        }

        if (mota.trim() === "") {
            errorMota.innerHTML = "Vui lòng nhập mô tả sản phẩm.";
            return false;
        }

        return true;
    }

    function clearValidation() {
        document.getElementById("error-tensp").innerHTML = "";
        document.getElementById("error-giasp").innerHTML = "";
        document.getElementById("error-hinh").innerHTML = "";
        document.getElementById("error-mota").innerHTML = "";
    }

    document.getElementById("tensp").addEventListener("blur", function () {
        validateField("tensp", "Vui lòng nhập tên sản phẩm.");
    });

    document.getElementById("giasp").addEventListener("blur", function () {
        validateField("giasp", "Vui lòng nhập giá sản phẩm hợp lệ.");
    });

    document.getElementById("hinh").addEventListener("blur", function () {
        validateField("hinh", "Vui lòng chọn hình ảnh sản phẩm.");
    });

    document.getElementById("mota").addEventListener("blur", function () {
        validateField("mota", "Vui lòng nhập mô tả sản phẩm.");
    });

    function validateField(fieldName, errorMessage) {
        let fieldValue = document.getElementById(fieldName).value;
        let errorField = document.getElementById("error-" + fieldName);

        errorField.innerHTML = "";

        if (fieldValue.trim() === "") {
            errorField.innerHTML = errorMessage;
        }
    }
</script>
