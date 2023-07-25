<?php
include "../models/pdo.php";
include "../models/categories.php";
include "../models/products.php";
include "header.php";
//controller

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra xem ng dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "categories/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "categories/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                // Kiểm tra xem danh mục có sản phẩm hay không
                $danhmuc = loadone_danhmuc($id);
                if ($danhmuc && has_products_in_danhmuc($id)) {
                    // Hiển thị thông báo và xác nhận xóa sản phẩm
                    $confirm_message = "Danh mục này có sản phẩm. Bạn có chắc muốn xóa danh mục và tất cả sản phẩm liên quan không?";
                    echo "<script>
                                var x = confirm('$confirm_message');
                                if (x) {
                                    window.location.href = 'index.php?act=confirm_xoadm&id=$id';
                                } else {
                                    window.location.href = 'index.php?act=listdm';
                                }
                            </script>";
                } else {
                    // Nếu không có sản phẩm, tiến hành xóa danh mục
                    delete_danhmuc($id);
                }
                $listdanhmuc = loadall_danhmuc();
                include "categories/list.php";
            }
            break;

        case 'confirm_xoadm':
            // Hàm này được gọi khi người dùng xác nhận xóa danh mục và tất cả sản phẩm liên quan
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                delete_danhmuc_with_products($id);
            }
            $listdanhmuc = loadall_danhmuc();
            include "categories/list.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "categories/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhật thành công";
            }

            $listdanhmuc = loadall_danhmuc();
            include "categories/list.php";
            break;

            /*controler cho sản phẩm */
        case 'addsp':
            //kiểm tra xem ng dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";   
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "products/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "products/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "products/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $idsp = $sanpham['category_id'];
            $listdanhmuc = loadall_danhmuc();
            include "products/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $hinh, $mota);
                $thongbao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();

            include "products/list.php";
            break;

        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
