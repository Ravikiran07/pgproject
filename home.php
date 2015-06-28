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
		border-radius: 25px;
	}
	.innerDiv {
		margin-left: 2%;
		margin-top: 2%;
	}
	.table-wrapper{
    	border: 1px solid black;
    	width: 90%;
    	height: 70%;
    	overflow: auto;
    	margin-left: 4%;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
		fillYear();
	});

	function fillYear(){
		var d = new Date();
		var n = d.getFullYear();
		
		for(var k = n; k > 2000; k--){
			$("#year").append($("<option>").attr("value",k).text(k));
		}
		
	}
</script>
 
</head>
<body>
<?php include  'includes/menu.php';?>

<div class="container">
	<ul class="nav nav-pills nav-justified" style="margin-top:10%;" data-tabs="tabs">
  		<li class="active"><a href="#new-joinee" data-toggle="tab">New Joinee</a></li>
  		<li ><a href="#vacate-pg" data-toggle="tab">Vacate PG</a></li>
  		<li ><a href="#monthly-rent" data-toggle="tab">Monthly Rent Pay</a></li>
  		<li ><a href="#month-details" data-toggle="tab">Overall Month Details</a></li>
	</ul>	
</div>

<div id="my-tab-content" class="tab-content" style="margin-left:10%;">
	<!-- New Joinee form goes here, use innerDiv class inside it for creating form-->
    <div class="tab-pane active panel" id="new-joinee">
	    	New joinee form here
    </div>
    <!-- Vacate PG form goes here, use innerDiv class -->
    <div class="tab-pane panel" id="vacate-pg">
    		vacate pg form goes here
    </div>
    <!-- Monthly rent form goes here, use innerDiv class-->
    <div class="tab-pane panel" id="monthly-rent"> 	
    		monthly rent form goes here
    </div>
    <!-- Overall Month details form goes here, use innerDiv class-->
    <div class="tab-pane panel" id="month-details">
    	<div class="innerDiv">
    		<label style="margin-left:20%">Select Month : </label>
    		<select>
    			<option value="january">January</option>
    			<option value="february">February</option>
    			<option value="march">March</option>
    			<option value="april">April</option>
    			<option value="may">May</option>
    			<option value="june">June</option>
    			<option value="july">July</option>
    			<option value="august">August</option>
    			<option value="september">September</option>
    			<option value="november">November</option>
    			<option value="december">December</option>
    		</select>
    		<label style="margin-left:5%;">Select Year : </label>
    		<select id="year"></select><legend></legend>
    		<div class="radio justified" style="margin-left:25%;">
    			<label><input type="radio" name="filter" value="all" checked>All</label>
				<label style="margin-left:10%;"><input type="radio" name="filter" value="paidO">Paid Only</label>
				<label style="margin-left:10%;"><input type="radio" name="filter" value="unpaid">Unpaid Only</label>
			</div>
			<div class="table-wrapper">
				<table class="table-bordered table-striped" style="width:100%;">
					<thead>
						<colgroup>
							<col style="width:20%;"></col>
							<col style="width:10%;"></col>
							<col style="width:5%;"></col>
							<col style="width:40%;"></col>
							<col style="width:10%;"></col>
						</colgroup>
						<tr>
							<td style="text-align:center;">Name</td>
							<td style="text-align:center;">Mobile Number</td>
							<td style="text-align:center;">Room Number</td>
							<td style="text-align:center;">Home Address</td>
							<td style="text-align:center;">Rent Paid ?</td>
						</tr>
					</thead>
				</table>
			</div>
    	</div>
    </div>
</div>





</body>
</html>