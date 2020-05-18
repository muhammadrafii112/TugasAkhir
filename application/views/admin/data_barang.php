<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" 
    data-target="#tambah_barang"><i class="fas fa-plus fa-sm"></i>Tambah Barang</button>

    <table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Keterangan</th>
        <th>Kategori</th>
        <th>Harga</th>
        <th>Stok</th>
        <th colspan="3">Aksi</th>

    </tr>

    <?php
    $no=1;
    foreach($barang as $brg): ?>
    <tr>
    <td><?php echo $no++?></td>
    <td><?php echo $brg->nm_bg?></td>
    <td><?php echo $brg->kt_brg?></td>
    <td><?php echo $brg->ktgr_bg?></td>
    <td><?php echo $brg->hrg_brg?></td>
    <td><?php echo $brg->stok?></td>
    <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
    <td><div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div></td>
    <td><div class="btn btn-success btn-sm"><i class="fas fa-trash"></i></div></td>
    </tr>
    <?php endforeach;?>
    
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_barang/tambah_aksi';?>" 
        method="post" enctype="multipart/form-data" >
            <div class="form-group">
                <label>Nama barang</label>
                <input type="text" name="nm_bg" class="form-control">
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <input type="text" name="kt_bg" class="form-control">
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="ktgr_bg" class="form-control">
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="text" name="hrg_brg" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>
            <div class="form-group">
                <label>Gambar</label><br>
                <input type="file" name="gmbr_bg" class="form-control">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>