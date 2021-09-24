<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Check out</li>
            </ol>
        </div>

        <div class="review-payment">
            <h2>Daftar Belanja</h2>
            <?php
            if ($data['keranjang'][0]['nomor_resi'] == null) {

            ?>
                <h3>Silahkan lakukan pembayaran pada nomor DANA 082xxxxxxx</h3>
                <h3>upload bukti pembayaran dan kirim ke nomor wa 08xxxxx</h3>

            <?php } ?>
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
                                <a href=""><img style="width: 30%; " src="<?= base_url; ?>/assets/images/<?= $keranjang['foto_barang']; ?>" alt=""></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?= $keranjang['nama_barang']; ?></a></h4>
                            </td>
                            <td class="cart_price">
                                <p>Rp. <?= number_format($keranjang['harga_barang'], 0, ".", "."); ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <input disabled class="cart_quantity_input" type="text" name="quantity" value="<?= $keranjang['jumlah_barang']; ?>" autocomplete="off" size="2">
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price"><?php
                                                            $jumlah = $keranjang['jumlah_barang'] * $keranjang['harga_barang'];

                                                            ?>
                                    Rp. <?= number_format($jumlah, 0, ".", "."); ?></p>
                            </td>
                        </tr>

                    <?php endforeach; ?>


                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Total Keranjang</td>
                                    <td>Rp. <?= number_format($data['keranjang'][0]['total_keranjang'], 0, ".", "."); ?></td>
                                </tr>
                                <tr>
                                    <td>PPN 5%</td>
                                    <td>Rp. <?php
                                            $ppn = $data['keranjang'][0]['total_keranjang'] * 5 / 100;
                                            echo number_format($ppn, 0, ".", ".");
                                            ?></td>
                                </tr>
                                <tr class="shipping-cost">
                                    <td>Ongkos Kirim</td>
                                    <td>Gratis</td>
                                </tr>
                                <tr>
                                    <td>Total Belanja</td>
                                    <td><span>Rp. <?php
                                                    echo number_format($data['keranjang'][0]['total_belanja'], 0, ".", ".");

                                                    ?></span></td>
                                </tr>
                                <?php if ($data['keranjang'][0]['nomor_resi'] != null) {

                                ?>
                                    <tr>
                                        <td>Nomor Resi</td>
                                        <td><span><?= $data['keranjang'][0]['nomor_resi']; ?></span></td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pengirim</td>
                                        <td><span><?= $data['keranjang'][0]['nama_pengirim']; ?></span></td>
                                    </tr>


                                <?php } ?>

                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>
<!--/#cart_items-->