<?php include_once 'includes/session.inc.php'?>
<?php

if($_SERVER['REQUEST_METHOD'] != "POST") {
	header("Location: $referrer", true, 302);
	die();
}



/* Funcao de verificar usuario p/ email. 
** // This can be either an email or a username. Check for email first.
** preg_match("/^([\w\-\.]+)@((\[([0-9]{1,3}\.){3}[0-9]{1,3}\])|(([\w\-]+\.)+)([a-zA-Z]{2,4}))$/", $_POST['username'], $emailmatch);
** if($emailmatch != []){  // Email matched! The user typed an email.
**     $username = $emailmatch[0];
** } else {  // Not an email, but also not empty. Probably the username!
**     $username = $_POST['username'];
** }
**
*/


$action = $_POST['action'];
$password = $_POST['password'] ?? '';
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';

$server = ['localhost', 'root', '', 'bibli'];
$conn = new mysqli($server[0], $server[1], $server[2], $server[3]);

if($action == 'login') {
	$qry = $conn->prepare("SELECT * FROM usuario WHERE username=?;");
	$qry->bind_param('s', $username);

	if(!$qry->execute()) {
		switch($qry->errno) {
			default:
				$_SESSION['ERROR'] = "Unknown error (" . $qry->errno . "): " . $qry->error;
				echo "#EXCEPTION# $qry->error";
		}
	}
	$user = $qry->get_result()->fetch_array(MYSQLI_ASSOC) ?? FALSE;
	if(!$user) {
		$_SESSION['HANDLEDERROR'] = "Nome de usuário ou senha incorreto(a)s.";
		echo "#ERROR# INC_UNAME_PW";
	} else {
		$pwcheck = password_verify($password, $user['password']);
		if($pwcheck) {
			$_SESSION['sessionid'] = $user['username'];
			$_SESSION['loggedin'] = true;
			$_SESSION['MESSAGE'] = "Login realizado com sucesso!";
			echo "#SUCCESS#";
		} else {
			$_SESSION['HANDLEDERROR'] = "Nome de usuário(a) ou senha incorreto(a)s.";
			echo "#ERROR# INC_UNAME_PW";
		}
			// print('Usuario');
	}
} elseif($action == 'register') {
	$qry = $conn->prepare("SELECT * FROM usuario WHERE username=?;");
	$qry->bind_param('s', $username);

	if(!$qry->execute()) {
		switch($qry->errno) {
			default:
				$_SESSION['ERROR'] = "Unknown error (" . $qry->errno . "): " . $qry->error;
				echo "#EXCEPTION# $qry->error";
		}
	}
	$user = $qry->get_result()->fetch_array(MYSQLI_ASSOC) ?? FALSE;
	if($user) {
		$_SESSION['HANDLEDERROR'] = "Usuário '$username' já existe.";
		echo "#ERROR UNAME_ALREADY_EXISTS";
	} else {
		$pw = password_hash($password, PASSWORD_BCRYPT);
		$register = $conn->prepare("INSERT INTO usuario(username, email, password) VALUES (?, ?, ?);");
		$username = "Marcos";
		$email = "igkepsi@gmail.com";
		$register->bind_param("sss", $username, $email, $password_hash);

		if(!$register->execute()) {
			switch($qry->errno) {
				default:
					$_SESSION['ERROR'] = "(" . $qry->errno . "): " . $qry->error;
					echo "#EXCEPTION# $qry->error";
					echo $qry->error;
			}
		} else {
			$_SESSION['MESSAGE'] = "Registered successfully!";
			echo "#SUCCESS#";
		}
	}
}

// header("Location: $referrer", true, 302);
?>