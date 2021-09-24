      <!-- End Navbar -->
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header card-header-primary">
                              <h4 class="card-title ">Daftar Riwayat Transaksi</h4>
                              <p class="card-category">riwayat transaksi sudah selesai</p>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table">
                                      <thead class=" text-primary">
                                          <th>
                                              Tanggal
                                          </th>
                                          <th>
                                              Id Order
                                          </th>
                                          <th>
                                              Nama
                                          </th>
                                          <th>
                                              Harga
                                          </th>
                                          <th>
                                              Status
                                          </th>
                                          <th>
                                              Aksi
                                          </th>
                                      </thead>
                                      <tbody>
                                          <?php foreach ($data['transaksi'] as $transaksi) :
                                            ?>
                                              <tr>
                                                  <td>
                                                      <?php echo $transaksi['tanggal_transaksi'] ?>
                                                  </td>
                                                  <td>
                                                      <?php echo $transaksi['id_order']; ?>
                                                  </td>
                                                  <td>
                                                      <?php echo $transaksi['nama_lengkap']; ?>
                                                  </td>
                                                  <td>
                                                      Rp. <?php echo number_format($transaksi['total_belanja'], 0, ".", "."); ?>

                                                  </td>
                                                  <td><?php echo $transaksi['status_bayar']; ?></td>
                                                  <td>
                                                      <a href="<?= base_url; ?>/admin/detailriwayat/<?= $transaksi['id_order']; ?>"><button class="btn btn-warning">Cek</button></a>
                                                  </td>
                                              </tr>

                                          <?php endforeach; ?>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>