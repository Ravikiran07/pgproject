function fullDetails(mobile){
	if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                 xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var ret;
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    ret =  xmlhttp.responseText;
                }
            }
            xmlhttp.open("GET","fetchDetails.php?mobile="+mobile, true);
            xmlhttp.send();

            setTimeout(function(){
                ret = JSON.parse(ret);
                
                if(ret.length > 0){
                    $("#dName").val(ret[0].name);
                    $("#dRoomNo").val(ret[0].room_no);
                    $("#dAddress").val(ret[0].permanent_address);
                    $("#dResidenceMobile").val(ret[0].residence_mobile);
                    $("#dAdvancePaid").val(ret[0].advance_paid);
                    $("#dRent").val(ret[0].monthly_rent);    
                }else{
                    alert("Details not found");
                }
                
            },500)

}