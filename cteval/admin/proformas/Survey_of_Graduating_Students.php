<?php include('dbConn.php'); 		?>

<!DOCTYPE html>
<html>
<head>
	<title>Survey of graduate</title>
	<link rel="stylesheet" type="text/css" href="survey.css">
	<link type="text/css" href="base/ui.all.css" rel="stylesheet" />
	<script type="text/javascript" src="myjs/jquery.js"></script>
    <script type="text/javascript" src="myjs/skinnytip.js"></script>
	<script type="text/javascript" src="myjs/ui.core.js"></script>
	<script type="text/javascript" src="myjs/ui.tabs.js"></script>

<script type="text/javascript">
	$(function() {
		$("#tabs").tabs();
	});
	</script>
<style type="text/css">

.style14 {
	color: #333333;
	font-weight: bold;
}
.style16 {color: #333333}
.style19 {color: #FFFFFF; font-weight: bold; }
.style22 {color: #FFFFFF}

</style>

</head>
<body>

<div id="tiplayer" style="position:absolute; visibility:hidden; z-index:10000;"></div>
<div id="header">
    <div id="logo">
        <h1><a href="#">Student and course evaluation </a></h1>

        <p class="style1">Admin Section</p>
    </div>
    <div id="menu">
        <ul id="main">
          <li class="current_page_item"><a href="../campus.php">Homepage</a></li>
          <li><a href="../technology.php">Technology</a></li>
          <li><a href="../crep_main.php">Reports</a></li>
          <li><a href="../logs.php">Logs</a></li>
          <li><a href="#">Change Password</a></li>
          <li><a href="home.php">Proformas</a></li>
          <li><a href="../log.php?myaction=logout">Logout</a></li>
		</ul>
    </div>
    
</div>

<!-- page start -->
<div id="tabs" align="center">
<br>
<form>
	<table>
		<tr>
			<td>Search for result</td>
			<td><input type="date" name=""></td>
			<td><button>Search</button></td>
		</tr>
	</table>
</form><br><br>

	<ul>
		<li><a href="#tabs-1">Question-Wise Report</a></li>
	</ul>
    <div id="tabs-1" align="center">
	 	<h2>Questions</h2>
	 	<h3>Survey of graduating students</h3>
	 	<table width="90%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#3333CC">
    		<tr bgcolor="#3333CC">
		      <td width="26%" ><div align="center" class="style19 style22">Question</div></td>
		      <td width="10%" ><div align="center" class="style19">A</div></td>
		      <td width="10%"><div align="center" class="style19">B</div></td>
		      <td width="10%"><div align="center" class="style19">C</div></td>
		      <td width="10%"><div align="center" class="style19">D</div></td>
		      <td width="10%" ><div align="center" class="style19">E</div></td>
		      <td width="10%" ><div align="center" class="style19">Weighted Average </div></td>
		      <td width="14%"><div align="center" class="style19">Position</div></td>
    		</tr>
<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>1
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq1' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq1' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq1' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq1' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq1' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>2
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq2' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq2' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq2' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq2' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq2' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>3
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq3' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq3' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq3' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq3' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq3' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>4
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq4' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq4' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq4' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq4' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq4' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>5
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq5' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq5' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq5' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq5' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq5' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>6
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq6' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq6' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq6' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq6' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq6' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>7
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq7' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq7' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq7' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq7' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq7' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>8
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq8' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq8' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq8' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq8' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq8' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>9
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq9' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq9' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq9' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq9' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq9' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>10
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq10' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq10' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq10' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq10' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq10' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>11
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq11' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq11' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq11' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq11' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq11' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>12
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq12' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq12' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq12' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq12' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq12' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>13
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq13' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq13' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq13' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq13' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq13' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>14
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq14' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq14' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq14' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq14' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq14' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>15(i)
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15a' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15a' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15a' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15a' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15a' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>15(ii)
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15b' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15b' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15b' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15b' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15b' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>15(iii)
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15c' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15c' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15c' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15c' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15c' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>15(iv)
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15d' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15d' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15d' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15d' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15d' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>15(v)
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15e' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15e' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15e' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15e' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15e' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>15(vi)
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15f' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15f' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15f' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15f' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15f' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>15(vii)
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15g' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15g' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15g' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15g' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15g' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->

			<!-- start from here -->
		    <tr>
		      <td>
		      	<div align="left"><img src="myicons/view.gif" alt="Tooltip" width="24" 
		      		height="24"/>15(viii)
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15h' AND `satisfaction`= 1";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		  	  </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15h' AND `satisfaction`= 2";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15h' AND `satisfaction`= 3";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15h' AND `satisfaction`= 4";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		<?php 
		      		$qry = "SELECT count(satisfaction) FROM `example` WHERE `qid`= 'sgsq15h' AND `satisfaction`= 5";
					$run = mysqli_query($con,$qry);
					if(mysqli_num_rows($run) > 0){
						$data = mysqli_fetch_array($run);
		      			echo $data[0]; 
		      		}?>
		      	</div>
		      </td>

		      <td bordercolor="#3333CC">
		      	<div align="center">
		      		
		      	</div>
		      </td>
		      
		      <td bordercolor="#3333CC">
		        <div align="left">
								        
		        </div>
		      </td>
		    </tr>
			<!-- end here		   -->



    <tr>
      <td bgcolor="#FFFFCC">
          <div align="center">Total</div>
     </td>
      <td bgcolor="#FFFFCC"><div align="center"><span class="style16"></span></div></td>
      <td bgcolor="#FFFFCC"><div align="center"><span class="style16"></span></div></td>
      <td bgcolor="#FFFFCC"><div align="center"><span class="style16"></span></div></td>
      <td bgcolor="#FFFFCC"><div align="center"><span class="style16"> </span></div></td>
      <td bgcolor="#FFFFCC"><div align="center"><span class="style16"> </span></div></td>
      <td bgcolor="#FFFFCC"><div align="center"><span class="style16"></span></div></td>
        <td bgcolor="#FFFFCC"><div align="left"><span class="style16">
          				
      </span></div></td>
    </tr>
	
  </table>
  <br/>
  
</div>

</body>
</html>

<?php  ?>
<?php require_once("footer.php") ?>
