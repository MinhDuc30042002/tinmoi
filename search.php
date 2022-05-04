<div id="wrapper">
    <?php include('nav.php'); ?>
    <section class="section single-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                    <?php
                    $tukhoa = $_GET['tukhoa'];
                    $tukhoa = trim(strip_tags($_GET['tukhoa']));
                    $page_size = 5;
                    $page_num = 1;
                    if ($tukhoa != "") $listTin = layKetQuaTim($tukhoa, $page_num, $page_size);
                    else $listTin = null;

                    $total_row = demTinTimKiem($tukhoa);
                    ?>
                    <div class="dstin">
                        <h1>Từ khóa vừa tìm: <?= $tukhoa ?></h1>
                        <?php foreach ($listTin as $tin) { ?>
                            <h4><a href="index.php?page=tin&idTin=<?= $tin['idTin']; ?>"><?= $tin['TieuDe'] ?></a></h4>
                            <img src="<?= $tin['urlHinh']; ?>" alt="img" width="200px" ; height="100px" ;>
                            <div class="info">
                                <span class="ngay"><?= date('d/m/Y', strtotime($tin['Ngay'])); ?></span>
                                <span class="binhluan">So binh luan: 0</span>
                            </div>
                            <div class="tomtat"><?= $tin['TomTat']; ?></div>
                            <div class="chitiet"><a href="index.php?page=tin&idTin=<?= $tin['idTin']; ?>">Chi Tiet</a></div>
                            <hr>
                        <?php } ?>
                        <?php
                        $base_url = "index.php?page=searcg&tukhoa=$tukhoa";
                        echo taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size);
                        ?>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <?php include('footer.php') ?>
    <div class="dmtop">Scroll to Top</div>

</div><!-- end wrapper -->