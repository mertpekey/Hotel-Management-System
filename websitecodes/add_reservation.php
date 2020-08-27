<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}


$hid=$_POST['hid'];
$ssn=$_POST['ssn'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];



$res=mysqli_query($link,"INSERT INTO Reservation (hid, ssn, startdate, enddate) VALUES ('$hid', '$ssn', '$sdate', '$edate');");

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; edit_reservation.php");
mysqli_close($link);
?>