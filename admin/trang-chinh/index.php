<?php

require "../../global.php";
require "../../model/loai.php";
require "../../model/product.php";
require "../../model/user.php";
require "../../model/comment.php";


check_login();
$loai = count(loai_select_all());
$hang_hoa = count(product_select_all());
$khach_hang = count(User_select_all());
$binh_luan = count(comment_select_all());

$VIEW_NAME = "trang-chinh/home.php";

require "../layout.php";