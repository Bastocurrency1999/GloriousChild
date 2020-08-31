<?php
include("confirm_login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
</head>
<body>
    <h1>working in progress...</h1>
<div class="form-wrapper">
	<header>
	<h1>Confirm Identity code</h1>
	</header>
<div class="input-wrapper">
<form method="post" action="confirm_login.php">
	<div class="input">
	<input type="text" name="id_code" placeholder="i.e 010120/A0001/OG/00001" required title="i.e 010120/A0001/OG/00001">
	</div>
	<p></p>
	<div class="submit">
	<input type="submit" name="confirm" value="Confirm">
	</div>
</form>
<p style="line-height:20px;">
    <span style="color:#57b846;"><span style="color:red;">Notice&nbsp;*</span><br>If the details shown is not yours kindly go back to where you registered and collect back your money.it shows you have not been registered. Thanks for your understanding and co-operation</span>
</p>
</div>
</div>
<!--<a href="register_page.php">Register</a>-->
</body>
</html>