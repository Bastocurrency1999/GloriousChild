<?php
include("db_connect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
</head>
<body>
<div class="form-wrapper">
	<header>
	<h1>Registration</h1>
	</header>
<div class="input-wrapper">
<form method="post" action="register.php">
	<label>Personal Details&nbsp;<span style="color:red;">*</span></label>
	<hr>
	<div class="input">
	<input type="text" name="id_code" placeholder="input your ID code" required>
	<p></p>
	</div>

	<div class="input">
	<input type="text" name="parent_name" placeholder="Name of parent in full" required>
	<p></p>
	</div>
	
	<div class="input">
	<input type="text" name="phone" placeholder="parent phone number" required>
	<p></p>
	</div>

	<div class="input">
	<input type="text" name="child_name" placeholder="Name of glorious child" required>
	<p></p>
	</div>

    <label>Bank Details&nbsp;<span style="color:red;">*</span></label>
    <hr>
	<div class="input">
	<input type="text" name="bank_name" placeholder="bank name" required>
	<p></p>
	</div>

	<div class="input">
	<input type="text" name="account_name" placeholder="account name" required>
	<p></p>
	</div>

	<div class="input">
	<input type="text" name="account_number" placeholder="account number" required>
	<p></p>
	</div>

	<div class="input">
	<input type="text" name="account_type" placeholder="account type" required>
	<p></p>
	</div>

	<div class="submit">
	<input type="submit" name="submit" value="Confirm">
	</div>
</form>
</div>
</div>
</body>
</html>