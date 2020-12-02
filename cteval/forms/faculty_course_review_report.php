<!DOCTYPE html>
<html>
<head>
	<title>Faculty Course Review Report</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="images/header.css">
	<style type="text/css">
		textarea{
			resize: none;
		}
	</style>
</head>
<body style="background: #CCC; color: #6B6B6B;">

	<h1 id="logo-text" ><a href="faculty_course_review_report.php" title="">UET Peshawar </a></h1>		
	<p id="slogan">Faculty Course Review Report</p>	
	<img src="../images/header.jpg" width="100%" style="background: #8AB84B; color: #fff;">
	<br><br>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<form method="post" action="functions/faculty_course_review_report_insertion.php" class="form-horizontal well well-lg" style="margin-left: 50px; margin-right: 50px;  border-color: #53AB0B;" autocomplete ="off">
	  			<table class="table table-bordered">
	  				<tbody>
	  				  <tr>
	  					<td width="170px">Department:</td>
	  					<td width="290px"><input type="text" name="deptName" class="form-control"></td>
	  					<td width="160px">Faculty:</td>
	  					<td><input type="text" name="facultyName" class="form-control"></td>
	  				  </tr>
	  				  <tr>
	  				  	<td>Course Code:</td>
	  				  	<td><input type="text" name="courseCode" class="form-control"></td>
	  				  	<td>Title:</td>
	  				  	<td><input type="text" name="title" class="form-control"></td>
	  				  </tr>
	  				  <tr>
	  				  	<td>Session:</td>
	  				  	<td><input type="text" name="session" class="form-control"></td>
	  				  	<td>Semester:</td>
	  				  	<td>
	  				  		<label class="radio-inline">
	  				  			<input type="radio" name="semester" value="autumn">Autumn
	  				  		</label>
	  				  		<label class="radio-inline">
	  				  			<input type="radio" name="semester" value="spring">Spring
	  				  		</label>
	  				  		<label class="radio-inline">
	  				  			<input type="radio" name="semester" value="summer">Summer
	  				  		</label>
	  				  	</td>
	  				  </tr>
	  				  <tr>
	  				  	<td>Credit Value:</td>
	  				  	<td><input type="text" name="creditValue" class="form-control"></td>
	  				  	<td>Level:</td>
	  				  	<td><input type="text" name="level" class="form-control"></td> 	
	  				  </tr>
	  				  <tr>
	  				  	<td>Prerequisites:</td>
	  				  	<td><input type="text" name="prerequisite" class="form-control"></td>
	  				  	<td>Name of Course Instructor:</td>
	  				  	<td><input type="textarea" name="instructorName" class="form-control"></td>
	  				  </tr>
	  				  <tr>
	  				  	<td>No. of Students Contact Hours</td>
	  				  	<td><input type="Number" name="contactHour" class="form-control"></td>
	  				  	<td>Lectures</td>
	  				  	<td><input type="Number" name="lecture" class="form-control"></td>
	  				  </tr>
	  				  <tr>
	  				  	<td>Seminars</td>
	  				  	<td><input type="Number" name="seminar" class="form-control"></td>
	  				  	<td>Other (Please State)</td>
	  				  	<td><input type="text" name="other" class="form-control"></td>
	  				  </tr>
	  				  <tr>
	  				  	<td>Assessment Methods:</td>
						<td>give precise details (no & length of assignments, exams, weightings 	etc)
						</td>
						<td></td>
						<td><textarea class="form-control" rows="5" name="assessmentMethod" 
									style="resize: none;">
							</textarea>
						</td>
	  				  </tr>
	  				</tbody>
	  			</table><br>

	  			<h4><b>Distribution of Grade/Marks and other Outcomes: (adopt the grading system as required)</b></h4>
	  			
	  			<table class="table table-bordered">
	  				<tbody>
	  				  <tr>
	  				  	<td>Undergraduate</td>
	  				  	<td>Originally Registered</td>
	  				  	<td>%GradeA</td>
	  				  	<td>%GradeB</td>
	  				  	<td>%GradeC</td>
	  				  	<td>D</td>
	  				  	<td>E</td>
	  				  	<td>F</td>
	  				  	<td>No Grade</td>
	  				  	<td>Withdrawal</td>
	  				  	<td>Total</td>
	  				  </tr>
	  				  <tr>
	  				  	<td>No. of Students</td>
	  				  	<td><input type="Number" name="under_Registered" class="form-control"></td>
	  				  	<td><input type="Number" name="under_gradeA" class="form-control"></td>
	  				  	<td><input type="Number" name="under_gradeB" class="form-control"></td>
	  				  	<td><input type="Number" name="under_gradeC" class="form-control"></td>
	  				  	<td><input type="Number" name="under_gradeD" class="form-control"></td>
	  				  	<td><input type="Number" name="under_gradeE" class="form-control"></td>
	  				  	<td><input type="Number" name="under_gradeF" class="form-control"></td>
	  				  	<td><input type="Number" name="under_noGrade" class="form-control"></td>
	  				  	<td><input type="Number" name="under_withdrawal" class="form-control">
	  				  	</td>
	  				  	<td><input type="Number" name="under_totalGrade" class="form-control">
	  				  	</td>
	  				  </tr>
	  				  <tr>
	  				  	<td>Post-Graduate</td>
	  				  	<td>Originally Registered</td>
	  				  	<td>%GradeA</td>
	  				  	<td>%GradeB</td>
	  				  	<td>%GradeC</td>
	  				  	<td>D</td>
	  				  	<td>E</td>
	  				  	<td>F</td>
	  				  	<td>No Grade</td>
	  				  	<td>Withdrawal</td>
	  				  	<td>Total</td>
	  				  </tr>
	  				  <tr>
	  				  	<td>No. of Students</td>
	  				  	<td><input type="Number" name="post_Registered" class="form-control"></td>
	  				  	<td><input type="Number" name="post_gradeA" class="form-control"></td>
	  				  	<td><input type="Number" name="post_gradeB" class="form-control"></td>
	  				  	<td><input type="Number" name="post_gradeC" class="form-control"></td>
	  				  	<td><input type="Number" name="post_gradeD" class="form-control"></td>
	  				  	<td><input type="Number" name="post_gradeE" class="form-control"></td>
	  				  	<td><input type="Number" name="post_gradeF" class="form-control"></td>
	  				  	<td><input type="Number" name="post_nograde" class="form-control"></td>
	  				  	<td><input type="Number" name="post_withdrawal" class="form-control"></td>
	  				  	<td><input type="Number" name="post_totalGrade" class="form-control"></td>
	  				  </tr>
	  				</tbody>
	  			</table>	
  				<br>
	  			<h4><b>Overview/Evaluation (Course Co-coordinator’s Comments)</b></h4>
	  			<p>Feedback: first summarize, then comment on feedback received from:</p>
	  			<div>
	  				1) Student (Course Evaluation) Questionnaires <br><br>
	  				<textarea rows="5" name="courseEvaluation" class="form-control"></textarea>
	  			</div><br>
	  			<div>
	  				2) External Examiners or Moderators (if any)<br><br>
	  				<textarea rows="5" name="moderator" class="form-control"></textarea>
	  			</div><br>
	  			<div>
	  				3) Student /staff Consultative Committee (SSCC) or equivalent, (if any)<br><br>
	  				<textarea rows="5" name="sscc" class="form-control"></textarea>
	  			</div><br>
	  			<div>
	  				4) Curriculum: comment on the continuing appropriateness of the Course curriculum in relation to the intended learning outcomes (course objectives) and its compliance with the HEC Approved / Revised National Curriculum Guidelines<br><br>
	  				<textarea rows="5" name="curriculum" class="form-control"></textarea>
	  			</div><br>
	  			<div>
	  				5) Assessment: comment on the continuing effectiveness of method(s) of assessment in relation to the intended learning outcomes (Course objectives)<br><br>
	  				<textarea rows="5" name="assessment" class="form-control"></textarea>
	  			</div><br>
	  			<div>
	  				6) Enhancement: comment on the implementation of changes proposed in earlier 
					Faculty Course Review Reports <br><br>
	  				<textarea rows="5" name="enhancement" class="form-control"></textarea>
	  			</div><br>
	  			<div>
	  				7) Outline any changes in the future delivery or structure of the Course that this semester/term’s experience may prompt<br><br>
	  				<textarea rows="5" name="outline" class="form-control"></textarea>
	  			</div><br>

	  			<div class="form-group">
					<label class="control-label col-sm-3">Name (Course Instructor)</label>
					<div class="col-sm-4">
						<input type="text" name="courseInstructor" class="form-control">
					</div>	
					<label class="control-label col-sm-2">Date</label>
					<div class="col-sm-3">
						<input type="Date" name="firstInstructorDate" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3">Name (Head of Department)</label>
					<div class="col-sm-4">
						<input type="text" name="headOfDepartment" class="form-control">
					</div>	
					<label class="control-label col-sm-2">Date</label>
					<div class="col-sm-3">
						<input type="Date" name="headOfDepartmentDate" class="form-control">
					</div>
				</div><br>
				
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