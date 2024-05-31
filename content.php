<?php
if($_GET['module']=='anggota'){
    include "content/anggota/index.php";
}
else if($_GET['module']=='buku'){
    include "content/buku/index.php";
}else if($_GET['module']=='admin'){
    include "content/admin/index.php";
}
?>