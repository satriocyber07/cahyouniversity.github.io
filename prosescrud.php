<?php
include 'koneksi.php';


// READ DATA
function BacaPengunjung()           // kalau mau nampilin data panggil fungsi ini
{
    global $koneksi;
    $sql        = "SELECT * FROM pengunjung ORDER BY id ASC";
    $result     = mysqli_query($koneksi, $sql);
    $pengunjung = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $pengunjung;
}

// Proses form tambah pengunjung   
if (isset($_POST['simpan'])) {
    $nama       = $_POST['nama'];
    $nim        = $_POST['nim'];
    $keperluan  = $_POST['keperluan'];
    $prodi      = $_POST['prodi'];
    $sql        = "INSERT INTO pengunjung (nama, nim, keperluan, prodi) 
                        VALUES ('$nama', '$nim', '$keperluan', '$prodi')";
    $simpan     = mysqli_query($koneksi, $sql);


    // jika queri sql di variabel simpan dijalanain
    if ($simpan) {
        echo "  <script>
                    alert('Data Berhasil Disimpan!');
                    document.location='admin.php';
                </script>";
    } else {
        echo "  <script>
                    alert('Data Gagal Disimpan!');
                    document.location='admin.php';
                </script>";
    }
}

// Proses form Ubah pengunjung   
if (isset($_POST['ubah'])) {
    $ubah       = mysqli_query($koneksi, "UPDATE pengunjung SET 
                                                                nim         = '$_POST[nim]', 
                                                                nama        = '$_POST[nama]', 
                                                                keperluan   = '$_POST[keperluan]', 
                                                                prodi       = '$_POST[prodi]' 
                                                            WHERE id        = '$_POST[id]'
                                                            ");
    // jika queri sql di variabel simpan dijalanain
    if ($ubah) {
        echo "  <script>
                    alert('Data Berhasil Diubah!');
                    document.location='admin.php';
                </script>";
    } else {
        echo "  <script>
                    alert('Data Gagal Diubah!');
                    document.location='admin.php';
                </script>";
    }
}


// Proses form hapus pengunjung   
if (isset($_POST['hapus'])) {
    $hapus = mysqli_query($koneksi, "DELETE FROM pengunjung WHERE id = '$_POST[id]' ");
    // jika queri sql di variabel simpan dijalanain
    if ($hapus) {
        echo "  <script>
                    alert('Data Berhasil Dihapus!');
                    document.location='admin.php';
                </script>";
    } else {
        echo "  <script>
                    alert('Data Gagal Dihapus!');
                    document.location='admin.php';
                </script>";
    }
}
