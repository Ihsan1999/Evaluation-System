<?php


//require_once('functions/session.php');
// if (isset($_SESSION['mystudent']))
// {

// header('Location: studentseclist.php');
// }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Evaluation System</title>

<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="ihsan Afridi" />
<meta name="description" content="Evaluation System" />
<meta name="keywords" content="By ihsan Afridi" />

<link rel="stylesheet" href="../../images/VectorLover.css" type="text/css" />

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

	<!--header -->
	<div id="header">			
				
		<h1 id="logo-text"><a href="" title="">UET Peshawar </a></h1>		
		<p id="slogan">Evaluation System</p>	
		
	<!-- 	<div id="top-menu">
			<p><a href="">Home</a> | <a href="about.php">about</a> | <a href="log.php">login</a></p>
	  </div> -->			
				
	<!--header ends-->					
	</div>
		
	<!-- navigation starts-->	
				
			
	<!-- content starts -->
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
				
				
			<h3 align="center">Generate Password </h3>
			<form action="" method="post" id="contactform">	
				<p>
					<label for="message">Select Department</label>	
			          	<select class="form-control" name="department">
							<option value="CS&IT" dept="CS">CS&IT</option>
							<option value="Agriculture Engineering">Agriculture Engineering</option>
							<option value="Chemical Engineering">Chemical Engineering</option>
							<option value="Civil Engineering">Civil Engineering</option>
							<option value="Computer System Engineering">Computer System Engineering</option>
							<option value="Electrical Engineering">Electrical Engineering</option>
							<option value="Industrial Engineering">Industrial Engineering</option>
							<option value="Mechanical Engineering">Mechanical Engineering</option>
							<option value="Mining Engineering">Mining Engineering</option>
							<option value="Mechatronics Engineering">Mechatronics Engineering</option>

						</select>
			  </p>
			  <p>
					<label for="message">Select Proforma Name</label>	
			          	<select class="form-control" name="user_name">
							<option value="survey_of_graduating_students">survey of graduating students</option>
							<option value="faculty_survey">Faculty Survey</option>
							<option value="employer_survey">Employer Survey</option>
							<option value="alumni_survey">Alumni Survey </option>
							<option value="research_student_progress_review_form">research student progress review</option>
							<option value="faculty_course_review_report">Faculty Course Review Report</option>
							<option value="faculty_resume">Faculty Resume</option>

						</select>
			  </p>
			  <p>
					<label for="message">No Of Passwrod</label>
			        <input id="password" name="password" type="number" tabindex="4" required />
			  </p>	
			
				<p class="no-border">
					<input type="submit" name="submit" class="button btn btn success" id="submit" tabindex="5" value="Submit" />
         		<input class="button" type="reset" value="Reset" tabindex="6" />	
				</p>
					
		  </form>				
</div>
		<!-- main ends -->	
	  </div>
				
			
		
	<!-- content ends-->	
	</div>
		
	<!-- footer starts -->		
	<div id="footer">
						
			<p> 2020 <strong>UET Peshawar reserved</strong> | 
		Designed by: <a href="#">Computer Cell</a> CS & IT UET PESHAWAR 
   		</p>			
	
	<!-- footer ends-->
	</div>

<!-- wrap ends here -->
</div>

</body>
</html> 
<?php 
include_once('dbConn.php');
if(isset($_POST['submit'])){
	$no         = $_POST['password'];
	$department = $_POST['department'];
	$user_name  = $_POST['user_name'];
   for ($i=0; $i < $no; $i++) { 
    $numbers = array_rand(range(0, 9), rand(3, 5));
    $uppercase = array_rand(array_flip(range('A', 'Z')), rand(2, 6));
    $lowercase = array_rand(array_flip(range('a', 'z')), rand(3, 6));
    $special = array_rand(array_flip(['@', '#', '$', '!', '%', '*', '?', '&']), rand(3, 4));

    $password = array_merge(
        $numbers,
        $uppercase,
        $lowercase,
        $special
    );

    shuffle($password);

    $password=  implode($password);
    $query = mysqli_query($con,"insert into proformaLogin(password,department,user_name) value('$password','$department','$user_name')"); 
} // end of for loop
echo '<script> alert("Password Generate Successfully");</script>';
}
?>