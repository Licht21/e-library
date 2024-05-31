<?php

include "../../konfig/koneksi.php";

if($_GET['del'] == 'hapus'){
    if(isset($_GET['id'])) {
       
        $id = $_GET['id'];
        $stmt = $conn->prepare("DELETE FROM buku WHERE id = ?");
        $stmt->bind_param("i", $id); // 'i' indicates integer type for id
        $stmt->execute();

        // Close the prepared statement
        $stmt->close();
    }

    // Redirect back to index.php after deletion
    header('location: buku');
    exit();
}
?>
