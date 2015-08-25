<?PHP
	require_once('toJson.php');
	$conn = mysql_connect("localhost:3306", "root", "pwd"); // Establishing Connection with Server

    if(! $conn){
        die("Connection failed: " . mysql_error());
    }

    $mobile = $_GET['mobile'];

    $sql = "SELECT a.name, a.monthly_rent, b.balance FROM newJoinee a,monthlyRent b where a.mobile_number=b.mobile_number AND a.mobile_number = '$mobile' AND b.id=(SELECT MAX(id) FROM monthlyRent WHERE mobile_number='$mobile')";

    mysql_select_db("payingguest");

    $retval = mysql_query( $sql, $conn );

    if(! $retval )
    {
        die('Could not get data: ' . mysql_error());
    }
    $rows = array();
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
    {
        $rows[] = $row;
    }
    $result = json_encode($rows);
    echo $result;
    //echo "<script>";
    //echo "$('#dName').val(".Srows['name'].")";
    //echo "</script>";
    mysql_close($conn);

?>
