<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$ssn=$_POST['ssn']; //this is what we get from the form.


$res=mysqli_query($link,"DELETE FROM Customer WHERE ssn = '$ssn'");

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; edit_customer.php");
mysqli_close($link);
?>