<?php
include('dbConn.php'); 

if(isset($_POST['submit'])){

	$deptName = $_POST['deptName'];
	$facultyName = $_POST['facultyName'];
	$phdInitiat = $_POST['phdInitiat'];
	$phdJournals = $_POST['phdJournals'];
	$phdComputers = $_POST['phdComputers'];
	$bandwidth = $_POST['bandwidth'];
	$facultyMembers = $_POST['facultyMembers'];
	$phdAdvisors = $_POST['phdAdvisors'];
	$internationalArticles = $_POST['internationalArticles'];
	$asianArticles = $_POST['asianArticles'];
	$researchProject = $_POST['researchProject'];
	$postStudent = $_POST['postStudent'];
	$researchFunds = $_POST['researchFunds'];
	$internationalLinkages = $_POST['internationalLinkages'];
	$phdDegrees = $_POST['phdDegrees'];
	$phdStudents = $_POST['phdStudents'];
	$studentRatio = $_POST['studentRatio'];
	$phdEntrance = $_POST['phdEntrance'];

	$rad1 = $_POST['radio1'];
	if ($rad1 == "yes") {
		$radio1 = "yes";  
	}
	else{
		$radio1 = "no";
	}

	$phdCompleted = $_POST['phdCompleted'];
	$postMSc = $_POST['postMSc'];
	$mphilCourses = $_POST['mphilCourses'];
	$phdCourses = $_POST['phdCourses'];

	$rad2 = $_POST['radio2'];
	if ($rad2 == "yes") {
		$radio2 = "yes";
	}
	else {
		$radio2 = "no";
	}

	$rad3 = $_POST['radio3'];
	if ($rad3 == "yes") {
		$radio3 = "yes";
	}
	else {
		$radio3 = "no";
	}

	$rad4 = $_POST['radio4'];
	if ($rad4 == "yes") {
		$radio4 = "yes";
	}
	else {
		$radio4 = "no";
	}

	$rad5 = $_POST['radio5'];
	if ($rad5 == "yes") {
		$radio5 = "yes";
	}
	else {
		$radio5 = "no";
	}

	$phdExaminers = $_POST['phdExaminers'];
	$examinerSelection = $_POST['examinerSelection'];
	$phdAward = $_POST['phdAward'];
	$otherInfo = $_POST['otherInfo'];


	$qry = "INSERT INTO `department_survey_offering_phd`(`question_1.1`, `question_1.2`, `question_1.3`, `question_1.4`, `question_1.5`, `question_1.6`, `question_2.1`, 
		`question_2.2`, `question_3.1`, `question_3.2`, `question_3.3`, `question_3.4`, 
		`question_3.5`, `question_3.6`, `question_4.1`, `question_4.2`, `question_4.3`, 
		`question_5.1`, `question_5.2`, `question_5.3`, `question_5.4`, `question_5.5`, 
		`question_5.6`, `question_5.7.1`, `question_5.7.2`, `question_5.7.3`, `question_5.7.4`, 
		`question_5.8`, `question_5.9`, `question_5.10`, `question_6`) 
		 VALUES ('$deptName','$facultyName','$phdInitiat','$phdJournals','$phdComputers','$bandwidth','$facultyMembers','$phdAdvisors','$internationalArticles','$asianArticles','$researchProject','$postStudent','$researchFunds','$internationalLinkages','$phdDegrees','$phdStudents','$studentRatio','$phdEntrance','$radio1','$phdCompleted','$postMSc','$mphilCourses','$phdCourses','$radio2','$radio3','$radio4','$radio5',
		 	'$phdExaminers','$examinerSelection','$phdAward','$otherInfo')";

	$run = mysqli_query($con, $qry);


}

mysqli_close($con);

 ?>

<script type="text/javascript">
	alert("Form Submit Successfully!");
	window.history.go(-1);
</script>
