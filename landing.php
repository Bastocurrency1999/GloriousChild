<?php
include("confirm_login.php");

$id_code = $_SESSION["id_code"];
$parent_name = $_SESSION["parent_name"];
$phone = $_SESSION["phone"];
$child_name = $_SESSION["child_name"];
$bank_name = $_SESSION["bank_name"];
$account_name = $_SESSION["account_name"];
$account_number = $_SESSION["account_number"];
$account_type = $_SESSION["account_type"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/landing.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
</head>
<body>
<div class="form-wrapper">
	<header>
	<h1>WElCOME !</h1>
	</header>
<div class="content-wrapper">
<div class="logo-wrapper">
	<img src="image/logo.png">
</div>
<div class="table-wrapper">
<fieldset>
<table>
		<legend>Personal Details</legend>
		<tr>
			<th>Parent Name:</th>
			<td><?php echo"$parent_name";?></td>
		</tr>
		<tr>
			<th>Glorious Child Name:</th>
			<td><?php echo"$child_name";?></td>
		</tr>
		<tr>
			<th>Parent Phone Number:</th>
			<td><?php echo"$phone";?></td>
		</tr>
</table>
</fieldset>

<fieldset style="margin-top: 40px;">
<table>
		<legend>Bank Details</legend>
		<tr>
			<th>Bank Name:</th>
			<td><?php echo"$bank_name";?></td>
		</tr>
		<tr>
			<th>Account Name:</th>
			<td><?php echo"$account_name";?></td>
		</tr>
		<tr>
			<th>Account Number:</th>
			<td><?php echo"$account_number";?></td>
		</tr>
		<tr>
			<th>Account Type:</th>
			<td><?php echo"$account_type";?></td>
		</tr>
</table>
</fieldset>
<p></p>
<div class="logout">
	<a href="logout.php"><input type="submit" name="" value="Logout"></a>
</div>
</div>
</div>
</div>
</body>
</html>