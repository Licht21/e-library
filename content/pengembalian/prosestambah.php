<?php
// Ambil data dari form
$id_peminjaman = $_POST['id_peminjaman'];
$tanggal_pengembalian = $_POST['tanggal_pengembalian'];

// Lakukan proses tambah pengembalian ke database
// (Anda perlu menambahkan logika sesuai dengan struktur tabel pengembalian)
// Contoh:
// $sql = "INSERT INTO pengembalian (id_peminjaman, tanggal_pengembalian) VALUES ('$id_peminjaman', '$tanggal_pengembalian')";
// Jalankan query dan lakukan pengecekan hasil query

// Redirect ke halaman index.php setelah proses selesai
header("Location: index.php");
exit();
?>
