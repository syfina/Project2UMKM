<div class="card">
    <div class="card-header">
        <a href="<?= base_url('pesanan/tambah') ?>" class="btn btn-primary btn-sm">Tambah <i class="fas fa-plus"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>

                <tr class="text-center">
                    <th>ID</th>
                    <th>tanggal</th>
                    <th>jumlah</th>
                    <th>users_id</th>
                    <th>produk_id</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($pesanan as $psn) : ?>
            <tbody>
              <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $psn->tanggal?></td>
                <td><?= $psn->jumlah?></td>
                <td><?= $psn->users_id?></td>
                <td><?= $psn->produk_id?></td>
                <td>
                <button data-toggle="modal" data-target="#edit<?= $psn->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('jenis_produk/delete/' .$psn->id) ?>" class="btn btn-danger btn-sm"><i
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
<? foreach($pesanan as $psn) : ?>
<div class="modal fade" id="edit<? $psn->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data pesanan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('jenis_produk/tambah/' .$psn->id) ?>" method="POST" >
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" placeholder="" value="<? $psn->id?>">
            </div>
            <div class="form-group">
                <label>tanggal</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $psn->tanggal?>">
        </div>
        <div class="form-group">
                <label>jumlah</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $psn->jumlah?>">
        </div>
        <div class="form-group">
                <label>users_id</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $psn->user_id?>">
        </div>
        <div class="form-group">
                <label>produk_id</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $psn->produk_id?>">
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<? endforeach ?>