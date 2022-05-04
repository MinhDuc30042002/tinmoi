<header class="tech-header header">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="images/version/tech-logo.png" alt=""></a>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Trang Chủ</a>
                    </li>
                    <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tin Tức</a>
                        <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <li>
                                <div class="container">
                                    <div class="mega-menu-content clearfix">
                                        <div class="tab">
                                            <?php $cat = theLoai() ?>

                                            <?php foreach ($cat as $value) { ?>
                                                <button class="tablinks">
                                                    <a href="index.php?page=loai&idLT=<?=$value['idTL']?>"><?= $value['TenTL'] ?></a>
                                                </button>
                                            <?php } ?>
                                        </div>
                                    </div><!-- end mega-menu-content -->
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=gioithieu">Giới Thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=login">Đăng Nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?page=lienhe">Liên Hệ</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div><!-- end container-fluid -->
</header><!-- end market-header -->