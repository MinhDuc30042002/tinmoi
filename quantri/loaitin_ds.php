<style>
    h4 {
        text-align: center;
        text-transform: uppercase;
        font-size: 36px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    table,
    th,
    td {
        width: 80%;
        border: 1px solid black;
        border-collapse: collapse;
        font-family: arial;
        font-size: 20px;
        margin: auto;
    }

    th,
    td {
        width: 30px;
        padding: 8px;
        text-align: left;
    }

    a {
        text-decoration: none;
        color: red;
    }
</style>
<?php
$listLoaiTin = layDanhSanhLoaiTin();
?>

<h4 class="col-10 m-auto p-2 text-center">
    danh sách loại tin
</h4>
<table class="table table-bordered">
    <tr>
        <th>Tên</th>
        <th>Thứ Tự</th>
        <th>Ẩn Hiện</th>
        <th>Ngôn Ngữ</th>
        <th>Trong Thể Loại</th>
        <th>Thực Hiện</th>
    </tr>
    <?php foreach ($listLoaiTin as $row) { ?>
        <tr>
            <td><?= $row['Ten']; ?></td>
            <td><?= $row['ThuTu']; ?></td>
            <td><?= $row['AnHien']; ?></td>
            <td><?= $row['lang'] ? "Tiếng Việt" : "Tiếng Anh"; ?></td>
            <td><?= layTenTheLoai($row['idTL']); ?></td>
            <td>
                <a href="index.php?page=loaitin_sua&idLT=<?= $row['idLT'] ?>">Sửa</a>
                <a href="loaitin_xoa.php?idTL=<?= $row['idLT'] ?>" onclick="return confirm('Xóa Hả ???')">Xóa</a>
            </td>
        </tr>
    <?php } ?>
</table>