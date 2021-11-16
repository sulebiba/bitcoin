<?php

include("connection.php");
if(isset($_POST['submit'])){
	$trade = mysqli_real_escape_string($db,$_POST['trade']);
	
	$insert = mysqli_query($db,("INSERT INTO trade (minimum_trade_amount)VALUES('$trade')"))or die (mysqli_error($db));
	header("Location:sell.php?successfully_uploaded");
}
?>