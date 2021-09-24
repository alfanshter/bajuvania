      <!-- End Navbar -->
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header card-header-primary">
                              <h4 class="card-title ">Daftar Pengiriman Barang</h4>
                              <p class="card-category">Kirimkan barang ke pengiriman terdekat</p>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table">
                                      <thead class=" text-primary">
                                          <th>
                                              No
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
                                              Aksi
                                          </th>
                                      </thead>
                                      <tbody>
                                          <?php $no = 0 ?>
                                          <?php foreach ($data['transaksi'] as $transaksi) :
                                                $no++
                                            ?>
                                              <tr>
                                                  <td>
                                                      <?php echo $no ?>
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
                                                  <td>
                                                      <a href="<?= base_url; ?>/admin/kirim/<?= $transaksi['id_order']; ?>"><button class="btn btn-warning">Cek</button></a>
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