<?php
$tnb = TinNoiBat();
?>

<section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">
                <?php 
                    $i = $tnb->fetch();
                ?>
                <div class="first-slot">
                    <div class="masonry-box post-media">
                        <img id="img-1" src="<?= $i['urlHinh']; ?>" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="theloai.php" title="">Technology</a></span>
                                    <h4><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?php echo $i['TieuDe']; ?></a></h4>
                                    <small><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?= $i['Ngay']; ?></a></small>
                                    <small><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?= $i['TomTat']; ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end first-side -->
                <?php 
                    $i = $tnb->fetch();
                ?>
                <div class="second-slot">
                    <div class="masonry-box post-media">
                        <img id="img-2" src="<?= $i['urlHinh']; ?>" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="theloai.php" title="">Gadgets</a></span>
                                    <h4><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?php echo $i['TieuDe']; ?></a></h4>
                                    <small><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?= $i['Ngay']; ?></a></small>
                                    <small><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?= $i['TomTat']; ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->
                <?php 
                    $i = $tnb->fetch();
                ?>
                <div class="last-slot">
                    <div class="masonry-box post-media">
                        <img id="img-2" src="https://dulichviet.com.vn/images/bandidau/du-lich-phap.jpg" alt="" class="img-fluid">
                        <div class="shadoweffect">
                            <div class="shadow-desc">
                                <div class="blog-meta">
                                    <span class="bg-orange"><a href="theloai.php" title="">Gadgets</a></span>
                                    <h4><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?php echo $i['TieuDe']; ?></a></h4>
                                    <small><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?= $i['Ngay']; ?></a></small>
                                    <small><a href="index.php?page=chitiet&idTin=<?= $i['idTin']; ?>" title=""><?= $i['TomTat']; ?></a></small>
                                </div><!-- end meta -->
                            </div><!-- end shadow-desc -->
                        </div><!-- end shadow -->
                    </div><!-- end post-media -->
                </div><!-- end second-side -->
            </div><!-- end masonry -->
        </div>
    </section>
