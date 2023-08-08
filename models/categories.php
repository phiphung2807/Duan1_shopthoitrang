<?php
function insert_danhmuc($tenloai)
{
    $sql = "INSERT INTO categories (name) VALUES ('$tenloai')";
    pdo_execute($sql);
}

function delete_danhmuc($id)
{
    $sql = "DELETE FROM categories WHERE category_id = " . $id;
    pdo_execute($sql);
}

function loadall_danhmuc()
{
    $sql = "SELECT * FROM categories ORDER BY category_id DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}

function loadone_danhmuc($id)
{
    $sql = "SELECT * FROM categories WHERE 	category_id = " . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id, $tenloai)
{
    $sql = "UPDATE categories SET name = ('$tenloai') WHERE 	category_id = " . $id;
    pdo_execute($sql);
}

function delete_danhmuc_with_products($id) {
    // Xóa các sản phẩm liên quan đến danh mục
    $sql_delete_products = "DELETE FROM products WHERE category_id = ?";
    pdo_execute($sql_delete_products, $id);

    // Xóa danh mục
    $sql_delete_category = "DELETE FROM categories WHERE category_id = ?";
    pdo_execute($sql_delete_category, $id);
}

function has_products_in_danhmuc($id) {
    $sql = "SELECT COUNT(*) FROM products WHERE category_id = ?";
    $count = pdo_query_value($sql, $id);
    return $count > 0;
}