<div class="card">
    <div class="card-header">
        <a href="<?= base_url('users/tambah') ?>" class="btn btn-primary btn-sm">Tambah <i class="fas fa-plus"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>

                <tr class="text-center">
                    <th style="width: 10px">#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Last Login</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php  $no = 1;
            foreach ($users as $usr) : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++?></td>
                    <td><?= $usr->username	?></td>
                    <td><?= $usr->email ?></td>
                    <td><?= $usr->last_login ?></td>
                    <td><?= $usr->role ?></td>
                    <td><?= $usr->status ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $usr->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('user/delete/' .$usr->id) ?>" class="btn btn-danger btn-sm"><i
                                class="fas fa-trash"></i></a>
                    </td>
                </tr>

            </tbody>
            <?php endforeach 
             ?>
        </table>
    </div>

</div>

<!-- Button trigger modal -->


<!-- Modal -->
<?php foreach ($users as $usr) : ?>
<div class=" modal fade" id="edit<?= $usr->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="<?= base_url('users/edit/' .$usr->id) ?>" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="nama" class="form-control" value="<?= $usr->username ?>">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="pass" class="form-control" value="<?= $usr->password ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" value="<?= $usr->email ?>">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="sts">
                                    <option value="1"><?= $usr->status ?></option>
                                    <option value="1">Aktif</option>
                                    <option value="2">Non Aktif</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role">
                                    <option value="1"><?= $usr->role ?></option>
                                    <option value="admin">Admin</option>
                                    <option value="public">Public</option>

                                </select>
                            </div>


                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer">

                            <button type="submit" class="btn btn-primary">Simpan</button>

                        </div>

                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
<?php endforeach 
 ?>