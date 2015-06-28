<html>
<title>


</title>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-1.11.3.min.js"></script>

 <script src="js/bootstrap.min.js"></script>
<style type="text/css">
	.panel {
		background-color: #e7e7e7;
		height: 100%;
		width: 100%;
		margin-left: -5%;
		margin-top: 2%;
	}
</style>

 
</head>
<body>
<?php include  'includes/menu.php';?>

<!--<div class="btn-group" data-toggle="buttons" style="margin-top: 10%;margin-left: 30%">
   <button type="button" class="btn btn-primary">New Joinee</button>

   <button type="button" class="btn btn-primary">Vacate PG</button>
   <button type="button" class="btn btn-primary">Monthly Pay</button>
   <button type="button" class="btn btn-primary">Overall Monthly Details</button>
   
</div>-->
<div class="container">
	<ul class="nav nav-pills nav-justified" style="margin-top:10%;" data-tabs="tabs">
  		<li class="active"><a href="#new-joinee" data-toggle="tab">New Joinee</a></li>
  		<li ><a href="#vacate-pg" data-toggle="tab">Vacate PG</a></li>
  		<li ><a href="#monthly-rent" data-toggle="tab">Monthly Rent Pay</a></li>
  		<li ><a href="#month-details" data-toggle="tab">Overall Month Details</a></li>
	</ul>	
</div>

<div id="my-tab-content" class="tab-content" style="margin-left:10%;">
    <div class="tab-pane active panel" id="new-joinee">
    	New joinee form here
    </div>
    <div class="tab-pane panel" id="vacate-pg">
    	vacate pg form goes here
    </div>
    <div class="tab-pane panel" id="monthly-rent"> 	
    	monthly rent form goes here
    </div>
    <div class="tab-pane panel" id="month-details">
    	overall month details of the pg goes here
    </div>
</div>





</body>
</html>