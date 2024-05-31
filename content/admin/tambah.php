<div class="container mt-3">
    <h3>FORM TAMBAH ADMIN</h3>
    <form method="POST" action="admin-simpan">
    <div class="row mb-3">
            <label class="col-md-3 col-sm-3">username</label>
        <div class="col-md-9 col-sm-9">
            <input type ="text" class="form-control" name="username" required>
        </div>
    </div>
    <div class="row mb-3">
            <label class="col-md-3">password</label>
        <div class="col-md-9">
            <input type ="text" class="form-control" name="password" required>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>