<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$roomid=$_POST['roomid'];


$res=mysqli_query($link,"DELETE FROM Has_Room WHERE roomid = '$roomid'");


$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; edit_room.php");
mysqli_close($link);
?>