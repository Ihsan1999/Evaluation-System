<?php 

include('dbConn.php'); 

if (isset($_POST['submit'])) {
	$deptName = $_POST['deptName'];
	$facultyName = $_POST['facultyName'];
	$courseCode = $_POST['courseCode'];
	$title = $_POST['title'];
	$session = $_POST['session'];

	$dumySemester = $_POST['semester'];
	if ($dumySemester == "autumn") {
		$semester = "autumn";
	}
	elseif ($dumySemester == "spring") {
		$semester = "spring";
	}
	else {
		$semester = "summer";
	}

	$creditValue = $_POST['creditValue'];
	$level = $_POST['level'];
	$prerequisite = $_POST['prerequisite'];
	$instructorName = $_POST['instructorName'];
	$contactHour = $_POST['contactHour'];
	$lecture = $_POST['lecture'];
	$seminar = $_POST['seminar'];
	$other = $_POST['other'];
	$assessmentMethod = $_POST['assessmentMethod'];

	$under_Registered = $_POST['under_Registered'];
	$under_gradeA = $_POST['under_gradeA'];
	$under_gradeB = $_POST['under_gradeB'];
	$under_gradeC = $_POST['under_gradeC'];
	$under_gradeD = $_POST['under_gradeD'];
	$under_gradeE = $_POST['under_gradeE'];
	$under_gradeF = $_POST['under_gradeF'];
	$under_noGrade = $_POST['under_noGrade'];
	$under_withdrawal = $_POST['under_withdrawal'];
	$under_totalGrade = $_POST['under_totalGrade'];

	$post_Registered = $_POST['post_Registered'];
	$post_gradeA = $_POST['post_gradeA'];
	$post_gradeB = $_POST['post_gradeB'];
	$post_gradeC = $_POST['post_gradeC'];
	$post_gradeD = $_POST['post_gradeD'];
	$post_gradeE = $_POST['post_gradeE'];
	$post_gradeF = $_POST['post_gradeF'];
	$post_nograde = $_POST['post_nograde'];
	$post_withdrawal = $_POST['post_withdrawal'];
	$post_totalGrade = $_POST['post_totalGrade'];

	$courseEvaluation = $_POST['courseEvaluation'];
	$moderator = $_POST['moderator'];
	$sscc= $_POST['sscc'];
	$curriculum = $_POST['curriculum'];
	$assessment = $_POST['assessment'];
	$enhancement = $_POST['enhancement'];
	$outline= $_POST['outline'];
	$courseInstructor = $_POST['courseInstructor'];
	$firstInstructorDate = $_POST['firstInstructorDate'];
	$headOfDepartment = $_POST['headOfDepartment'];
	$headOfDepartmentDate = $_POST['headOfDepartmentDate'];


	$qry = "INSERT INTO `faculty_course_review_report`(`Department`, `Faculty`, `Course Code`, `Title`, `Session`, `Semester`, `Credit Value`, `Level`, `Prerequisites`, `Name of Course Instructor`, `No of Students Contact Hours`, `Lectures`, `Seminars`, `Other`, `Assessment Methods`, `Undergraduate Originally Registered`, `Undergraduate GradeA`, `Undergraduate GradeB`, `Undergraduate GradeC`, `Undergraduate GradeD`, `Undergraduate GradeE`, `Undergraduate GradeF`, `Undergraduate No Grade`, `Undergraduate Withdrawal`, `Undergraduate Total`, `Post-Graduate Originally Registered`, `Post-Graduate GradeA`, `Post-Graduate GradeB`, `Post-Graduate GradeC`, `Post-Graduate GradeD`, `Post-Graduate GradeE`, `Post-Graduate GradeF`, `Post-Graduate No Grade`, `Post-Graduate Withdrawal`, `Post-Graduate Total`, `Student (Course Evaluation) Questionnaires`, `External Examiners or Moderators`, `Student /staff Consultative Committee (SSCC) or equivalent`, `Curriculum`, `Assessment`, `Enhancement`, `Outline`, `Name (Course Instructor)`, `Date (Course Instructor)`, `Name (Head of Department)`, `Date (Head of Department)`) 

		VALUES ('$deptName','$facultyName','$courseCode','$title','$session','$semester','$creditValue','$level','$prerequisite','$instructorName','$contactHour','$lecture','$seminar','$other','$assessmentMethod','$under_Registered','$under_gradeA','$under_gradeB','$under_gradeC','$under_gradeD','$under_gradeE','$under_gradeF','$under_noGrade','$under_withdrawal','$under_totalGrade','$post_Registered','$post_gradeA','$post_gradeB','$post_gradeC','$post_gradeD','$post_gradeE','$post_gradeF','$post_nograde','$post_withdrawal','$post_totalGrade','$courseEvaluation','$moderator','$sscc','$curriculum','$assessment','$enhancement','$outline','$courseInstructor','$firstInstructorDate','$headOfDepartment','$headOfDepartmentDate')";

		$run = mysqli_query($con, $qry);
}

mysqli_close($con);

 ?>

 <script type="text/javascript">
	alert("Form Submit Successfully!");
	window.history.go(-1);
</script>