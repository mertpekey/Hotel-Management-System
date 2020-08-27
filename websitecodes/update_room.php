<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$roomid=$_POST['roomid']; //this is what we get from the form.
$rtype=$_POST['rtype'];
$price=$_POST['price']; //this is what we get from the form.
$hid=$_POST['hid'];



$res=mysqli_query($link,"UPDATE Has_Room SET type='$rtype', price='$price' WHERE hid = '$hid' AND roomid='$roomid'");

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; edit_room.php");
mysqli_close($link);
?>