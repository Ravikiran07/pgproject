<?PHP

	 $conn = mysql_connect("localhost:3306", "root", "great123"); // Establishing Connection with Server

	if(! $conn){
        die("Connection failed: " . mysql_error());
    }

    $name = $_POST['jName'];
    $fatherName = $_POST['jFatherName'];
    $roomNumber = $_POST['jRoomNumber'];
    $dateOfBirth = $_POST['jDOB'];
    $permanentAddress = $_POST['jAddress'];
    $mobileNumber = $_POST['jmobileNumber'];
    $residenceMobile = $_POST['jResidenceMobile'];
    $dateOfAdmission = $_POST['jAdmissionDate'];
    $mailID = $_POST['jMailId'];
    $officeAddress = $_POST['jOfficeAddress'];
    $monthlyRent = $_POST['jMonthRent'];
    $advanceAmt = $_POST['jAdvanceAmount'];
    //$bal = 0;
    $month = $_POST['newJoineeRentMonth'];
    $year = $_POST['newJoineeRentYear'];

    echo '$month', '$year';
    $sql = "INSERT INTO newJoinee(id,name,mobile_number, father_name, room_no, date_of_birth, permanent_address, residence_mobile, date_of_admission, mail_id , office_address, monthly_rent, advance_paid)
    		VALUES(NULL, '$name','$mobileNumber','$fatherName','$roomNumber','$dateOfBirth','$permanentAddress','$residenceMobile','$dateOfAdmission','$mailID','$officeAddress','$monthlyRent','$advanceAmt')";

    $sql2 = "INSERT INTO monthlyRent(id, mobile_number, month_rent,paid,balance,month,year)VALUES(NULL,'$mobileNumber','$monthlyRent','$monthlyRent',0,'$month','$year')";

    mysql_select_db('payingguest');

    $insert = mysql_query( $sql, $conn );
    $insert2 = mysql_query($sql2, $conn);

    if ( ! $insert && ! $insert2) {
        die('Could not enter data: ' . mysql_error());
    } else {
        mysql_close($conn);
        header('Location: ../home.php');
    }


?>