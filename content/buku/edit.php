<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $data = mysqli_query($conn, "SELECT * FROM buku WHERE id = '$id'");
    while($r = mysqli_fetch_array($data)){

?>
<div class="container mt-3">
    <form method="POST" action="update-buku">
    <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
        <div class="row mb-3">
            <label class="col-md-3 col-sm-3">Judul Buku</label>
            <div class="col-md-9 col-sm-9">

                <input type="text" class="form-control" name="judul" value="<?php echo $r['judul']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Author Buku</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="author" value="<?php echo $r['author']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Tahun Buku</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="tahun" value="<?php echo $r['tahun']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Sinopsis Buku</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="sinopsis" value="<?php echo $r['sinopsis']; ?>" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href = index.php><button type='submit' class="btn btn-danger">Batal</button></a>
    </form>
</div>
<?php
}
    } else {
        echo "Record not found.";
    }
?>
