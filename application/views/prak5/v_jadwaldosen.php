<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gema Antika Hariadi</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body>
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
<div class="container">
  <h2>Data Matakuliah</h2>
  <p>Praktikum Rweb</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID Mata Kuliah</th>
        <th>Nama Matakuliah</th>
        <th>Semester</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($matkul as $data):?>
      <tr>
        <td><?php echo $data->id_matkul?></td>
        <td><?php echo $data->nama_matkul?></td>
        <td><?php echo $data->semester?></td>
        <td>
            <a href="<?php echo site_url('matakuliah/edit_matkul/'.$data->id_matkul) ?>" class="btn btn-small btn-info">edit</a>
			<a href="<?php echo site_url('matakuliah/hapus_matkul/'.$data->id_matkul) ?>" class="btn btn-small btn-danger">hapus</a>
		</td>
      </tr>
    <?php endforeach?>
    </tbody>
  </table>
  <a href="<?php echo site_url('matakuliah/add') ?>" class="btn btn-primary">Tambah Matkul</a>
</div>
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