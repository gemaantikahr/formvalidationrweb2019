<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gema Antika Hariadi</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body>
<div class="container">
    <?php $this->load->view("_partials/navbar.php") ?>
</div>
<div class="container">
  <h2>Masukkan Data Barang</h2>
  <p>Isi semua data:</p>
  <form action="<?php echo base_url().'konsumen/simpan_barang'?>" method="post" enctype="multipart/form-data" >
  <div class="form-group">
      <label for="usr">Nama Barang*</label>
      <input type="text" class="form-control" id="usr" name="xnama" placeholder="nama barang">
        <p><?php echo form_error('xnama');?></p>
    </div>
    <div class="form-group">
      <label for="usr">Harga Satuan*</label>
      <input type="text" class="form-control" id="usr" name="xharga" placeholder="harga satuan" >
      <p><?php echo form_error('xharga');?></p>
    </div>
    <div class="form-group">
      <label for="pwd">Jumlah*</label>
      <input type="text" class="form-control" id="pwd" name="xjumlah" placeholder="jumlah">
      <p><?php echo form_error('xharga');?></p>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>



    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>