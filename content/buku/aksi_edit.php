<?php
    include '../../konfig/koneksi.php';

    if($_GET['act_edt_buku'] == 'simpanedt'){
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $author = $_POST['author'];
    $tahun = $_POST['tahun'];
    $sinopsis = $_POST['sinopsis'];


        $query = "UPDATE buku SET judul= '$judul', author='$author', tahun='$tahun', sinopsis='$sinopsis' WHERE id= '$id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: buku");
            exit();
        } else {
            echo "Gagal update data.";
        }
    }   

