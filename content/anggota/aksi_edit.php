<?php
include '../../konfig/koneksi.php';

if ($_GET['act_edt_agt'] == 'simpanedt') {
    if (isset($_POST['id']) && isset($_POST['username']) && isset($_POST['password'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Gunakan prepared statement untuk mencegah SQL injection
        $stmt = $conn->prepare("UPDATE anggota SET username = ?, password = ? WHERE id = ?");
        $stmt->bind_param("ssi", $username, $password, $id);

        if ($stmt->execute()) {
            header("Location: anggota");
            exit();
        } else {
            // Tampilkan kesalahan jika query gagal
            echo "Gagal update data: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Data tidak lengkap.";
    }
} else {
    echo "Aksi tidak valid.";
}

$conn->close();
?>
