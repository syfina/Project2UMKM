<div class="card">
    <div class="card-header">
        <a href="<?= base_url('jenis_produk/tambah') ?>" class="btn btn-primary btn-sm">Tambah <i class="fas fa-plus"></i></a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>

                <tr class="text-center">
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no = 1;
            foreach($jenis_produk as $jns) : ?>
            <tbody>
              <tr class="text-center">
                <td><?= $no++ ?></td>
                <td><?= $jns->nama?></td>
                <td>
                <button data-toggle="modal" data-target="#edit<?= $jns->id ?>" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></button>
                        <a href="<?= base_url('jenis_produk/delete/' .$jns->id) ?>" class="btn btn-danger btn-sm"><i
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
<? foreach($jenis_produk as $jns) : ?>
<div class="modal fade" id="edit<? $jns->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit_jenis_produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data jenis_produk</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="<?= base_url('jenis_produk/tambah/' .$jns->id) ?>" method="POST" >
        <div class="card-body">
            <div class="form-group">
                <label>ID</label>
                <input type="text" name="id" class="form-control" placeholder="" value="<? $jns->id?>">
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="" value="<? $jns->nama?>">
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