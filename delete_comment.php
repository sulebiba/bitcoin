<?php
include("connection.php");
if(isset($_POST['submit'])){
$id = $_POST['id']; 
$delete = mysqli_query($db,("DELETE FROM comments WHERE id='$id'"));
header("Location:comments.php?delete_successful");
}
?>