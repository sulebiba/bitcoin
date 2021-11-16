
<?php
include("session.php");
include("connection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width,initial scale=1" />
<link href="http://www.w3schools.com/lib/w3.css" rel="stylesheet />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="style.css" rel="stylesheet"type="text/css" />
</head>

<body>
</div>
<?php
if(isset($_SESSION['login_successful'])){
echo"";
}
else{
	exit();
}
?>
<?php
$query= mysqli_query($db,("SELECT * FROM users ORDER BY id DESC"))or die(mysqli_error($db));
while($row=mysqli_fetch_array($query)){
?>
<table border="1"id="table2"cellpadding='5'width="1500"cellspacing="5"align='center'><tr><th>FIRSTNAME</th><th>LASTNAME</th><th>BANK ACCOUNT</th><th>BANK NAME</th><th>COUNTRY</th>
<th>AMOUNT OF BITCOIN SENT</th><th>EMAIL ADDRESS</th><th>PHONE NO</th><th>RECEIPT</th></tr>
<tr>
<td><?php echo $row['firstname'] ?></td><td><?php echo $row['lastname'] ?></td><td><?php echo $row['bank_account'] ?></td><td><?php echo $row['bank_name']?></td>
<td><?php echo $row['country'] ?></td><td><?php echo $row['amount_of_bitcoin_sent'] ?></td><td><?php echo $row['email_address'] ?></td><td><?php echo $row['phone_no'] ?></td>
<td><?php echo $row['image'] ?></td>
</tr>
</table>
<?php }?>

</div>

</body>
</html>
