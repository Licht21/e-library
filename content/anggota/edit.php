<?php

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $data = mysqli_query($conn, "SELECT * FROM anggota WHERE id = '$id'");
    while($r = mysqli_fetch_array($data)){

?>
<div class="container mt-3">
    <form method="POST" action="update-anggota">
    <input type="hidden" name="id" value="<?php echo $r['id']; ?>">
        <div class="row mb-3">
            <label class="col-md-3 col-sm-3">Username</label>
            <div class="col-md-9 col-sm-9">

                <input type="text" class="form-control" name="username" value="<?php echo $r['username']; ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3">Password</label>
            <div class="col-md-9">
                <input type="password" class="form-control" name="password" value="<?php echo $r['password']; ?>" required>
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
