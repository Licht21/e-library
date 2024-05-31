<?php
    include '../../konfig/koneksi.php';

    if($_GET['act_edt_admin'] == 'simpanedt'){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];


        $query = "UPDATE admin SET username= '$username', password='$password' WHERE id= '$id'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: admin");
            exit();
        } else {
            echo "Gagal update data.";
        }
    }   
