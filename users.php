
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
<div class="contact-for" align="center">
<h2><font face="Arial, Helvetica, sans-serif">INFORMATION TO PROVIDE</font></h2>
<div class="txtb">
<script>
function validate(){
	var firstname=document.getElementById('firstname').value;
	var lastname=document.getElementById('lastname').value;
	var bankacc=document.getElementById('bankacc').value;
	var bank=document.getElementById('bank').value;
	var country=document.getElementById('country').value;
	var bitcoin=document.getElementById('bitcoin').value;
	var email=document.getElementById('email').value;
	var phone=document.getElementById('phone').value;
	var file=document.getElementById('file').value;
	var error1 = document.getElementById('error1');
	var error2 = document.getElementById('error2');
	var error3 = document.getElementById('error3');
	var error4 = document.getElementById('error4');
	var error5 = document.getElementById('error5');
	var error6 = document.getElementById('error6');
	var error7 = document.getElementById('error7');
	var error8 = document.getElementById('error8');
	var error9 = document.getElementById('error9');



if(firstname== ""|| firstname== " "){
		error1.style.visibility = "visible";
		return false;
}
else if(!firstname.match(/^[a-zA-Z]+$/)){
	error1.style.visibility = "visible";
	return false;
	
}
else if(lastname== ""||lastname== " "){
		error2.style.visibility = "visible";
		return false;
}
else if(!lastname.match(/^[a-zA-Z]+$/)){
	error2.style.visibility = "visible";
	return false;
	
}
else if(bankacc== ""||bankacc== " "){
		error3.style.visibility = "visible";
		return false;
}
else if(isNaN(bankacc)){
	error3.style.visibility = "visible";
	return false;
}
else if(bank== ""||bank== " "){
		error4.style.visibility = "visible";
		return false;
}
else if(!bank.match(/^[a-zA-Z\s]+$/ )){
	error4.style.visibility = "visible";
	return false;
	
}
else if(country== "no"){
		error5.style.visibility = "visible";
		return false;
}
else if(bitcoin== ""||bitcoin== " "){
		error6.style.visibility = "visible";
		return false;
}
else if(email== ""||email== " "){
		error7.style.visibility = "visible";
		return false;
}
else if(phone== ""||phone== " "){
		error8.style.visibility = "visible";
		return false;
}
else if(file== ""){
		error9.style.visibility = "visible";
		return false;
}
else if(!file.match(/(\.jpg|\.jpeg|\.png|\.gif)$/i)){
	error9.style.visibility = "visible";
	return false;
}
else{
	return true;
}
}
</script>

<form method="POST"onsubmit="return validate()"action="form.php"enctype="multipart/form-data">
<label>Firstname:</label>
<input type="text" name="firstname" value="" placeholder="Enter your Firstname" id="firstname" /><span id="error1"class="error">*Alphabets required</span>
</div>
<div class="txtb">
<label>Lastname:</label>
<input type="text" name="lastname" value="" placeholder="Enter your Lastname"id="lastname" /><span id="error2"class="error">*Alphabets required</span>
</div>
<div class="txtb">
<label>Bank Acct NO:</label>
<input type="text" name="bankacc" value="" placeholder="Enter your Bank Acct No"id="bankacc" /><span id="error3"class="error">*Numbers required</span>
</div>
<div class="txtb">
<label>Bank Name:</label>
<input type="text" name="bank" value="" placeholder="Enter your Bank Name"id="bank" /><span id="error4"class="error">*Alphabets required</span>
</div>
<div class="txtb">
<label>Country:</label>
<select id="country"name="country">
<option value="no">Select Country</option>
<option value="Nigeria">Nigeria</option>
</select><span id="error5"class="error">*country required</span>
</div>
<div class="txtb">
<label>Amount of Bitcoin Sent:</label>
<input type="text" name="bitcoin" value="" placeholder="Enter Amount of Bitcoin Sent"id="bitcoin" /><span id="error6"class="error">*Amount required</span>
</div>
<div class="txtb">
<label>Email Address:</label>
<input type="text" name="email" value="" placeholder="Enter your Email Address"id="email" /><span id="error7"class="error">*Email required</span>
</div>
<div class="txtb">
<label>Phone NO:</label>
<input type="text" name="phone" value="" placeholder="Enter your Phone No"id="phone" /><span id="error8"class="error">*required</span>
</div>
<div class="txtb">
<label>Attach Receipt:</label>
<input type="file" name="file" value=""id="file" /><span id="error9"class="error">*Upload receipt(jpg,jpeg,png,gif)</span>
</div>
<input type ="submit"class="btn" value="Send" name="submit"/>
</form>

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