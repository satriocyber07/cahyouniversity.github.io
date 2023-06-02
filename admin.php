<?php include 'header.php' ?>
<?php include 'prosescrud.php' ?>


<!-- bagian hero -->
<div class="container">
    <h3 class="text-center mt-5"><b>Pengunjung Satrio University</b> </h3>
    <div class="card mt-4 shadow">
        <div class="card-header">
            Data Pengunjung
        </div>
        <div class="card-body">
            <!-- buat mentriger modal -->
            
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">+ Tambah Data</button>
            
            <table class="mt-3 table table-hover text-center shadow-sm table-striped">
                <thead>
                    <tr>
                        <th class="brs">No</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Program Studi</th>
                        <th>Keperluan</th>
                        <th>Waktu Absen</th>
                        <th class="bre">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach (BacaPengunjung() as $data) : ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['nim']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['prodi']; ?></td>
                            <td><?php echo $data['keperluan']; ?></td>
                            <td><?php echo $data['waktu']; ?></td>
                            <td>
                                <a href="#" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalUbah<?= $no ?>">Edit</a>
                                <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $no ?>">Hapus</a>
                            </td>
                        </tr>
                        <!-- Modal Ubah-->
                        <div class="modal fade" id="modalUbah<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Ubah Data</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="prosescrud.php" autocomplete="off">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <div class="modal-body">
                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label">NIM</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" value="<?= $data['nim'] ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label">Nama</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="<?= $data['nama'] ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label">Keperluan</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="keperluan" rows="3" placeholder="Masukkan Keperluan"><?= $data['keperluan'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-4 col-form-label">Program Studi</label>
                                                <div class="col-sm-8">
                                                    <select class="form-select" name="prodi">
                                                        <option value="<?= $data['prodi'] ?>"><?= $data['prodi'] ?></option>
                                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                                        <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success" name="ubah">Ubah</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- akhir modal ubah -->

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="modalHapus<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Konfirmasi Hapus Data</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="prosescrud.php" autocomplete="off">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                        <div class="modal-body">
                                            <h5 class="text-center"> Apakah anda yakin akan menghapus data ini?<br>
                                                <span class="text-danger"><?= $data['nim'] ?> - <?= $data['nama'] ?></span>
                                            </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary" name="hapus">Ya, Hapus</button>
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Akhir modal hapus -->

                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>