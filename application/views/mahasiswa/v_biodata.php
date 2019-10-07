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
  <?php foreach($biodata as $data):?>
    <div class="form-group">
      <label for="usr">Nim</label>
      <input type="text" class="form-control" id="usr" value="<?php echo $data->nim?>" readonly>
    </div>
    <div class="form-group">
      <label for="usr">Nama</label>
      <input type="text" class="form-control" id="usr" value="<?php echo $data->nama?>" name="username" readonly>
    </div>
    <div class="form-group">
      <label for="usr">Sks</label>
      <input type="text" class="form-control" id="usr" value="<?php echo $data->sks?>" name="username" readonly>
    </div>
    <div class="form-group">
      <label for="pwd">Semester</label>
      <input type="text" class="form-control" id="pwd" value="<?php echo $data->semester?>" name="password" readonly>
    </div>
    <div class="form-group">
      <label for="pwd">No Telpon</label>
      <input type="text" class="form-control" id="pwd" value="<?php echo $data->nomer?>" name="password" readonly>
    </div>
    <a href="<?php echo site_url('responsi/edit_biodata/'.$data->nim) ?>" class="btn btn-small btn-info">Edit</a>
  <?php endforeach?>
</div>
    <?php $this->load->view("_partials/js.php") ?>

</body>
</html>