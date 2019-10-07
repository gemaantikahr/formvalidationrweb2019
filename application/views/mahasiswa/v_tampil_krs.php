<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body>
<div class="container">
    <center><div class="alert alert-success">
    <?php $this->load->view("_partials/navbarmhs.php") ?>
    </div>
    </center>
</div>
	
<div class="container">
<a href="<?php echo site_url('responsi/ambil_matkul') ?>" class="btn btn-primary">Tambah Matkul</a>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama mahasiswa</th>
        <th>Nama Matakuliah</th>
        <th>Sks</th>
        <th>Semester</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($krs as $data):?>
      <tr>
        <td><?php echo $data->nama_mahasiswa?></td>
        <td><?php echo $data->nama_matkul?></td>
        <td><?php echo $data->sks?></td>
        <td><?php echo $data->semester?></td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>
</div>

    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>