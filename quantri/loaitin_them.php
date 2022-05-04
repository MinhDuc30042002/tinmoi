<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #17a2b8;
        height: 100vh;
    }

    #login .container #login-row #login-column #login-box {
        margin-top: 80px;
        max-width: 600px;
        height: 450px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
        border-radius: 10px;
        box-shadow: 10px 10px 20px black;

    }

    #login .container #login-row #login-column #login-box #login-form {
        padding: 20px;
    }

    #login .container #login-row #login-column #login-box #login-form #register-link {
        margin-top: -85px;
    }
    option{
        outline: none;
    }
</style>
<!-- code luu database -->
<?php
if (isset($_POST['btn'])) {
    $ten = $_POST['ten'];
    $thuTu = $_POST['thuTu'];
    $anHien = $_POST['anHien'];
    $lang = $_POST['lang'];
    $idTL = $_POST['idTL'];


    $ten = trim(strip_tags($ten));
    settype($thuTu, "int");
    settype($anHien, "int");
    settype($idTL, "int");
    $lang = trim(strip_tags($lang));

    $kq = themLoaiTin($ten,$thuTu,$anHien,$lang,$idTL);
    if ($kq) {
        # code...
        header("location: index.php?page=loaitin_ds");
        exit();
    }
}
?>

<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center text-info">Thêm Loại Tin</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Tên Loại Tin:</label><br>
                                <input type="text" name="ten" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Thứ Tự:</label><br>
                                <input type="text" name="thuTu" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Ẩn Hiện:</label>
                                <input name="anHien" value="0" type="radio"> Ẩn
                                <input name="anHien" value="1" type="radio"> Hiện
                            </div>
                            <div class="form-group">
                                <label for="">Ngôn Ngữ:</label>
                                <input name="lang" value="vi" type="radio"> Tiếng Việt
                                <input name="lang" value="en" type="radio"> Tiếng Anh
                            </div>
                            <div class="form-group">
                                <label for="">Thể Loại</label>
                                <?php $listTheLoai = layDanhSachTheLoai();  ?>
                                <select name="idTL" id="idTL">
                                    <option value="0">Chọn thể loại</option>
                                    <?php
                                    foreach ($listTheLoai as $row) { ?>
                                        <option value="<?=$row['idTL']?>"><?=$row['TenTL'];?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="btn" class="btn btn-info btn-md" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>