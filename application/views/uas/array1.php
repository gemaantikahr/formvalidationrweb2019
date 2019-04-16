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
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Warna</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($array as $value){?>
      <tr>
        <td><?php echo $value?></td>
      </tr>
    <?php }?>
    </tbody>
  </table>
  <a href="<?php echo site_url('matakuliah/add') ?>" class="btn btn-primary">Tambah Matkul</a>
</div>


    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>