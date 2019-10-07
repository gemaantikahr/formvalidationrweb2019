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
	
<hr>

<div class="container">
  <h2>Biodata Anda</h2>
  <form action="<?php echo base_url().'responsi/update_biodata'?>" method="post" enctype="multipart/form-data" >
  <?php foreach($biodata as $data):?>
    <div class="form-group" hidden>
      <label for="usr">Nim</label>
      <input type="text" class="form-control" id="usr" value="<?php echo $data->nim?>" name="xnim">
    </div>
    <div class="form-group">
      <label for="usr">Nama</label>
      <input type="text" class="form-control" id="usr" value="<?php echo $data->nama?>" name="xnama">
    </div>
    <div class="form-group">
      <label for="usr">Sks</label>
      <input type="text" class="form-control" id="usr" value="<?php echo $data->sks?>" name="xsks">
    </div>
    <div class="form-group">
      <label for="pwd">Semester</label>
      <input type="text" class="form-control" id="pwd" value="<?php echo $data->semester?>" name="xsemester">
    </div>
    <div class="form-group">
      <label for="pwd">No Telpon</label>
      <input type="text" class="form-control" id="pwd" value="<?php echo $data->nomer?>" name="xnomer">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  <?php endforeach?>
  </form>
</div>
    <?php $this->load->view("_partials/js.php") ?>

</body>
</html>