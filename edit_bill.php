<!DOCTYPE html>
<html>
<head>
	<title>Admin-Edit/View Bill</title>
	<link rel="stylesheet" type="text/css" href="edit_bill.css" />
</head>
<body>

	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="admin_page.html">Admin Page</a></li>
		</ul>
	</div>

	<h1 style="margin-left: 30px;">Edit/View Bill</h1>
	<div class = "editcustomer_body">
			<div class = "addbill">
				<div id="form"> 
					<h3> Add Bill </h3> 
					<form action='add_bill.php' method=POST>
					<b> Bill Type: </b>
					<input type='text' name='type'> 
					<br>
					<br>
					<b> Bill Price: </b>
					<input type='text' name='price'> 
					<br>
					<br>
					<b> SSN: </b>
					<input type='text' name='ssn'> 
					<br>
					<br>
					<b> Bill Date: (yyyy-mm-dd)</b>
					<input type='text' name='b_date'> 
					<br>
					<br>
					<input type='submit' value="Add">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "updatebill">
				<div id="form"> 
					<h3> Update Bill </h3> 
					<form action='update_bill.php' method=POST>
					<b> Bill ID: </b>
					<input type='text' name='id'> 
					<br>
					<br>
					<b> Bill Type: </b>
					<input type='text' name='type'> 
					<br>
					<br>
					<b> Bill Price: </b>
					<input type='text' name='price'> 
					<br>
					<br>
					<b> SSN: </b>
					<input type='text' name='ssn'> 
					<br>
					<br>
					<b> Bill Date: </b>
					<input type='text' name='b_date'> 
					<br>
					<br>
					<input type='submit' value="Update">
					<br>
					</form>
				</div> 
			</div>
		

		
			<div class = "removebill">
				<div id="form"> 
					<h3> Remove Bill </h3> 
					<form action='remove_bill.php' method=POST>
					<b> Bill ID: </b>
					<input type='text' name='id'> 
					<br>
					<br>
					<input type='submit' value="Remove">
					<br>
					</form>
				</div> 
			</div>
		

	</div>
</body>
</html>
<div id="table">
<?php
$con=mysqli_connect("localhost","root","","hotel_management");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Bill_Payment");

echo "<table border='1'>
<tr>
<th>Bill ID</th>
<th>SSN</th>
<th>Price</th>
<th>Bill Type</th>
<th>Bill Date</th>
</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo "<tr>";
echo "<td>" . $row['bid'] . "</td>";
echo "<td>" . $row['ssn'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>" . $row['btype'] . "</td>";
echo "<td>" . $row['bdate'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
</div> 