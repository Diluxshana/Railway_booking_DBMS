



<?php
error_reporting(0);
$User_name=$_POST['User_name'];
$password=$_POST['password'];


$con=mysqli_connect('localhost:3307','root','','railway_reservation');
$sql="select *from admin where User_name='$User_name'and password='$password'";
$result=mysqli_query($con,$sql);
$resultcheck=mysqli_num_rows($result);
if($resultcheck>0)
{
	echo"login succesfully WELCOME";
	header('location:home.php');
}

?>
<!DOCTYPE html>
<html>
<head>

	<title> LOGIN PAGE</title>
	<style type="text/css">
		label{
			text-align:right;
			display:inline-block;
			width:100px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="Style.css">
	
</head>

<body style="background-color:#C39BD3;">
	<img src="c1.jpg" align="right" style="width:750px;height:750px;margin-right: 5%;">
	<h3>Welcome</h3>
	<div id="frm">

	<form action="home.php"  method="POST"> 
	<p>
	    <label>User_name </label>
		<input type="text" id="User_name" name="User_name"/>
	</p>
	<p>
	    <label>Password </label>
		<input type="password" id="password" name="password"/>
	</p>
	<p>
	    
		<input type="submit"id="btn" value="login"/>
	</p>
	</div>
	</form>
</body>
</html>


		

 