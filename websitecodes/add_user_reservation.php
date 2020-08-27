<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$name=$_POST['name']; //this is what we get from the form.
$mail=$_POST['mail'];
$ssn=$_POST['ssn'];
$sdate=$_POST['sdate'];
$edate=$_POST['edate'];
$address=$_POST['address']; //this is what we get from the form.
$hid=$_POST['hid'];
$roomid=$_POST['roomid'];
$btype=$_POST['btype'];
$bdate=$_POST['bdate'];

$result= mysqli_query($link,"SELECT * FROM Has_Room WHERE roomid = '$roomid' ");
$row2 = mysqli_fetch_array($result);
$price = $row2['price']; 


$res=mysqli_query($link,"INSERT INTO Customer (ssn, name, mail, address) VALUES ('$ssn', '$name', '$mail', '$address');");
$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}
$res=mysqli_query($link,"INSERT INTO Reservation (hid, ssn, startdate, enddate) VALUES ('$hid', '$ssn', '$sdate', '$edate');");
$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}
$res=mysqli_query($link,"INSERT INTO Bill_Payment (bdate, btype, ssn, price) VALUES ('$bdate', '$btype', '$ssn', '$price');");
$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}
$res=mysqli_query($link,"INSERT INTO Checkinout (hid, ssn, roomid, sdate) VALUES ('$hid', '$ssn', '$roomid', '$sdate');");


$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; reservation_page.php");
mysqli_close($link);
?>