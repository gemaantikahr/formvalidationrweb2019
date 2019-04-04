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
  <form action="<?php echo base_url().'matakuliah/simpan_matakuliah'?>" method="post" enctype="multipart/form-data" >
    <div class="form-group">
      <label for="usr">Nama Matkul:</label>
      <input type="text" class="form-control" id="usr" name="xnama" placeholder="nama matakuliah">
    </div>
    <div class="form-group">
      <label for="pwd">Semester:</label>
      <input type="number" class="form-control" id="pwd" name="xsemester" placeholder="semester">
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>



    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>