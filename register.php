<?php
require 'config.php';

if (!empty($_SESSION["customerid"])) {
	header("Location: index.php");
}

if (isset($_POST["submit"])) {

	$uname = $_POST["per-username"];
	$pass = $_POST["per-pass"];
	$cpass = $_POST["per-cpass"];
	$emailadd = $_POST["per-email"];
	$cnumber = $_POST["per-contact"];
	$duplicate = mysqli_query($conn, "SELECT * FROM customerinfo WHERE username = '$uname' OR email = '$emailadd'");

	if (mysqli_num_rows($duplicate) > 0) {
		while ($data = mysqli_fetch_assoc($duplicate)) {
			echo "<script> alert('Username or Email Has Already Been Taken'); </script>";
		}
	} else {
		if ($pass == $cpass) {
			$query = "INSERT INTO customerinfo VALUES('', '$uname', '$pass', '$cpass', '$emailadd', '$cnumber')";
			mysqli_query($conn, $query);

			echo
			"<script> alert('You have successfully registered! You can now login to your account.'); </script>";
		} else {
			echo
			"<script> alert('Password Does Not Match'); </script>";
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register Page</title>
</head>

<body>
	<div class="col-lg-3 col-lg-offset-4">
		<form class="register" action="" method="post" autocomplete="off">
			<h1 align="center">Sign Up</h1>
			<label>Username</label>
			<input type="text" name="per-username" id="per-username" required value="" class="form-control">
			<br />
			<label>Password</label>
			<input type="password" name="per-pass" id="per-pass" required value="" class="form-control">
			<br />
			<label>Confirm Password</label>
			<input type="password" name="per-cpass" id="per-cpass" required value="" class="form-control">
			<br />
			<label>E-mail</label>
			<input type="email" name="per-email" id="per-email" required value="" class="form-control">
			<br />
			<label>Contact Number</label>
			<input type="text" name="per-contact" id="per-contact" required value="" class="form-control">
			<br />
			<button type="submit" name="submit">Register</button>
			<br>
			<p align="right">Already have an account?
				<a href="login.php">Login</a>
			</p>
		</form>
	</div>
</body>
<style>
	body {
		background: black;
		font-family: 'Nunito', sans-serif;
	}

	.register {
		overflow: hidden;
		background-color: white;
		padding: 40px 30px 30px 30px;
		border-radius: 10px;
		position: absolute;
		top: 50%;
		left: 50%;
		width: 400px;
		-webkit-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		-o-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		-webkit-transition: -webkit-transform 300ms, box-shadow 300ms;
		-moz-transition: -moz-transform 300ms, box-shadow 300ms;
		transition: transform 300ms, box-shadow 300ms;
		box-shadow: white;
	}

	.register::before,
	.register::after {
		content: "";
		position: absolute;
		width: 600px;
		height: 600px;
		border-top-left-radius: 40%;
		border-top-right-radius: 45%;
		border-bottom-left-radius: 35%;
		border-bottom-right-radius: 40%;
		z-index: -1;
	}

	.register::before {
		left: 20%;
		bottom: -5%;
		background-color: #3E3D53;
		-webkit-animation: wawes 6s infinite linear;
		-moz-animation: wawes 6s infinite linear;
		animation: wawes 6s infinite linear;
	}

	.register::after {
		left: -55%;
		bottom: 10%;
		background-color: #696880;
		-webkit-animation: wawes 7s infinite;
		-moz-animation: wawes 7s infinite;
		animation: wawes 7s infinite;
	}

	.register>input {
		font-family: "Nunito", sans-serif;
		display: block;
		border-radius: 5px;
		font-size: 16px;
		background: white;
		width: 100%;
		border: 0;
		padding: 10px 10px;
		margin: 15px -10px;
	}

	.register>button {
		font-family: "Nunito", sans-serif;
		cursor: pointer;
		color: #fff;
		font-size: 16px;
		text-transform: uppercase;
		width: 100px;
		border: 0;
		padding: 10px 0;
		margin-top: 10px;
		margin-left: -5px;
		border-radius: 5px;
		background-color: #3E3D53;
		-webkit-transition: background-color 300ms;
		-moz-transition: background-color 300ms;
		transition: background-color 300ms;
	}

	.register>button:hover {
		background-color: black;
	}

	@-webkit-keyframes wawes {
		from {
			-webkit-transform: rotate(0);
		}

		to {
			-webkit-transform: rotate(360deg);
		}
	}

	@-moz-keyframes wawes {
		from {
			-moz-transform: rotate(0);
		}

		to {
			-moz-transform: rotate(360deg);
		}
	}

	@keyframes wawes {
		from {
			-webkit-transform: rotate(0);
			-moz-transform: rotate(0);
			-ms-transform: rotate(0);
			-o-transform: rotate(0);
			transform: rotate(0);
		}

		to {
			-webkit-transform: rotate(360deg);
			-moz-transform: rotate(360deg);
			-ms-transform: rotate(360deg);
			-o-transform: rotate(360deg);
			transform: rotate(360deg);
		}
	}

	a {
		color: white;
	}
</style>

</html>