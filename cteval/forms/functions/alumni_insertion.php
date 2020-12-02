<?php

include_once('dbConn.php');

$nowdate = date('Y-m-d h:i:s');

if(isset($_POST['submit'])){
 	$department = $_POST['department'];
	$name = $_POST['name'];
	$organization = $_POST['organization'];
	$position = $_POST['position'];
	$date = $_POST['date'];

	mysqli_query($con,"INSERT INTO `alumni_information`(`name`,`organization_name`,`position`,`department`,`graduation_year`) VALUES ('$name','$organization','$position','$department','$date')");


	if(isset($_POST['optradio1'])){
		$first = $_POST['optradio1'];
		if($first == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq1',1,'$department', '$nowdate')");
		}elseif ($first == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq1',2,'$department', '$nowdate')");
		}elseif ($first == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq1',3,'$department', '$nowdate')");
		}elseif ($first == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq1',4,'$department', '$nowdate')");
		}elseif ($first == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq1',5,'$department', '$nowdate')");
		}
	}

	if(isset($_POST['optradio2'])){
		$second = $_POST['optradio2'];
		if($second == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq2',1,'$department', '$nowdate')");
		}elseif ($second == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq2',2,'$department', '$nowdate')");
		}elseif ($second == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq2',3,'$department', '$nowdate')");
		}elseif ($second == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq2',4,'$department', '$nowdate')");
		}elseif ($second == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq2',5,'$department', '$nowdate')");
		}
	}

	if(isset($_POST['optradio3'])){
		$third = $_POST['optradio3'];
		if($third == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq3',1,'$department','$nowdate')");
		}elseif ($third == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq3',2,'$department','$nowdate')");
		}elseif ($third == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq3',3,'$department','$nowdate')");
		}elseif ($third == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq3',4,'$department','$nowdate')");
		}elseif ($third == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq3',5,'$department','$nowdate')");
		}
	}
	if(isset($_POST['optradio4'])){
		$fourth = $_POST['optradio4'];
		if($fourth == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq4',1,'$department','$nowdate')");
		}elseif ($fourth == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq4',2,'$department','$nowdate')");
		}elseif ($fourth == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq4',3,'$department','$nowdate')");
		}elseif ($fourth == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq4',4,'$department','$nowdate')");
		}elseif ($fourth == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq4',5,'$department','$nowdate')");
		}
	}
	if(isset($_POST['optradio5'])){
		$fifth = $_POST['optradio5'];
		if($fifth == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq5',1,'$department','$nowdate')");
		}elseif ($fifth == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq5',2,'$department','$nowdate')");
		}elseif ($fifth == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq5',3,'$department','$nowdate')");
		}elseif ($fifth == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq5',4,'$department','$nowdate')");
		}elseif ($fifth == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq5',5,'$department','$nowdate')");
		}
	}

	if(isset($_POST['optradio6'])){
		$sixth = $_POST['optradio6'];
		if($sixth == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq6',1,'$department','$nowdate')");
		}elseif ($sixth == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq6',2,'$department','$nowdate')");
		}elseif ($sixth == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq6',3,'$department','$nowdate')");
		}elseif ($sixth == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq6',4,'$department','$nowdate')");
		}elseif ($sixth  == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq6',5,'$department','$nowdate')");
		}	
	}

	if(isset($_POST['optradio7'])){
		$seventh = $_POST['optradio7'];
		if($seventh == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq7',1,'$department','$nowdate')");
		}elseif ($seventh == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq7',2,'$department','$nowdate')");
		}elseif ($seventh == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq7',3,'$department','$nowdate')");
		}elseif ($seventh == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq7',4,'$department','$nowdate')");
		}elseif ($seventh == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq7',5,'$department','$nowdate')");
		}	
	}
	if(isset($_POST['optradio8'])){
		$eighth = $_POST['optradio8'];
		if($eighth == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq8',1,'$department','$nowdate')");
		}elseif ($eighth == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq8',2,'$department','$nowdate')");
		}elseif ($eighth == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq8',3,'$department','$nowdate')");
		}elseif ($eighth == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq8',4,'$department','$nowdate')");
		}elseif ($eighth == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq8',5,'$department','$nowdate')");
		}	
	}

	if(isset($_POST['optradio9'])){
		$ninth = $_POST['optradio9'];
		if($ninth == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq9',1,'$department','$nowdate')");
		}elseif ($ninth == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq9',2,'$department','$nowdate')");
		}elseif ($ninth == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq9',3,'$department','$nowdate')");
		}elseif ($ninth == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq9',4,'$department','$nowdate')");
		}elseif ($ninth == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq9',5,'$department','$nowdate')");
		}	
	}

	if(isset($_POST['optradio10'])){
		$tenth = $_POST['optradio10'];
		if($tenth == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq10',1,'$department','$nowdate')");
		}elseif ($tenth == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq10',2,'$department','$nowdate')");
		}elseif ($tenth == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq10',3,'$department','$nowdate')");
		}elseif ($tenth == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq10',4,'$department','$nowdate')");
		}elseif ($tenth == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq10',5,'$department','$nowdate')");
		}	
	}

	if(isset($_POST['optradio11'])){
		$eleven = $_POST['optradio11'];
		if($eleven == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq11',1,'$department','$nowdate')");
		}elseif ($eleven == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq11',2,'$department','$nowdate')");
		}elseif ($eleven == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq11',3,'$department','$nowdate')");
		}elseif ($eleven == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq11',4,'$department','$nowdate')");
		}elseif ($eleven == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq11',5,'$department','$nowdate')");
		}	
	}

	if(isset($_POST['optradio12'])){
		$twelve = $_POST['optradio12'];
		if($twelve == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq12',1,'$department','$nowdate')");
		}elseif ($twelve == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq12',2,'$department','$nowdate')");
		}elseif ($twelve == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq12',3,'$department','$nowdate')");
		}elseif ($twelve == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq12',4,'$department','$nowdate')");
		}elseif ($twelve == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq12',5,'$department','$nowdate')");
		}	
	}

	if(isset($_POST['optradio13'])){
		$thirteen = $_POST['optradio13'];
		if($thirteen == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq13',1,'$department','$nowdate')");
		}elseif ($thirteen == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq13',2,'$department','$nowdate')");
		}elseif ($thirteen == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq13',3,'$department','$nowdate')");
		}elseif ($thirteen == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq13',4,'$department','$nowdate')");
		}elseif ($thirteen == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq13',5,'$department','$nowdate')");
		}
	}

	if(isset($_POST['optradio14'])){
		$fourteen = $_POST['optradio14'];
		if($fourteen == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq14',1,'$department','$nowdate')");
		}elseif ($fourteen == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq14',2,'$department','$nowdate')");
		}elseif ($fourteen == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq14',3,'$department','$nowdate')");
		}elseif ($fourteen == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq14',4,'$department','$nowdate')");
		}elseif ($fourteen == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq14',5,'$department','$nowdate')");
		}
	}

	if(isset($_POST['optradio15'])){
		$fifteen_a = $_POST['optradio15'];
		if($fifteen_a == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq15',1,'$department','$nowdate')");
		}elseif ($fifteen_a == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq15',2,'$department','$nowdate')");
		}elseif ($fifteen_a == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq15',3,'$department','$nowdate')");
		}elseif ($fifteen_a == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq15',4,'$department','$nowdate')");
		}elseif ($fifteen_a == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq15',5,'$department','$nowdate')");
		}
	}

	if(isset($_POST['optradio16'])){
		$fifteen_b = $_POST['optradio16'];
		if($fifteen_b == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq16',1,'$department','$nowdate')");
		}elseif ($fifteen_b == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq16',2,'$department','$nowdate')");
		}elseif ($fifteen_b == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq16',3,'$department','$nowdate')");
		}elseif ($fifteen_b == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq16',4,'$department','$nowdate')");
		}elseif ($fifteen_b == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq16',5,'$department','$nowdate')");
		}
	}

	if(isset($_POST['optradio17'])){
		$fifteen_c = $_POST['optradio17'];
		if($fifteen_c == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq17',1,'$department','$nowdate')");
		}elseif ($fifteen_c == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq17',2,'$department','$nowdate')");
		}elseif ($fifteen_c == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq17',3,'$department','$nowdate')");
		}elseif ($fifteen_c == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq17',4,'$department','$nowdate')");
		}elseif ($fifteen_c == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq17',5,'$department','$nowdate')");
		}
	}

	if(isset($_POST['optradio18'])){
		$fifteen_d = $_POST['optradio18'];
		if($fifteen_d == "excellent"){
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq18',1,'$department','$nowdate')");
		}elseif ($fifteen_d == "verygood") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq18',2,'$department','$nowdate')");
		}elseif ($fifteen_d == "good") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq18',3,'$department','$nowdate')");
		}elseif ($fifteen_d == "fair") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq18',4,'$department','$nowdate')");
		}elseif ($fifteen_d == "poor") {
			mysqli_query($con,"INSERT INTO `alumni_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('aluq18',5,'$department','$nowdate')");
		}
	}



	if(isset($_POST['comment'])){
		$comment = $_POST['comment'];
		mysqli_query($con,"INSERT INTO `alumni_comments`(`qid`, `comments`,`department`,`submitDate`) VALUES ('alucom1','$comment','$department','$nowdate')");
	}

	if(isset($_POST['repute_comment'])){
		$repute_comment = $_POST['repute_comment'];
		mysqli_query($con,"INSERT INTO `alumni_comments`(`qid`, `comments`,`department`,`submitDate`) VALUES ('alucom2','$repute_comment','$department','$nowdate')");
	}

}

mysqli_close($con);

?>

<script type="text/javascript">
	alert("Form Submit Successfully!");
	window.history.go(-1);
</script>
