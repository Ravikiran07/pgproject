<?PHP
	require_once('toJson.php');
	$conn = mysql_connect("localhost:3306", "root", "pwd"); // Establishing Connection with Server

    if(! $conn){
        die("Connection failed: " . mysql_error());
    }

    $mobile = $_GET['mobile'];

    $sql = "DELETE FROM newJoinee WHERE mobile_number='$mobile'";
    $sql2 = "DELETE FROM monthlyRent WHERE mobile_number='$mobile'";

    mysql_select_db("payingguest");

    $retval = mysql_query( $sql, $conn );
    $retval2 = mysql_query($sql2, $conn);
    
   
    mysql_close($conn);

?>