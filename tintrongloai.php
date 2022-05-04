<div id="wrapper">
    <?php include('nav.php'); ?>
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-10 col-sm-10 col-xs-10">
                    <?php
                    $idLT = $_GET['idLT'];
                    settype($idLT, "int");
                    if (isset($_GET['idLT']) == "") $idLT = 1;

                    ?>
                    <?php $total_rows = demTinTrongLoai($idLT); ?>

                    <?php
                    if (isset($_GET['current_page'])) {
                        $current_page = $_GET['current_page'];
                    } else {
                        $current_page = 1;
                    }
                    $getTinTrongLoai = layTinTrongLoai($idLT, $current_page)
                    ?>
                    <div class="dstin">
                        <?php foreach ($getTinTrongLoai as $tin) { ?>
                            <h4><a href="index.php?page=chitiet&idTin=<?= $tin['idTin']; ?>"><?= $tin['TieuDe'] ?></a></h4>
                            <img src="<?= $tin['urlHinh']; ?>" alt="img" width="200px" ; height="100px" ;>
                            <div class="info">
                                <span class="ngay"><?= $tin['Ngay']; ?></span>
                                <span class="binhluan"> | Lượt xem: <?= $tin['SoLanXem'] ?></span>
                            </div>
                            <div class="tomtat"><?= $tin['TomTat']; ?></div>
                            <div class="chitiet"><a href="index.php?page=chitiet&idTin=<?= $tin['idTin']; ?>">Xem thêm</a></div>
                            <hr>
                        <?php } ?>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item d-flex">
                                <?php echo paginationScript($idLT) ?>
                            </li>
                        </ul>
                    </nav>

                </div><!-- end col -->

                <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
                    <h2>Các thể loại khác</h2>
                    <?php
                    $dsTheLoai = getAllTheLoai();
                    ?>
                    <?php foreach ($dsTheLoai as $value) { ?>
                        <ul class="list-group">
                            <li class="list-group-item mb-2">
                                <a href="index.php?page=loai&idLT=<?= $value['idTL'] ?>"><?= $value['TenTL'] ?></a>
                            </li>
                        </ul>
                    <?php } ?>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <?php include('footer.php') ?>
    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->