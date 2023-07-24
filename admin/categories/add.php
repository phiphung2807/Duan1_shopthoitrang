<style>
    .text-red {
        color: red;
    }
</style>
<div class="row">
    <div class="row formtitle">
        <h1>THÊM MỚI DANH MỤC</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=adddm" method="post" onsubmit="return validateForm()">
            <div class="row mb10">
                Tên danh mục <br>
                <input type="text" name="tenloai" id="tenloai">
                <span id="error-tenloai" class="text-red"></span>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI" onclick="clearValidation()">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
<script>
    function validateForm() {
        let tenloai = document.getElementById("tenloai").value;
        let errorTenloai = document.getElementById("error-tenloai");

        errorTenloai.innerHTML = "";

        if (tenloai.trim() === "") {
            errorTenloai.innerHTML = "Vui lòng nhập tên danh mục.";
            return false;
        }

        return true;
    }

    function clearValidation() {
        document.getElementById("error-tenloai").innerHTML = "";
    }

    document.getElementById("tenloai").addEventListener("blur", function () {
        validateField("tenloai", "Vui lòng nhập tên danh mục.");
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
