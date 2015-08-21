<html>
<title>


</title>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="lib/jquery-1.11.3.min.js"></script>

	<script src="lib/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/generalFunctions.js"></script>
	<script type="text/javascript" src="js/fetchDetails.js"></script>
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
	$(document).ready(function()
    {
	fillYear();
	$("#selectFilters").hide();
	filterData();

        //DOB validation
        /*$("#btnsubmit").click(function()
        {
            var dobval=$("#jDOB").val();
            if (isDate(dobval)) 
                {
                    alert("Valid Date");
                    return true;

                }else
                {
                    alert("Invalid Date ");
                    return false;
                }
            

        });*/

	$('input[name="filter"]:radio').click(function(){
		filterData();
	});

	$('select').change(function(){
		filterData();
	});

        /*$('input[name="filter"]:radio').click(function()
        {
            var ret;
            var month;
            var year;
          	
		
		filterData(); 

            if (this.value== "all") 
            {
                $("#reportsMonth").attr("disabled",true);
                $("#year").attr("disabled",true);

                if (window.XMLHttpRequest) 
                {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else 
                {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }

    
                xmlhttp.onreadystatechange = function() 
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                    {
                        ret =  xmlhttp.responseText;
                    }
                }

                xmlhttp.open("GET","js/fetchoverAllDetails.php?", true);
                xmlhttp.send();

                
            }

            if (this.value == "paidO") 
            {
                $("#reportsMonth").attr("disabled",false);
                $("#year").attr("disabled",false);


                $("select").change(function()
                {
                     
                     month=$("#reportsMonth").val();
                     year=$("#year").val();
                    // month=$(this).find('option:selected').val();
                    // year=$(this).find('option:selected').text();
                     console.log(month);
                     console.log(year);

                     if (window.XMLHttpRequest) 
                    {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    }
                    else 
                    {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }


                    xmlhttp.onreadystatechange = function() 
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                        {
                            ret =  xmlhttp.responseText;
                            console.log(ret);
                            ret=JSON.parse(ret);
                            console.log(ret);
                            if (ret.length>0) 
                            {
                                var row='<tr>';

                                for (var i = 0; i < ret.length; i++) 
                                {
                  
                                 row.append($('<td>').html(ret[i]));         

                                }
                                $('#records').append(row);


                            }
                            else
                            {
                                alert("Details not found :");
                            }
                        }
                    }
           
                    xmlhttp.open("GET","js/fetchpaidDetails.php?month="+month+"&year="+year, true);
                    xmlhttp.send();
                    
                
                });
                                   

            } 
            if (this.value== "unpaid") 
            {
                $("#reportsMonth").attr("disabled",false);
                $("#year").attr("disabled",false);

                $("select").change(function()
                {
                     
                     month=$("#reportsMonth").val();
                     year=$("#year").val();
                    // month=$(this).find('option:selected').val();
                    // year=$(this).find('option:selected').text();
                     console.log(month);
                     console.log(year);

                

                    if (window.XMLHttpRequest) 
                    {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    }
                    else 
                    {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }

            
                    xmlhttp.onreadystatechange = function() 
                    {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                        {
                            ret =  xmlhttp.responseText;
                            console.log(ret);
                            
                        }
                    }
           
                    xmlhttp.open("GET","js/fetchunpaidDetails.php?month="+month+"&year="+year, true);
                    xmlhttp.send();

                });


            }


        });
*/
        //Get full details function
		$("#fullDetails").click(function()
        {
			var mobile = $("#detailsMobileNo").val();
            clearDetails();
            if(mobile == "")
            {
                alert("Enter Mobile Number");
                return false;
            }

            if (window.XMLHttpRequest) 
            {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp = new XMLHttpRequest();
            } else 
            {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var ret;
            xmlhttp.onreadystatechange = function() 
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
                    ret =  xmlhttp.responseText;
                    console.log(ret);
                }
            }
            xmlhttp.open("GET","js/fetchDetails.php?mobile="+mobile, true);
            xmlhttp.send();

            setTimeout(function()
            {
                ret = JSON.parse(ret);

                
                if(ret.length > 0)
                {
                    $("#dName").val(ret[0].name);
                    $("#dRoomNo").val(ret[0].room_no);
                    $("#dAddress").val(ret[0].permanent_address);
                    $("#dResidenceMobile").val(ret[0].residence_mobile);
                    $("#dAdvancePaid").val(ret[0].advance_paid);
                    $("#dRent").val(ret[0].monthly_rent);    
                }
                else
                {
                    alert("Details not found");
                }
                
            },500)
        
		});//Get full details function completes here

        $("#getPerDetails").click(function()
        {
            var mobile = $("#perMobileNo").val();
            clearRoomDetails();

            if(mobile == "")
            {
                alert("Enter Mobile Number");
                return false;
            }

            if (window.XMLHttpRequest) 
            {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp = new XMLHttpRequest();
            } else 
            {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var ret;
            xmlhttp.onreadystatechange = function() 
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
                    ret =  xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","js/fetchDetails.php?mobile="+mobile, true);
            xmlhttp.send();

            setTimeout(function()
            {
                ret = JSON.parse(ret);
                
                if(ret.length > 0)
                {
                    $("#pName").val(ret[0].name);
                    $("#pRoomNo").val(ret[0].room_no);
                    $("#pMobileNumber").val(ret[0].mobile_number);
                    $("#pRent").val(ret[0].monthly_rent);    
                }
                else
                {
                    alert("Details not found");
                }
                
            },500)

        });
        
        $("#updateRoomRent").click(function()
        {
            var name = $("#pName").val();
            var roomNo = $("#pRoomNo").val();
            var mobile = $("#pMobileNumber").val();
            var rent = $("#pRent").val();
            var previous = $("#perMobileNo").val();

            validateRoomRent();

            if (window.XMLHttpRequest) 
            {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp = new XMLHttpRequest();
            }
            else 
            {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var ret;
            xmlhttp.onreadystatechange = function() 
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
                    //ret =  xmlhttp.responseText;
                    alert("Updated Information");
                }
            }
            xmlhttp.open("GET","js/updateRoomRent.php?mobile="+mobile+"&name="+name+"&roomNo="+roomNo+"&rent="+rent+"&previous="+previous, true);
            xmlhttp.send();            
            alert("Updated Information");

        });
        
        //Vacate PG tab, getDetails of the person who is vacating PG
        $("#getPersonDetails").click(function()
        {
            var mobile = $("#personMobileNo").val();
            if(mobile == "")
            {
                alert("Enter Mobile Number");
                return false;
            }

            if (window.XMLHttpRequest) 
            {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp = new XMLHttpRequest();
            } 
            else 
            {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var ret;
            xmlhttp.onreadystatechange = function() 
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
                    ret =  xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","js/personDetails.php?mobile="+mobile, true);
            xmlhttp.send();

            setTimeout(function()
            {
                ret = JSON.parse(ret);
                console.log(ret);
                if(ret.length > 0){
                    $("#personName").val(ret[0].name);
                    $("#personRoomNo").val(ret[0].room_no);
                    $("#advancePaidForPG").val(ret[0].advance_paid);
                    $("#pgBalance").val(ret[0].balance);    
                }
                else
                {
                    alert("Details not found");
                }
                
            },500)


        });

        //Vacate PG, delete record from the database
        $("#vacatePG").click(function()
        {
            var mobile = $("#personMobileNo").val();

            if(mobile == "")
            {
                alert("Enter Mobile Number");
                return false;
            }

            if (window.XMLHttpRequest) 
            {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp = new XMLHttpRequest();
            } else 
            {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var ret;
            xmlhttp.onreadystatechange = function() 
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
                    ret =  xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","js/vacatePG.php?mobile="+mobile, true);
            xmlhttp.send();

        });


        $("#getDetails").click(function()
        {
            var mobile = $("#mobileNo").val();

            if(mobile == "")
            {
                alert("Enter Mobile Number");
                return false;
            }

            if (window.XMLHttpRequest) 
            {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp = new XMLHttpRequest();
            } 
            else 
            {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var ret;
            xmlhttp.onreadystatechange = function() 
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
                    ret =  xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","js/rentDetails.php?mobile="+mobile, true);
            xmlhttp.send();

            setTimeout(function()
            {
                ret = JSON.parse(ret);
                
                if(ret.length > 0)
                {
                    $("#name").val(ret[0].name);
                    $("#mRent").val(ret[0].monthly_rent);
                    $("#mBalance").val(ret[0].balance);
                    $("#mTotal").val(parseInt(ret[0].monthly_rent)+parseInt(ret[0].balance));    
                }
                else
                {
                    alert("Details not found");
                }
                
            },500)

        });
        
        $("#mPaid").keyup(function()
        {
            var paid = $("#mPaid").val();
            var total = $("#mTotal").val();

            $("#mPresentBalance").val(total-paid);
        });

        $("#payRent").click(function()
        {
            var mobile = $("#mobileNo").val();
            var rent = $("#mRent").val();
            var paid = $("#mPaid").val();
            var balance = $("#mPresentBalance").val();
            var month = $("#rentMonth").val();
            var year = $("#rentYear").val();

            if (window.XMLHttpRequest) 
            {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp = new XMLHttpRequest();
            } 
            else 
            {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var ret;
            xmlhttp.onreadystatechange = function() 
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
                {
                    ret =  xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","js/saveRentDetails.php?mobile="+mobile+"&rent="+rent+"&paid="+paid+"&balance="+balance+"&month="+month+"&year="+year, true);
            xmlhttp.send();

        });

	});


function filterData(){
	var radio = $('[name="filter"]:checked').val();
	var ret;
	console.log(radio);
	$("#records tr").remove();

	 	  var head =  '<thead><colgroup><col style="width:20%;"></col><col style="width:10%;"></col><col style="width:5%;"></col><col style="width:30%;"></col><col style="width:10%;"></col><col style="width:10%;"></col><col style="width:10%;"></col></colgroup><tr><td style="text-align:center;" id="rName">Name</td><td style="text-align:center;" id="rmobNo">Mobile Number</td><td style="text-align:center;" id="rRoomNo">Room Number</td><td style="text-align:center;" id="rHomeAddr">Home Address</td><td style="text-align:center;" id="rmonthRent">Month Rent</td><td style="text-align:center;" id="rRentpaid">Rent Paid ?</td><td style="text-align:center;" id="rBalance">Balance</td></tr></thead><tbody>';

		  $("#records").append(head);
	if (window.XMLHttpRequest) 
        {
        	// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
        }
        else 
        {
               // code for IE6, IE5
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

            
        xmlhttp.onreadystatechange = function() 
        {
              if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
              {
                  ret =  xmlhttp.responseText;	
		  ret = JSON.parse(ret);
                  console.log(ret.length);
		  console.log(ret);

		  for(var i=0;i<ret.length;i++){
			var table = '<tr><td>'+ret[i].name+'</td><td>'+ret[i].mobile_number+'</td><td>'+ret[i].room_no+'</td><td>'+ret[i].permanent_address+'</td><td>'+ret[i].monthly_rent+'</td><td>'+ret[i].paid+'</td><td>'+ret[i].balance+'</td></tr>';
			$("#records").append(table);
		  }		
		  //var table = '<tr></tr>';
		  $("#records").append('</tbody>');
                            
              }
        }

	
	if(radio == "all"){
		xmlhttp.open("GET","js/fetchoverAllDetails.php?", true);
	}else if(radio == "paidO"){
		$("#selectFilters").show();
		var month = $("#reportsMonth").val();
                var year = $("#year").val();

		xmlhttp.open("GET","js/fetchpaidDetails.php?month="+month+"&year="+year, true);
	}else{
		$("#selectFilters").show();
		var month = $("#reportsMonth").val();
                var year = $("#year").val();

		xmlhttp.open("GET","js/fetchunpaidDetails.php?month="+month+"&year="+year, true);
	}
	xmlhttp.send();
	
}
</script>
 
</head>
<body>
<?php include  'includes/menu.php';?>

<div class="container">
	<ul class="nav nav-pills nav-justified" style="margin-top:10%;" data-tabs="tabs">
  		<li class="active"><a href="#new-joinee" data-toggle="tab">New Joinee</a></li>
  		<li ><a href="#full-details" data-toggle="tab">Get Full Details</a></li>
  		<li ><a href="#change-room" data-toggle="tab">Change Room/Update Rent</a></li>
  		<li ><a href="#vacate-pg" data-toggle="tab">Vacate PG</a></li>
  		<li ><a href="#monthly-rent" data-toggle="tab">Monthly Rent Pay</a></li>
  		<li ><a href="#month-details" data-toggle="tab">Overall Month Details</a></li>
	</ul>	
</div>

<div id="my-tab-content" class="tab-content" style="margin-left:10%;">
	<!-- New Joinee form goes here, use innerDiv class inside it for creating form-->
    <div class="tab-pane active panel" id="new-joinee">
		<div class="innerDiv">
			<form class="form-horizontal" action="js/addJoinee.php" method="post" onsubmit="return validation();"> 
				<fieldset class="bigBox">
    				<legend style="color:#555;font-size:80%">Details</legend>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Name : </label>
    					<input type="text" name="jName" id="jName" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Father's Name : </label>
    					<input type="text" name="jFatherName" id="jFatherName" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Room Number : </label>
    					<input type="text" name="jRoomNumber" id="jRoomNumber" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Date of Birth : </label>
    					<input type="text" name="jDOB"  id="jDOB" class="form-control" placeholder="dd-mm-yyyy">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Permanent Address : </label>
    					<textarea name="jAddress"  id="jAddress" rows="3" class="form-control"></textarea>
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Mobile Number : </label>
    					<input type="text" name="jmobileNumber" id="jmobileNumber" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Residence Mobile Number : </label>
    					<input type="text" name="jResidenceMobile" id="jResidenceMobile" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Date Of Admission : </label>
    					<input type="text" name="jAdmissionDate" id="jAdmissionDate" class="form-control" placeholder="dd-mm-yyyy">
    				</div>
                    <div class="form-group">
                            <label style="margin-left:20%">Rent Paid for the Month : </label>
                            <select id="newJoineeRentMonth" name="newJoineeRentMonth">
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
                            <select id="newJoineeRentYear" name="newJoineeRentYear"></select>
                        </div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Mail Id : </label>
    					<input type="text" name="jMailId" id="jMailID" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Office Address: </label>
    					<textarea name="jOfficeAddress" id="jOfficeAddress" rows="3" class="form-control"></textarea>
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Monthly Rent : </label>
    					<input type="text" name="jMonthRent" id="jMonthRent" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Advance Amount Paid : </label>
    					<input type="text" name="jAdvanceAmount" id="jAdvanceAmount" class="form-control">
    				</div>
    				<input type="submit" class="btn btn-md btn-primary pull-right" style="margin-right:5%;" id="btnsubmit" value="Save Details">
    				<br><br><br>
    			</fieldset>
			</form>
		</div>    	
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

    <!-- Get Full Details of person staying in PG, use innerDiv class -->
    <div class="tab-pane panel" id="full-details">
    	<div class="innerDiv">
    		<fieldset class="smallBox">
    			<legend style="color:#555;font-size:80%;">Get Person Details </legend>
    			<label style="margin-left:10%;">Enter Mobile Number : </label>	
    			<input type="text" id="detailsMobileNo">
    			<button class="btn btn-md btn-info" id="fullDetails" style="margin-left:2%;">Get Details</button>
    		</fieldset>
    		<br><br><br>
    		<form class="form-horizontal">
    			<fieldset class="bigBox">
    				<legend style="color:#555;font-size:80%">Details</legend>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Name : </label>
    					<input type="text" id="dName" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Room Number :</label>
    					<input type="text" id="dRoomNo" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Permanent Address :</label>
    					<textarea id="dAddress" rows="3" class="form-control"></textarea>
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Residence Mobile Number : </label>
    					<input type="text" id="dResidenceMobile" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Advance Paid :</label>
    					<input type="text" id="dAdvancePaid" class="form-control">
    				</div>
    				<div class="form-group">
    					<label class="col-sm-4 control-label">Monthly Rent :</label>
    					<input type="text" id="dRent" class="form-control">
    				</div>
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
    				<button class="btn btn-md btn-primary pull-right" style="margin-right:5%" id="updateRoomRent">Change Room/Update Rent</button>
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
    						<input type="text" id="name" class="form-control" disabled>
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Rent Per Month : </label>
    						<input type="text" id="mRent" class="form-control" disabled>	
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">How Much Paid : </label>
    						<input type="text" id="mPaid" class="form-control" placeholder="Enter the amount">
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Any Balance of Previous Month : </label>
    						<input type="text" id="mBalance" class="form-control" disabled>
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Total Amount to be Paid : </label>
    						<input type="text" id="mTotal" class="form-control" disabled>	
    					</div>
    					<div class="form-group">
    						<label class="col-sm-4 control-label">Balance Remaining : </label>
    						<input type="text" id="mPresentBalance" class="form-control">
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
		<div id="selectFilters">
    			<label style="margin-left:20%">Select Month : </label>
    			<select id="reportsMonth" name="months">
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
    			<select id="year" ></select><legend></legend>
		</div>
    		<div class="radio justified" style="margin-left:25%;">
    			<label><input type="radio" name="filter" value="all" checked>All</label>
				<label style="margin-left:10%;"><input type="radio" name="filter" value="paidO">Paid Only</label>
				<label style="margin-left:10%;"><input type="radio" name="filter" value="unpaid">Unpaid Only</label>
			</div>
			<div class="table-wrapper">
				<table class="table-bordered table-striped" style="width:100%;" id="records">
					<thead>
						<colgroup>
							<col style="width:20%;"></col>
							<col style="width:10%;"></col>
							<col style="width:5%;"></col>
							<col style="width:30%;"></col>
							<col style="width:10%;"></col>
                            <col style="width:10%;"></col>
                            <col style="width:10%;"></col>
						</colgroup>
						<tr>
							<td style="text-align:center;" id="rName">Name</td>
							<td style="text-align:center;" id="rmobNo">Mobile Number</td>
        					<td style="text-align:center;" id="rRoomNo">Room Number</td>
							<td style="text-align:center;" id="rHomeAddr">Home Address</td>
                            <td style="text-align:center;" id="rmonthRent">Month Rent</td>
                            <td style="text-align:center;" id="rRentpaid">Rent Paid ?</td>
							<td style="text-align:center;" id="rBalance">Balance</td>
						</tr>
					</thead>
					<!--<tbody id="reportsTable">
					</tbody>-->
				</table>
			</div>
    	</div>
    </div>
</div>


</body>
</html>
