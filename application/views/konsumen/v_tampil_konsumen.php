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
  <h2>Data Konsumen</h2>
  <p>Praktikum Rweb</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>no</th>
        <th>Nama Barang</th>
        <th>Harga Satuan</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Harga Disc 20%</th>
        <th>Tanggal Transaksi</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
    <?php
     $no=0; foreach($konsumen as $data): $no++;?>
      <tr>
        <td><?php echo $no?></td>
        <td><?php echo $data->nama_barang?></td>
        <td><?php echo $data->harga_satuan?></td>
        <td><?php echo $data->jumlah?></td>
        <td><?php echo $data->total_harga?></td>
        <td><?php echo $data->harga_diskon?></td>
        <td><?php echo $data->tanggal?></td>
        <td>
            <a href="<?php echo site_url('konsumen/edit_barang/'.$data->id_konsumen) ?>" class="btn btn-small btn-info">edit</a>
			<a href="<?php echo site_url('konsumen/hapus_barang/'.$data->id_konsumen) ?>" class="btn btn-small btn-danger">hapus</a>
		</td>
      </tr>
    <?php endforeach?>
    </tbody>
  </table>
  <a href="<?php echo site_url('konsumen/tambah_barang') ?>" class="btn btn-primary">Tambah Barang</a>
</div>
<div align="center">
    <form method="post" action="<?php echo base_url(); ?>matakuliah/action">
    </form>
   </div>

    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>