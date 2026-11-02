<?php
session_start();
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<title>Login Professor</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="../../login/imagens/images/icons/icone.png" />

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="../../login/font/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="../../login/vendor/vendor/select2/select2.min.css">
	<link rel="stylesheet" href="../../login/bulma.min.css" />

	<link rel="stylesheet" type="text/css" href="../../login/css/css/main.css">
	<link rel="stylesheet" type="text/css" href="../../login/css/css/util.css">

</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="../../login/imagens/images/imglogin.jpg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="../../login/controle/loginControle.php" method="POST">
					<span class="login100-form-title">
						Login
					</span>

					<?php
					if (isset($_SESSION['nao_autenticado'])) :
					?>
						<div class="notification is-danger">
							<p>ERRO: Usuário ou senha inválidos.</p>
						</div>
					<?php
					endif;
					unset($_SESSION['nao_autenticado']); //limpar a seção
					?>
					<form action="login.php" method="POST">


						<div class="field">
							<div class="control">
								<input name="usuario" name="text" class="input is-large" placeholder="E-mail" autofocus="">
							</div>
						</div>

						<div class="field">
							<div class="control">
								<input name="senha" class="input is-large" type="password" placeholder="Senha">
							</div>
						</div>


						<div class="container-login100-form-btn">
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>

						<div class="text-center p-t-12">
							<span class="txt1">
								Esqueceu
							</span>
							<a class="txt2" href="#">
								Nome de Usuário / Senha?
							</a>
							<br>

							<a class="text-center p-t-12" href="../../index.html">
								<span class="txt1"><strong>
										Voltar
									</strong></span>

						</div>

						<div class="text-center p-t-136">
							<a class="txt2" href="cadastro.php">
								Criar Cadastro
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</form>
			</div>
		</div>
	</div>

	<script src="../../login/vendor/vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="../../login/vendor/vendor/bootstrap/js/popper.js"></script>
	<script src="../../login/vendor/vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="../../login/vendor/vendor/select2/select2.min.js"></script>

	<script src="../../login/vendor/vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="../../login/js/js/main.js"></script>

</body>

</html>