<?php
	$conn = mysql_connect("localhost:3306", "root", "pwd"); // Establishing Connection with Server

	if(! $conn){
        die("Connection failed: " . mysql_error());
    }

    $mobile = $_GET['mobile'];
    $rent = $_GET['rent'];
    $paid = $_GET['paid'];
    $balance = $_GET['balance'];
    $month = $_GET['month'];
    $year = $_GET['year'];

    $sql = "INSERT INTO monthlyRent(id, mobile_number, month_rent,paid,balance,month,year)VALUES(NULL,'$mobile','$rent','$paid','$balance','$month','$year')";

    mysql_select_db('payingguest');

    $insert = mysql_query( $sql, $conn );

    if(! $insert){
    	die('Could not enter data: ' . mysql_error());
    }else{
    	mysql_close($conn);
        header('Location: ../home.php');
    }
?>
