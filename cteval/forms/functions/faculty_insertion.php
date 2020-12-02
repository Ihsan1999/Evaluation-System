
<?php

include_once 'dbConn.php';

$nowdate = date('Y-m-d h:i:s');


if(isset($_POST['submit'])){
 $department = $_POST['department'];


if(isset($_POST['optradio1'])){
	$first = $_POST['optradio1'];
	if($first == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq1',1,'$department', '$nowdate')");
	}elseif ($first == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq1',2,'$department', '$nowdate')");
	}elseif ($first == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq1',3,'$department', '$nowdate')");
	}elseif ($first == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq1',4,'$department', '$nowdate')");
	}elseif ($first == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq1',5,'$department', '$nowdate')");
	}
}

if(isset($_POST['optradio2'])){
	$second = $_POST['optradio2'];
	if($second == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq2',1,'$department', '$nowdate')");
	}elseif ($second == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq2',2,'$department', '$nowdate')");
	}elseif ($second == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq2',3,'$department', '$nowdate')");
	}elseif ($second == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq2',4,'$department', '$nowdate')");
	}elseif ($second == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq2',5,'$department', '$nowdate')");
	}
}

if(isset($_POST['optradio3'])){
	$third = $_POST['optradio3'];
	if($third == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq3',1,'$department','$nowdate')");
	}elseif ($third == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq3',2,'$department','$nowdate')");
	}elseif ($third == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq3',3,'$department','$nowdate')");
	}elseif ($third == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq3',4,'$department','$nowdate')");
	}elseif ($third == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq3',5,'$department','$nowdate')");
	}
}
if(isset($_POST['optradio4'])){
	$fourth = $_POST['optradio4'];
	if($fourth == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq4',1,'$department','$nowdate')");
	}elseif ($fourth == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq4',2,'$department','$nowdate')");
	}elseif ($fourth == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq4',3,'$department','$nowdate')");
	}elseif ($fourth == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq4',4,'$department','$nowdate')");
	}elseif ($fourth == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq4',5,'$department','$nowdate')");
	}
}
if(isset($_POST['optradio5'])){
	$fifth = $_POST['optradio5'];
	if($fifth == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq5',1,'$department','$nowdate')");
	}elseif ($fifth == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq5',2,'$department','$nowdate')");
	}elseif ($fifth == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq5',3,'$department','$nowdate')");
	}elseif ($fifth == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq5',4,'$department','$nowdate')");
	}elseif ($fifth == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq5',5,'$department','$nowdate')");
	}
}

if(isset($_POST['optradio6'])){
	$sixth = $_POST['optradio6'];
	if($sixth == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq6',1,'$department','$nowdate')");
	}elseif ($sixth == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq6',2,'$department','$nowdate')");
	}elseif ($sixth == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq6',3,'$department','$nowdate')");
	}elseif ($sixth == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq6',4,'$department','$nowdate')");
	}elseif ($sixth  == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq6',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio7'])){
	$seventh = $_POST['optradio7'];
	if($seventh == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq7',1,'$department','$nowdate')");
	}elseif ($seventh == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq7',2,'$department','$nowdate')");
	}elseif ($seventh == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq7',3,'$department','$nowdate')");
	}elseif ($seventh == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq7',4,'$department','$nowdate')");
	}elseif ($seventh == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq7',5,'$department','$nowdate')");
	}	
}
if(isset($_POST['optradio8'])){
	$eighth = $_POST['optradio8'];
	if($eighth == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq8',1,'$department','$nowdate')");
	}elseif ($eighth == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq8',2,'$department','$nowdate')");
	}elseif ($eighth == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq8',3,'$department','$nowdate')");
	}elseif ($eighth == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq8',4,'$department','$nowdate')");
	}elseif ($eighth == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq8',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio9'])){
	$ninth = $_POST['optradio9'];
	if($ninth == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq9',1,'$department','$nowdate')");
	}elseif ($ninth == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq9',2,'$department','$nowdate')");
	}elseif ($ninth == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq9',3,'$department','$nowdate')");
	}elseif ($ninth == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq9',4,'$department','$nowdate')");
	}elseif ($ninth == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq9',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio10'])){
	$tenth = $_POST['optradio10'];
	if($tenth == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq10',1,'$department','$nowdate')");
	}elseif ($tenth == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq10',2,'$department','$nowdate')");
	}elseif ($tenth == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq10',3,'$department','$nowdate')");
	}elseif ($tenth == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq10',4,'$department','$nowdate')");
	}elseif ($tenth == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq10',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio11'])){
	$eleven = $_POST['optradio11'];
	if($eleven == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq11',1,'$department','$nowdate')");
	}elseif ($eleven == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq11',2,'$department','$nowdate')");
	}elseif ($eleven == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq11',3,'$department','$nowdate')");
	}elseif ($eleven == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq11',4,'$department','$nowdate')");
	}elseif ($eleven == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq11',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio12'])){
	$twelve = $_POST['optradio12'];
	if($twelve == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq12',1,'$department','$nowdate')");
	}elseif ($twelve == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq12',2,'$department','$nowdate')");
	}elseif ($twelve == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq12',3,'$department','$nowdate')");
	}elseif ($twelve == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq12',4,'$department','$nowdate')");
	}elseif ($twelve == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq12',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio13'])){
	$thirteen = $_POST['optradio13'];
	if($thirteen == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq13',1,'$department','$nowdate')");
	}elseif ($thirteen == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq13',2,'$department','$nowdate')");
	}elseif ($thirteen == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq13',3,'$department','$nowdate')");
	}elseif ($thirteen == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq13',4,'$department','$nowdate')");
	}elseif ($thirteen == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq13',5,'$department','$nowdate')");
	}
}

if(isset($_POST['optradio14'])){
	$fourteen = $_POST['optradio14'];
	if($fourteen == "vs"){
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq14',1,'$department','$nowdate')");
	}elseif ($fourteen == "s") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq14',2,'$department','$nowdate')");
	}elseif ($fourteen == "u") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq14',3,'$department','$nowdate')");
	}elseif ($fourteen == "d") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq14',4,'$department','$nowdate')");
	}elseif ($fourteen == "vd") {
		mysqli_query($con,"INSERT INTO `faculty_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('fsq14',5,'$department','$nowdate')");
	}
}


if(isset($_POST['opt15'])){
	$fifteen = $_POST['opt15'];
	mysqli_query($con,"INSERT INTO `faculty_comments`(`qid`, `comments`, `department`, `submitDate`) VALUES ('fsq15','$fifteen','$department', '$nowdate')");
}
if(isset($_POST['opt16'])){
	$sixteen = $_POST['opt16'];
	mysqli_query($con,"INSERT INTO `faculty_comments`(`qid`, `comments`, `department`, `submitDate`) VALUES ('fsq16','$sixteen','$department', '$nowdate')");	
}

}

mysqli_close($con);

?>

<script type="text/javascript">
	alert("form submit successfully");
	window.history.go(-1);
</script>
