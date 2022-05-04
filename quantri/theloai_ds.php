<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h4{
        text-align: center;
        text-transform: uppercase;
        font-size: 36px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        font-family: arial;
        font-size: 20px;
    }

    th,
    td {
        padding: 15px;
        text-align: left;
    }
    a{
        text-decoration: none;
        color: red;
    }
</style>

<body>
    <h4>
        danh sách thể loại
    </h4>
    <table style="width: 80%; margin:auto;">
        <?php $listTheLoai = layDanhSachTheLoai(); ?>
        <tr>
            <th>Thể Loại</th>
            <th>Thứ Tự</th>
            <th>Ẩn Hiện</th>
            <th>Ngôn Ngữ</th>
            <th>Thuc Hien</th>
        </tr>
        <?php foreach ($listTheLoai as $row) { ?>
            <tr>
                <td><?= $row['TenTL']; ?></td>
                <td><?= $row['ThuTu']; ?></td>
                <td><?= ($row['AnHien'])?"Đang Hiện":"Đang Ẩn"; ?></td>
                <td><?= ($row['lang'])?"Tiếng Việt":"Tiếng Anh"; ?></td>
                <td>
                    <a href="index.php?page=theloai_sua&idTL=<?=$row['idTL']?>">Sửa</a>
                    <a href="theloai_xoa.php?idTL=<?=$row['idTL']?>" onclick="return confirm('Chắc không ???')" >Xóa</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>