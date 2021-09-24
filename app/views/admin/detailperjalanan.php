      <!-- End Navbar -->
      <div class="content">

          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header card-header-primary">
                              <h4 class="card-title ">Daftar Barang</h4>
                          </div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table">
                                      <thead class=" text-primary">
                                          <th>
                                              No
                                          </th>
                                          <th>
                                              Nama Barang
                                          </th>
                                          <th>
                                              Jumlah
                                          </th>
                                          <th>
                                              Harga
                                          </th>

                                          <th>
                                              total
                                          </th>

                                          <th>
                                              Foto
                                          </th>

                                      </thead>
                                      <tbody>
                                          <?php $no = 0 ?>
                                          <?php foreach ($data['keranjang'] as $keranjang) :
                                                $no++
                                            ?>
                                              <tr>
                                                  <td>
                                                      <?php echo $no ?>
                                                  </td>
                                                  <td>
                                                      <?php echo $keranjang['nama_barang']; ?>
                                                  </td>
                                                  <td>
                                                      <?php echo $keranjang['jumlah_barang']; ?>
                                                  </td>
                                                  <td>
                                                      Rp. <?php echo number_format($keranjang['harga_barang'], 0, ".", "."); ?>

                                                  </td>
                                                  <td>
                                                      Rp. <?php
                                                            $jumlah = $keranjang['harga_barang'] * $keranjang['jumlah_barang'];
                                                            echo number_format($jumlah, 0, ".", "."); ?>

                                                  </td>
                                                  <td>
                                                      <img src="<?= base_url; ?>/assets/images/<?= $keranjang['foto_barang']; ?>" width="150" height="200" alt="">
                                                  </td>
                                              </tr>

                                          <?php endforeach; ?>
                                          <thead>
                                              <th></th>
                                              <th>Total keranjang</th>
                                              <th>Ongkos Kirim</th>
                                              <th>Total Belanja </th>
                                              <th>No Resi</th>
                                              <th>Pengirim</th>

                                          </thead>

                                      <tbody>
                                          <tr>
                                              <td></td>
                                              <td>Rp. <?php echo number_format($data['keranjang'][0]['total_keranjang'], 0, ".", "."); ?></td>
                                              <td>Rp. 0</td>
                                              <td>Rp. <?php echo number_format($data['keranjang'][0]['total_belanja'], 0, ".", "."); ?></td>
                                              <td><?php echo $data['keranjang'][0]['nomor_resi'] ?></td>
                                              <td><?php echo $data['keranjang'][0]['nama_pengirim'] ?></td>

                                          </tr>
                                      </tbody>


                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header card-header-primary">
                              <h4 class="card-title">Daftar Rincian</h4>
                              <p class="card-category">Complete your profile</p>
                          </div>
                          <div class="card-body">
                              <input type="hidden" name="username" value="<?= $data['keranjang'][0]['username']; ?>">
                              <div class="row">
                                  <div class="col-md-5">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Nama Lengkap</label>
                                          <input type="text" class="form-control" value="<?= $data['keranjang'][0]['nama_lengkap']; ?>" disabled>
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Email</label>
                                          <input type="email" class="form-control" value="<?= $data['keranjang'][0]['email']; ?>">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="bmd-label-floating"> ID Order</label>
                                          <input type="text" class="form-control" name="id_order" value="<?= $data['keranjang'][0]['id_order']; ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Nomor Telepon</label>
                                          <input type="text" class="form-control" value="<?= $data['keranjang'][0]['nomor_telepon']; ?>">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Alamat Detail</label>
                                          <input type="text" class="form-control" value="<?= $data['keranjang'][0]['alamat_detail']; ?>">
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Provinsi</label>
                                          <input type="text" class="form-control" value="<?= $data['keranjang'][0]['provinsi']; ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Kota</label>
                                          <input type="text" class="form-control" value="<?= $data['keranjang'][0]['kota']; ?>">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Kecamatan</label>
                                          <input type="text" class="form-control" value="<?= $data['keranjang'][0]['kecamatan']; ?>">
                                      </div>
                                  </div>

                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <label class="bmd-label-floating">Kode Pos</label>
                                          <input type="text" class="form-control" value="<?= $data['keranjang'][0]['kode_pos']; ?>">
                                      </div>
                                  </div>

                              </div>

                              <div class="clearfix"></div>
                          </div>
                      </div>
                  </div>

              </div>
          </div>




      </div>