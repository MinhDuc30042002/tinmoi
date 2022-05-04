<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
    header{
        height: 90px;
    }

    div.noidung>aside,
    div.noidung>main {
        min-height: 600px;
    }
    .list-group{
        margin-top: 10px;
    }
    h3{
        text-align: center;
        padding-top: 10px;
    }
</style>

<body>
    <?php
    session_start();
    $page = "";
    $page = trim(strip_tags($_GET['page']));
    require_once('functions.php');
    ?>
    <div class="container-fluid">
        <div class="row noidung">
            <aside class="col-3 bg-dark text-white mt-3">
                <ul class="list-group mx-n3">
                    <li class="list-group-item"><a href="index.php?page=theloai_them">Thêm Thể Loại</a></li>
                    <li class="list-group-item"><a href="index.php?page=theloai_ds">Danh Sách Thể Loại</a></li>
                    <li class="list-group-item"><a href="index.php?page=loaitin_ds">Danh Sách Loại Tin</a></li>
                    <li class="list-group-item"><a href="index.php?page=loaitin_them">Thêm Loại Tin</a></li>
                    <li class="list-group-item"><a href="../index.php">Trang Chủ</a></li>
                </ul>
            </aside>
            <main class="col-9 border mt-3">
                <?php
                switch ($page) {
                    case 'theloai_ds':
                        require_once('theloai_ds.php');
                        break;
                    case 'theloai_them':
                        require_once('theloai_them.php');
                        break;
                    case 'theloai_sua':
                        require_once('theloai_sua.php');
                        break;
                    case 'loaitin_ds':
                        require_once('loaitin_ds.php');
                        break;
                    case 'loaitin_them':
                        require_once('loaitin_them.php');
                        break;
                    case 'loaitin_sua':
                        require_once('loaitin_sua.php');
                        break;
                }
                ?>
            </main>
        </div>
    </div>
</body>
  </body>
</html>