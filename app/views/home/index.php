<?php
if (!empty($_SESSION['role'])) {
    $role = $_SESSION['role'];
} else {
    $role = $_SESSION['role'] = 0;
}


?>
<section>
    <div class="container">
        <div class="row">

            <div class="category-tab">
                <!--category-tab-->
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#kaos" data-toggle="tab">Kaos</a></li>
                        <li><a href="#baju" data-toggle="tab">Baju</a></li>
                        <li><a href="#celana" data-toggle="tab">Celana</a></li>

                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="kaos">
                        <?php foreach ($data['kaos'] as $kaos) :  ?>
                            <form action="<?= base_url; ?>/cart/tambahkeranjang" method="POST">
                                <input type="hidden" name="nama_barang" value="<?= $kaos['nama_barang']; ?>">
                                <?php if ($role != '0') {                                        ?>
                                    <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                                <?php } ?>
                                <input type="hidden" name="harga_barang" value="<?= $kaos['harga_barang'] ?>">
                                <input type="hidden" name="jumlah_barang" value="<?= 1 ?>">
                                <input type="hidden" name="foto_barang" value="<?= $kaos['foto_barang'] ?>">
                                <input type="hidden" name="slug_barang" value="<?= $kaos['slug_barang'] ?>">

                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?= base_url; ?>/assets/images/<?= $kaos['foto_barang']; ?>" alt="" />
                                                <h2>Rp. <?= number_format($kaos['harga_barang'], 0, ".", "."); ?></h2>
                                                <p><?= $kaos['nama_barang']; ?></p>
                                                <button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</button>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </form>

                        <?php endforeach; ?>
                    </div>

                    <div class="tab-pane fade" id="baju">
                        <?php foreach ($data['baju'] as $baju) :  ?>
                            <form action="<?= base_url; ?>/cart/tambahkeranjang" method="POST">
                                <input type="hidden" name="nama_barang" value="<?= $baju['nama_barang']; ?>">
                                <?php if ($role != '0') {                                        ?>
                                    <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                                <?php } ?>
                                <input type="hidden" name="harga_barang" value="<?= $baju['harga_barang'] ?>">
                                <input type="hidden" name="jumlah_barang" value="<?= 1 ?>">
                                <input type="hidden" name="foto_barang" value="<?= $baju['foto_barang'] ?>">
                                <input type="hidden" name="slug_barang" value="<?= $baju['slug_barang'] ?>">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?= base_url; ?>/assets/images/<?= $baju['foto_barang']; ?>" alt="" />
                                                <h2>Rp. <?= number_format($baju['harga_barang'], 0, ".", "."); ?></h2>
                                                <p><?= $baju['nama_barang']; ?></p>
                                                <button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </form>

                        <?php endforeach; ?>

                    </div>

                    <div class="tab-pane fade" id="celana">
                        <?php foreach ($data['celana'] as $celana) :  ?>
                            <form action="<?= base_url; ?>/cart/tambahkeranjang" method="POST">
                                <input type="hidden" name="nama_barang" value="<?= $celana['nama_barang']; ?>">
                                <?php if ($role != '0') {                                        ?>
                                    <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                                <?php } ?>
                                <input type="hidden" name="harga_barang" value="<?= $celana['harga_barang'] ?>">
                                <input type="hidden" name="jumlah_barang" value="<?= 1 ?>">
                                <input type="hidden" name="foto_barang" value="<?= $celana['foto_barang'] ?>">
                                <input type="hidden" name="slug_barang" value="<?= $celana['slug_barang'] ?>">
                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="<?= base_url; ?>/assets/images/<?= $celana['foto_barang']; ?>" alt="" />
                                                <h2>Rp. <?= number_format($celana['harga_barang'], 0, ".", "."); ?></h2>
                                                <p><?= $celana['nama_barang']; ?></p>
                                                <button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </form>

                        <?php endforeach; ?>

                    </div>

                </div>
            </div>

            <div class="col-sm-12 padding-right">
                <div class="features_items">
                    <!--features_items-->
                    <h2 class="title text-center">Best Seller</h2>
                    <?php foreach ($data['bestseller'] as $seler) : ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <form action="<?= base_url; ?>/cart/tambahkeranjang" method="POST">
                                        <input type="hidden" name="nama_barang" value="<?= $seler['nama_barang']; ?>">
                                        <?php if ($role != '0') {                                        ?>
                                            <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                                        <?php } ?>
                                        <input type="hidden" name="harga_barang" value="<?= $seler['harga_barang'] ?>">
                                        <input type="hidden" name="jumlah_barang" value="<?= 1 ?>">
                                        <input type="hidden" name="foto_barang" value="<?= $seler['foto_barang'] ?>">
                                        <input type="hidden" name="slug_barang" value="<?= $seler['slug_barang'] ?>">
                                        <div class="productinfo text-center">
                                            <img src="<?= base_url; ?>/assets/images/<?= $seler['foto_barang']; ?>" alt="" />
                                            <h2>Rp. <?= number_format($seler['harga_barang'], 0, ".", "."); ?></h2>
                                            <p><?= $seler['nama_barang']; ?></p>
                                            <button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</button>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2>Rp. <?= number_format($seler['harga_barang'], 0, ".", "."); ?></h2>
                                                <p><?= $seler['nama_barang']; ?></p>
                                                <button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</button>
                                            </div>
                                        </div>
                                        <img alt="" />

                                        <img src="<?= base_url; ?>/assets/images/home/sale.png" class="new" alt="" />

                                    </form>
                                </div>
                                <div class="choose">
                                    <ul class="nav nav-pills nav-justified">
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                        <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>
                <!--features_items-->

                <!--/category-tab-->

                <div class="recommended_items">
                    <!--recommended_items-->
                    <h2 class="title text-center">Produk Terbaru</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <?php foreach ($data['terbaru'] as $terbaru) : ?>
                                    <form action="<?= base_url; ?>/cart/tambahkeranjang" method="POST">
                                        <input type="hidden" name="nama_barang" value="<?= $terbaru['nama_barang']; ?>">
                                        <?php if ($role != '0') {                                        ?>
                                            <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                                        <?php } ?>
                                        <input type="hidden" name="harga_barang" value="<?= $terbaru['harga_barang'] ?>">
                                        <input type="hidden" name="jumlah_barang" value="<?= 1 ?>">
                                        <input type="hidden" name="foto_barang" value="<?= $terbaru['foto_barang'] ?>">
                                        <input type="hidden" name="slug_barang" value="<?= $terbaru['slug_barang'] ?>">
                                        <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                <div class="single-products">
                                                    <div class="productinfo text-center">
                                                        <img src="<?= base_url; ?>/assets/images/<?= $terbaru['foto_barang']; ?>" alt="" />
                                                        <h2>Rp. <?= number_format($terbaru['harga_barang'], 0, ".", "."); ?></h2>
                                                        <p><?= $terbaru['nama_barang']; ?></p>

                                                        <button class="btn btn-default add-to-cart" type="submit"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </form>

                                <?php endforeach; ?>


                            </div>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div>
                <!--/recommended_items-->

            </div>
        </div>
    </div>
</section>