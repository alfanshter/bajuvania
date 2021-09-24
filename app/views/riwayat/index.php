<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="<?= base_url; ?>/home">Home</a></li>
                <li class="active">riwayat</li>
            </ol>
        </div>

        <div class="review-payment">
            <h2>Daftar riwayat</h2>
        </div>

        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="description">id order</td>
                        <td class="description">total belanja</td>
                        <td class="price">tanggal transaksi</td>
                        <td class="price">status</td>
                        <td class="price">aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['riwayat'] as $riwayat) : ?>
                        <tr>
                            <td class="cart_description">
                                <a href="<?= base_url; ?>/checkout/<?= $riwayat['id_order'] ?>">
                                    <p><?= $riwayat['id_order'] ?></p>
                                </a>
                            </td>
                            <td class="cart_description">
                                <p>Rp. <?= number_format($riwayat['total_belanja'], 0, ".", "."); ?></p>
                            </td>
                            <td class="cart_price">
                                <p><?= $riwayat['tanggal_transaksi']; ?></p>
                            </td>
                            <td class="cart_price">
                                <p><?= $riwayat['status_bayar']; ?></p>
                            </td>
                            <td class="cart_price">
                                <a href="<?= base_url; ?>/checkout/<?= $riwayat['id_order'] ?>">
                                    <button class="btn btn-warning">Lihat</button>
                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>

    </div>
</section>
<!--/#cart_items-->