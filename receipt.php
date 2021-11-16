
<?php
include("session.php");
include("connection.php");
?>


<body>



<?php 

if(isset($_SESSION['login_successful'])){
echo"";
}
else{
	exit();
}
?>



<?php
echo"<br>";
$query = mysqli_query($db,("SELECT * FROM users ORDER BY id DESC"))or die(mysqli_error($db));
if(mysqli_num_rows($query)>0){
while($row=mysqli_fetch_array($query)){
	$images = 'users/'.$row['image'];
	echo $row['firstname'];
	?>
   <img src= "<?php echo $images; ?>"width="400"height="400"/>
 
<?php } }?>




</body>

