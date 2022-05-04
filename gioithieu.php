
    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <?php require_once('nav.php'); ?>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->

        <div class="page-title lb single-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-gears bg-orange"></i> Giới thiệu bản thân <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active">Gadgets</li>
                        </ol>
                    </div><!-- end col --> 
                    <div class="infor">
                    <?php 
						$ho = "Nguyễn";
						$ten = "Đức";
						$email = "ducntmps18698@fpt.edu.vn";
						$diachi = "FPT Polytechnic";
						$dienthoai = "0967870406";
					?>
					<img width="200px" height="260px" src="images/minhduc.jpg" alt="ảnh của sinh viên">
					<p>
						Họ và Tên: <?php echo $ho . " " . $ten; ?>
					</p>
					<p>
						Email: <?php echo $email; ?>
					</p>
					<p>
						Địa Chỉ: <?php echo $diachi; ?>
					</p>
					<p>
						Số Điện Thoại: <?php echo $dienthoai; ?>
					</p>
                    </div>                   
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <?php require_once('footer.php'); ?>
        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

