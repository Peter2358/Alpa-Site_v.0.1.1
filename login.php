<?php
session_start();
include('config.php');

if (isset($_POST['login'])) 
{
	$username = $_POST['username'];
    $password = $_POST['password'];
    $query = $connection->prepare("SELECT * FROM users WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
	if (!$result) 
	{
		echo '<p class="error">Username password combination is wrong!</p>';
    } 
	else 
	{
		if (password_verify($password, $result['password']))
		{
			$_SESSION['user_name'] = $result['username'];
			header("location: welcome.php");
			exit;
        }
		else
		{
			echo '<p class="error">Username password combination is wrong!</p>';
        }
	}
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Login</title>
<meta charset="UTF-8">
<link rel = "stylesheet" type = "text/css" href = "style.css"> 
</head>
<body>
<form method="post" action="" name="signin-form">

<div class="form-element">
<label>Username</label>
<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
</div>

<div class="form-element">
<label>Password</label>
<input type="password" name="password" required />
</div>

<button type="submit" name="login" value="login">Log In</button>
<p>Do not have an account? <a href="register.php">Register here</a></p>
</form>
</body>
</html>
