<?php

include_once('dbConn.php');

$nowdate = date('Y-m-d h:i:s');

if(isset($_POST['submit'])){
 $department = $_POST['department'];


if(isset($_POST['optradio1'])){
	$first = $_POST['optradio1'];
	if($first == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq1',1,'$department', '$nowdate')");
	}elseif ($first == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq1',2,'$department', '$nowdate')");
	}elseif ($first == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq1',3,'$department', '$nowdate')");
	}elseif ($first == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq1',4,'$department', '$nowdate')");
	}elseif ($first == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq1',5,'$department', '$nowdate')");
	}
}

if(isset($_POST['optradio2'])){
	$second = $_POST['optradio2'];
	if($second == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq2',1,'$department', '$nowdate')");
	}elseif ($second == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq2',2,'$department', '$nowdate')");
	}elseif ($second == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq2',3,'$department', '$nowdate')");
	}elseif ($second == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq2',4,'$department', '$nowdate')");
	}elseif ($second == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq2',5,'$department', '$nowdate')");
	}
}

if(isset($_POST['optradio3'])){
	$third = $_POST['optradio3'];
	if($third == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq3',1,'$department','$nowdate')");
	}elseif ($third == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq3',2,'$department','$nowdate')");
	}elseif ($third == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq3',3,'$department','$nowdate')");
	}elseif ($third == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq3',4,'$department','$nowdate')");
	}elseif ($third == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq3',5,'$department','$nowdate')");
	}
}
if(isset($_POST['optradio4'])){
	$fourth = $_POST['optradio4'];
	if($fourth == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq4',1,'$department','$nowdate')");
	}elseif ($fourth == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq4',2,'$department','$nowdate')");
	}elseif ($fourth == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq4',3,'$department','$nowdate')");
	}elseif ($fourth == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq4',4,'$department','$nowdate')");
	}elseif ($fourth == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq4',5,'$department','$nowdate')");
	}
}
if(isset($_POST['optradio5'])){
	$fifth = $_POST['optradio5'];
	if($fifth == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq5',1,'$department','$nowdate')");
	}elseif ($fifth == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq5',2,'$department','$nowdate')");
	}elseif ($fifth == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq5',3,'$department','$nowdate')");
	}elseif ($fifth == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq5',4,'$department','$nowdate')");
	}elseif ($fifth == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq5',5,'$department','$nowdate')");
	}
}

if(isset($_POST['optradio6'])){
	$sixth = $_POST['optradio6'];
	if($sixth == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq6',1,'$department','$nowdate')");
	}elseif ($sixth == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq6',2,'$department','$nowdate')");
	}elseif ($sixth == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq6',3,'$department','$nowdate')");
	}elseif ($sixth == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq6',4,'$department','$nowdate')");
	}elseif ($sixth  == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq6',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio7'])){
	$seventh = $_POST['optradio7'];
	if($seventh == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq7',1,'$department','$nowdate')");
	}elseif ($seventh == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq7',2,'$department','$nowdate')");
	}elseif ($seventh == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq7',3,'$department','$nowdate')");
	}elseif ($seventh == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq7',4,'$department','$nowdate')");
	}elseif ($seventh == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq7',5,'$department','$nowdate')");
	}	
}
if(isset($_POST['optradio8'])){
	$eighth = $_POST['optradio8'];
	if($eighth == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq8',1,'$department','$nowdate')");
	}elseif ($eighth == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq8',2,'$department','$nowdate')");
	}elseif ($eighth == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq8',3,'$department','$nowdate')");
	}elseif ($eighth == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq8',4,'$department','$nowdate')");
	}elseif ($eighth == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq8',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio9'])){
	$ninth = $_POST['optradio9'];
	if($ninth == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq9',1,'$department','$nowdate')");
	}elseif ($ninth == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq9',2,'$department','$nowdate')");
	}elseif ($ninth == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq9',3,'$department','$nowdate')");
	}elseif ($ninth == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq9',4,'$department','$nowdate')");
	}elseif ($ninth == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq9',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio10'])){
	$tenth = $_POST['optradio10'];
	if($tenth == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq10',1,'$department','$nowdate')");
	}elseif ($tenth == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq10',2,'$department','$nowdate')");
	}elseif ($tenth == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq10',3,'$department','$nowdate')");
	}elseif ($tenth == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq10',4,'$department','$nowdate')");
	}elseif ($tenth == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq10',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio11'])){
	$eleven = $_POST['optradio11'];
	if($eleven == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq11',1,'$department','$nowdate')");
	}elseif ($eleven == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq11',2,'$department','$nowdate')");
	}elseif ($eleven == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq11',3,'$department','$nowdate')");
	}elseif ($eleven == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq11',4,'$department','$nowdate')");
	}elseif ($eleven == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq11',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio12'])){
	$twelve = $_POST['optradio12'];
	if($twelve == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq12',1,'$department','$nowdate')");
	}elseif ($twelve == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq12',2,'$department','$nowdate')");
	}elseif ($twelve == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq12',3,'$department','$nowdate')");
	}elseif ($twelve == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq12',4,'$department','$nowdate')");
	}elseif ($twelve == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq12',5,'$department','$nowdate')");
	}	
}

if(isset($_POST['optradio13'])){
	$thirteen = $_POST['optradio13'];
	if($thirteen == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq13',1,'$department','$nowdate')");
	}elseif ($thirteen == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq13',2,'$department','$nowdate')");
	}elseif ($thirteen == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq13',3,'$department','$nowdate')");
	}elseif ($thirteen == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq13',4,'$department','$nowdate')");
	}elseif ($thirteen == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq13',5,'$department','$nowdate')");
	}
}

if(isset($_POST['optradio14'])){
	$fourteen = $_POST['optradio14'];
	if($fourteen == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq14',1,'$department','$nowdate')");
	}elseif ($fourteen == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq14',2,'$department','$nowdate')");
	}elseif ($fourteen == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq14',3,'$department','$nowdate')");
	}elseif ($fourteen == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq14',4,'$department','$nowdate')");
	}elseif ($fourteen == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq14',5,'$department','$nowdate')");
	}
}

if(isset($_POST['optradio15'])){
	$fifteen_a = $_POST['optradio15'];
	if($fifteen_a == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq15',1,'$department','$nowdate')");
	}elseif ($fifteen_a == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq15',2,'$department','$nowdate')");
	}elseif ($fifteen_a == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq15',3,'$department','$nowdate')");
	}elseif ($fifteen_a == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq15',4,'$department','$nowdate')");
	}elseif ($fifteen_a == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq15',5,'$department','$nowdate')");
	}
}

if(isset($_POST['optradio16'])){
	$fifteen_b = $_POST['optradio16'];
	if($fifteen_b == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq16',1,'$department','$nowdate')");
	}elseif ($fifteen_b == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq16',2,'$department','$nowdate')");
	}elseif ($fifteen_b == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq16',3,'$department','$nowdate')");
	}elseif ($fifteen_b == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq16',4,'$department','$nowdate')");
	}elseif ($fifteen_b == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq16',5,'$department','$nowdate')");
	}
}

if(isset($_POST['optradio17'])){
	$fifteen_c = $_POST['optradio17'];
	if($fifteen_c == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq17',1,'$department','$nowdate')");
	}elseif ($fifteen_c == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq17',2,'$department','$nowdate')");
	}elseif ($fifteen_c == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq17',3,'$department','$nowdate')");
	}elseif ($fifteen_c == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq17',4,'$department','$nowdate')");
	}elseif ($fifteen_c == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq17',5,'$department','$nowdate')");
	}
}

if(isset($_POST['optradio18'])){
	$fifteen_d = $_POST['optradio18'];
	if($fifteen_d == "excellent"){
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq18',1,'$department','$nowdate')");
	}elseif ($fifteen_d == "verygood") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq18',2,'$department','$nowdate')");
	}elseif ($fifteen_d == "good") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq18',3,'$department','$nowdate')");
	}elseif ($fifteen_d == "fair") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq18',4,'$department','$nowdate')");
	}elseif ($fifteen_d == "poor") {
		mysqli_query($con,"INSERT INTO `employer_survey`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('esq18',5,'$department','$nowdate')");
	}
}



if(isset($_POST['comment'])){
	$ninteen = $_POST['comment'];
	mysqli_query($con,"INSERT INTO `employer_comments`(`qid`, `comments`, `department`, `submitDate`) VALUES ('esq19','$ninteen','$department','$nowdate')");
}
}

mysqli_close($con);

?>

<script type="text/javascript">
	alert("form submit successfully");
	window.history.go(-1);
</script>
