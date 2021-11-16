<?php
include("session.php");
unset($_SESSION['login_successful']);
header("Location:index.php?Logout_Successful")
?>