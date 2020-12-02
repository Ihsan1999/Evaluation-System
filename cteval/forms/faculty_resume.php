<!DOCTYPE html>
<html>
<head>
	<title>Faculty Resume</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="images/header.css">
	<style>
		textarea{
			resize: none;
		}
	</style>
</head>
<body style="background: #CCC; color: #6B6B6B;">

	<h1 id="logo-text" ><a href="faculty_resume.php" title="">UET Peshawar </a></h1>		
	<p id="slogan">Faculty Resume</p>	
	<img src="../images/header.jpg" width="100%" style="background: #8AB84B; color: #fff;">
	<br><br>

	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<form method="post" action="functions/faculty_resume_insertion.php" class="form-horizontal well well-lg" style="margin-left: 180px; border-color: #53AB0B;" autocomplete ="off">
					
					<table class="table table-bordered">
						
							<tr>
							  <td>Name</td>
							  <td colspan="6"><input type="text" name="name" class="form-control"></td>
							</tr>
							<tr>
							  <td rowspan="3">Personal</td>
							  <td>Address</td>
							  <td><input type="text" name="address" class="form-control"></td>
							</tr>
							<tr>
							  <td>Phone Number</td>
							  <td><input type="number" name="phoneNo" class="form-control"></td>
							</tr>
							<tr>
							  <td>Other Personal <br> Information</td>
							  <td><textarea class="form-control" name="otherPersonal"></textarea></td>
							</tr>

							<tr>
							  <td>Experience</td>
							  <td colspan="3"><textarea class="form-control" name="experience" rows="6"></textarea></td>
							</tr>

							<tr>
							  <td>Honor and Awards</td>
							  <td colspan="3"><textarea class="form-control" name="honor_award" rows="4"></textarea></td>
							</tr>

							<tr>
							  <td>Memberships</td>
							  <td colspan="3">
							  	<textarea class="form-control" name="membership" rows="4">
							  	</textarea>
							  </td>
							</tr>

							<tr>
							  <td>Graduate Students <br> 
							  	Postdocs <br>
							  	Undergraduate <br>
							  	Student <br>
							  	<label>Honor Students</label></td>
							  <td colspan="3">
							  	<textarea class="form-control" name="honorStudent" rows="7">
							  	</textarea>
							  </td>
							</tr>
							
							<tr>
							  <td>Service Activity</td>
							  <td colspan="3">
							  	<textarea class="form-control" name="serviceActivity">
							  	</textarea>
							  </td>
							</tr>

							<tr>
							  <td><label>Brief Statement of<br>Research Interest</label></td>
							  <td colspan="3">
							  	<textarea class="form-control" rows="6" name="researchInterest">
							  	</textarea>
							  </td>
							</tr>

							<tr>
							  <td><label>Publications </label></td>
							  <td colspan="3">
							  	<textarea class="form-control" rows="8" name="publication">	
							  	</textarea>
							  </td>
							</tr>

							<tr>
							  <td><label>Research Grants <br> and Contracts</label></td>		
							  <td colspan="3">
							  	<textarea class="form-control" rows="5" name="researchContract">
							  	</textarea>
							  </td>			
							</tr>

							<tr>
							  <td>
							  	<label>Other Research or <br> Creative <br> Accomplishments
							  	</label>
							  </td>
							  <td colspan="3">
							  	<textarea class="form-control" rows="5" name="otherResearch">	
							  	</textarea></td>
							</tr>

							<tr>
							  <td><label>Select Professional <br> Presentations</label></td>
							  <td colspan="3">
							  	<textarea class="form-control" rows="5" name="presentation">
							  	</textarea>
							  </td>
							</tr>
							 
						
					</table>

					<input type="submit" name="submit" class="btn btn-success">
				</form>
			</div>
		</div>

		<div id="footer">
						
		<p>2020 <strong>UET Peshawar reserved</strong> | 
		Designed by: <a href="#">Computer Cell</a> CS & IT UET PESHAWAR 
   		</p>			
	
		<!-- footer ends-->
		</div>
		
	</div>

</body>
</html>