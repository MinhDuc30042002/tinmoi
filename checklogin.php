
    <?php require_once('nav.php'); ?>
    <?php 
        $user = $_POST['user'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $sdt = $_POST['sdt'];
        $message = $_POST['message'];
    ?>
    <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-gears bg-orange"></i> Thành Công <small class="hidden-xs-down hidden-sm-down">Bạn đã đăng ký thành công tài khoản </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">Gadgets</li>
                        </ol>
                    </div><!-- end col --> 
                    <div class="login">
					<h1>Tài Khoản</h1>
					<!-- php xử lý form -->
					<?php
						$user = $_POST['user'];
						$password = base64_encode($_POST['password']);
						$email = $_POST['email'];
						$sdt = $_POST['sdt'];
						$message = $_POST['message'];
					?>
					<div class="group">
						<label>User: <b><?php echo $user;?></b></label>
					</div>
					<div class="group">
						<label>Password: <b><?php echo $password;?></b></label>
					</div>
					<div class="group">
						<label>Email: <b><?php echo $email;?></b></label>
					</div>
					<div class="group">
						<label>Số Điện Thoại: <b><?php echo $sdt;?></b></label>
					</div>
					<div class="group">
						<label>Mô tả: <b><?php echo $message;?></b></label>
					</div>
					
				</div>                  
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

    <?php require_once('footer.php'); ?>