<?php

	ini_set('display_errors', 1);
	error_reporting(E_ALL);
if (isset($_GET["status"])) {
		$status = $_GET["status"];
	}

	//on recupere la valeur du parametre page dans l'url
	if (!empty($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 'home';
	}
	require_once 'parties/header.php';



	require_once 'parties/footer.php';
?>
<!-- 
if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
		$email = strtolower(trim($_POST['email']));
		$password = trim($_POST['password']);
	 if ($users[0]['email'] == $email) {
		if (password_verify($password, $users[0]['password'])) {
			header("Location:dashboard.php?email=$email");
		} else {
			header('Location:index.php');
		}
	} else {
		header('Location:index.php');
	}
} -->


<!-- if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
// 		$email = strtolower(trim($_POST['email']));
// 		$password = trim($_POST['password']);
// 		foreach ($users as $user) {
// 			 if ($user['email'] == $email && (password_verify($password, $user['password']))) {
// 			 		$loggedUser = $user['email'];
// 					header("Location:dashboard.php?email=$email");
// 					return
// 				} else {
// 					header('Location:index.php');
// 				}
// 		}else {
// 		header('Location:index.php');
// 	} 
// 	}
// } -->