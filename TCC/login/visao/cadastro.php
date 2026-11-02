<?php
session_start();

?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<title>Cadastro</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="../../login/imagens/imagesl/icons/icone.png" />

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendorl/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../../login/font/fontsl/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../../login/font/fontsl/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendorl/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendorl/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendorl/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendorl/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendorl/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="../../login/bulma.min.css" />

	<link rel="stylesheet" type="text/css" href="../../login/css/cssl/util.css">
	<link rel="stylesheet" type="text/css" href="../../login/css/cssl/main.css">

</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../../login/imagens/imagesl/background.png');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<div class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Cadastro
					</span>

					<?php
					if (isset($_SESSION['status_cadastro'])) : //os dois pontos ':' siginifica fechamento verdadeiro//
					?>
						<div class="notification is-success">
							<p>Cadastro efetuado!</p>
							<p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
						</div>
					<?php
					endif;
					unset($_SESSION['status_cadastro']);
					?>
					<?php
					if (isset($_SESSION['usuario_existe'])) :
					?>
						<div class="notification is-info">
							<p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
						</div>
					<?php
					endif;
					unset($_SESSION['usuario_existe']);
					?>

					<div class="box">
						<form action="../../login/controle/registrarUsuarioControler.php" method="POST">
							<div class="field">
								<div class="control">
									<input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input name="usuario" type="text" class="input is-large" placeholder="E-mail">
								</div>
							</div>
							<div class="field">
								<div class="control">
									<input name="senha" class="input is-large" type="password" placeholder="Senha">
								</div>
							</div>


							<br>

							<div class="container-login100-form-btn">
								<div class="wrap-login100-form-btn">
									<div class="login100-form-bgbtn"></div>
									<button type="submit" class="login100-form-btn">
										EFETUAR CADASTRO
									</button>
								</div>
							</div>

							<div class="txt1 text-center p-t-54 p-b-20">
								<span>
									Ou cadastre-se usando
								</span>
							</div>

							<div class="flex-c-m">
								<a href="#" class="login100-social-item bg1">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="login100-social-item bg2">
									<i class="fa fa-instagram"></i>
								</a>

								<a href="#" class="login100-social-item bg3">
									<i class="fa fa-google"></i>
								</a>
							</div>
							<br>


							<center><span class="txt1 p-b-17">
									Falar com Atendente
								</span></center>

							<center><a href="https://wa.me/61994324833?text=Ol%C3%A1!%0AGostaria%20de%20fazer%20minha%20matricula!" class="txt2">
									WHATSAPP
								</a></center>
					</div>
					<div>
						<button type="submit" class="button is-block is-link is-large is-fullwidth"><a href="index.php">Acessar Login</button>
					</div>
					<br>
					<a class="text-center p-t-12" href="../../index.html">
						<span class="txt1"><strong>
								<center>
									Voltar
								</center>
							</strong></span>
						</form>
				</div>
			</div>
		</div>


		<div id="dropDownSelect1"></div>


		<script src="../../login/vendor/vendor/jquery/jquery-3.2.1.min.js"></script>

		<script src="../../login/vendor/vendor/animsition/js/animsition.min.js"></script>

		<script src="../../login/vendor/vendor/bootstrap/js/popper.js"></script>
		<script src="../../login/vendor/vendor/bootstrap/js/bootstrap.min.js"></script>

		<script src="../../login/vendor/vendor/select2/select2.min.js"></script>

		<script src="../../login/vendor/vendor/daterangepicker/moment.min.js"></script>
		<script src="../../login/vendor/vendor/daterangepicker/daterangepicker.js"></script>

		<script src="../../login/vendor/vendor/countdowntime/countdowntime.js"></script>

		<script src="../../login/js/js/main.js"></script>


</body>

</html>