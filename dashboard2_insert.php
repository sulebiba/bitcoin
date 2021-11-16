<?php
include("connection.php");
if(isset($_POST)){
	$rate = $_POST['rate'];
	
	$insert = mysqli_query($db,("INSERT INTO rate(rate) VALUES ('$rate')"))or die(mysqli_error($db));
	header("Location:sell.php?inserted_successfully");
}
?>