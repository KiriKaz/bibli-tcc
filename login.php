<?php include_once 'includes/session.inc.php'?>
<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login</title>

		<link rel="stylesheet" href="etc/login.css">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>
		<div id="containing">
			<form class="login_section" method="POST">
				<h1> Login </h1>
				<input type="text" id="username" name="username" placeholder="Nome de Usuário">
				<input type="password" id="password" name="password" placeholder="Senha">
				<input type="submit" value="Login">
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
			$(".login_section").submit(function(event){
				event.preventDefault();
				var username = $("#username").val();
				var password = $("#password").val();
				$.post('session_man.php', {username: username, password: password, action: 'login'})
					.done(function(data) {
						if(data.startsWith("#EXCEPTION#")) {
							let erro = "Erro inesperado: ";
							erro += "<?=$_SESSION['ERROR'] ?? ''?>";
							alert(erro);
							console.log(data);
						} else if(data.startsWith("#ERROR#")) {
							let erro = "Erro: Usuário e/ou senha incorretos.";
							// erro += "<?=$_SESSION['HANDLEDERROR'] ?? ''?>";
							// erro += $.session("HANDLEDERROR");
							alert(erro);
							console.log(data);
						} else if(data.startsWith("#SUCCESS#")){ 
							let erro = "<?=$_SESSION['MESSAGE'] ?? ''?>";
							// alert(erro);
							window.location.assign("..");
						} else {
							alert("Inesperado!")
							alert(data)
						}
					});
			});
		</script>

		<!-- Bootstrap -->
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>