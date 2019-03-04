<!DOCTYPE html>
<html lang="en">
<head>
	<title>Project Luas Segitiga</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt> <center><h3> KOHANUDNAS TNI</h3></center>
					<center><img src="https://tni-au.mil.id/konten/unggahan/2018/01/logo-kohanudnas.png"></center>	
				</div>

				<form class="login100-form validate-form" action="index2" method="post">
					<span class="login100-form-title">
						HITUNG LUAS SEGITIGA YA
					<font color="white"></font>
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="alas" ;>
						<input class="input100" type="text" name="alas" placeholder="Input Alas">
						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input" data-validate = "tinggi" ;>
						<input class="input100" type="text" name="tinggi" placeholder="Input Tinggi">
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit">
							Hasilnya
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Hasilnya Lihat Dibawah
						</span>
						<a href="#" class="txt3">
							<?php
					if(isset($_POST['submit'])){
						$alas = $_POST['alas'];
						$tinggi = $_POST['tinggi'];
	
						$luas_segitiga = 1/2 * $alas * $tinggi;
	
						echo "Ini Loh Hasilnya alas : $alas, dan tinggi $tinggi <br>";
						echo "yaitu $luas_segitiga";
						}		
						?>
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							THE END
							<i class="fa fa-blind" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>