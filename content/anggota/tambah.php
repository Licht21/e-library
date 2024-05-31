<div class="container mt-3">
    <h3>FORM TAMBAH ANGGOTA</h3>
    <form method="POST" action="anggota-simpan">
        <div class="row mb-3">
            <label class="col-md-3 col-sm-3" for="username">Username</label>
            <div class="col-md-9 col-sm-9">
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-md-3 col-sm-3" for="password">Password</label>
            <div class="col-md-9 col-sm-9">
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>
