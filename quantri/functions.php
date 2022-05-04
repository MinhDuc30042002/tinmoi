<?php
#connection database and try catch
try {
    $host = "localhost";
    $dbname = "php1_news";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error " . $e->getMessage());
}
?>
<!-- xem danh sach record -->
<?php
function layDanhSachTheLoai()
{
    $sql = "SELECT idTL, TenTL, ThuTu, AnHien, lang FROM theloai ORDER BY ThuTu";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
?>
<?php
function layTenTheLoai($idTL = 0)
{
    global $conn;
    $sql = "SELECT TenTL FROM theloai WHERE idTL=$idTL";
    $kq = $conn->query($sql);
    if ($kq == null) return "Khong co";
    $row = $kq->fetch();
    return $row['TenTL'];
}
?>
<!-- them the loai -->
<?php
function layDanhSanhLoaiTin()
{
    $sql = "SELECT idLT, Ten, ThuTu, AnHien, lang,idTL FROM loaitin ORDER BY ThuTu";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}
?>
<!-- them loai tin -->
<?php
function themLoaiTin($ten,$thuTu,$anHien,$lang,$idTL)
{
    $sql = "INSERT INTO loaitin (ten, thuTu, anHien, lang, idTL)
                VALUES ('{$ten}','{$thuTu}','{$anHien}','{$lang}',$idTL)";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq==1;
}

?>
<?php
function themTheLoai($tenTL, $thuTu, $anHien, $lang)
{
    $sql = "INSERT INTO theloai (tenTL ,thuTu ,anHien ,lang)
                VALUES ('{$tenTL}','{$thuTu}','{$anHien}','{$lang}')
        ";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}
?>
<!-- tao ham xoa -->
<?php
function xoaTheLoai($idTL)
{
    $sql = "DELETE FROM theloai WHERE idTL= $idTL";
    global $conn;
    $kq = $conn->exec($sql);
}
?>
<!-- xoa loai tin -->
<?php
function xoaLoaiTin($idTL)
{
    $sql = "DELETE FROM loaitin WHERE idTL= $idTL";
    global $conn;
    $kq = $conn->exec($sql);
}
?>
<?php
function layChiTietTheLoai($idTL)
{
    $sql = "SELECT idTL, TenTL, ThuTu, AnHien, lang, HienMenu FROM theloai WHERE idTL = $idTL";
    global $conn;
    $kq = $conn->query($sql);
    if ($kq == null) return false;
    else return $kq->fetch();
}
?>
<?php
function capnhatTheLoai($idTL, $tenTL, $thuTu, $anHien, $lang)
{
    $sql = "UPDATE theloai SET tenTL ='{$tenTL}', thuTu=$thuTu , anHien=$anHien,lang = '$lang' WHERE idTL = $idTL";
    global $conn;
    $kq = $conn->exec($sql);
    return $kq == 1;
}
?>
<!-- lay chi tiet thong tin -->
<?php 
    function layChiTietLoaiTin($idLT)
    {
        $sql = "SELECT idLT, Ten, ThuTu, AnHien, lang,idTL FROM loaitin WHERE idLT = $idLT";
        global $conn;
        $kq = $conn->query($sql);
        if($kq == null) return false;
        else return $kq->fetch();
    }
?>
<!-- cap nhat loai tin -->
<?php 
    function capNhatLoaiTin($idLT, $ten, $thuTu, $anHien, $lang,$idTL){
        $sql = "UPDATE loatin SET ten='$ten',thuTu = $thuTu, anHien=$anHien,lang='{$lang}',idTL=$idTL WHERE idLT=$idLT";
        global $conn;
        $kq = $conn->exec($sql);
        return $kq ==1;
    }   

?>