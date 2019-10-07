<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gema Antika Hariadi</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
					<span class="login100-form-title p-b-26">
                        Selamat Datangs
                        <p>Silahkan Login</p>
					</span>



					<?php echo form_open('login/masuk'); ?>
					<div class="form-group">
						<label for="usr">Name:</label>
						<input type="text" class="form-control" id="usr" name="xnim">
						<font color="red"><?php echo form_error('xnim');?></font> 
					</div>
					<br>
					<div class="form-group">
						<label for="usr">Password:</label>
						<input type="text" class="form-control" id="usr" name="xpassword">
						<font color="red"><?php echo form_error('xpassword');?></font> 
					</div>					
					<button class="btn btn-info" type="submit">
								Login
                            </button>        
                </form>

					<div class="text-center p-t-115">
						<span class="txt1">
							Belum Punya Akun.?
						</span>

						<a class="txt2" href="#">
							Bikin
						</a>
					</div>
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>