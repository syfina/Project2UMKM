<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data produk</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('produk/tambah_aksi') ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Kode</label>
                <input type="text" name="kd" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nm" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stk" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Harga_beli</label>
                <input type="text" name="hrg_bli" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Harga_jual</label>
                <input type="text" name="hrg_jl" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="text" name="ft" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>jenis_ID</label>
                <input type="text" name="jns_id" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="dsk" class="form-control" placeholder="">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>