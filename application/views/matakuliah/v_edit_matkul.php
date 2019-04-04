<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gema Antika Hariadi</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body>
	
<div class="container">
  <h2>Masukkan Data Mata kuliah</h2>
  <p>Isi semua data:</p>
  <form action="<?php echo base_url().'matakuliah/update_matkul'?>" method="post" enctype="multipart/form-data" >
    <?php foreach($editmk as $data):?>
    <div class="form-group" hidden>
      <label for="usr">Nama Matkul:</label>
      <input type="text" class="form-control" id="usr" name="xid" value="<?php echo $data->id_matkul?>">
    </div>
    <div class="form-group">
      <label for="usr">Nama Matkul:</label>
      <input type="text" class="form-control" id="usr" name="xnama" value="<?php echo $data->nama_matkul?>">
    </div>
    <div class="form-group">
      <label for="pwd">Semester:</label>
      <input type="number" class="form-control" id="pwd" name="xsemester" value="<?php echo $data->semester?>">
    </div>
    <?php endforeach?>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>



    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>