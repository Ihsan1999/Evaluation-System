<!DOCTYPE html>
<html>
<head>
	<title>Department survey</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="images/header.css">
</head>
<body style="background: #CCC; color: #6B6B6B;">
	
	<h1 id="logo-text" ><a href="department_survey.php" title="">UET Peshawar </a></h1>		
	<p id="slogan">Survey of Department Offering <br> Ph.D. Programs</p>	
	<img src="../images/header.jpg" width="100%" style="background: #8AB84B; color: #fff;">
	<br><br>

	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<form method="post" action="functions/department_insertion.php" class="form-horizontal well well-lg" style="margin-left: 180px; border-color: #53AB0B;" autocomplete ="off">
  				<table class="table table-bordered">
				    <tbody>
				      <tr>
				        <th width="50px">1</th>
				        <th colspan="3">General Information:</th>
				      </tr>
				      <tr>
				        <td>1.1</td>
				        <td>Name of Department</td>
				        <td><input type="text" name="deptName" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>1.2</td>
				        <td>Name of Faculty</td>
				        <td><input type="text" name="facultyName" class="form-control"></td>
				      </tr>
				      <tr>
				        <td>1.3</td>
				        <td>Date of initiation of Ph.D. program</td>
				        <td><input type="Date" name="phdInitiat" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>1.4</td>
				      	<td>Total number of academic journals subscribed in area relevant to Ph.D. program.</td>
				      	<td><input type="Number" name="phdJournals" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>1.5</td>
				      	<td>Number of Computers available per Ph.D. student</td>
				      	<td><input type="Number" name="phdComputers" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>1.6</td>
				      	<td>Total Internet Bandwidth available to all the students in the Department.</td>
				      	<td><input type="text" name="bandwidth" class="form-control"></td>
				      </tr>
				      <tr>
				      	<th>2</th>
				      	<th colspan="3">Faculty Resources:</th>
				      </tr>
				      <tr>
				      	<td>2.1</td>
				      	<td>Number of faculty members holding Ph.D. degree in the department.</td>
				      	<td><input type="Number" name="facultyMembers" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>2.2</td>
				      	<td>Number of HEC approved Ph.D. Advisors in the department.</td>
				      	<td><input type="Number" name="phdAdvisors" class="form-control"></td>
				      </tr>
				      <tr>
				      	<th>3</th>
				      	<th colspan="3">Research Output:</th>
				      </tr>
				      <tr>
				      	<td>3.1</td>
				      	<td>Total number of articles published last year in International Academic Journals that are authored by faculty members and students in the department.</td>
				      	<td><input type="Number" name="internationalArticles" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>3.2</td>
				      	<td>Total number of articles published last year in Asian Academic Journals that are authored by faculty members and students in the department.</td>
				      	<td><input type="Number" name="asianArticles" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>3.3</td>
				      	<td>Total number of ongoing research projects in the department funded by different organizations</td>
				      	<td><input type="Number" name="researchProject" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>3.4</td>
				      	<td>Number of post-graduate students in the department holding scholarships/fellowships.</td>
				      	<td><input type="Number" name="postStudent" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>3.5</td>
				      	<td>Total Research Funds available to the Department from all sources.</td>
				      	<td><input type="Number" name="researchFunds" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>3.6</td>
				      	<td>Number of active international linkages involving exchange of researchers/students/faculty etc. (Attach Details).</td>
				      	<td><input type="Number" name="internationalLinkages" class="form-control"></td>
				      </tr>
				      <tr>
				      	<th>4</th>
				      	<th colspan="3">Student Information:</th>
				      </tr>
				      <tr>
				      	<td>4.1</td>
				      	<td>Number of Ph.D. degrees conferred to date to students from the Department during the past three academic years.</td>
				      	<td><input type="Number" name="phdDegrees" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>4.2</td>
				      	<td>Number of Ph.D. students currently enrolled in the department.</td>
				      	<td><input type="Number" name="phdStudents" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>4.3</td>
				      	<td>Ratio of number of students accepted to total number of applicants for Ph.D. Program.</td>
				      	<td><input type="text" name="studentRatio" class="form-control"></td>
				      </tr>
				      <tr>
				      	<th>5</th>
				      	<th colspan="3">Program Information:</th>
				      </tr>
				      <tr>
				      	<td>5.1</td>
				      	<td>Entrance requirements into Ph.D. Program (M.Sc. / M.Phil.) Indicate subjects or M.Sc. / M.Phil.</td>
				      	<td><input type="text" name="phdEntrance" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>5.2</td>
				      	<td>Is your Ph.D. program based on research only?</td>
				        <td align="center">
				        	<label class="radio-inline">
				        		<input type="radio" name="radio1" value="yes"/>Yes
				        	</label> &nbsp;
				      		<label class="radio-inline">
				      			<input type="radio" name="radio1" value="no"/>No
				      		</label>
				      	</td>
				      </tr>
				      <tr>
				      	<td>5.3</td>
				      	<td>Maximum number of years in which a Ph.D. degree has to be completed after initial date of enrollment in Ph.D. program.</td>
				      	<td><input type="text" name="phdCompleted" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>5.4</td>
				      	<td>Total number of post M.Sc. (16-year equivalent) courses required for Ph.D.</td>
				      	<td><input type="text" name="postMSc" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>5.5</td>
				      	<td>Total number of M.Phil. level courses taught on average in a Term / Semester.</td>
				      	<td><input type="text" name="mphilCourses" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>5.6</td>
				      	<td>Total number of Ph.D. level courses taught on average in a Term / Semester.</td>
				      	<td><input type="text" name="phdCourses" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td rowspan="5">5.7</td>
				      	<td colspan="3">Do your students have to take/write:</td>
				      </tr>
				      <tr>
				      	<td>Ph.D. Qualifying examination</td>
				      	<td align="center">
				      		<label class="radio-inline">
				      			<input type="radio" name="radio2" value="yes"/>Yes
				      		</label> &nbsp;
				      		<label class="radio-inline">
				      			<input type="radio" name="radio2" value="no"/>No
				      		</label>
				      	</td>
				      </tr>
				      <tr>
				      	<td>Comprehensive examination</td>
				      	<td align="center">
				      		<label class="radio-inline">
				      			<input type="radio" name="radio3" value="yes"/>Yes
				      		</label> &nbsp;
				      		<label class="radio-inline">
				      			<input type="radio" name="radio3" value="no"/>No
				      		</label>
				      	</td>
				      </tr>
				      <tr>	
				      	<td>Research paper in HEC approved Journal </td>
				      	<td align="center">
				      		<label class="radio-inline">
				      			<input type="radio" name="radio4" value="yes"/>Yes
				      		</label> &nbsp;
				      		<label class="radio-inline">
				      			<input type="radio" name="radio4" value="no"/>No
				      		</label>
				      	</td>
				      </tr>
				      <tr>
				      	<td>Any other examination</td>
				      	<td align="center">
				      		<label class="radio-inline">
				      			<input type="radio" name="radio5" value="yes"/>Yes
				      		</label> &nbsp;
				      		<label class="radio-inline">
				      			<input type="radio" name="radio5" value="no"/>No
				      		</label>
				      	</td>
				      </tr>
				      <tr>
				      	<td>5.8</td>
				      	<td>Total number of International examiners to which the Ph.D. dissertation is sent.</td>
				      	<td><input type="Number" name="phdExaminers" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>5.9</td>
				      	<td>How is the selection of an examiner from technologically advanced countries carried out?</td>
				      	<td><input type="text" name="examinerSelection" class="form-control"></td>
				      </tr>
				      <tr>
				      	<td>5.10</td>
				      	<td>Is there a minimum residency requirement (on campus) for award of Ph.D. degree?</td>
				      	<td><input type="text" name="phdAward" class="form-control"></td>
				      </tr>
				      <tr>
				      	<th>6</th>
				      	<th colspan="3">Additional Information </th>
				      </tr>
				      <tr>
				      	<td>6.1</td>
				      	<td>Any other information that you would like to provide.</td>
				      	<td><input type="text" name="otherInfo" class="form-control"></td>
				      </tr>

				    </tbody>
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