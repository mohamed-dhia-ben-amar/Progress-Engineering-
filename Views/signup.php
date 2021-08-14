<?php
session_start();

include 'C:/xampp/htdocs/Login/Controller/ProfilC.php';
require_once 'C:/xampp/htdocs/Login/Model/Profil.php';
include("function.php");

$Profil = new Profil();
$ProfilC = new ProfilC();


    if (isset($_POST["user_name"])  && isset($_POST["password"])) {
        $Profil->Name = $_POST["user_name"];
        $Profil->PWD = $_POST["password"];
        $Profil->id = random_num(5);
        $ProfilC->ajouterProfil($Profil);

		header("Location: login.php");
} else {
	//..Code
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Signup</title>
</head>

<body>

	<style type="text/css">
		body {
			background-image: url('bg.jfif');
		}

		input[type=text],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=password],
		select {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 100%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: #45a049;
		}

		div {
			border-radius: 5px;
			background-color: #f2f2f2;
			padding: 20px;
			width: 50%;
			margin: 0 auto;
			margin-top: 100px;
		}

		div .title {
			text-align: center;
			color: #111;
			font-family: 'Helvetica Neue', sans-serif;
			font-size: 60px;
			font-weight: bold;
			letter-spacing: -1px;
			line-height: 1;
			text-align: center;
			margin-top: -8px;
		}
	</style>

	<div id="box">

		<form method="post">
			<div class="title">Signup</div>
			
			<label>Name</label>
			<input id="text" type="text" name="user_name"><br><br>
			<label>Password</label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>

</html>