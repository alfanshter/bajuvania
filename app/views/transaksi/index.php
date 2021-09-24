<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="<?= base_url; ?>/home">Home</a></li>
                <li class="active">Transaksi</li>
            </ol>
        </div>

        <div class="review-payment">
            <h2>Daftar Transaksi</h2>
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
                    <?php foreach ($data['transaksi'] as $transaksi) : ?>
                        <form action="<?= base_url; ?>/transaksi/transaksiselesai" method="POST">
                            <input type="hidden" name="id_order" value="<?= $transaksi['id_order']; ?>">
                            <input type="hidden" name="username" value="<?= $transaksi['username']; ?>">
                            <tr>
                                <td class="cart_description">
                                    <a href="<?= base_url; ?>/checkout/<?= $transaksi['id_order'] ?>/<?= $transaksi['username'] ?>">
                                        <p><?= $transaksi['id_order'] ?></p>
                                    </a>
                                </td>
                                <td class="cart_description">
                                    <p>Rp. <?= number_format($transaksi['total_belanja'], 0, ".", "."); ?></p>
                                </td>
                                <td class="cart_price">
                                    <p><?= $transaksi['tanggal_transaksi']; ?></p>
                                </td>
                                <td class="cart_price">
                                    <p><?= $transaksi['status_bayar']; ?></p>
                                </td>
                                <td>
                                    <a href="<?= base_url; ?>/checkout/<?= $transaksi['id_order'] ?>/<?= $transaksi['username'] ?>"> <button class="btn btn-warning" type="button">Lihat</button>
                                    </a>
                                    <?php
                                    if ($transaksi['status_bayar'] == 'dikirim') {

                                    ?>
                                        <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah pesanan sudah diterima');">Pesanan Diterima</button>
                                    <?php } ?>
                                </td>
                            </tr>

                        </form>

                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>

    </div>
</section>
<!--/#cart_items-->