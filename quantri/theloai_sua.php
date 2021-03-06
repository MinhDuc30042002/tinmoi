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
        margin-top: 120px;
        max-width: 600px;
        height: 390px;
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
</style>
<!-- code luu database -->
<?php 
    $idTL = $_GET['idTL'];
    settype($idTL,"int");
    $theloai = layChiTietTheLoai($idTL);
?>
<?php 
    if(isset($_POST['btn'])){
        $tenTL = $_POST['tenTL'];
        $thuTu = $_POST['thuTu'];
        $anHien = $_POST['anHien'];
        $lang = $_POST['lang'];

        $tenTL = trim(strip_tags($tenTL));
        settype($thuTu,"int");
        settype($anHien,"int");
        $lang = trim(strip_tags($lang));

        $kq = capnhatTheLoai($idTL, $tenTL, $thuTu, $anHien, $lang);
        if ($kq) {
            # code...
            header("location: index.php?page=theloai_ds");
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
                            <h3 class="text-center text-info">Ch???nh S???a Th??? Lo???i</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">T??n Th??? Lo???i:</label><br>
                                <input type="text" value="<?=$theloai['TenTL'];?>" name="tenTL" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Th??? T???:</label><br>
                                <input type="text" value="<?=$theloai['ThuTu'];?>" name="thuTu" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">???n Hi???n:</label>
                                <input name="anHien" value="0" <?php if($theloai['AnHien']==0) echo 'checked';?> type="radio"> ???n
                                <input name="anHien" value="1" <?php if($theloai['AnHien']==1) echo 'checked';?> type="radio"> Hi???n
                            </div>
                            <div class="form-group">
                                <label for="">Ng??n Ng???:</label>
                                <input name="lang" value="vi" <?php if($theloai['lang']=='vi') echo 'checked';?> type="radio"> Ti???ng Vi???t
                                <input name="lang" value="en" <?php if($theloai['lang']=='en') echo 'checked';?> type="radio"> Ti???ng Anh
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