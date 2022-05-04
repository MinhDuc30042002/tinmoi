<div id="wrapper">
    <?php include('nav.php'); ?>
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <h2>TIN CHI TIẾT</h2>
                    <!-- get id tin -->
                    <?php
                    $idTin = $_GET['idTin'];
                    settype($idTin, "int");
                    ?>
                    <?php
                    $tin = layChiTietTin($idTin);
                    tangSoLanXem($idTin);
                    ?>
                    <div class="tinchitiet">
                        <h1 class="tieude">
                            <?php
                            echo $tin['TieuDe'];
                            ?>
                        </h1>
                    </div>
                    <div class="info">
                        <span class="ngay">Ngày Đăng: <?= $tin['Ngay']; ?></span>
                        <span class="xem">Số lượt xem: <?= $tin['SoLanXem']; ?></span>
                    </div>
                    <h2 class="tomtat">
                        <?php
                        echo $tin['TomTat'];
                        ?>
                    </h2>
                    <hr class="gachngang">
                    <div class="noidung">
                        <?php
                        echo $tin['Content'];
                        ?>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <?php include('footer.php') ?>
    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->