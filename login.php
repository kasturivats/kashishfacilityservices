<?php
include('style.css');
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 <div class="container">
 	<h1>Login</h1>
    <hr>
<form method="post">
	<label><b>Email</b></label>
	<input type="text" name="email" placeholder="Enter Email">

	<label><b>Password</b></label>
	<input type="password" name="password" placeholder="Enter Password">

	<button  type="submit" value="submit" class="registerbtn" name="log">Login</button>

  </div>
  <div class="container signin">
<a href="register.php">Need an account? Sign up!</a></div>
</form>