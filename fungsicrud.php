<?php
include 'koneksi.php';

// Fungsi untuk mendapatkan data pengunjung
function getPengunjung()
{
    global $koneksi;
    $sql = "SELECT * FROM pengunjung ";
    $result = mysqli_query($koneksi, $sql);
    $pengunjung = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $pengunjung;
}

// Fungsi untuk menambahkan pengunjung
function tambahPengunjung($nama, $nim, $keperluan, $prodi)
{
    global $koneksi;
    $sql = "INSERT INTO pengunjung (nama, nim, keperluan, prodi) VALUES ('$nama', '$nim', '$keperluan', '$prodi')";
    mysqli_query($koneksi, $sql);
}

// Fungsi untuk menghapus pengunjung berdasarkan ID
function hapusPengunjung($id)
{
    global $koneksi;
    $sql = "DELETE FROM pengunjung WHERE id = $id";
    mysqli_query($koneksi, $sql);
}

// Fungsi untuk mendapatkan data pengunjung berdasarkan ID
function getPengunjungById($id)
{
    global $koneksi;
    $sql = "SELECT * FROM pengunjung WHERE id = $id";
    $result = mysqli_query($koneksi, $sql);
    $pengunjung = mysqli_fetch_assoc($result);
    return $pengunjung;
}

// Fungsi untuk mengedit pengunjung
function editPengunjung($id, $nama, $nim, $keperluan, $prodi)
{
    global $koneksi;
    $sql = "UPDATE pengunjung SET nama = '$nama', nim = '$nim', keperluan = '$keperluan', prodi = '$prodi' WHERE id = $id";
    mysqli_query($koneksi, $sql);
}

$datapengunjung=getPengunjung();

?>
