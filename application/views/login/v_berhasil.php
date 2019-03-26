<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V2</title>
	<?php $this->load->view("_partials/head.php") ?>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
                        <h6>Selamat Datang <?php echo $email_pengguna?></h6>
                        <p>Anda Berhasil Login</p>
                    </span>
                    <br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Keluar
                            </button>
                            
						</div>
                    </div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
    <?php $this->load->view("_partials/js.php") ?>
</body>
</html>