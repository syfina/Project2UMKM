<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data pesanan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('pesanan/tambah_aksi') ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="text" name="tgl" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Jumlah</label>
                <input type="text" name="jmlh" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Users_ID</label>
                <input type="text" name="user_id" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Produk_ID</label>
                <input type="text" name="prdk_id" class="form-control" placeholder="">
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>