<?php
// sanpham.php
// Import file pdo.php để sử dụng các hàm pdo_execute, pdo_query, pdo_query_one và pdo_query_value
include_once 'pdo.php';

function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm){
    $sql = "INSERT INTO products (name, price, img, description, category_id) 
            VALUES (?, ?, ?, ?, ?)";
    pdo_execute($sql, $tensp, $giasp, $hinh, $mota, $iddm);
}

function delete_sanpham($id){
    $sql = "DELETE FROM products WHERE product_id = ?";
    pdo_execute($sql, $id);
}

function loadall_sanpham_home(){
    $sql = "SELECT * FROM products WHERE 1 order by product_id desc limit 0,9"; 
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham($kyw = "", $iddm = 0){
    $sql = "SELECT * FROM products WHERE 1"; 
    $sql_args = array();
    if($kyw != ""){
        $sql .= " AND name LIKE ?";
        $sql_args[] = "%".$kyw."%";
    } 
    if($iddm > 0){
        $sql .= " AND category_id = ?";
        $sql_args[] = $iddm;
    }
   
    $sql .= " ORDER BY product_id DESC";
    $listsanpham = pdo_query($sql, ...$sql_args);
    return $listsanpham;
}

function loadone_sanpham($id){
    $sql = "SELECT * FROM products WHERE product_id = ?";
    $sp = pdo_query_one($sql, $id);
    return $sp;
}

function update_sanpham($id, $iddm, $tensp, $giasp ,$hinh, $mota){
    $sql = "UPDATE products 
            SET category_id = ?, name = ?, price = ?, description = ?";
    $sql_args = array($iddm, $tensp, $giasp, $mota);
    if($hinh != ""){
        $sql .= ", img = ?";
        $sql_args[] = $hinh;
    }
    $sql .= " WHERE product_id = ?";
    $sql_args[] = $id;
    pdo_execute($sql, ...$sql_args);
}
