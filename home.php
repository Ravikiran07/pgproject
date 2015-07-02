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
	body{
		color: #777;
	}
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
    	border: 1px solid #999;
    	width: 90%;
    	height: 70%;
    	overflow: auto;
    	margin-left: 4%;
	}
	.smallBox {
		position: relative;
		border:1px solid #777;
		width:45%;
		height: 20%;
		margin-left: 25%;
		margin-top: 2%;
	}
	.bigBox {
		position: relative;
		border:1px solid #777;
		width: 90%;
		margin-left: 5%;
	}
	.form-control {
		width: 50%;
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
			$("#rentYear").append($("<option>").attr("value",k).text(k));
		}
		
	}
</script>
 
</head>
<body>
<?php include  'includes/menu.php';?>

<div class="container">
	<ul class="nav nav-pills nav-justified" style="margin-top:10%;" data-tabs="tabs">
  		<li class="active"><a href="#new-joinee" data-toggle="tab">New Joinee</a></li>
  		<li ><a href="#change-room" data-toggle="tab">Change Room/Update Rent</a></li>
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
    		<div class="innerDiv">
    			<fieldset class="smallBox">
    				<legend style="color:#555;font-size:80%;">Get Rent Details </legend>
    				<label style="margin-left:10%;">Enter Mobile Number : </label>	
    				<input type="text" id="personMobileNo">
    				<button class="btn btn-md btn-info" id="getPersonDetails" style="margin-left:2%;">Get Details</button>
    			</fieldset>
    			<br><br><br>
    			<form class="form-horizontal">
    				<fieldset class="bigBox">
    					<legend style="color:#555;font-size:80%">Details</legend>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Name : </label>
    						<input type="text" id="personName" class="form-control">
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Room Number :</label>
    						<input type="text" id="personRoomNo" class="form-control">
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Advance Paid : </label>
    						<input type="text" id="advancePaidForPG" class="form-control">
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Balance Remaining : </label>
    						<input type="text" id="pgBalance" class="form-control">
    					</div>
    					<button class="btn btn-md btn-primary pull-right" id="vacatePG" style="margin-right:5%">Vacate PG</button>
    					<br><br>
    				</fieldset>
    			</form>

    		</div>
    </div>

    <!-- Change Room, use innerDiv class-->
    <div class="tab-pane panel" id="change-room">
    	<div class="innerDiv">
    		<fieldset class="smallBox">
    			<legend style="color:#555;font-size:80%;">Get Person Details </legend>
    			<label style="margin-left:10%;">Enter Mobile Number : </label>	
    			<input type="text" id="perMobileNo">
    			<button class="btn btn-md btn-info" id="getPerDetails" style="margin-left:2%;">Get Details</button>
    		</fieldset>
    		<br><br><br>
    		<form class="form-horizontal">
    			<fieldset class="bigBox">
    				<legend style="color:#555;font-size:80%">Details</legend>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Name : </label>
    					<input type="text" id="pName" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Room Number :</label>
    					<input type="text" id="pRoomNo" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Change Mobile Number :</label>
    					<input type="text" id="pMobileNumber" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Change Rent Amount : </label>
    					<input type="text" id="pRent" class="form-control">	
    				</div>
    				<button class="btn btn-md btn-primary pull-right" style="margin-right:5%">Change Room/Update Rent</button>
    				<br><br><br>
    			</fieldset>
    		</form>

    	</div>
    </div>

    <!-- Monthly rent form goes here, use innerDiv class-->
    <div class="tab-pane panel" id="monthly-rent"> 	
    		<div class="innerDiv">
    			<fieldset class="smallBox">
    				<legend style="color:#555;font-size:80%;">Get Rent Details </legend>
    				<label style="margin-left:10%;">Enter Mobile Number : </label>	
    				<input type="text" id="mobileNo">
    				<button class="btn btn-md btn-info" id="getDetails" style="margin-left:2%;">Get Details</button>
    			</fieldset>
    			<br><br><br>
    			<form class="form-horizontal">
    				<fieldset class="bigBox">
    					<legend style="color:#555;font-size:80%">Details</legend>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Name : </label>
    						<input type="text" id="name" class="form-control">
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Rent Per Month : </label>
    						<input type="text" id="mRent" class="form-control">	
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">How Much Paid : </label>
    						<input type="text" id="mPaid" class="form-control">
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Any Balance of Previous Month : </label>
    						<input type="text" id="mBalance" class="form-control">
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Total Amount to be Paid : </label>
    						<input type="text" id="mTotal" class="form-control">	
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Balance Remaining : </label>
    						<input type="text" id="mBalance" class="form-control">
    					</div>
    					<div class="form-group">
    						<label style="margin-left:20%">Select Month : </label>
    						<select id="rentMonth">
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
    						<select id="rentYear"></select>
    					</div>
    					<button class="btn btn-md btn-primary pull-right" style="margin-right:5%" id="payRent">Save Details</button>
    					<br><br>
    			
    				</fieldset>	
    			</form>
    			

    		</div>
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