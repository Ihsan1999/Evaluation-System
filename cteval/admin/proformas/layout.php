
<!DOCTYPE html>
<html>
<head>
  <title>home</title>
  <script src="assets/jquery.min.js"></script>

        <link rel="stylesheet" href="assets/bootstrap.min.css" />  
           <script src="assets/jquery-ui.js"></script>  
           <link rel="stylesheet" href="assets/jquery-ui.css">
           
<!--   <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script> -->

<style type="text/css">
#logo {
  width: 1000px;
  height: 100px;
  margin: 0 auto;
  padding: 0 10px 0 70px;
  background: url(images/img01.jpg) no-repeat left top;
}

#logo h1, #logo p {
  float: left;
  margin: 0;
}

#logo h1 {
  padding: 25px 0 0 0;
  letter-spacing: -1px;
  text-transform: lowercase;
  font-weight: normal;
  font-size: 3em;
}

#logo p {
  text-transform: uppercase;
  padding: 47px 0 0 3px;
  font-size: 10px;
}

</style>

</head>
<body style="background-color: #787878; margin-top: 50px;">
  <div id="logo">
    <h1>evaluation</h1>
    <p class="style1">Admin Section</p>
    <button class="pull-right btn btn-success" style="margin-top: 90px; margin-right: 5px;"><a href="log.php?myaction=logout">Logout</a></button>
  </div>
  
<div class="container" style="width: 1000px; padding-top: 30px; background-color: white;">
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand active" href="#">Admin Panel</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Proforma 1</a></li>
      <li><a href="proforma_2.php">Proforma 2</a></li>
      <li><a href="proforma_3.php">Proforma 3</a></li>
      <li><a href="proforma_4.php">Proforma 4</a></li>
      <li><a href="generatePassword.php">Generate Password</a></li>
<!--       <li><a href="proforma_5.php">Proforma 5</a></li>
      <li><a href="proforma_6.php">Proforma 6</a></li>
      <li><a href="proforma_7.php">Proforma 7</a></li>
      <li><a href="proforma_8.php">Proforma 8</a></li> -->
    </ul>
  </div>
</nav>

<div class="row">

<h2 id="demo" align="center"></h2>
<h3 align="center">Data</h3><br/> 

  <div class="col-sm-6">    
     
    <div class="col-md-3">  
      <input type="text" name="from_date" id="from_date" class="form-control" placeholder="From Date" />  
    </div>  
    <div class="col-md-3">  
      <input type="text" name="to_date" id="to_date" class="form-control" placeholder="To Date" />  
    </div>
    <div class="col-md-3">  
      <select class="form-control" name="department" id="department">
          <option value="CS&IT">CS&IT</option>
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
    <div class="col-md-3">  
      <input type="button" name="filter" id="filter" value="Filter" class="btn btn-info" />  
    </div>  
    <div style="clear:both"></div>                 
    <br />  
    <div id="order_table">  
      <table class="table table-bordered">  
        <tr>  
          <th width="5%">Question</th>  
          <th width="10%">A</th> 
          <th width="10%">B</th>  
          <th width="10%">C</th>  
          <th width="10%">D</th>  
          <th width="10%">E</th>  

        </tr>
        <tr>  

      </table>
  </div>
</div>


<div class="col-sm-6">
   

    <div id="chart_div" style="width: 100%; height: 450px;"></div>

      <div id="piechart" style="width: 100%; height: auto;"></div>


 </div>


</div>
</div>


 <script type="text/javascript" src="assets/loader.js"></script>

</body>
</html>