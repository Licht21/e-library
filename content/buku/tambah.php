<div class="container mt-3">
    <h3>FORM TAMBAH BUKU</h3>
    <form method="POST" action="buku-simpan">
    <div class="row mb-3">
            <label class="col-md-3 col-sm-3">judul</label>
        <div class="col-md-9 col-sm-9">
            <input type ="text" class="form-control" name="judul" required>
        </div>
    </div>
    <div class="row mb-3">
            <label class="col-md-3">author</label>
        <div class="col-md-9">
            <input type ="text" class="form-control" name="author" required>
        </div>
    </div>
    <div class="row mb-3">
            <label class="col-md-3">tahun</label>
        <div class="col-md-9">
            <input type ="number" class="form-control" name="tahun" required>
        </div>
    </div>
    <div class="row mb-3">
            <label class="col-md-3">sinopsis</label>
        <div class="col-md-9">
            <input type ="text" class="form-control" name="sinopsis" required>
        </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>