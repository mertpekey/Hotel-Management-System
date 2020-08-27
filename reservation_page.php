<!DOCTYPE html>
<html>
<head>
	<title>Make A Reservation</title>
	<link rel="stylesheet" type="text/css" href="reservation_page.css" />
</head>
<body>
	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="login.html">Admin Login</a></li>
 			<li><a href="reservation_page.php">Make Reservation</a></li>
 			<li><a href="contact_page.html">About</a></li>
		</ul>
	</div>

	<div class = "bodypart" align = "center">
		<p>Welcome to Hotel Management System</p>
		<br>
		<p>You Can Use The Hotel Table To Select The Best Hotel For You</p>
		<br>
		<div id="table">
				<?php
				$con=mysqli_connect("localhost","root","","hotel_management");
				// Check connection
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$result = mysqli_query($con,"SELECT * FROM Has_Room");

				echo "<table border='1' background-color: white;>
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
		<div id="table2">
				<?php
				$con=mysqli_connect("localhost","root","","hotel_management");
				// Check connection
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$result2 = mysqli_query($con,"SELECT * FROM Hotel");

				echo "<table border='1' background-color: white;>
				<tr>
				<th>Hotel ID</th>
				<th>Hotel Name</th>
				<th>Location</th>
				</tr>";

				while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
				{
				echo "<tr>";
				echo "<td>" . $row2['hid'] . "</td>";
				echo "<td>" . $row2['hname'] . "</td>";
				echo "<td>" . $row2['location'] . "</td>";
				echo "</tr>";
				}
				echo "</table>";
				?>
		</div> 
		<p>Please Fill Out The Form Below</p>
		<div class = "reservationform">
				<div id="form"> 
					<h3> Make Reservation </h3> 
					<div class = "forminside">
						<form action='add_user_reservation.php' method=POST>
						
						<label for="fssn">SSN: </label>
						<input type='text' id ="fssn" name='ssn' placeholder="Please Enter SSN"> 
						<br>
						<br>
						
						<label for="fname">Name Lastname: </label>
						<input type='text' id ="fname" name='name' placeholder="Please Enter Your Name"> 
						<br>
						<br>
						
						<label for="fmail">E-Mail: </label>
						<input type='text' id ="fmail" name='mail' placeholder="Please Enter Mail"> 
						<br>
						<br>
						
						<label for="faddress">Address: </label>
						<input type='text' id ="faddress" name='address' placeholder="Please Enter Address"> 
						<br>
						<br>
						
						<label for="fhid">Hotel ID: </label>
						<input type='text' id ="fhid" name='hid' placeholder="Please Enter Hotel ID"> 
						<br>
						<br>
						
						<label for="frid">Room ID: </label>
						<input type='text' id ="frid" name='roomid' placeholder="Please Enter Room ID"> 
						<br>
						<br>
						
						<label for="fstart">Start Date: (yyyy-mm-dd) </label>
						<input type='text' id ="fstart" name='sdate' placeholder="Please Enter Start Date"> 
						<br>
						<br>
						
						<label for="fend">End Date: (yyyy-mm-dd)</label>
						<input type='text' id ="fend" name='edate' placeholder="Please Enter End Date"> 
						<br>
						<br>
						
						
						<label for="fbtype">Bill Type: (Credit Card, Cash or Paypal) </label>
						<input type='text' id ="fbtype" name='btype' placeholder="Please Enter Bill Type"> 
						<br>
						<br>
						
						<label for="fbdate">Bill Date: (yyyy-mm-dd)</label>
						<input type='text' id ="fbdate" name='bdate' placeholder="Please Enter Bill Date"> 
						<br>
						<br>
						<input type='submit' value="Make Reservation">
						<br>
						</form>
					</div>
				</div> 
			</div>
	</div>
	<div class = "footerdiv">
			<p>Contact information: <a href="mailto:someone@example.com">someone@example.com</a>.</p>
	</div>

</body>
</html>