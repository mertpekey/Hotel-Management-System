<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$id=$_POST['id']; //this is what we get from the form.


$res=mysqli_query($link,"DELETE FROM Bill_Payment WHERE bid = '$id'");

$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; edit_bill.php");
mysqli_close($link);
?>