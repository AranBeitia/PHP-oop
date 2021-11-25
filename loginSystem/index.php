<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<script src="./assets/js/main.js" defer></script>
</head>
<body>
	<h2>Login System OOP</h2>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<?php require_once './partials/logoutForm.php'; ?>
		</div>
		<div class="form-container sign-in-container">
			<?php require_once './partials/loginForm.php'; ?>
		</div>
		<?php require_once './partials/overlay.html'; ?>
	</div>
</body>
</html>