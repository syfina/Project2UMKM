<div class="card">
    <div class="card-header">
        <a href="<?= base_url('produk/tambah') ?>" class="btn btn-primary btn-sm">Tambah <i class="fas fa-plus"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>

                <tr class="text-center">
                    <th>ID</th>
                    <th>id</th>
                    <th>kode</th>
                    <th>nama</th>
                    <th>stok</th>
                    <th>harga_beli</th>
                    <th>harga_jual</th>
                    <th>foto</th>
                    <th>jenis_id</th>
                    <th>deskripsi</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($produk as $prdk) : ?>
            <tbody>
              <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $prdk->id?></td>
                <td><?= $prdk->kode?></td>
                <td><?= $prdk->nama?></td>
                <td><?= $prdk->stok?></td>
                <td><?= $prdk->harga_beli?></td>
                <td><?= $prdk->harga_jual?></td>
                <td><?= $prdk->foto?></td>
                <td><?= $prdk->jenis_id?></td>
                <td><?= $prdk->deskripsi?></td>
                <td>
                <button data-toggle="modal" data-target="#edit<?= $prdk->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('produk/delete/' .$prdk->id) ?>" class="btn btn-danger btn-sm"><i
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
<? foreach($produk as $prdk) : ?>
<div class="modal fade" id="edit<? $prdk->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data produk</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('jenis_produk/tambah/' .$psn->id) ?>" method="POST" >
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" placeholder="" value="<? $prdk->id?>">
            </div>
            <div class="form-group">
                <label>kode</label>
                <input type="text" name="id" class="form-control" placeholder="" value="<? $prdk->kode?>">
            </div>
            <div class="form-group">
                <label>nama</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $prdk->nama?>">
        </div>
        <div class="form-group">
                <label>stok</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $prdk->stok?>">
        </div>
        <div class="form-group">
                <label>harga_beli</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $prdk->harga_beli?>">
        </div>
        <div class="form-group">
                <label>harga_jual</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $prdk->harga_jual?>">
        </div>
        <div class="form-group">
                <label>foto</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $prdk->foto?>">
        </div>
        <div class="form-group">
                <label>jenis_id</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $prdk->jenis_id?>">
        </div>
        <div class="form-group">
                <label>deskripsi</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $prdk->deskripsi?>">
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