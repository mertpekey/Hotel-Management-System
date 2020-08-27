<!DOCTYPE html>
<html>
<head>
	<title>Admin-Edit/View Reservation</title>
	<link rel="stylesheet" type="text/css" href="edit_reservation.css" />
</head>
<body>

	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="admin_page.html">Admin Page</a></li>
		</ul>
	</div>

	<h1 style="margin-left: 30px;">Edit/View Reservation</h1>
	<div class = "editcustomer_body">
		
		
			<div class = "addreservation">
				<div id="form"> 
					<h3> Add Reservation </h3> 
					<form action='add_reservation.php' method=POST>
					<b> Hotel ID: </b>
					<input type='text' name='hid'> 
					<br>
					<br>
					<b> SSN: </b>
					<input type='text' name='ssn'> 
					<br>
					<br>
					<b> Start Date: (yyyy-mm-dd)</b>
					<input type='text' name='sdate'> 
					<br>
					<br>
					<b> End Date: (yyyy-mm-dd)</b>
					<input type='text' name='edate'> 
					<br>
					<br>
					<input type='submit' value="Add">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "updatereservation">
				<div id="form"> 
					<h3> Update Reservation </h3> 
					<form action='update_reservation.php' method=POST>
					<b> Reservation ID: </b>
					<input type='text' name='ssn'> 
					<br>
					<br>
					<b> Start Date: </b>
					<input type='text' name='name'> 
					<br>
					<br>
					<b> End Date: </b>
					<input type='text' name='address'> 
					<br>
					<br>
					<input type='submit' value="Update">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "removereservation">
				<div id="form"> 
					<h3> Remove Reservation </h3> 
					<form action='remove_reservation.php' method=POST>
					<b> Reservation ID: </b>
					<input type='text' name='rid'> 
					<br>
					<br>
					<input type='submit' value="Delete">
					<br>
					</form>
				</div> 
			</div>

			<div class = "removereservation">
				<div id="form"> 
					<h3> Search Reservation </h3> 
					<form action='edit_reservation.php' method=POST>
					<b> Reservation ID: </b>
					<input type='text' name='rid'> 
					<br>
					<br>
					<input type='submit' value="Search">
					<br>
					</form>
				</div> 
			</div>

			<h3>All Reservation Informations</h3>

			<div id="table">
<?php
$con=mysqli_connect("localhost","root","","hotel_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Reservation");

echo "<table border='1'>
<tr>
<th>Reservation ID</th>
<th>Hotel ID</th>
<th>SSN</th>
<th>Start Date</th>
<th>End Date</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['rid'] . "</td>";
echo "<td>" . $row['hid'] . "</td>";
echo "<td>" . $row['ssn'] . "</td>";
echo "<td>" . $row['startdate'] . "</td>";
echo "<td>" . $row['enddate'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div> 

<h3>Searched Reservation Informations</h3>

<div id="table">
<?php
$con=mysqli_connect("localhost","root","","hotel_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$nid=$_POST['rid'];

$result = mysqli_query($con,"SELECT * FROM Reservation WHERE rid = $nid");

echo "<table border='1'>
<tr>
<th>Reservation ID</th>
<th>Hotel ID</th>
<th>SSN</th>
<th>Start Date</th>
<th>End Date</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['rid'] . "</td>";
echo "<td>" . $row['hid'] . "</td>";
echo "<td>" . $row['ssn'] . "</td>";
echo "<td>" . $row['startdate'] . "</td>";
echo "<td>" . $row['enddate'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div> 
		

	</div>
</body>
</html>
