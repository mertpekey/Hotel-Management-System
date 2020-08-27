<!DOCTYPE html>
<html>
<head>
	<title>Admin-Edit/View Customer</title>
	<link rel="stylesheet" type="text/css" href="edit_room.css" />
</head>
<body>

	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="admin_page.html">Admin Page</a></li>
		</ul>
	</div>

	<h1 style="margin-left: 30px;">Edit/View Room</h1>
	<div class = "editcustomer_body">
			<div class = "addroom">
				<div id="form"> 
					<h3> Add Room </h3> 
					<form action='add_room.php' method=POST>
					<b> Room Type: </b>
					<input type='text' name='rtype'> 
					<br>
					<br>
					<b> Room Price: </b>
					<input type='text' name='price'> 
					<br>
					<br>
					<b> Hotel ID: </b>
					<input type='text' name='hid'> 
					<br>
					<br>
					<input type='submit' value="Add">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "updateroom">
				<div id="form"> 
					<h3> Update Room </h3> 
					<form action='update_room.php' method=POST>
					<b> Room ID: </b>
					<input type='text' name='roomid'> 
					<br>
					<br>
					<b> Room Type: </b>
					<input type='text' name='rtype'> 
					<br>
					<br>
					<b> Room Price: </b>
					<input type='text' name='price'> 
					<br>
					<br>
					<b> Hotel ID: </b>
					<input type='text' name='hid'> 
					<br>
					<br>
					<input type='submit' value="Update">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "removeroom">
				<div id="form"> 
					<h3> Remove Room </h3> 
					<form action='remove_room.php' method=POST>
					<b> Room ID: </b>
					<input type='text' name='roomid'> 
					<br>
					<br>
					<input type='submit' value="Delete">
					<br>
					</form>
				</div> 
			</div>

			<div class = "removeroom">
				<div id="form"> 
					<h3> Search Room </h3> 
					<form action='edit_room.php' method=POST>
					<b> Room ID: </b>
					<input type='text' name='roomid'> 
					<br>
					<br>
					<input type='submit' value="Search">
					<br>
					</form>
				</div> 
			</div>

			<h3>All Room Informations</h3>

			<div id="table">
<?php
$con=mysqli_connect("localhost","root","","hotel_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Has_Room");

echo "<table border='1'>
<tr>
<th>Room ID</th>
<th>Hotel ID</th>
<th>Room Type</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['roomid'] . "</td>";
echo "<td>" . $row['hid'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>
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

<h3>Searched Room Informations</h3>

<div id="table">
<?php
$con=mysqli_connect("localhost","root","","hotel_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$nid=$_POST['roomid'];

$result = mysqli_query($con,"SELECT * FROM Has_Room WHERE roomid = $nid");

echo "<table border='1'>
<tr>
<th>Room ID</th>
<th>Hotel ID</th>
<th>Room Type</th>
<th>Price</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['roomid'] . "</td>";
echo "<td>" . $row['hid'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>
		
		

	</div>
</body>
</html>
