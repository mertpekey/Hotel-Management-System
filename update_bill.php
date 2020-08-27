<?php


$link =mysqli_connect("localhost","root","","hotel_management");

if($link==false) {
	die("ERROR: Could not connect". mysqli_connect_error());
	
}

$id=$_POST['id']; //this is what we get from the form.
$type=$_POST['type'];
$price=$_POST['price'];
$ssn=$_POST['ssn'];
$b_date=$_POST['b_date'];


$res=mysqli_query($link,"UPDATE Bill_Payment SET ssn='$ssn', btype='$type', price='$price',bdate='$b_date' WHERE bid = '$bid'");


$db_result=mysqli_fetch_array($res);


if($db_result!=NULL){
	echo "<script> alert('ERROR');</script>";
}


header("Refresh:0; edit_bill.php");
mysqli_close($link);
?>