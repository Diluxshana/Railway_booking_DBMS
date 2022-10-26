<?php
//error_reporting(0);
$data=mysqli_connect('localhost:3307','root','','railway_reservation');

$query="select * from train";
$result=mysqli_query($data,$query);
?>

<html>
<head>
	<title> VIEW TRAIN DETAILS </title>
	<style>
body {
  background-image: url('c3.jpg');
}
</style>
</head>

<body >

	<table align="center" border="1px" style="width:600px; line-height: 40px;background-color:#C39BD3;">
		<tr>
			<th colspan="8"><h2 align="center"> TRAIN DETAILS</h2></th>
		</tr>

		<tr>
			<th>Train_no</th>
			<th>Train_name</th>
			<th>Departure_Station</th>
			<th>Arrival_Station</th>
			<th>Departure_Time</th>
			<th>Arrival_Time</th>
			<th>Days</th>
		</tr>
		<?php
			while($info=$result->fetch_assoc())
			{
		?>
			
			<tr>
				<td>
					<?php echo "{$info['Train_no']}";?>
				</td>
				<td>
					<?php echo "{$info['Train_name']}";?>
				</td>
				<td>
					<?php echo "{$info['Departure_Station']}";?>
				</td>
				<td>
					<?php echo "{$info['Arrival_Station']}";?>
				</td>
				<td>
					<?php echo "{$info['Departure_time']}";?>
				</td>
				<td>
					<?php echo "{$info['Arrival_time']}";?>
				</td>
				<td>
					<?php echo "{$info['Days']}";?>
				</td>
				
				</tr>
			<?php	
				}
			?>
	</table>
</body>
</html>
