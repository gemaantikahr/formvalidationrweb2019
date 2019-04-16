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
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                        <input class="input100" type="text" name="xemail">
						<span class="focus-input100" data-placeholder="Email"></span>
						<font color="red"><?php echo form_error('xemail');?></font> 
					</div>
					<br>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="xpassword">
						<span class="focus-input100" data-placeholder="Password"></span>
						<font color="red"><?php echo form_error('xpassword');?></font> 
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="xpassword">
						<span class="focus-input100" data-placeholder="Password"></span>
						<font color="red"><?php echo form_error('xpassword');?></font> 
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="xpassword">
						<span class="focus-input100" data-placeholder="Password"></span>
						<font color="red"><?php echo form_error('xpassword');?></font> 
					</div>					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="xpassword">
						<span class="focus-input100" data-placeholder="Password"></span>
						<font color="red"><?php echo form_error('xpassword');?></font> 
					</div>					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="xpassword">
						<span class="focus-input100" data-placeholder="Password"></span>
						<font color="red"><?php echo form_error('xpassword');?></font> 
					</div>					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="xpassword">
						<span class="focus-input100" data-placeholder="Password"></span>
						<font color="red"><?php echo form_error('xpassword');?></font> 
					</div>
					

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Masukan
                            </button>
                            
						</div>
                    </div>
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