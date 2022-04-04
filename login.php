<?php
    require 'config.php';
	if(!empty($_SESSION["customerid"])){
		header("Location: index.php");
	}
	
    if(isset($_POST["submit"])){
        $username = $_POST["log-user"];
        $password = $_POST["log-pass"];
        $result = mysqli_query($conn, "SELECT * FROM customerinfo WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result) > 0){
            if($password == $row["password"]){
                $_SESSION["login"] = true;
                $_SESSION["customerid"] = $row["customerid"];
                header("Location: index.php");
            } else {
                echo "<script> alert('Wrong Password! Please try again.'); </script>";
            }
        } else {
            echo "<script> alert('User Not Registered'); </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <div class="col-lg-3 col-lg-offset-4">
        <form class="login" action="" method="post" autocomplete="off">
            <h1>Sign In</h1>
            <label>Username</label>
            <input type="text" name="log-user" id="log-user" required value="" class="form-control">
            <label>Password</label>
            <input type="password" name="log-pass" id="log-pass" required value="" class="form-control">
            <button type="submit" name="submit">&nbsp; Login &nbsp;</button>
			<br/>
			<br/>
        <p align="right">Don't have an account?
			<a href="register.php">Register Now</a>
		</p>
        </form>
    </div>
</body>
<style>
	body {
	  background: black;
	  font-family: 'Nunito', sans-serif;
	}

	.login {
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
	.login::before, .login::after {
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
	.login::before {
	  left: 0%;
	  bottom: -60%;
	  background-color: #3E3D53;
	  -webkit-animation: wawes 6s infinite linear;
	  -moz-animation: wawes 6s infinite linear;
	  animation: wawes 6s infinite linear;
	}
	.login::after {
	  left: -50%;
	  bottom: -15%;
	  background-color: #696880;
	  -webkit-animation: wawes 7s infinite;
	  -moz-animation: wawes 7s infinite;
	  animation: wawes 7s infinite;
	}
	.login > input {
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
	.login > button {
	  font-family: "Nunito", sans-serif;
	  cursor: pointer;
	  color: #fff;
	  font-size: 16px;
	  text-transform: uppercase;
	  width: 80px;
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
	.login > button:hover {
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