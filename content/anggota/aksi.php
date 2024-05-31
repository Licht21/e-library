<?php
include "../../konfig/koneksi.php";

if($_GET['act']=='simpan'){
  mysqli_query($conn,"INSERT INTO anggota (username, password) VALUES
  ('$_POST[username]','$_POST[password]')");
}

header("location: anggota");
?>
