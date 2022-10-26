<html>
<head>
	<title>Searching Passengers Details</title>
	<style>
		body{
			background-color:lightgreen;
		}
		table,th,td{
			border:1px solid black;
			width:1100px;
			background-color: lightblue;
		}
		.btn{
			width: 10%;
			height:5%;
			font-weight: bold;

		}
	</style>
</head>

<body>
	<center>
	<div class="container my-5">
		<form action="" method="POST">
			
				<input type="text" name="search" placeholder="Search data">
				<button name="submit" class="btn btn-dark btn-sm">Search</button>
			</form>
			<div class="container1 my-5">
				<table class="table">
			<?php
			$data=mysqli_connect('localhost:3307','root','','railway_reservation');
			

			if(isset($_POST['submit']))
			{
				$search=$_POST['search'];
				$query="select *from passengers where CONCAT(Passenger_Id,First_name,Last_name,Mobile_no,Address) LIKE '%$search%'";
				$result=mysqli_query($data,$query);
				if($result){

				if(mysqli_num_rows($result)>0)
				{
					echo '<thead>
					<tr>
					<th>Passenger_Id</th>
					<th>First_name</th>
					<th>Last_name</th>
					<th>Mobile_no</th>
					<th>Address</th>
				</tr><br><br>
				</thead>';

				while($row=mysqli_fetch_assoc($result)){
				echo '<tbody>
				<tr>
						<td> <a href="searchdata.php?"data='.row['Passenger_Id']'">'.$row['Passenger_Id'].'</a></td>
						<td> <a href="searchdata.php?"data='.row['First_name']'">'.$row['First_name'].'</a></td>
						<td> <a href="searchdata.php?"data='.row['Last_name']'">'.$row['Last_name'].'</a></td>
						<td> <a href="searchdata.php?"data='.row['Mobile_no']'">'.$row['Mobile_no'].'</a></td>
						<td> <a href="searchdata.php?"data='.row['Address']'">'.$row['Address'].'</a></td>

				</tr>';
					}
			}else{
				echo<h2> DATA NOT FOUND</h2>

				}
				</table>
				</div>
		</center>
	</body>
	</html>


