<?phps
$data=mysqli_connect('localhost:3307','root','','railway_reservation');


	
$query="select * from booking";
$result=mysqli_query($data,$query);

?>

<html>
<head>
	<title> Cancel </title>
</head>

<body>
	<table align="center" border="1px" style="width:600px; line-height: 40px;background-color:powderblue;">
		<tr>
			<th colspan="10"><h2 align="center"> BOOKING DETAILS</h2></th>
		</tr>

		<t>
			<th>Passenger_Id</th>
			<th>First_name</th>
			<th>Last_name</th>
			<th>Age</th>
			<th>Mobile_no</th>
			<th>Gender</th>
			<th>Address</th>
			<th>Station_name</th>
			<th>Train_Name</th>
			<th>Class_Number</th>
			<th>Seat_no</th>
			<th>Delete</th>
		</t>
		<?php
			while($info=$result->fetch_assoc())
			{
		?>
			
			<tr>

				<td>
					<?php echo "{$info['Passenger_Id']}";?>
				</td>
				<td>
					<?php echo "{$info['First_name']}";?>
				</td>
				<td>
					<?php echo "{$info['Last_name']}";?>
				</td>
				<td>
					<?php echo "{$info['Age']}";?>
				</td>
				<td>
					<?php echo "{$info['Mobile_no']}";?>
				</td>
				<td>
					<?php echo "{$info['Gender']}";?>
				</td>
				<td>
					<?php echo "{$info['Address']}";?>
				</td>
				<td>
					<?php echo "{$info['Station_name']}";?>
				</td>
				<td>
					<?php echo "{$info['Train_Name']}";?>
				</td>
				<td>
					<?php echo "{$info['Class_Number']}";?>
				</td>
				<td>
					<?php echo "{$info['Seat_no']}";?>
				</td>
				<td>
					<?php echo "{$info['Seat_no']}";?>
				</td>
				<td>
					<?php
					echo "<a href='cancel_booking.php?Passenger_Id={$info['Passenger_Id']}'>Delete</a>";
					?>
				</td>
				
				</tr>
			<?php	
				}
			?>
	</table>
</body>
</html>
