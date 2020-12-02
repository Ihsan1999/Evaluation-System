<?php 

include_once 'dbConn.php';

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phoneNo = $_POST['phoneNo'];
	$otherPersonal = $_POST['otherPersonal'];
	$experience = $_POST['experience'];
	$honor_award = $_POST['honor_award'];
	$membership = $_POST['membership'];
	$honorStudent = $_POST['honorStudent'];
	$serviceActivity = $_POST['serviceActivity'];
	$researchInterest = $_POST['researchInterest'];
	$publication = $_POST['publication'];
	$researchContract = $_POST['researchContract'];
	$otherResearch = $_POST['otherResearch'];
	$presentation = $_POST['presentation'];
	
	$qry = "INSERT INTO `faculty_resume`(`Name`, `Address`, `Phone Number`, `Other Personal Information`, `Experience`, `Honor and Awards`, `Memberships`, `Graduate Students Postdocs Undergraduate Student Honor Students`, `Service Activity`, `Brief Statement of Research Interest`, `Publications`, `Research Grants and Contracts`, `Other Research or Creative Accomplishments`, `Select Professional Presentations`) 

		VALUES ('$name','$address','$phoneNo','$otherPersonal','$experience','$honor_award','$membership','$honorStudent','$serviceActivity','$researchInterest','$publication','$researchContract','$otherResearch','$presentation')";

		$run = mysqli_query($con, $qry);

}

mysqli_close($con);

 ?>

 <script type="text/javascript">
	alert("form submit successfully");
	window.history.go(-1);
</script>