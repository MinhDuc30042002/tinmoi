<?php
$t = tinMoiNhat();
?>
<section class="section">
    <div class="container">
        <div class="row">
            <!-- COT TRAI -->
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">Recent News</h4>
                    </div><!-- end blog-top -->

                    <div class="blog-list clearfix">
                        <?php foreach ($t as $tin) { ?>
                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="index.php?page=chitiet&idTin" title="">
                                            <img src="<?= $tin['urlHinh'];; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="index.php?page=chitiet&idTin=<?= $tin['idTin']; ?>"><?= $tin['TieuDe'] ?></a></h4>
                                    <div class="tomtat"><?= $tin['TomTat']; ?></div>
                                    <small class="firstsmall"><a class="bg-orange" href="theloai.php" title="">Gadgets</a></small>
                                    <em>Ngày đăng: <?= date("d/m/Y", strtotime($tin['Ngay'])); ?></em><br> <small><a href="tacgia.php" title="">by Matilda</a></small>
                                    <small><a href="chitiettin.php" title=""><?= $tin['SoLanXem'] . (' Lượt xem'); ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">
                        <?php } ?>
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-start">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->
            <!-- COT PHAI -->
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="sidebar">
                    <div class="widget">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <form action="index.php">
                                    <h3>Tìm từ khóa</h3>
                                    <hr>
                                    <input type="hidden" name="page" value="search">
                                    <input placeholder="Nhập từ khóa" type="text" name="tukhoa">
                                    <input type="submit">
                                </form>
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end widget -->
                    <?php $views = TinXemNhieu(); ?>
                    <?php foreach ($views as $i) { ?>
                        <div class="widget">
                            <h2 class="widget-title">Hot Views</h2>
                            <div class="trend-videos">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title="">
                                            <img src="<?= $i['urlHinh']; ?>" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span class="videohover"></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?= $i['TieuDe'] . " ( " . " " . $i['SoLanXem'] . " views" . " ) "; ?></a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                            </div><!-- end videos -->
                        </div><!-- end widget -->
                    <?php } ?>

                    <div class="widget">
                        <h2 class="widget-title">Popular Posts</h2>
                        <div class="blog-list-widget">
                            <?php
                            $xem = news();
                            ?>
                            <?php foreach ($xem as $new) { ?>
                                <div class="list-group">
                                    <div class="w-100 justify-content-between">
                                        <img src="<?= $new['urlHinh'] ?>" alt="" class="img-fluid float-left">
                                        <h5><a href="index.php?page=chitiet&idTin=<?= $new['idTin']; ?>"><?= $new['TieuDe'] ?></a></h5>
                                        <small><?= $new['Ngay'] ?></small>
                                    </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Recent Reviews</h2>
                        <div class="blog-list-widget">
                            <?php $hot = tinHot(); ?>
                            <?php 
                                foreach ($hot as $hit) { ?>
                                       <div class="w-100 justify-content-between">
                                           <img src="<?=$hit['urlHinh']?>" alt="" class="img-fluid float-left">
                                           <h6><a href="index.php?page=chitiet&idTin=<?= $hit['idTin']; ?>"><?= $hit['TieuDe'] ?></a></h6>
                                           <span class="rating">
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                               <i class="fa fa-star"></i>
                                           </span>
                                       </div>
                            <?php } ?>
                            <div class="list-group">
                            </div>
                        </div><!-- end blog-list -->
                    </div><!-- end widget -->

                    <div class="widget">
                        <h2 class="widget-title">Follow Us</h2>

                        <div class="row text-center">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button facebook-button">
                                    <i class="fa fa-facebook"></i>
                                    <p>27k</p>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button twitter-button">
                                    <i class="fa fa-twitter"></i>
                                    <p>98k</p>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button google-button">
                                    <i class="fa fa-google-plus"></i>
                                    <p>17k</p>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                <a href="#" class="social-button youtube-button">
                                    <i class="fa fa-youtube"></i>
                                    <p>22k</p>
                                </a>
                            </div>
                        </div>
                    </div><!-- end widget -->
                </div><!-- end sidebar -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>