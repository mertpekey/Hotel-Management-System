<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$ssn=$_POST['ssn']; //this is what we get from the form.
$name=$_POST['name'];
$address=$_POST['address'];
$mail=$_POST['mail'];


$res=mysqli_query($link,"UPDATE Customer SET name='$name', mail='$mail',address='$address' WHERE ssn = '$ssn'");


$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; edit_customer.php");
mysqli_close($link);
?>