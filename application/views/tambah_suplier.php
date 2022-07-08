<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data suplier</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('suplier/tambah_aksi') ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nm" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Kota</label>
                <input type="text" name="kt" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Kontak</label>
                <input type="text" name="kntk" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="almt" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Telpon</label>
                <input type="text" name="tlp" class="form-control" placeholder="">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>