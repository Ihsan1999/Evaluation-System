<!DOCTYPE html>
<html>
<head>
	<title>Faculty survey</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="images/header.css">
	
</head>
<body style="background: #CCC; color: #6B6B6B;">

<h1 id="logo-text" ><a href="faculty_survey.php" title="">UET Peshawar </a></h1>		
<p id="slogan">Faculty Survey </p>	

<img src="../images/header.jpg" width="100%" style="background: #8AB84B; color: #fff;">
<br><br>

<div class="container">
	<div class="row">
		<div class="col-sm-10">
	        <form action="functions/faculty_insertion.php" method="POST" class="form-horizontal well well-lg"  role="form" name="form"
	        style="margin-left: 180px; border-color: #53AB0B;" autocomplete ="off">
	          		
	          	<div class="form-group">
	          		<div class="col-sm-9">
	          	   	1. Your mix of research, teaching and community service.<br>
	          	   	<label class="radio-inline"><input type="radio" name="optradio1" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio1" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio1" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio1" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio1" value="vd" required>Very dissatisfied</label>
	          		</div>
	          	</div>
	          	<div class="form-group">
	          		<div class="col-sm-9">
	          	   	2. The intellectual stimulation of your work.<br>
	          	   	<label class="radio-inline"><input type="radio" name="optradio2" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio2" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio2" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio2" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio2" value="vd" required>Very dissatisfied</label>
	          		</div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    3. Type of teaching / research you currently do.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio3" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio3" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio3" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio3" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio3" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	         	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    4. Your interaction with student .<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio4" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio4" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio4" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio4" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio4" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    5. Cooperation you recive from colleagues.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio5" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio5" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio5" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio5" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio5" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    6. The mentoring available to you.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio6" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio6" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio6" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio6" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio6" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    7. Administrative support from the department.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio7" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio7" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio7" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio7" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio7" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    8. Providing clarity about the faculty promotion process.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio8" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio8" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio8" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio8" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio8" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    9. Your prospects for advancement and progress through ranks.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio9" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio9" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio9" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio9" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio9" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    10. Salary and compensation package.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio10" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio10" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio10" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio10" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio10" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    11. Job security and stability at the department.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio11" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio11" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio11" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio11" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio11" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    12. Amount  of time you have for yourself and family.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio12" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio12" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio12" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio12" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio12" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    13. The overall climate at the department.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio13" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio13" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio13" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio13" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio13" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	<div class="form-group">
	          	    <div class="col-sm-9">
	          	    14. Whether the department is utilizing your experience and knowledge.<br>
	          	    <label class="radio-inline"><input type="radio" name="optradio14" value="vs" required>Very satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio14" value="s" required >Satisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio14" value="u" required >Uncertain</label>
					<label class="radio-inline"><input type="radio" name="optradio14" value="d" required >Dissatisfied</label>
					<label class="radio-inline"><input type="radio" name="optradio14" value="vd" required>Very dissatisfied</label>
	          	    </div>
	          	</div>
	          	    
	          	<div class="form-group">
	          		<div class="col-sm-9">
	          	    15. What are the best programs / factors currenty available in your department that &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enhance your motivation and job satisfacton:<br>
	          	    <textarea class="form-control" rows="5" cols="5" name="opt15" style="resize: none;"></textarea>
	          		</div>
	          	</div>
	          	<div class="form-group">
	          		<div class="col-sm-9">
	          	    16. Suggest program / factors that could improve your motivation and job &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;satisfaction?<br>
	          	    <textarea class="form-control" rows="5" name="opt16" style="resize: none;"></textarea>
	          		</div>
	          	</div>
	          	<!-- <div class="form-group">
	          		<div class="col-sm-10">
	          	<h5>Informarion about faculty member</h5>
	          		i.  Academic rank:<br>
	          		<label class="radio-inline"><input type="radio" name="optradio17" value="P" required>Professor</label>
					<label class="radio-inline"><input type="radio" name="optradio17" value="ACP" required >Associate Professor</label>
					<label class="radio-inline"><input type="radio" name="optradio17" value="ASP" required >Assistant Professor</label>
					<label class="radio-inline"><input type="radio" name="optradio17" value="Lec" required >Lecturer</label>
					<label class="radio-inline"><input type="radio" name="optradio17" value="other" required>Other</label>
					<br><br>
					i.  Years of service:<br>
	          		<label class="radio-inline"><input type="radio" name="optradio18" value="A" required>1-5 &nbsp;</label>
					<label class="radio-inline"><input type="radio" name="optradio18" value="B" required>6-10 &nbsp;</label>
					<label class="radio-inline"><input type="radio" name="optradio18" value="C" required>11-15 &nbsp;</label>
					<label class="radio-inline"><input type="radio" name="optradio18" value="D" required>16-20 &nbsp;</label>
					<label class="radio-inline"><input type="radio" name="optradio18" value="E" required> >20</label>
	          		</div>
	          	</div> -->
	          	<br>

	          	<div class="form-group">
		          	<div class="col-sm-6">
		          	Select Department	
		          	<select class="form-control" name="department">
						<option value="CS&IT" dept="CS">CS&IT</option>
						<option value="Agriculture Engineering">Agriculture Engineering</option>
						<option value="Chemical Engineering">Chemical Engineering</option>
						<option value="Civil Engineering">Civil Engineering</option>
						<option value="Computer System Engineering">Computer System Engineering</option>
						<option value="Electrical Engineering">Electrical Engineering</option>
						<option value="Industrial Engineering">Industrial Engineering</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option>
						<option value="Mining Engineering">Mining Engineering</option>
						<option value="Mechatronics Engineering">Mechatronics Engineering</option>

					</select>
					</div>
				</div><br>
	          	<input type="submit" name="submit" style="margin-left: 350px;" class="btn btn-success" value="submit">
	          	
	        </form>
	    </div>
	</div>
	<!-- footer starts -->		
	<div id="footer">
						
			<p>			 2020 <strong>UET Peshawar reserved</strong> | 
		Designed by: <a href="#">Computer Cell</a> CS & IT UET PESHAWAR 
   		</p>			
	
	<!-- footer ends-->
	</div>
</div>

</body>
</html>