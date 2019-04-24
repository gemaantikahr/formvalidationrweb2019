<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gema Antika Hariadi</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body>
	
<div class="container">
  <h2>Data Matakuliah</h2>
  <p>Praktikum Rweb</p>            
  <?php 
    echo var_dump($array)
  ?>
  <a href="<?php echo site_url('matakuliah/add') ?>" class="btn btn-primary">Tambah Matkul</a>
</div>


    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>