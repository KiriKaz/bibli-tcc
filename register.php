<?php include_once 'includes/session.inc.php'?>
<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registrar</title>

		<link rel="stylesheet" href="etc/register.css">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div id="containing">
			<form class="register_section" method="POST">
				<h1> Registrar </h1>
				<input type="text" id="username" name="username" placeholder="Nome de Usuário">
				<input type="text" id="email" name="email" placeholder="Endereço de Email">
				<input type="password" id="password" name="password" placeholder="Senha">
				<input type="submit" value="Registrar">
			</form>
		</div>

		<div class="animation-area">
			<ul class="box-area">
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<script>
			$(".register_section").submit(function(event){
				event.preventDefault();
				var username = $("#username").val();
				var password = $("#password").val();
				var email = $("#email").val();
				$.post('session_man.php', {username: username, email: email, password: password, action: 'register'})
					.done(function(data) {
						if(data.startsWith("#EXCEPTION#")) {
							let erro = "Erro inesperado: ";
							erro += "<?=$_SESSION['ERROR'] ?? ''?>";
							alert(erro);
							console.log(data);
						} else if(data.startsWith("#ERROR#")) {
							let erro = "Erro: ";
							erro += "<?=$_SESSION['HANDLEDERROR'] ?? ''?>";
							alert(erro);
							console.log(data);
						} else if(data.startsWith("#SUCCESS#")){
							// let erro = "<?=$_SESSION['MESSAGE'] ?? ''?>";
							// alert(erro);
							window.location.assign("..");
						} else {
							alert("Inesperado!");
							alert(data);
						}
					});
			});
		</script>

		<!-- Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>