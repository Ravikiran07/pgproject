<?PHP
	require_once('toJson.php');
	$conn = mysql_connect("localhost:3306", "root", "pwd"); // Establishing Connection with Server

    if(! $conn){
        die("Connection failed: " . mysql_error());
    }

    $month = $_GET['month'];
    $year = $_GET['year'];


    $sql = "SELECT a.name , a.mobile_number , a.room_no ,a.permanent_address,a.monthly_rent, b.paid,b.balance from newJoinee a,monthlyRent b WHERE a.mobile_number=b.mobile_number and a.monthly_rent>b.paid and b.balance>'0' and b.month='$month' and 
        b.year='$year'";

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
