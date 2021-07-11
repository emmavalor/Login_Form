<!DOCTYPE html>
	<html lang="fr">
		<head>
			<meta charset="utf-8">
			<title>Login Page</title>
		</head>

		<body>
			<h1>LOGIN PAGE</h1>

				<h3>Enregistrer vous</h3>

			<div class="container" style="display:flex; flex-direction: column; justify-content: center; align-items: center;">
				<form action="process.php" method="post" style="display: flex; flex-direction: column; align-items: center; gap:1rem;">
					<input type="email" name="email" placeholder="Entrez votre email" required>
					<input type="password" name="password" placeholder="Entrez votre mot de passe" required> 
					<input type="submit" name="submit" value="Sauvegarder">
				</form>
			</div>



