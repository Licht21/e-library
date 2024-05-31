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

// Query untuk mengambil data pengembalian buku
$sql = "SELECT pengembalian.id_pengembalian, buku.judul, anggota.username AS nama_peminjam
        FROM pengembalian
        JOIN buku ON pengembalian.id_buku = buku.id
        JOIN anggota ON pengembalian.id_anggota = anggota.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengembalian Buku</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Daftar Pengembalian Buku</h2>
    <a href="tambahpengembalian.php">Tambah Pengembalian Buku</a>
    <table>
        <tr>
            <th>ID Pengembalian</th>
            <th>Judul Buku</th>
            <th>Nama Peminjam</th>
            <th>Aksi</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // Output data setiap baris
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>" . $row["id_pengembalian"] . "</td>
                        <td>" . $row["judul"] . "</td>
                        <td>" . $row["nama_peminjam"] . "</td>
                        <td>
                            <a href='hapuspengembalian.php?id=" . $row["id_pengembalian"] . "'>Hapus</a>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data pengembalian buku</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
