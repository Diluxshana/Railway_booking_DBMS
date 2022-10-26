<?php
error_reporting(0);
$data=mysqli_connect('localhost:3307','root','','railway_reservation');
$Passenger_Id=$_GET['Passenger_Id'];
$sql="Select *from booking where Passenger_Id='$Passenger_Id'";
$result=mysqli_query($data,$sql);
$row=mysqli_fetch_assoc($result);

$Passenger_Id=$row['Passenger_Id'];
	$First_name=$row['First_name'];
	$Last_name=$row['Last_name'];
	$Age=$row['Age'];
	$Mobile_no=$row['Mobile_no'];
	$Gender=$row['Gender'];
	$Address=$row['Address'];
	$Station_name=$row['Station_name'];
	$Train_name=$row['Train_name'];
	$Class_Number=$row['Class_Number'];
	$Seat_no=$row['Seat_no'];



if(isset($_POST['Update']))
{
	$Passenger_Id=$_POST['Passenger_Id'];
	$First_name=$_POST['First_name'];
	$Last_name=$_POST['Last_name'];
	$Age=$_POST['Age'];
	$Mobile_no=$_POST['Mobile_no'];
	$Gender=$_POST['Gender'];
	$Address=$_POST['Address'];
	$Station_name=$_POST['Station_name'];
	$Train_name=$_POST['Train_name'];
	$Class_Number=$_POST['Class_Number'];
	$Seat_no=$_POST['Seat_no'];


	$query1="update booking set Passenger_Id='$Passenger_Id',First_name='$First_name',Age='$Age',Mobile_no='$Mobile_no',Gender='$Gender',Address='$Address',Station_name='$Station_name',Train_name='$Train_name',Class_Number='$Class_Number',Seat_no='$Seat_no' Where Passenger_Id='$Passenger_Id'";

	$result1=mysqli_query($data,$query1);

	if($result1){
		echo "Form updated successfully ";
		header('location:View_booking_detail.php');
	}
	else{
		echo "Form not submitted ";
	}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title> BOOKING FORM </title>
	<style type="text/css">
		label{
			text-align:right;
			display:inline-block;
			width:100px;
			padding-top: 10px;
			padding-bottom: 10px;
		}
	</style>
</head>

<body style="background-color:powderblue;">
	<img src="b.jpg" align="right" style="width:1000px;height:500px;">
	<h1>Booking Form</h1>
	<form action="#" method="POST">
		<label>Passenger_Id </label>
		<input type="text" placeholder="Passenger_Id" name="Passenger_Id"value=<?php echo$Passenger_Id;?>><br>
		<label>First name </label>
		<input type="text" placeholder="First_name" name="First_name"value=<?php echo$First_name;?>><br>
		<label>Last name </label>
		<input type="text" placeholder="Last_name" name="Last_name"value=<?php echo$Last_name;?>><br>
		<label>Age </label>
		<input type="text" placeholder="Age" name="Age"value=<?php echo$Age;?>><br>
		<label>Mobile number </label>
		<input type="number" placeholder="Mobile_no" name="Mobile_no"value=<?php echo$Mobile_no;?>><br>
		<label>Gender </label>
		<select name="Gender"value=<?php echo$Gender;?>>
			<option name="Female">Female</option>
			<option name="male">male</option>
		</select><br>
		<label>Address </label>
		<input type="text" placeholder="Address" name="Address"value=<?php echo$Address;?>><br>
		<label>Station_Name </label>
		<select name="Station_name"value=<?php echo$Station_name;?>>
			<option value="##001">     </option>
			<option value="##002">Mavittapuram</option>
			<option value="##003">Tellipallai</option>
			<option value="##004">Mallakam</option>
			<option value="##005">Chunnakam</option>
			<option value="##006">Inuvil</option>
			<option value="##007">Kondavil</option>
			<option value="##008">Jaffna</option>
			<option value="##009">Chavakachcheri</option>
			<option value="##0010">Kodikamam</option>
			<option value="##0011">Pallai</option>
			<option value="##0012">Paranthan</option>
			<option value="##0013">Murikandy</option>
			<option value="##0014">Mankulam</option>
			<option value="##0015">Pulliyankulam</option>
			<option value="##0016">Omanthai</option>
			<option value="##0017">Thandikulam</option>
			<option value="##0018">Vavuniya</option>

		</select><br><br>
		
		<label>Train_Name </label>
		<select name="Train_name">
			<option value="000">          </option>
			<option value="4021">A.C-Intercity</option>
			<option value="4089">Night mail</option>
			<option value="4440">Colombo commuter</option>
			<option value="4078">Yaldevi</option>
			<option value="4018">Uttara devi</option>
		</select><br><br>
		
		<label>Class_Number </label>
		<select name="Class_Number"value=<?php echo$Class_Number;?>>
			<option value="000">    </option>
			<option value="1st class">1st class</option>
			<option value="2nd class">2nd class</option>
			<option value="3rd class">3rd class</option>
		</select><br><br>

		<label>Seat_no </label>
		<input type="number" placeholder="Seat_no" name="Seat_no"value=<?php echo$Seat_no;?>><br><br>

		<input type="submit" value="Update" name="Update">

		
</body>
</html>