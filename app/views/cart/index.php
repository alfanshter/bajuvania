<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="<?= base_url; ?>/home">Home</a></li>
                <li class="active">Shopping Cart</li>
            </ol>
        </div>
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($data['keranjang'] as $keranjang) : ?>

                        <tr>
                            <td class="cart_product">
                                <a href=""><img style="width: 50%;" src="<?= base_url; ?>/assets/images/<?= $keranjang['foto_barang']; ?>" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?= $keranjang['nama_barang']; ?></a></h4>
                            </td>
                            <td class="cart_price">
                                <p>Rp. <?= number_format($keranjang['harga_barang'], 0, ".", "."); ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href="<?= base_url; ?>/cart/pluscart/<?= $keranjang['slug_barang']; ?>"> + </a>
                                    <input class="cart_quantity_input" type="text" name="quantity" value="<?= $keranjang['jumlah_barang']; ?>" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href="<?= base_url; ?>/cart/minuscart/<?= $keranjang['slug_barang']; ?>"> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php
                                                            $jumlah = $keranjang['jumlah_barang'] * $keranjang['harga_barang'];

                                                            ?>
                                    Rp. <?= number_format($jumlah, 0, ".", "."); ?>
                                </p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="<?= base_url; ?>/cart/hapusbarang/<?= $keranjang['slug_barang']; ?>"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>Data Pengiriman</h3>
        </div>

        <div class="row">

            <form action="<?= base_url; ?>/cart/checkout" method="POST">
                <?php
                $ppn = $data['total_keranjang']['hargatotal'] * 5 / 100;

                $totalkeranjang = $data['total_keranjang']['hargatotal'];
                $totalbelanja = $totalkeranjang + $ppn;


                ?>
                <input type="hidden" name="total_keranjang" value="<?= $totalkeranjang ?>">
                <input type="hidden" name="total_belanja" value="<?= $totalbelanja ?>">
                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <li>Total Keranjang <span>Rp. <?= number_format($data['total_keranjang']['hargatotal'], 0, ".", "."); ?></span></li>
                            <li>PPN 5% <span>Rp. <?php echo number_format($ppn, 0, ".", "."); ?> </span></li>
                            <li>Ongkos Kirim <span>Free</span></li>
                            <li>Total <span>Rp. <?php echo number_format($totalbelanja, 0, ".", "."); ?></span></li>
                        </ul>
                    </div>
                </div>



                <div class="col-sm-6">
                    <div class="total_area">
                        <ul>
                            <input required type="email" name="email" placeholder="Email*">
                            <input required type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                            <input required type="number" name="nomor_telepon" placeholder="Nomor Telepon">
                            <input required type="number" name="kode_pos" placeholder="Kode Pos">
                            <input required type="text" name="provinsi" placeholder="Provinsi">
                            <input required type="text" name="kota" placeholder="Kota">
                            <input required type="text" name="kecamatan" placeholder="Kecamatan">
                            <input required type="text" name="alamat_detail" placeholder="Alamat Detail">
                        </ul>
                        <center><button type="submit" class="btn btn-default check_out">Check Out</button>
                        </center>
                    </div>
                </div>

            </form>

        </div>
    </div>
</section>
<!--/#do_action-->