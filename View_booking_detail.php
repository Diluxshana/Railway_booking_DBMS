<?php
$data=mysqli_connect('localhost:3307','root','','railway_reservation');

$query="select * from booking";
$result=mysqli_query($data,$query);
?>

<html>
<head>
	<title> VIEW TRAIN DETAILS </title>
	<link rel="stylesheet" href="Style.css"/>

</head>

<body style="background-image: url('a3.webp');">
	<div class="container">
		<button class="btn btn-primary my-15;" ><a href="Booking tickets.php" class="text-bold">BOOK TICKETS</a>
		</button>
	</div>
			<br>

	<table align="center" border="1px" style="width:600px; line-height: 40px;background-color:#B218A2;">
		<tr>
			<th colspan="25"><h2 align="center"> BOOKING DETAILS</h2></th>
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
				
				</tr>
			<?php	
				}
			?>
	</table>
</body>
</html>
