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
<hr>
<div class="container">
  <h2>Data Mata Kuliah</h2>
  <button type="button" class="btn btn-primary">Tambah Mata Kuliah</button>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id Matkul</th>
        <th>Nama Matkul</th>
        <th>Semester</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($datamatkul as $data):?>
      <tr>
        <td><?php echo $data->id_matkul?></td>
        <td><?php echo $data->nama_matkul?></td>
        <td><?php echo $data->semester?></td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>
<hr>
<div class="container">
  <h2>Data Mata Kuliah Dan Dosen</h2>  <button type="button" class="btn btn-primary">POSTEST</button>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NIY</th>
        <th>Dosen</th>
        <th>Mata Kuliah</th>
        <th>Kelas</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($dosenmatkul as $data):?>
      <tr>
        <td><?php echo $data->id_dosen?></td>
        <td><?php echo $data->nama_dosen?></td>
        <td><?php echo $data->nama_matkul?></td>
        <td><?php echo $data->kelas?></td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>

    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>