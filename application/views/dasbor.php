<div class="class container-fluid">
<div class="row text-center mt-4">
<?php foreach ($barang as $brg): ?>

<div class="card ml-3" style="width: 16rem;">
  <img src="<?php echo base_url().'/uploads/'.$brg->gmbr_bg?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title mb-1"><?php echo $brg->nm_bg?></h5>
    <small><?php echo $brg->kt_brg?></small><br>
    <span class="badge badge-pill badge-success mb-2">Rp.<?php echo $brg->hrg_brg?></span>
    <a href="#" class="btn btn-sm btn-primary">Tambah Ke Keranjang</a>
    <a href="#" class="btn btn-sm btn-success">Detail</a>
  </div>
</div>

<?php endforeach; ?>
</div>
</div>
