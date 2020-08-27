<!DOCTYPE html>
<html>
<head>
	<title>Admin-Edit/View Customer</title>
	<link rel="stylesheet" type="text/css" href="edit_customer.css" />
</head>
<body>

	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="admin_page.html">Admin Page</a></li>
		</ul>
	</div>

	<h1 style="margin-left: 30px;">Edit/View Customer</h1>
	<div class = "editcustomer_body">
		
		
			<div class = "addcustomer">
				<div id="form"> 
					<h3> Add Customer </h3> 
					<form action='add_customer.php' method=POST>

					<b> SSN: </b>
					<input type='text' name='ssn'> 
					<br>
					<br>
					<b> Name Lastname: </b>
					<input type='text' name='name'> 
					<br>
					<br>
					<b> Address: </b>
					<input type='text' name='address'> 
					<br>
					<br>
					<b> E-Mail: </b>
					<input type='text' name='mail'> 
					<br>
					<br>
					<input type='submit' value="Add">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "updatecustomer">
				<div id="form"> 
					<h3> Update Customer </h3> 
					<form action='update_customer.php' method=POST>
					<b> SSN: </b>
					<input type='text' name='ssn'> 
					<br>
					<br>
					<b> Name Lastname: </b>
					<input type='text' name='name'> 
					<br>
					<br>
					<b> Address: </b>
					<input type='text' name='address'> 
					<br>
					<br>
					<b> E-Mail: </b>
					<input type='text' name='mail'> 
					<br>
					<br>
					<input type='submit' value="Update">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "removecustomer">
				<div id="form"> 
					<h3> Remove Customer </h3> 
					<form action='remove_customer.php' method=POST>

					<b> SSN: </b>
					<input type='text' name='ssn'> 
					<br>
					<br>
					
					<input type='submit' value="Delete">
					<br>
					</form>
				</div> 
			</div>


			<div class = "removecustomer">
				<div id="form"> 
					<h3> Search Customer </h3> 
					<form action='edit_customer.php' method=POST>

					<b> SSN: </b>
					<input type='text' name='ssn'> 
					<br>
					<br>
					
					<input type='submit' value="Search">
					<br>
					</form>
				</div> 
			</div>

			<h3>All Customer Informations</h3>

			<div id="table">
<?php
$con=mysqli_connect("localhost","root","","hotel_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Customer");

echo "<table border='1'>
<tr>
<th>SSN</th>
<th>Name</th>
<th>Mail</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['ssn'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['mail'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>

<h3>Searched Customer Informations</h3>

<div id="table">
<?php
$con=mysqli_connect("localhost","root","","hotel_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$nid=$_POST['ssn'];

$result = mysqli_query($con,"SELECT * FROM Customer WHERE ssn = $nid");

echo "<table border='1'>
<tr>
<th>SSN</th>
<th>Name</th>
<th>Mail</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['ssn'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['mail'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
</div>  
		

	</div>
</body>
</html>
