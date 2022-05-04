<?php 
    require_once('functions.php');
    $idTL = $_GET['idTL'];
    settype($idTL,"int");
    xoaLoaiTin($idTL);
    // chuyen den trang danh sach record
    header("location: index.php?page=loaitin_ds");
?>
