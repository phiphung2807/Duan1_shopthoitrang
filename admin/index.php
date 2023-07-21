<?php
    include "../model/pdo.php";
    include "../model/categories.php";
    include "header.php";
    //controller

    if(isset($_GET['act'])){
        $act=$_GET['act'];
        switch ($act) {
            case 'adddm':
                //kiểm tra xem ng dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);                
                    $thongbao = "Thêm thành công";
                }
                include "categories/add.php";
                break;
            case 'listdm':
                $listdanhmuc=loadall_danhmuc();
                include "categories/list.php";
                break;
            case 'xoadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "categories/list.php";
                break;
            case 'suadm':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $dm=loadone_danhmuc($_GET['id']);
                }
                include "categories/update.php";
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao = "Cập nhật thành công";
                }
                
                $listdanhmuc=loadall_danhmuc();
                include "categories/list.php";
                break;
            /*controler cho sản phẩm */
            
                    
            default:
                include "home.php";
                break;
        }
    }else {
        include "home.php";
    }
