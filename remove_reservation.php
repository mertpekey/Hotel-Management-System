<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$rid=$_POST['rid']; //this is what we get from the form.



$res=mysqli_query($link,"DELETE FROM Hotel WHERE rid = '$rid'");


$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; edit_reservation.php");
mysqli_close($link);
?>