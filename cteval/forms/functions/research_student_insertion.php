<?php 

include('dbConn.php');

if(isset($_POST['submit'])){

	$stdname = $_POST['stdname'];	
	$admission_date = $_POST['admission_date'];
	$research_date = $_POST['research_date'];
	$completion_date = $_POST['completion_date'];
	$credit_hours = $_POST['credit_hours'];
	$defense_date = $_POST['defense_date'];
	$cgpa = $_POST['cgpa'];
	$stddate = $_POST['stddate'];

	$outline_area = $_POST['outline_area'];
	$supervision_area = $_POST['supervision_area'];
	$achieve_area = $_POST['achieve_area'];
	$training_area = $_POST['training_area'];
	$equipment_area = $_POST['equipment_area'];
	$research_material = $_POST['research_material'];


	$qry = "INSERT INTO `research_student`(`studentName`, `admissionDate`, `researchDate`, `CompletionDate`, `creditHour`, `defenseDate`, `cgpa`, `studentDate`, `progressDetail`, `commentOnSupervision`, `sixMonthPlane`, `subjectSpecialistTraining`, `accessToScientificEquipment`, `sufficientResearchMaterialCommoditiesAvailable`) VALUES ('$stdname','$admission_date','$research_date','$completion_date','$credit_hours','$defense_date','$cgpa','$stddate','$outline_area','$supervision_area','$achieve_area','$training_area','$equipment_area','$research_material')";

	$run = mysqli_query($con,$qry);


}

if(isset($_POST['submit'])){
	
	$principal = $_POST['principal'];
	$p_date = $_POST['p_date'];
	$co_name1 = $_POST['co_name1'];
	$co_date1 = $_POST['co_date1'];
	$co_name2 = $_POST['co_name2'];
	$co_date2 = $_POST['co_date2'];
	$committee_comment = $_POST['committee_comment'];
	$hod_comment = $_POST['hod_comment'];
	$director_comment = $_POST['director_comment'];

	$qry2 = "INSERT INTO `research_student_2`(`supervisor`, `supervisor-date`, `first-co-supervisor`, `first-co-supervisor-date`, `second-co-supervisor`, `second-co-supervisor-date`, `supervisory-committee-comments`, `HOD-comment`, `director-comment`) VALUES ('$principal','$p_date','$co_name1','$co_date1','$co_name2','$co_date2','$committee_comment','$hod_comment','$director_comment')";

	$run = mysqli_query($con,$qry2);

}
mysqli_close($con);
?>
<script type="text/javascript">
	alert("Form Submit Successfully!");
	window.history.go(-1);
</script>