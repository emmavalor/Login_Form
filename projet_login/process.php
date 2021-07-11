<?php

$users = [
	["email" => 'emma@gmail.com',
	"password" => '$2y$10$4vfTHYAnPXduto4SJeSz7.xybZWMJZeugqgHhh.Y3zqZvy2yPEJPK' // emma
	],

	["email" => 'yanis@gmail.com',
	"password" => '$2y$10$LCI.6Fk2RaFARZpJ9Bvkk.0gaRYxkKg92I8p6ayZjhiQhK1EWJLzW' // yanis
	],
];


$loggedUser;

// Avec foreach

// if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
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
// }


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
}