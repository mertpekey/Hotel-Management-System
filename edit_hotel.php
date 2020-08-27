<!DOCTYPE html>
<html>
<head>
	<title>Admin-Edit/View Hotel</title>
	<link rel="stylesheet" type="text/css" href="edit_hotel.css" />
</head>
<body>

	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="admin_page.html">Admin Page</a></li>
		</ul>
	</div>

	<h1 style="margin-left: 30px;">Edit/View Hotel</h1>
	<div class = "edithotel_body">
			<div class = "addhotel">
				<div id="form"> 
					<h3> Add Hotel </h3> 
					<form action='add_hotel.php' method=POST>
					<b> Hotel Name: </b>
					<input type='text' name='name'> 
					<br>
					<br>
					<b> Location: </b>
					<input type='text' name='location'> 
					<br>
					<br>
					<input type='submit' value="Add">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "updatehotel">
				<div id="form"> 
					<h3> Update Hotel </h3> 
					<form action='update_hotel.php' method=POST>
					<b> Hotel Name: </b>
					<input type='text' name='name'> 
					<br>
					<br>
					<b> Location: </b>
					<input type='text' name='location'> 
					<br>
					<br>
					<b> Hotel id: </b>
					<input type='text' name='id'> 
					<br>
					<br>
					<input type='submit' value="Update">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "removehotel">
				<div id="form"> 
					<h3> Remove Hotel </h3> 
					<form action='remove_hotel.php' method=POST>
					<b> Hotel id: </b>
					<input type='text' name='id'> 
					<br>
					<br>
					<input type='submit' value="Remove">
					<br>
					</form>
				</div> 
			</div>

			<div class = "removehotel">
				<div id="form"> 
					<h3> Search Hotel </h3> 
					<form action='edit_hotel.php' method=POST>
					<b> Hotel id: </b>
					<input type='text' name='id'> 
					<br>
					<br>
					<input type='submit' value="Search">
					<br>
					</form>
				</div> 
			</div>

			<h3>All Hotel Informations</h3>
				

				<div id="table">
					<?php
					$con=mysqli_connect("localhost","root","","hotel_management");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}

					$result = mysqli_query($con,"SELECT * FROM Hotel");

					echo "<table border='1'>
					<tr>
					<th>Hotel ID</th>
					<th>Hotel Name</th>
					<th>Location</th>
					</tr>";

					while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
					{
					echo "<tr>";
					echo "<td>" . $row['hid'] . "</td>";
					echo "<td>" . $row['hname'] . "</td>";
					echo "<td>" . $row['location'] . "</td>";
					echo "</tr>";
					}
					echo "</table>";
					?>
					</div>

					<h3>Searched Hotel Informations</h3>

			<div id="table">
				<?php
				$con=mysqli_connect("localhost","root","","hotel_management");
				// Check connection
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$nid=$_POST['id'];

				$result = mysqli_query($con,"SELECT * FROM Hotel WHERE hid = $nid");

				echo "<table border='1'>
				<tr>
				<th>Hotel ID</th>
				<th>Hotel Name</th>
				<th>Location</th>
				</tr>";

				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				echo "<tr>";
				echo "<td>" . $row['hid'] . "</td>";
				echo "<td>" . $row['hname'] . "</td>";
				echo "<td>" . $row['location'] . "</td>";
				echo "</tr>";
				}
				echo "</table>";
				?>
				</div>

				 

	</div>
</body>
</html>
