<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body>
<div class="container">
    <center><div class="alert alert-success">
        <strong>Gema Antika Hariadi</strong>
    </div>
    <div class="alert">
        <strong>1600018095</strong>
    </div>
    </center>
</div>
	
<div class="container">
  <h2>Data Dosen</h2>
  <button type="button" class="btn btn-primary">Tambah Dosen</button>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id dosen/ NIY</th>
        <th>Nama Dosen</th>
        <th>Jabatan</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($datadosen as $data):?>
      <tr>
        <td><?php echo $data->id_dosen?></td>
        <td><?php echo $data->nama_dosen?></td>
        <td><?php echo $data->jabatan_akademik?></td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>
    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>