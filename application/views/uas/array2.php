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
        <th>bentuk</th>
        <th>kualitas</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($array as $value){?>
      <tr>
        <td><?php foreach($value as $nilai){
            echo $nilai?>
            <?php }?>
        </td>
        <td><?php foreach($value as $nila2){
            echo $nila2?>
            <?php }?>
        </td>
        <td><?php foreach($value as $nila3){
            echo $nila3?>
            <?php }?>
        </td>
 
      </tr>
    <?php }?>
    </tbody>
  </table>
  <a href="<?php echo site_url('matakuliah/add') ?>" class="btn btn-primary">Tambah Matkul</a>
</div>


    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>