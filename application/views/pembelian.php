<div class="card">
    <div class="card-header">
        <a href="<?= base_url('pembelian/tambah') ?>" class="btn btn-primary btn-sm">Tambah <i class="fas fa-plus"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>

                <tr class="text-center">
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Produk</th>
                    <th>Suplier</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($pembelian as $pbl) : ?>
            <tbody>
              <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $pbl->tanggal?></td>
                <td><?= $pbl->jumlah?></td>
                <td><?= $pbl->harga?></td>
                <td><?= $pbl->produk_id?></td>
                <td><?= $pbl->suplier_id?></td>
                <td>
                <button data-toggle="modal" data-target="#edit<?= $pbl->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('pembelian/delete/' .$pbl->id) ?>" class="btn btn-danger btn-sm"><i
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
<? foreach($pembelian as $pbl) : ?>
<div class="modal fade" id="edit<? $pbl->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit pembelian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data pembelian</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('pembelian/tambah/' .$pbl->id) ?>" method="POST" >
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" placeholder="" value="<? $pbl->id?>">
            </div>
            <div class="form-group">
                <label>tanggal</label>
                <input type="text" name="tanggal" class="form-control" placeholder="" value="<? $pbl->tanggal?>">
        </div>
             <div class="form-group">
                <label>jumlah</label>
                <input type="text" name="tanggal" class="form-control" placeholder="" value="<? $pbl->jumlah?>">
        </div>
        <div class="form-group">
                <label>harga</label>
                <input type="text" name="tanggal" class="form-control" placeholder="" value="<? $pbl->harga?>">
        </div>
        <div class="form-group">
                <label>produk</label>
                <input type="text" name="tanggal" class="form-control" placeholder="" value="<? $pbl->produk?>">
        </div>
        <div class="form-group">
                <label>suplier</label>
                <input type="text" name="tanggal" class="form-control" placeholder="" value="<? $pbl->sumlier?>">
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