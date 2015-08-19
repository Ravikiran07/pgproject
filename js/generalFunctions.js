function fillYear(){
		var d = new Date();
		var n = d.getFullYear();
		var m = d.getMonth();
		var months = ["january", "february", "march", "april", "may", "june","july", "august", "september", "october", "november", "december"];
		
		for(var k = n; k > 2000; k--){
			$("#year").append($("<option>").attr("value",k).text(k));
			$("#rentYear").append($("<option>").attr("value",k).text(k));
			$("#newJoineeRentYear").append($("<option>").attr("value",k).text(k));
		}
		$('#reportsMonth option[value="'+months[m]+'"]').attr('selected','selected');
	}

	function validation(){
		var name = $("#jName").val();
		var fName = $("#jFatherName").val();
		var roomNumber = $("#jRoomNumber").val();
		var dob = $("#jDOB").val();
		var address = $("#jAddress").val();
		var mobile = $("#jmobileNumber").val();
		var residenceMobile = $("#jResidenceMobile").val();
		var admission = $("#jAdmissionDate").val();
		var mail = $("#jMailId").val();
		var Office = $("#jOfficeAddress").val();
		var monthRent = $("#jMonthRent").val();
		var advance = $("#jAdvanceAmount").val();
	
		
		if(name == ""){
			alert("Enter Name");
			return false;
		}
		if(fName == ""){
			alert("Enter Father Name");
			return false;
		}
		if(roomNumber == ""){
			alert("Enter Room Number");
			return false;
		}
		if(dob == ""){
			alert("Enter Date of Birth");
			return false;
		}

		
		if(address == ""){
			alert("Enter the Address");
			return false;
		}
		if(mobile == ""){
			alert("Enter Permanent Residence address");
			return false;
		}
		if(residenceMobile ==""){
			alert("Enter Residence Mobile Number");
			return false;
		}
		if(admission == ""){
			alert("Enter Admission Date");
			return false;
		}
		if(mail == ""){
			alert("Enter mail ID");
			return false;
		}
		if(Office == ""){
			alert("Enter Office Address");
			return false;
		}
		if(monthRent == ""){
			alert("Enter Month Rent");
			return false;
		}
		if(advance == ""){
			alert("Enter Advance Paid");
			return false;
		}
		console.log("coming");
		return true;
	}

	function clearDetails(){
		$("#dName").val("");
        $("#dRoomNo").val("");
        $("#dAddress").val("");
        $("#dResidenceMobile").val("");
        $("#dAdvancePaid").val("");
        $("#dRent").val("");   
	}

	function clearRoomDetails(){
		$("#pName").val("");
        $("#pRoomNo").val("");
        $("#pMobileNumber").val("");
        $("#pRent").val("");    
	}

	function validateRoomRent()
	{
		var name = $("#pName").val();
		var roomNo = $("#pRoomNo").val();
		var mobile = $("#pMobileNumber").val();
		var rent = $("#pRent").val();

		if(name == ""){
			alert("Enter Name");
			return false;
		}
		if(roomNo == ""){
			alert("Enter Room Number");
			return false;
		}
		if(mobile == ""){
			alert("Enter Mobile Number");
			return false;
		}
		if(rent == ""){
			alert("Enter Rent");
			return false;
		}
		return true;
	}

	// function isDate(txtDate)
	// {
 //  		var currVal = txtDate;
 //  		if(currVal == ''){
 //    		return false;
 //  		}
  
 //  		//Declare Regex  
 //  		var rxDatePattern = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; 
 //  		var dtArray = currVal.match(rxDatePattern); // is format OK?

 //  		if (dtArray == null){
 //     		return false;
 //  		}
 
 //  		//Checks for mm/dd/yyyy format.
 //  		dtDay= dtArray[1];
 //  		dtMonth = dtArray[3];
 //  		dtYear = dtArray[5];

 //  		if (dtMonth < 1 || dtMonth > 12){
 //      		return false;
 //  		}
 //  		else if (dtDay < 1 || dtDay> 31){
 //      		return false;
 //  		}
 //  		else if ((dtMonth==4 || dtMonth==6 || dtMonth==9 || dtMonth==11) && dtDay ==31){
 //      		return false;
 //  		}
 //  		else if (dtMonth == 2)
 //  		{
 //     		var isleap = (dtYear % 4 == 0 && (dtYear % 100 != 0 || dtYear % 400 == 0));
 //     		if (dtDay> 29 || (dtDay ==29 && !isleap))
 //          		return false;
 //  		}
 //  		return true;
	// }
