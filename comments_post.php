<?php
include("connection.php");

if(isset($_POST['submit'])){
	
	$name= $_POST['name'];
	$comments= $_POST['comments'];
    $date = $_POST['date'];
	$comments_length = strlen($comments);
	
	
    if($comments_length > 255){
		header("Location:comments.php?error");
	}
	else{
		
	$insert = mysqli_query($db,("INSERT INTO comments(name,comments,date)VALUES('$name','$comments','$date')"))or die(mysqli_error($db));
	header("Location:comments.php?success");
	}
}
?>