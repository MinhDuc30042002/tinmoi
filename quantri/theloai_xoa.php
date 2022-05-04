<?php 
    require_once('functions.php');
    $idTL = $_GET['idTL'];
    settype($idTL,"int");
    xoaTheLoai($idTL);
    // chuyen den trang danh sach record
    header("location: index.php?page=theloai_ds");
?>
