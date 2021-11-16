<?php
include("connection.php");
if(isset($_POST['submit'])){
	$bitcoin_add = mysqli_real_escape_string($db,$_POST['bitcoin']);
	
	$insert = mysqli_query($db,("INSERT INTO bitcoin_address (bitcoin_address)VALUES('$bitcoin_add')"))or die (mysqli_error($db));
	header("Location:sell.php?successfully_uploaded");
}
?>