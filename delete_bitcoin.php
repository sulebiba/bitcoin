<?php
include("connection.php");
if(isset($_POST['submit'])){
	$delete = mysqli_query($db,("DELETE FROM bitcoin_address"))or die(mysqli_error($db));
	header("Location:sell.php?successfully_deleted");
}
?>