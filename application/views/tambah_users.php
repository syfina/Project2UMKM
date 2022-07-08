<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data users</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('users/tambah_aksi') ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="usersname" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="pass" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Created_at</label>
                <input type="text" name="crt_at" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Last_login</label>
                <input type="text" name="lst_lgn" class="form-control" placeholder="">
            </div> 
            <div class="form-group">
                <label>Status</label>
                <input type="text" name="stat" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label>Role</label>
                <input type="text" name="role" class="form-control" placeholder="">
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>