<?php
error_reporting(0);
$data=mysqli_connect('localhost:3307','root','','railway_reservation');
if(isset($_GET['Passenger_Id']))
{
	$Passenger_Id=$_GET['Passenger_Id'];
	$sql="DELETE FROM booking WHERE Passenger_Id='$Passenger_Id'";
	$result1=mysqli_query($data,$sql);

	if($result1)
	{
		header("location:Cancelling tickets.php");
	}
}

?>