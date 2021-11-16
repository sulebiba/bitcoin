<?php
include("session.php");
include("connection.php");
date_default_timezone_set('Africa/Lagos');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Form</title>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css"rel="stylesheet" />
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse"data-target="#navbar-collapse-main">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php"><img src="images/logo.png"width="40" />
</a>
</div>
<div class="collapse navbar-collapse"id="navbar-collapse-main">
<ul class="nav navbar-nav navbar-right">
<li><a class="active" href="index.php">Home</a></li>
<li><a class="active" href="sell.php">Sell Bitoins</a></li>
    <li><a class="active" href="gift_cards.php">Sell Gift Cards</a></li>
<li><a class="active" href="users.php">Form</a></li>
<li><a class="active" href="comments.php">Feedback</a></li>
</ul>
</div>
</div>
</nav>
<div id="">
<div class="landing-text">
<!--<h1>BOOTSTRAP</h1>
<H3>Learn the basic building blocks</H3>
<a href="#" class="btn btn-default btn-lg">Get Started</a>-->
</div>
</div>
<div class="padding">
<div class="container">
<div class="row">
<div class="col-sm-6">
<div class="container">
<div>
<script>
function validate(){
var name= document.getElementById('name').value;
var comment= document.getElementById('comment').value;
var error1= document.getElementById('errors1');
var error2= document.getElementById('errors2');

if(name == " "){
	error1.style.visibility="visible";
	return false;
}
else if(comment == " "){
	error2.style.visibility="visible";
	return false;
}
else{
	return true;
}
}
</script>
<form action="comments_post.php"method="POST"onsubmit="return validate()" >
<div class="">
<?php
if(isset($_GET['submission_successful'])){
echo"<label id='submission'>SUBMISSION SUCCESSFUL</label>";
header("refresh: 2;comments.php");
}
?>
<br />
<input type="text"name="name" value="" placeholder="name"id="name"required/><span id="errors1"class="errors">*fill this field</span>
</div>
<br />
<div class="txtb">
<textarea rows="5"cols="12"name="comments"value=""placeholder="post a review"id="comment"required/></textarea><span id="errors2"class="errors">*fill this field</span>
</div>
<input type="hidden"name="date"value="<?php echo date('Y-m-d h:i:s'); ?>"/>
<p align="center"><input type="submit"name="submit"value="POST" /></p>
</form>
<?php
$query = mysqli_query($db,("SELECT * FROM comments"))or die(mysqli_error($db)); 
while($row=mysqli_fetch_array($query)){
	    echo "<div class='commentbox'><p><p align='right'></p>";
		$id = $row['id'];
		 echo $row['name']."<br><br>".$row['comments']."<br><br>".$row['date'];
		echo"</p></div><hr>";
		?>
        <?php 
		if(isset($_SESSION['login_successful'])){
		echo"<form action='delete_comment.php'method='post'>
		<input type='hidden'name='id'value='$id'><p id='undelete' align='center'><input type='submit'name='submit'value='delete'></p></form>
		";
		}
	}?>
    <?php
/*if(isset($_GET['error'])){
	//echo "<p id='post'>*comment too long</p>";
	header("refresh:1;comments.php");
}
if(isset($_GET['success'])){
	//echo "<p id='post2'>POST SUBMITTED</p>";
	header("refresh:1;comments.php");
}*/
?>
</div>

</div>
<div class="col-sm-6 text-center">
<br />

</div>
</div>
</div>
</div>
<div class="padding">
<div class="container">
<div class="row">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

</div>
</div>
<!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">

</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<h4>And less</h4>
<p>dddddddddddddddddddddddddd
ddddddddddddddddddddddddddddd
ddddddddddddddddddddddddddddd
ddddddddddddddddddddddddddddd
ddddddddddddddddddddddddddddd</p>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
<img src="images/9.jpg" class="img-responsive" />
</div>-->
<!--</div>
</div>-->
<!--<div id="fixed">
</div>

<div class="padding">
<div class="container">
<div class="row">
<div class="col-sm-6">
<h4>Hello dear.</h4>
<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
</div>
<div class="col-sm-6">
<img src="images/12.jpg" />
</div>

</div>-->
</div>
</div>
<footer class="container-fluid text-center">
<div class="row">
<div class="col-sm-4">
<h3>Contact Us</h3>
<br />
<h4>+2349061207054</h4>
</div>
<div class="col-sm-4">
<h3>Connect</h3>
<h4><a href="https://www.instagram.com/og_western1/"class="fa">Follow on instagram</a></h4>

</div>

<div class="col-sm-4">
<img src="images/9.jpg" class="icon" />
</div>

</div>
</footer>
</body>
</html>