<?php
include "./models/pdo.php";
include "./view/header.php";
include "./global.php";
include "./models/products.php";
include "./models/categories.php";


$spnew = loadall_sanpham_home();
$dmnew = loadall_danhmuc();


if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanphamchitiet':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                include "view/product_detaill.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'danhmuc':
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $danhmuc_id = $_GET['id'];
                // Chuyển đến trang danh mục có ID tương ứng
                header("Location: danh-muc.php?id=" . $danhmuc_id);
                exit;
            }
            break;
        case 'dangky':
            include "view/signup.php";
            break;
        case 'dangnhap':
            include "view/signin.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
