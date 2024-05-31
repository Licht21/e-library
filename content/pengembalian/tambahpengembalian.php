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

// Query untuk mengambil data peminjaman
$peminjamanSql = "SELECT peminjaman.id_peminjaman, peminjaman.id_buku, peminjaman.id_anggota, buku.judul, anggota.username
                  FROM peminjaman
                  JOIN buku ON peminjaman.id_buku = buku.id
                  JOIN anggota ON peminjaman.id_anggota = anggota.id";
$peminjamanResult = $conn->query($peminjamanSql);

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengembalian Buku</title>
</head>
<body>
    <h2>Tambah Pengembalian Buku</h2>
    <form action="prosestambah.php" method="POST">
        <label for="id_peminjaman">ID Peminjaman:</label>
        <select name="id_peminjaman" id="id_peminjaman">
            <?php
            if ($peminjamanResult->num_rows > 0) {
                while($row = $peminjamanResult->fetch_assoc()) {
                    echo "<option value='" . $row["id_peminjaman"] . "'>" . $row["id_peminjaman"] . "</option>";
                }
            } else {
                echo "<option value=''>Tidak ada data peminjaman</option>";
            }
            ?>
        </select><br><br>
        <label for="id_buku">ID Buku:</label>
        <input type="text" name="id_buku" id="id_buku"><br><br>
        <label for="id_anggota">ID Anggota:</label>
        <input type="text" name="id_anggota" id="id_anggota"><br><br>
        <input type="submit" value="Tambah Pengembalian">
    </form>
</body>
</html>
