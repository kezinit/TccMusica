<!DOCTYPE html>
<html lang="en">
<head>
	<title>Frecy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="./Paginas/LoginPage/images/icons/Logo_of.png"/>
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/css/util.css">
	<link rel="stylesheet" type="text/css" href="./Paginas/LoginPage/css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

	 <!-- NavBar -->
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./index.html"><img src="./Imgs/Logo_of.png" alt="" class="logo" width="40px" ></a>
        <button class="navbar-toggler" type="button" 
		data-toggle="collapse" 
		data-target="#navbarSupportedContent" 
		aria-controls="navbarSupportedContent" 
		aria-expanded="false" 
		aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="./Login.php">Entrar <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./Registro.php">Registrar-se</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ajuda</a>
              </li>
              <li class="nav-item2">
                <a class="nav-link" href="#"><b>Premium</b></a>
              </li>
            </li>
          </ul>
        </div>
      </nav>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="validacao.php" method="POST" >
					<span class="login100-form-title p-b-26">
						LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username Invalido">
						<input class="input100" type="text" name="email" id="email" placeholder="Email" required>
						<!-- <span class="focus-input100" data-placeholder="Email"></span> -->
					</div>

					<div class="wrap-input100 validate-input" data-validate="Insira a Senha">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" id="pass" placeholder="Senha" required>
						<!-- <span class="focus-input100" data-placeholder="Senha"></span> -->
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit" id="submit">
								Entrar
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Não tem uma conta?
						</span>

						<a class="txt2" href="./Registro.php">
							Registrar-se
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>