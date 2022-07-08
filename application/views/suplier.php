<div class="card">
    <div class="card-header">
        <a href="<?= base_url('suplier/tambah') ?>" class="btn btn-primary btn-sm">Tambah <i class="fas fa-plus"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>

                <tr class="text-center">
                    <th>ID</th>
                    <th>id</th>
                    <th>nama</th>
                    <th>kota</th>
                    <th>kontak</th>
                    <th>alamat</th>
                    <th>telpon</th>
                    <th>action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($suplier as $spl) : ?>
            <tbody>
              <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $spl->id?></td>
                <td><?= $spl->nama?></td>
                <td><?= $spl->kota?></td>
                <td><?= $spl->kontak?></td>
                <td><?= $spl->alamat?></td>
                <td><?= $spl->telpon?></td>
                <td>
                <button data-toggle="modal" data-target="#edit<?= $spl->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('suplier/delete/' .$spl->id) ?>" class="btn btn-danger btn-sm"><i
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
<? foreach($suplier as $spl) : ?>
<div class="modal fade" id="edit<? $spl->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit suplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data suplier</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('suplier/tambah/' .$spl->id) ?>" method="POST" >
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" placeholder="" value="<? $spl->id?>">
            </div>
            <div class="form-group">
                <label>nama</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $spl->nama?>">
            </div>
            <div class="form-group">
                <label>kota</label>
                <input type="text" name="kota" class="form-control" placeholder="" value="<? $spl->kota?>">
        </div>
        <div class="form-group">
                <label>kontak</label>
                <input type="text" name="kntk" class="form-control" placeholder="" value="<? $spl->kontak?>">
        </div>
        <div class="form-group">
                <label>alamat</label>
                <input type="text" name="amt" class="form-control" placeholder="" value="<? $spl->alamat?>">
        </div>
        <div class="form-group">
                <label>telpon</label>
                <input type="text" name="tlpn" class="form-control" placeholder="" value="<? $spl->telpon?>">
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