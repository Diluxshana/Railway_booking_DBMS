<?php
$data=mysqli_connect('localhost:3307','root','','railway_reservation');

$query="select * from seat";
$result=mysqli_query($data,$query);
?>

<html>
<head>
	<title> CHEACKING SEAT </title>
</head>

<body style="background-image: url('b1.webp');">
	
	<table align="center" border="1px" style="width:600px; line-height: 40px;background-color:powderblue;">
		<tr>
			<th colspan="8"><h2 align="center"> SEAT DETAILS</h2></th>
		</tr>

		<t>
			<th>Seat_no</th>
			<th>Train_no</th>
			<th>Class_no</th>
			<th>Passenger_Id</th>
		</t>
		<?php
			while($info=$result->fetch_assoc())
			{
		?>
			
			<tr>
				<td>
					<?php echo "{$info['Seat_no']}";?>
				</td>
				<td>
					<?php echo "{$info['Train_no']}";?>
				</td>
				<td>
					<?php echo "{$info['Class_no']}";?>
				</td>
				<td>
					<?php echo "{$info['Passenger_Id']}";?>
				</td>
				
				</tr>
			<?php	
				}
			?>
	</table>
</body>
</html>



 </body>
 </html>
