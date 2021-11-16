<?php
include("session.php");
include("connection.php");
if(isset($_POST['submit'])){
	$username = mysqli_escape_string($db,$_POST['username']);
	$password = mysqli_escape_string($db,(md5($_POST['password'])));
	
	$query = mysqli_query($db,("SELECT * FROM admin WHERE username ='$username'AND password='$password'")) or die(mysqli_error($db));
	$result=mysqli_num_rows($query);
		if(($result)>0){
			while($row=mysqli_fetch_array($query)){
				$_SESSION['login_successful'] = $row['id'];
				header("Location:index.php?login_successful");
				
			}
		}
		else{
			header("Location:admin.php?login_unsuccessful");
		}
	}

?>