<?php
// Konfigurasi koneksi database
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "library";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Menghapus data pengembalian buku berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM pengembalian WHERE id_pengembalian='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Pengembalian buku berhasil dihapus. <a href='index.php'>Kembali ke daftar pengembalian buku</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
