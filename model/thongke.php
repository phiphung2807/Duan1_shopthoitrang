<?php

require_once 'pdo.php';

function thong_ke_comment()
{
    $sql = "SELECT hh.Ma_SP, hh.Ten_SP,"
        . " COUNT(*) so_luong,"
        . " MIN(bl.ngay_bl) cu_nhat,"
        . " MAX(bl.ngay_bl) moi_nhat"
        . " FROM comments bl "
        . " JOIN products hh ON hh.Ma_SP=bl.Ma_SP "
        . " GROUP BY hh.Ma_SP, hh.Ten_SP"
        . " HAVING so_luong > 0";
    return pdo_query($sql);
}