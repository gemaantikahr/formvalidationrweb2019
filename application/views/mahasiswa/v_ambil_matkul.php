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
  <h2>Pilih Matkul</h2>
  <form action="<?php echo base_url().'responsi/simpan_matkul'?>" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
								<label for="name">Level*</label>
                                    <div class="form-group">
                                        <select class="form-control" id="sel1" name="xidmatkul" required>
                                        <?php 
                                            foreach ($matkul as $data):
                                        ?>
                                            <option value="<?php echo $data->id_matkul;?>"><?php echo $data->nama_matkul?></option>
                                        <?php endforeach;?>
                                        </select>
                                    </div> 
                            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>
    <?php $this->load->view("_partials/js.php") ?>

</body>
</html>