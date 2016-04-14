<html>
<head>
<title>PHP WEB SHOP</title>
</head>

<body>

<?php
	include ("buy.php");
	if (!strcmp(md5($_POST['upwd']), md5('123'))){
	  $user= new buy;
	  $user->owner= $_POST['uname'];
	  $pitem = $_POST['pname'];
	  $user->buy_product($_POST['pname'],$_POST['number'],$_POST['price']);
	  echo "<font color='blue'>";
	  echo "Welcome ";
	  echo $user->get_owner();
	  echo "!";
	  echo "<p>Thank you for the purchase of ";
	  echo $user->product[$pitem]." ".$pitem."s!";
	  echo "<br>total price is $".$user->price[$pitem]*$user->product[$pitem].".";
	}
else
	echo "wrong password!<br>";
?>
</body>