<?php
require_once "../../model/pdo.php";
require_once "../../model/user.php";
require "../../global.php";
// check_login();

extract($_REQUEST);
$items = user_select_page('ma_kh',10);
$VIEW_NAME = "list.php";

 
// $VIEW_NAME = "user/list.php";
require "../layout.php";