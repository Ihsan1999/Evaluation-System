<!DOCTYPE html>
<html>
<head>
	<title>Research student progress Review Form</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="images/header.css">
</head>
<body style="background: #CCC; color: #6B6B6B;">

	<h1 id="logo-text" ><a href="research_student_progress_review-form.php" title="">UET Peshawar </a></h1>		
	<p id="slogan">Research student progress <br> Review Form</p>	
	<img src="../images/header.jpg" width="100%" style="background: #8AB84B; color: #fff;">
	<br><br>

	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<form method="post" action="functions/research_student_insertion.php" class="form-horizontal well well-lg" style="margin-left: 180px; border-color: #53AB0B;" autocomplete ="off">
					 
					<h3 align="center"> <label>For Research student to complete</label></h3><br>
					<div class="form-group">
						<label class="control-label col-sm-5">Date of admission to the department</label>
						<div class="col-sm-4">
							<input type="Date" name="admission_date" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5">Date of initiation of research</label>
						<div class="col-sm-4">
							<input type="Date" name="research_date" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5">Date of completion of Course work</label>
						<div class="col-sm-4">
							<input type="Date" name="completion_date" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5">Number of credit hours completed</label>
						<div class="col-sm-4">
							<input type="Number" name="credit_hours" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-5">Date of Synopsis Defense </label>
						<div class="col-sm-4">
							<input type="Date" name="defense_date" class="form-control">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-6">Cumulative Grade Point Average (CGPA) secured</label>
						<div class="col-sm-4">
							<input type="float" name="cgpa" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<label>Please outline detail of progress in your research since your last review (including any research publications):</label><br><br>
						<textarea class="form-control" name="outline_area" rows="4" style="resize:none;"></textarea>
					</div>
					<div class="form-group">
						<label>Do you have any comments on level of supervision received?</label> <br>&nbsp; 
						<textarea class="form-control" name="supervision_area" rows="4" style="resize:none;"></textarea>
					</div>
					<div class="form-group">
						<label>What do you plane to achieve over the next 6 months?</label> <br>&nbsp; 
						<textarea class="form-control" name="achieve_area" rows="4" style="resize:none;"></textarea>
					</div>
					<div class="form-group">
						<label>Do you have any comments on generic or subject-specialist training you may have receievd or would like to receive internally and / or externally?</label><br>&nbsp; 
						<textarea class="form-control" name="training_area" rows="4" style="resize:none;"></textarea>
					</div>
					<div class="form-group">
						<label>Do you have easy access to sophisticated scientific equipment?</label> <br>&nbsp; 
						<textarea class="form-control" name="equipment_area" rows="4" style="resize:none;"></textarea>
					</div>
					<div class="form-group">
						<label>Do you have sufficient research material / commodities available? </label><br>&nbsp; 
						<textarea class="form-control" name="research_material" rows="4" style="resize:none;"></textarea>
					</div> <br>

					<div class="form-group">
						<label class="control-label col-sm-3">Student</label>
						<div class="col-sm-4">
							<input type="text" name="stdname" class="form-control">
						</div>	
						<label class="control-label col-sm-2">Date</label>
						<div class="col-sm-3">
							<input type="Date" name="stddate" class="form-control">
						</div>
					</div><br>

					<div class="form-group">
	  				<label>Supervisory Committee Comments</label><br>
	  				(Please comment on and benchmark the student’s progress against your University’s internal and external HEC Quality Criteria for Master/PhD/MPhil Studies)
	  				<textarea rows="5" name="committee_comment" class="form-control"></textarea><br>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3">Principal Supervisor:  </label>
						<div class="col-sm-4">
							<input type="text" name="principal" class="form-control">
						</div>	
						<label class="control-label col-sm-2">Date</label>
						<div class="col-sm-3">
							<input type="Date" name="p_date" class="form-control">
						</div>
					</div><br>

					<div class="form-group">
						<label class="control-label col-sm-3">Co-Supervisor:  </label>
						<div class="col-sm-4">
							<input type="text" name="co_name1" class="form-control">
						</div>	
						<label class="control-label col-sm-2">Date</label>
						<div class="col-sm-3">
							<input type="Date" name="co_date1" class="form-control">
						</div>
					</div><br>

					<div class="form-group">
						<label class="control-label col-sm-3">Co-Supervisor:  </label>
						<div class="col-sm-4">
							<input type="text" name="co_name2" class="form-control">
						</div>	
						<label class="control-label col-sm-2">Date</label>
						<div class="col-sm-3">
							<input type="Date" name="co_date2" class="form-control">
						</div>
					</div><br>

					<div class="form-group">
	  				<label>Head of Department Comments:</label><br>
	  				<textarea rows="5" name="hod_comment" class="form-control" style="resize: none;"></textarea><br>
					</div>

					<div class="form-group">
	  				<label>Director, Board of Research Studies (or equivalent) Comments:</label><br>
	  				<textarea rows="5" name="director_comment" class="form-control" style="resize: none;"></textarea><br>
					</div>

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