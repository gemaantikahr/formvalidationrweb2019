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
  <h2>Masukkan Data Mata kuliah</h2>
  <p>Isi semua data:</p>
  <form action="<?php echo base_url().'konsumen/update_barang'?>" method="post" enctype="multipart/form-data" >
  <?php foreach($barang as $data):?>
    <div class="form-group" hidden>
      <label for="usr">Nama Barang*</label>
      <input type="text" class="form-control" id="usr" name="xid" value="<?php echo $data->id_konsumen?>">
    </div>
    <div class="form-group">
      <label for="usr">Nama Barang*</label>
      <input type="text" class="form-control" id="usr" name="xnama" value="<?php echo $data->nama_barang?>">
    </div>
    <div class="form-group">
      <label for="usr">Harga Satuan*</label>
      <input type="text" class="form-control" id="usr" name="xharga"value="<?php echo $data->harga_satuan?>">
    </div>
    <div class="form-group">
      <label for="pwd">Jumlah*</label>
      <input type="number" class="form-control" id="pwd" name="xjumlah" value="<?php echo $data->jumlah?>">
    </div>
    <?php endforeach?>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>



    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>