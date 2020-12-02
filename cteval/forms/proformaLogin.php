
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Evaluation System</title>


<link rel="stylesheet" href="images/VectorLover.css" type="text/css" />

<style type="text/css">
<!--
.style20 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
<style type="text/css">
<!--
.style1 {
	font-size: 18px;
	font-weight: bold;
}
.style2 {font-size: 18px}
-->
</style>

</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
	<div id="header">			
		<h1 id="logo-text"><a href="proformaLogin.php" title="">UET Peshawar </a></h1>		
		<p id="slogan">Evaluation System </p>					
	</div>

	<div id="content">
	
		<div id="main">
				<div align="center">
				<?php
				if(isset($_SESSION['loginerror']))
				{
				
				print('<p class="style20" >Invalid username or password entered</p>');
				unset($_SESSION['loginerror']);
				}
				
				?>
				
			<h3 align="center">Login </h3>
			<form action="" method="post" id="contactform">
			  <p>
					<label for="email">Username</label>
			        <input id="username" name="username" type="text" tabindex="4" value="<?php echo $_GET['name']?>"  readonly/>
			  </p>
					
			  <p>
					<label for="message">Password</label>
			        <input id="password" name="password" type="password" tabindex="4" />
			  </p>	
			
				<p class="no-border">
					<input type="submit" name="login" class="button" id="login" tabindex="5" value="login" />
         		<input class="button" type="reset" value="Reset" tabindex="6" />	
				</p>
					
		  </form>				
</div>
		<!-- main ends -->	
	  </div>
				
			<div id="sidebar">

		</div>		
		
	<!-- content ends-->	
	</div>
		
	<!-- footer starts -->		
	<div id="footer">
						
			<p>	2020 <strong>UET Peshawar reserved</strong> | 
		Designed by: <a href="#">Computer Cell</a> CS & IT UET PESHAWAR 
   		</p>			
	
	<!-- footer ends-->
	</div>

<!-- wrap ends here -->
</div>

</body>
</html>
<?php 
if (isset($_POST['login'])) {
	include_once('functions/dbConn.php');
   $user_name= $_GET['name'];
   $password= $_POST['password'];
   $query = mysqli_query($con,"SELECT * FROM `proformalogin` WHERE user_name ='$user_name' && password = '$password'"); //print_r($query);
   if(mysqli_num_rows($query) > 0 ){
       header('location:'.$user_name.'.php');
   } else{
   	echo "<script>alert('Password Not Valid !');</script>";
   }

}
?>