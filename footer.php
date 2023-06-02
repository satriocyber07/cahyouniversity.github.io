    <!-- modal -->
    <!-- modal tambah -->
    <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Form Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="prosescrud.php" autocomplete="off">
                    <div class="modal-body">
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">NIM</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">Nama</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">Keperluan</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="keperluan" rows="3" placeholder="Masukkan Keperluan" required></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">Program Studi</label>
                            <div class="col-sm-8">
                                <select class="form-select" name="prodi" required>
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            </div>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="simpan">Simpan</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>

    </html>