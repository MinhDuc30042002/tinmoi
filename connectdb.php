<!-- connection database -->
<?php
try {
    $host = "localhost";
    $dbname = "php1_news";
    $username = "root";
    $password = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error " . $e->getMessage());
}
?>
<!-- the loai -->
<?php
$sql = "SELECT idTL, TenTL FROM theloai WHERE AnHien=1 AND lang='vi' ORDER BY ThuTu DESC";

$theloai = $conn->query($sql);
?>
<!--  -->
<!-- tin moi nhat -->
<?php
function tinMoiNhat()
{
    try {
        //code...
        $sql = "SELECT idTin,TieuDe,TomTat,Ngay,urlHinh,SoLanXem FROM tin WHERE lang='vi' ORDER BY Ngay DESC LIMIT 0,12";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $th) {
        //throw $th;
        die("Error" . $th->getMessage());
    }
}

function layChiTietTin($id = 0)
{
    try {
        $sql = "SELECT TieuDe,TomTat,Ngay,SoLanXem,Content FROM tin WHERE idTin = $id AND AnHien = 1";
        global $conn;
        $kq = $conn->query($sql);
        return $kq->fetch();
    } catch (Exception $th) {
        //throw $th;
        die("Error" . __FUNCTION__ . ":" . $th->getMessage());
    }
}

function tangSoLanXem($id = 0)
{
    try {
        $sql = "UPDATE tin SET SoLanXem = SoLanXem + 1 WHERE idTin = $id";
        global $conn;
        $kq = $conn->exec($sql);
    } catch (Exception $th) {
        //throw $th;
        die("Excution Error" . __FUNCTION__ . ":" . $th->getMessage());
    }
}

# tin noi bat
function TinNoiBat()
{
    try {
        $sql = "SELECT idTin,TieuDe,TomTat,Ngay, urlHinh FROM tin WHERE lang='vi' ORDER BY Ngay DESC LIMIT 0,3";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (PDOException $th) {
        die("Error Excution" . $th->getMessage());
    }
}
function TinXemNhieu()
{
    try {
        $sql = "SELECT idTin,TieuDe,TomTat,Ngay, urlHinh,SoLanXem FROM tin WHERE lang='vi' ORDER BY Ngay DESC LIMIT 3,3";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (PDOException $th) {
        die("Error Excution" . $th->getMessage());
    }
}

function layKetQuaTim($tukhoa = "abc", $page_num = 1, $page_size = 5)
{
    try {
        $sql = "SELECT idTin,TieuDe,TomTat,Ngay,urlHinh FROM tin WHERE AnHien = 1 AND (TieuDe like '%$tukhoa%' OR TomTat LIKE '%$tukhoa%') ";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $th) {
        //throw $th;
        die("Error Excution" . __FUNCTION__ . ":" . $th->getMessage());
    }
}

function demTinTimKiem($tukhoa = "abc")
{
    $sql = "SELECT count(*) FROM tin WHERE AnHien = 1 AND (TieuDe like '%$tukhoa%' OR TomTat LIKE '%$tukhoa%') ";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row[0];
}

function layTinTrongLoai($id = 0, $page_num = 1, $page_size = 5)
{
    try {
        $startRow = ($page_num - 1) * $page_size;
        $sql = "SELECT idTin,TieuDe,TomTat,Ngay,urlHinh, SoLanXem FROM tin WHERE idLT = $id AND AnHien = 1 LIMIT $startRow, $page_size";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (Exception $th) {
        die("Error Excution" . __FUNCTION__ . ":" . $th->getMessage());
    }
}
function paginationScript($id)
{
    $per_page = 5;
    $total_pages = ceil(demTinTrongLoai($id) / $per_page);
    /**
     * Get current page and set default
     */

    if (isset($_GET['current_page'])) {
        # code...
        $current_page = $_GET['current_page'];
    } else {
        $current_page = 1;
    }

    if ($current_page > $total_pages) {
        $current_page = $total_pages;
    }

    if ($current_page < 1) {
        $current_page = 1;
    }

    for ($current_page = 1; $current_page <= $per_page; $current_page++) {
        echo '<a class="page-link m-2" href="index.php?page=loai&idLT=' . $id . '&current_page=' . $current_page . '">' . $current_page . '</a>';
    }


    // return layTinTrongLoai($id, $current_page, $per_page);
}


function demTinTrongLoai($id = 0)
{
    $sql = "SELECT count(*) FROM tin WHERE idLT = $id AND AnHien = 1";
    global $conn;
    $kq = $conn->query($sql);
    $row = $kq->fetch();
    return $row[0];
}

function theLoai()
{
    $sql = "SELECT idTL, TenTL FROM theloai WHERE AnHien=1 AND lang='vi' LIMIT 0,6";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function getAllTheLoai()
{
    $sql = "SELECT idTL, TenTL FROM theloai WHERE AnHien=1 AND lang='vi'";
    global $conn;
    $kq = $conn->query($sql);
    return $kq;
}

function tinHot()
{
    try {
        $sql = "SELECT idTin,TieuDe, urlHinh,Ngay FROM tin WHERE lang='vi' ORDER BY Ngay DESC LIMIT 31,3";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (PDOException $th) {
        die("Error Excution" . $th->getMessage());
    }
}

function news()
{
    try {
        $sql = "SELECT idTin,TieuDe, urlHinh,Ngay FROM tin WHERE lang='vi' ORDER BY Ngay DESC LIMIT 14,3";
        global $conn;
        $kq = $conn->query($sql);
        return $kq;
    } catch (PDOException $th) {
        die("Error Excution" . $th->getMessage());
    }
}
?>