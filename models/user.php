<?php
include_once 'pdo.php';
function create_user($name, $email, $password)
{
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name, email, role_id, password) VALUES (:name, :email, :role_id, :password)";
    pdo_execute($sql, $name, $email, 2, $hashed_password);
}

function load_user_by_email($email)
{
    $sql = "SELECT * FROM users WHERE email = ?";
    return pdo_query_one($sql, $email);
}

?>