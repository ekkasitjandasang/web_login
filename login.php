<?php
 include'connectdb.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
<body>
 
	<img src="images/motian1" class="img1" alt="clip">
   <section>
   	<form action="login_per.php" method="post">
   		<div class="contianer">
   			<div class="div1">
   				<h1>Build to Webpage</h1>
   				<h3>   This is my first page </h3>
   			</div>
   			<div class="div2">
   				<img src="images/motian1.jpg" alt="">
   				<h4>Need an Account ?<a href="frm_register.php">Sign in</a></h4>
   				<input type="text" name="username" placeholder="username">
   				<input type="password" name="password" placeholder="password">
   				<span style="color:red;"></span>
   				<input type="submit" name="submit" value="sign In">
   				<a href="#">Forgot Your Password?</a>
   			</div>
   		</div>
   	</form>

   </section>
</body>
</html>