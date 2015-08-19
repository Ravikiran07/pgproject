<?php
	$conn = mysql_connect("localhost:3306", "root", "pwd"); // Establishing Connection with Server

    if(! $conn){
        die("Connection failed: " . mysql_error());
    }

    $mobile = $_GET['mobile'];
    $name = $_GET['name'];
    $room = $_GET['roomNo'];
    $rent = $_GET['rent'];
    $previous = $_GET['previous'];

    $sql = "UPDATE newJoinee SET name = '$name', mobile_number='$mobile' , room_no='$room', monthly_rent='$rent' WHERE mobile_number='$previous'";
    $sql2 = "UPDATE monthlyRent SET mobile_number='$mobile' WHERE mobile_number='$previous'";

    mysql_select_db("payingguest");
    $insert = mysql_query( $sql, $conn );
    $insert2 = mysql_query($sql2, $conn);

     mysql_close($conn);


?>