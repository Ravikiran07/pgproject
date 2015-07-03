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

	function validateRoomRent(){
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