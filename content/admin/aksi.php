<?php
    include "../../konfig/koneksi.php";

    if($_GET['act'] == 'simpan'){
        // Fetch the last id from the mahasiswa table
        $result = mysqli_query($conn, "SELECT MAX(id) AS max_id FROM admin");
        $row = mysqli_fetch_assoc($result);
        $last_id = $row['max_id'];

        // Increment the last id by 1
        $new_id = $last_id + 1;

        // Insert the new data with the incremented id
        mysqli_query($conn, "INSERT INTO admin (id, username, password) VALUES ('$new_id', '$_POST[username]', '$_POST[password]')");

        // Redirect to mahasiswa page
        header("location: admin");
    }
?>
