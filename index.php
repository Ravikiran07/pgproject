<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/jquery-1.11.3.min.js"></script>

 <script src="js/bootstrap.min.js"></script>
 <script type="text/javascript">
function validate()
{

	var uname=document.getElementById("uname").value;
	var pwd=document.getElementById("pwd").value;
	
	if(uname=="naseer" && pwd=="naseer")
	{
		return true;
	}
	else
	{
		alert("invalid user Credentials");
		return false;
	}
}



 </script>
  
</head>
<body>
 <form action="home.php" method="post" onsubmit="return validate()"> 
<div class="panel panel-default" style="width: 20%;margin-left: 40%">
   <div class="panel-heading">
      <h3 class="panel-title">
         Please Login
      </h3>
   </div>
   <div class="panel-body">
   <table>
   <tr><td><input type="text" class="form-control" name="uname" id="uname" placeholder="User Name"></tr>
      <tr><td><input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password"></tr>
      <tr><td><input type="submit" value="Login" class="btn btn-primary"></td></tr>
   
   
   </table>
   </div>
</div>
</form>


</body>
</html>
