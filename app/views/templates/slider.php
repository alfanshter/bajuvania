<section id="slider">
    <!--slider-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>

                        <?php
                        foreach ($data['slider'] as $slider) :
                        ?>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>

                        <?php
                        endforeach;
                        ?>
                    </ol>



                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-sm-6">
                                <h1><span>E</span>-BAJUVANIA</h1>

                                <p>Kumpulan baju murah terkini </p>
                                <button type="button" class="btn btn-default get">Get it now</button>
                            </div>
                            <div class="col-sm-6">
                                <img src="<?= base_url; ?>/assets/images/girl1.jpg" class="girl img-responsive" alt="" />
                                <img src="<?= base_url; ?>/assets/images/pricing.png" class="pricing" alt="" />
                            </div>
                        </div>


                        <?php
                        foreach ($data['slider'] as $slider) :
                        ?>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-BAJUVANIA</h1>
                                    <h2><?= $slider['nama_slider']; ?></h2>
                                    <p><?= $slider['deskripsi_slider']; ?></p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="<?= base_url; ?>/assets/images/<?= $slider['gambar_slider']; ?>" class="girl img-responsive" alt="" />
                                </div>
                            </div>

                        <?php
                        endforeach;
                        ?>



                    </div>

                    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/slider-->