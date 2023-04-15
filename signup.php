<?php

if(isset($_POST['name']))
{
$con = mysqli_connect('localhost', 'root', '','harvit');

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
}

?>