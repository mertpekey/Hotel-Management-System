<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$location=$_POST['location']; //this is what we get from the form.
$name=$_POST['name'];



$res=mysqli_query($link,"INSERT INTO Hotel (hname, location) VALUES ('$name', '$location')");
$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; edit_hotel.php");
mysqli_close($link);
?>