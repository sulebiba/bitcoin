<?php
include("session.php");
include("connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Sell Bitcoins</title>
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
<li><a class="active" href="gift_cards.php">Gift Cards</a></li>
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
<?php 
$query = mysqli_query($db,("SELECT * FROM bitcoin_address"))or die (mysqli_error($db));
$row=mysqli_fetch_array($query);
$bitcoin = $row['bitcoin_address'];
$query = mysqli_query($db,("SELECT * FROM rate"))or die(mysqli_error($db));
$row=mysqli_fetch_array($query);
$rate = $row['rate'];
$query = mysqli_query($db,("SELECT * FROM trade"))or die (mysqli_error($db));
$row=mysqli_fetch_array($query);
$trade = $row['minimum_trade_amount'];

echo"<p id='wallet'> <br><br><b>BITCOIN WALLET ADDRESS:</b><br> $bitcoin </p><br><p id='trad'><b>MINIMUM TRADE AMOUNT:<br><b>$trade</b></p><br><p id='rate'><br><br><b>EXCHANGE RATE:</b><br>$rate</p>";?>
<?php
if(isset($_SESSION['login_successful'])){
echo"<form action='delete_trade.php'method='POST'>
<p id='trade2'><input type='submit'name='submit'value='DELETE'></p>
</form><form action='delete_bitcoin.php'method='POST'>
<p id='delete'><input type='submit'name='submit'value='DELETE'></p>
</form><br><form action='delete_rate.php'method='POST'>
<p id='delete2'><input type='submit'name='submit'value='DELETE'></p>
</form>
<form action='dashboard.php'method='POST'>
<p id='insert'><input type='submit'name='submit'value='INSERT'></p>
</form>
<form action='trade.php'method='POST'>
<p id='trade'><input type='submit'name='submit'value='INSERT'></p>
</form>
<form action='dashboard2.php'method='POST'>
<p id='insert2'><input type='submit'name='submit'value='INSERT'></p>
</form>
<form action='receipt.php'method='POST'>
<p id='receipt'><input type='submit'name='submit'value='RECEIPT'></p>
</form>
<form action='table.php'method='POST'>
<p id='tablo'><input type='submit'name='submit'value='USERS'></p>
</form>
<p id='log'><a href='logout.php'>LOGOUT</a></p>";
}
?>

</div>
<div class="col-sm-6 text-center">
<table align="center">
<tr>
<th><font color="red"size="+3">STEP 1</font></th>
</tr>
<tr>
<th><p>Copy the wallet address provided to transfer bitcoin from your bitcoin wallet to our own wallet
</p><br /></th>
</tr>
</table>
<table align="center">
<tr>
<th><font color="red" size="+3">STEP 2</font></th>
</tr>
<tr>
<th><p>After performing transaction on your device, screenshot the confirmation page provided to you by your bitcoin wallet</p> <br /></th>
</tr>
</table>
<table align="center">
<tr>
<th><font color="red" size="+3">STEP 3</font></th>
</tr>
<tr>
<th><p>Fill out your information on the form in the Form page and upload the screenshot of the confirmation page on the form</p> <br />Click on Image below to sell <span id="gift"><b>GIFT CARDS</b></span></th>
</tr>
</table>
<br />
<br />
<a href="https://api.whatsapp.com/send?phone=2349061207054&text=Sell%20Gift%20Cards"><img src="images/faith.jpg" /></a>
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