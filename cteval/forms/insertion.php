
<?php

include_once 'dbConn.php';

if(isset($_POST['optradio1'])){
	$first = $_POST['optradio1'];
	if($first == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq1'");
	}elseif ($first == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq1'");
	}elseif ($first == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq1'");
	}elseif ($first == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq1'");
	}elseif ($first == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq1'");
	}
}
if(isset($_POST['optradio2'])){
	$second = $_POST['optradio2'];
	if($second == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq2'");
	}elseif ($second == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq2'");
	}elseif ($second == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq2'");
	}elseif ($second == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq2'");
	}elseif ($second == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq2'");
	}
}
if(isset($_POST['optradio3'])){
	$third = $_POST['optradio3'];
	if($third == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq3'");
	}elseif ($third == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq3'");
	}elseif ($third == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq3'");
	}elseif ($third == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq3'");
	}elseif ($third == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq3'");
	}
}
if(isset($_POST['optradio4'])){
	$fourth = $_POST['optradio4'];
	if($fourth == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq4'");
	}elseif ($fourth == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq4'");
	}elseif ($fourth == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq4'");
	}elseif ($fourth == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq4'");
	}elseif ($fourth == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq4'");
	}
}
if(isset($_POST['optradio5'])){
	$fifth = $_POST['optradio5'];
	if($fifth == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq5'");
	}elseif ($fifth == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq5'");
	}elseif ($fifth == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq5'");
	}elseif ($fifth == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq5'");
	}elseif ($fifth == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq5'");
	}
}
if(isset($_POST['optradio6'])){
	$sixth = $_POST['optradio6'];
	if($sixth == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq6'");
	}elseif ($sixth == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq6'");
	}elseif ($sixth == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq6'");
	}elseif ($sixth == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq6'");
	}elseif ($sixth  == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq6'");
	}	
}
if(isset($_POST['optradio7'])){
	$seventh = $_POST['optradio7'];
	if($seventh == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq7'");
	}elseif ($seventh == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq7'");
	}elseif ($seventh == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq7'");
	}elseif ($seventh == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq7'");
	}elseif ($seventh == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq7'");
	}	
}
if(isset($_POST['optradio8'])){
	$eighth = $_POST['optradio8'];
	if($eighth == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq8'");
	}elseif ($eighth == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq8'");
	}elseif ($eighth == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq8'");
	}elseif ($eighth == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq8'");
	}elseif ($eighth == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq8'");
	}	
}
if(isset($_POST['optradio9'])){
	$ninth = $_POST['optradio9'];
	if($ninth == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq9'");
	}elseif ($ninth == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq9'");
	}elseif ($ninth == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq9'");
	}elseif ($ninth == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq9'");
	}elseif ($ninth == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq9'");
	}	
}
if(isset($_POST['optradio10'])){
	$tenth = $_POST['optradio10'];
	if($tenth == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq10'");
	}elseif ($tenth == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq10'");
	}elseif ($tenth == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq10'");
	}elseif ($tenth == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq10'");
	}elseif ($tenth == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq10'");
	}	
}
if(isset($_POST['optradio11'])){
	$eleven = $_POST['optradio11'];
	if($eleven == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq11'");
	}elseif ($eleven == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq11'");
	}elseif ($eleven == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq11'");
	}elseif ($eleven == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq11'");
	}elseif ($eleven == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq11'");
	}	
}
if(isset($_POST['optradio12'])){
	$twelve = $_POST['optradio12'];
	if($twelve == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq12'");
	}elseif ($twelve == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq12'");
	}elseif ($twelve == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq12'");
	}elseif ($twelve == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq12'");
	}elseif ($twelve == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq12'");
	}	
}
if(isset($_POST['optradio13'])){
	$thirteen = $_POST['optradio13'];
	if($thirteen == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq13'");
	}elseif ($thirteen == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq13'");
	}elseif ($thirteen == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq13'");
	}elseif ($thirteen == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq13'");
	}elseif ($thirteen == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq13'");
	}
}
if(isset($_POST['optradio14'])){
	$fourteen = $_POST['optradio14'];
	if($fourteen == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq14'");
	}elseif ($fourteen == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq14'");
	}elseif ($fourteen == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq14'");
	}elseif ($fourteen == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq14'");
	}elseif ($fourteen == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq14'");
	}
}
if(isset($_POST['optradio15a'])){
	$fifteen_a = $_POST['optradio15a'];
	if($fifteen_a == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq15a'");
	}elseif ($fifteen_a == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq15a'");
	}elseif ($fifteen_a == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq15a'");
	}elseif ($fifteen_a == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq15a'");
	}elseif ($fifteen_a == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq15a'");
	}
}
if(isset($_POST['optradio15b'])){
	$fifteen_b = $_POST['optradio15b'];
	if($fifteen_b == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq15b'");
	}elseif ($fifteen_b == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq15b'");
	}elseif ($fifteen_b == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq15b'");
	}elseif ($fifteen_b == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq15b'");
	}elseif ($fifteen_b == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq15b'");
	}
}
if(isset($_POST['optradio15c'])){
	$fifteen_c = $_POST['optradio15c'];
	if($fifteen_c == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq15c'");
	}elseif ($fifteen_c == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq15c'");
	}elseif ($fifteen_c == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq15c'");
	}elseif ($fifteen_c == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq15c'");
	}elseif ($fifteen_c == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq15c'");
	}
}
if(isset($_POST['optradio15d'])){
	$fifteen_d = $_POST['optradio15d'];
	if($fifteen_d == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq15d'");
	}elseif ($fifteen_d == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq15d'");
	}elseif ($fifteen_d == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq15d'");
	}elseif ($fifteen_d == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq15d'");
	}elseif ($fifteen_d == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq15d'");
	}
}
if(isset($_POST['optradio15e'])){
	$fifteen_e = $_POST['optradio15e'];
	if($fifteen_e == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq15e'");
	}elseif ($fifteen_e == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq15e'");
	}elseif ($fifteen_e == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq15e'");
	}elseif ($fifteen_e == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq15e'");
	}elseif ($fifteen_e == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq15e'");
	}
}
if(isset($_POST['optradio15f'])){
	$fifteen_f = $_POST['optradio15f'];
	if($fifteen_f == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq15f'");
	}elseif ($fifteen_f == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq15f'");
	}elseif ($fifteen_f == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq15f'");
	}elseif ($fifteen_f == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq15f'");
	}elseif ($fifteen_f == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq15f'");
	}
}
if(isset($_POST['optradio15g'])){
	$fifteen_g = $_POST['optradio15g'];
	if($fifteen_g == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq15g'");
	}elseif ($fifteen_g == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq15g'");
	}elseif ($fifteen_g == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq15g'");
	}elseif ($fifteen_g == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq15g'");
	}elseif ($fifteen_g == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq15g'");
	}
}
if(isset($_POST['optradio15h'])){
	$fifteen_h = $_POST['optradio15h'];
	if($fifteen_h == "vs"){
		mysqli_query($con,"UPDATE survey_of_graduates SET very_satisfied = very_satisfied + 1 WHERE qid ='sgsq15h'");
	}elseif ($fifteen_h == "s") {
		mysqli_query($con,"UPDATE survey_of_graduates SET satisfied=satisfied + 1 WHERE qid ='sgsq15h'");
	}elseif ($fifteen_h == "u") {
		mysqli_query($con,"UPDATE survey_of_graduates SET uncertain=uncertain + 1 WHERE qid ='sgsq15h'");
	}elseif ($fifteen_h == "d") {
		mysqli_query($con,"UPDATE survey_of_graduates SET dissatisfied=dissatisfied + 1 WHERE qid ='sgsq15h'");
	}elseif ($fifteen_h == "vd") {
		mysqli_query($con,"UPDATE survey_of_graduates SET very_dissatisfied=very_dissatisfied + 1 WHERE qid ='sgsq15h'");
	}
}
if(isset($_POST['opt16'])){
	$sixteen = $_POST['opt16'];
	mysqli_query($con,"INSERT INTO `comments_of_sgs`(`qid`, `comment`) VALUES ('sgsq16','$sixteen')");
}
if(isset($_POST['opt17'])){
	$seventeen = $_POST['opt17'];
	mysqli_query($con,"INSERT INTO `comments_of_sgs`(`qid`, `comment`) VALUES ('sgsq17','$seventeen')");	
}
mysqli_close($con);
?>
<script type="text/javascript">
	alert("form submit successfully");
	window.history.go(-1);
</script>
