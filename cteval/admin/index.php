
<!DOCTYPE html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Admin Login Page</title>
	<link rel="stylesheet" href="style.css" type="text/css" />

<link rel="shortcut icon" href="/favicon.ico">

<style type="text/css">
<!--
.error {
	color: #FF0000;
	font-weight: normal;
	font-size: 14px;
}
.style1 {
	font-size: 10
}

-->
    </style>
</head>

<body>

	<div id="container">
	<div id="header">	</div>
	<div id="content">
		<h2>Teacher and Course Evaluation System Admin Section</h2>		
		<p class="error"> <?php
				if(isset($_SESSION['loginerror']))
				{
				
				print('Incorrect Username/Password Combination');
				unset($_SESSION['loginerror']);
				}
				
				?></p>

		<form method="post" action="index.php">
		<div class="form_container">

			<div class="label"><label for="username">Username:</label></div>

			<div class="field"><input type="text" name="username" id="username" class="text_input initial_focus" /></div>

			<div class="label"><label for="password">Password:</label></div>
			<div class="field"><input type="password" name="password" id="password" class="text_input" /></div>
		</div>
		<p class="submit">
		  <input name="login" type="submit" id="login" value="Login" />
		</p>
		</form>
	</div>
        <div align="center" class="style1">Powered by:<br />
      Copyright © 2020 Computer Cell CS &amp; IT Department UET Peshawar </div>
</div>

	

</body>

</html>

<?php 
if (isset($_POST['login'])) {
	include_once('dbConn.php');
   $username= $_POST['username'];
   $password= $_POST['password'];
   $query = mysqli_query($con,"SELECT * FROM `admin` WHERE username ='$username' && password = '$password'"); //print_r($query);
   if(mysqli_num_rows($query) > 0 ){
       header('location: proformas/home.php');
   } else{
   	echo "<script>alert('Password Not Valid !');</script>";
   }

}
?>