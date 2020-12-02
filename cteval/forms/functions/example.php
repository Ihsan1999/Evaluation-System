
<?php


include_once 'dbConn.php';
if(isset($_POST['submit'])){
 $department = $_POST['department'];


if(isset($_POST['optradio1'])){
	$first = $_POST['optradio1'];
	if($first == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq1',1,'$department', CURRENT_DATE())");
	}elseif ($first == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq1',2,'$department', CURRENT_DATE())");
	}elseif ($first == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq1',3,'$department', CURRENT_DATE())");
	}elseif ($first == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq1',4,'$department', CURRENT_DATE())");
	}elseif ($first == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq1',5,'$department', CURRENT_DATE())");
	}
}

if(isset($_POST['optradio2'])){
	$second = $_POST['optradio2'];
	if($second == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq2',1,'$department', CURRENT_DATE())");
	}elseif ($second == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq2',2,'$department', CURRENT_DATE())");
	}elseif ($second == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq2',3,'$department', CURRENT_DATE())");
	}elseif ($second == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq2',4,'$department', CURRENT_DATE())");
	}elseif ($second == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq2',5,'$department', CURRENT_DATE())");
	}
}

if(isset($_POST['optradio3'])){
	$third = $_POST['optradio3'];
	if($third == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq3',1,'$department',CURRENT_DATE())");
	}elseif ($third == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq3',2,'$department',CURRENT_DATE())");
	}elseif ($third == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq3',3,'$department',CURRENT_DATE())");
	}elseif ($third == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq3',4,'$department',CURRENT_DATE())");
	}elseif ($third == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq3',5,'$department',CURRENT_DATE())");
	}
}
if(isset($_POST['optradio4'])){
	$fourth = $_POST['optradio4'];
	if($fourth == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq4',1,'$department',CURRENT_DATE())");
	}elseif ($fourth == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq4',2,'$department',CURRENT_DATE())");
	}elseif ($fourth == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq4',3,'$department',CURRENT_DATE())");
	}elseif ($fourth == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq4',4,'$department',CURRENT_DATE())");
	}elseif ($fourth == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq4',5,'$department',CURRENT_DATE())");
	}
}
if(isset($_POST['optradio5'])){
	$fifth = $_POST['optradio5'];
	if($fifth == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq5',1,'$department',CURRENT_DATE())");
	}elseif ($fifth == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq5',2,'$department',CURRENT_DATE())");
	}elseif ($fifth == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq5',3,'$department',CURRENT_DATE())");
	}elseif ($fifth == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq5',4,'$department',CURRENT_DATE())");
	}elseif ($fifth == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq5',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio6'])){
	$sixth = $_POST['optradio6'];
	if($sixth == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq6',1,'$department',CURRENT_DATE())");
	}elseif ($sixth == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq6',2,'$department',CURRENT_DATE())");
	}elseif ($sixth == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq6',3,'$department',CURRENT_DATE())");
	}elseif ($sixth == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq6',4,'$department',CURRENT_DATE())");
	}elseif ($sixth  == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq6',5,'$department',CURRENT_DATE())");
	}	
}

if(isset($_POST['optradio7'])){
	$seventh = $_POST['optradio7'];
	if($seventh == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq7',1,'$department',CURRENT_DATE())");
	}elseif ($seventh == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq7',2,'$department',CURRENT_DATE())");
	}elseif ($seventh == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq7',3,'$department',CURRENT_DATE())");
	}elseif ($seventh == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq7',4,'$department',CURRENT_DATE())");
	}elseif ($seventh == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq7',5,'$department',CURRENT_DATE())");
	}	
}
if(isset($_POST['optradio8'])){
	$eighth = $_POST['optradio8'];
	if($eighth == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq8',1,'$department',CURRENT_DATE())");
	}elseif ($eighth == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq8',2,'$department',CURRENT_DATE())");
	}elseif ($eighth == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq8',3,'$department',CURRENT_DATE())");
	}elseif ($eighth == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq8',4,'$department',CURRENT_DATE())");
	}elseif ($eighth == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq8',5,'$department',CURRENT_DATE())");
	}	
}

if(isset($_POST['optradio9'])){
	$ninth = $_POST['optradio9'];
	if($ninth == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq9',1,'$department',CURRENT_DATE())");
	}elseif ($ninth == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq9',2,'$department',CURRENT_DATE())");
	}elseif ($ninth == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq9',3,'$department',CURRENT_DATE())");
	}elseif ($ninth == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq9',4,'$department',CURRENT_DATE())");
	}elseif ($ninth == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq9',5,'$department',CURRENT_DATE())");
	}	
}

if(isset($_POST['optradio10'])){
	$tenth = $_POST['optradio10'];
	if($tenth == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq10',1,'$department',CURRENT_DATE())");
	}elseif ($tenth == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq10',2,'$department',CURRENT_DATE())");
	}elseif ($tenth == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq10',3,'$department',CURRENT_DATE())");
	}elseif ($tenth == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq10',4,'$department',CURRENT_DATE())");
	}elseif ($tenth == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq10',5,'$department',CURRENT_DATE())");
	}	
}

if(isset($_POST['optradio11'])){
	$eleven = $_POST['optradio11'];
	if($eleven == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq11',1,'$department',CURRENT_DATE())");
	}elseif ($eleven == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq11',2,'$department',CURRENT_DATE())");
	}elseif ($eleven == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq11',3,'$department',CURRENT_DATE())");
	}elseif ($eleven == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq11',4,'$department',CURRENT_DATE())");
	}elseif ($eleven == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq11',5,'$department',CURRENT_DATE())");
	}	
}

if(isset($_POST['optradio12'])){
	$twelve = $_POST['optradio12'];
	if($twelve == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq12',1,'$department',CURRENT_DATE())");
	}elseif ($twelve == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq12',2,'$department',CURRENT_DATE())");
	}elseif ($twelve == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq12',3,'$department',CURRENT_DATE())");
	}elseif ($twelve == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq12',4,'$department',CURRENT_DATE())");
	}elseif ($twelve == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq12',5,'$department',CURRENT_DATE())");
	}	
}

if(isset($_POST['optradio13'])){
	$thirteen = $_POST['optradio13'];
	if($thirteen == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq13',1,'$department',CURRENT_DATE())");
	}elseif ($thirteen == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq13',2,'$department',CURRENT_DATE())");
	}elseif ($thirteen == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq13',3,'$department',CURRENT_DATE())");
	}elseif ($thirteen == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq13',4,'$department',CURRENT_DATE())");
	}elseif ($thirteen == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq13',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio14'])){
	$fourteen = $_POST['optradio14'];
	if($fourteen == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq14',1,'$department',CURRENT_DATE())");
	}elseif ($fourteen == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq14',2,'$department',CURRENT_DATE())");
	}elseif ($fourteen == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq14',3,'$department',CURRENT_DATE())");
	}elseif ($fourteen == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq14',4,'$department',CURRENT_DATE())");
	}elseif ($fourteen == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq14',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio15a'])){
	$fifteen_a = $_POST['optradio15a'];
	if($fifteen_a == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15a',1,'$department',CURRENT_DATE())");
	}elseif ($fifteen_a == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15a',2,'$department',CURRENT_DATE())");
	}elseif ($fifteen_a == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15a',3,'$department',CURRENT_DATE())");
	}elseif ($fifteen_a == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15a',4,'$department',CURRENT_DATE())");
	}elseif ($fifteen_a == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15a',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio15b'])){
	$fifteen_b = $_POST['optradio15b'];
	if($fifteen_b == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15b',1,'$department',CURRENT_DATE())");
	}elseif ($fifteen_b == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15b',2,'$department',CURRENT_DATE())");
	}elseif ($fifteen_b == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15b',3,'$department',CURRENT_DATE())");
	}elseif ($fifteen_b == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15b',4,'$department',CURRENT_DATE())");
	}elseif ($fifteen_b == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15b',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio15c'])){
	$fifteen_c = $_POST['optradio15c'];
	if($fifteen_c == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15c',1,'$department',CURRENT_DATE())");
	}elseif ($fifteen_c == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15c',2,'$department',CURRENT_DATE())");
	}elseif ($fifteen_c == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15c',3,'$department',CURRENT_DATE())");
	}elseif ($fifteen_c == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15c',4,'$department',CURRENT_DATE())");
	}elseif ($fifteen_c == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15c',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio15d'])){
	$fifteen_d = $_POST['optradio15d'];
	if($fifteen_d == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15d',1,'$department',CURRENT_DATE())");
	}elseif ($fifteen_d == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15d',2,'$department',CURRENT_DATE())");
	}elseif ($fifteen_d == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15d',3,'$department',CURRENT_DATE())");
	}elseif ($fifteen_d == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15d',4,'$department',CURRENT_DATE())");
	}elseif ($fifteen_d == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15d',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio15e'])){
	$fifteen_e = $_POST['optradio15e'];
	if($fifteen_e == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15e',1,'$department',CURRENT_DATE())");
	}elseif ($fifteen_e == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15e',2,'$department',CURRENT_DATE())");
	}elseif ($fifteen_e == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15e',3,'$department',CURRENT_DATE())");
	}elseif ($fifteen_e == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15e',4,'$department',CURRENT_DATE())");
	}elseif ($fifteen_e == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15e',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio15f'])){
	$fifteen_f = $_POST['optradio15f'];
	if($fifteen_f == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15f',1,'$department',CURRENT_DATE())");
	}elseif ($fifteen_f == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15f',2,'$department',CURRENT_DATE())");
	}elseif ($fifteen_f == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15f',3,'$department',CURRENT_DATE())");
	}elseif ($fifteen_f == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15f',4,'$department',CURRENT_DATE())");
	}elseif ($fifteen_f == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15f',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio15g'])){
	$fifteen_g = $_POST['optradio15g'];
	if($fifteen_g == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15g',1,'$department',CURRENT_DATE())");
	}elseif ($fifteen_g == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15g',2,'$department',CURRENT_DATE())");
	}elseif ($fifteen_g == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15g',3,'$department',CURRENT_DATE())");
	}elseif ($fifteen_g == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15g',4,'$department',CURRENT_DATE())");
	}elseif ($fifteen_g == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15g',5,'$department',CURRENT_DATE())");
	}
}

if(isset($_POST['optradio15h'])){
	$fifteen_h = $_POST['optradio15h'];
	if($fifteen_h == "vs"){
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15h',1,'$department',CURRENT_DATE())");
	}elseif ($fifteen_h == "s") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15h',2,'$department',CURRENT_DATE())");
	}elseif ($fifteen_h == "u") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15h',3,'$department',CURRENT_DATE())");
	}elseif ($fifteen_h == "d") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15h',4,'$department',CURRENT_DATE())");
	}elseif ($fifteen_h == "vd") {
		mysqli_query($con,"INSERT INTO `example`(`qid`, `satisfaction`, `department`, `submitDate`) VALUES ('sgsq15h',5,'$department',CURRENT_DATE())");
	}
}


if(isset($_POST['opt16'])){
	$sixteen = $_POST['opt16'];
	mysqli_query($con,"INSERT INTO `comments_of_sgs`(`qid`, `comment`, `department`, `submitDate`) VALUES ('sgsq16','$sixteen','$department', CURRENT_DATE())");
}

if(isset($_POST['opt17'])){
	$seventeen = $_POST['opt17'];
	mysqli_query($con,"INSERT INTO `comments_of_sgs`(`qid`, `comment`, `department`, `submitDate`) VALUES ('sgsq17','$seventeen','$department', CURRENT_DATE())");	
}
}

mysqli_close($con);

?>

<script type="text/javascript">
	alert("form submit successfully");
	window.history.go(-1);
</script>
