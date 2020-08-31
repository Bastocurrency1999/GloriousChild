<?php
include("db_connect.php");

if(isset($_POST['submit'])){
	$id_code =$_POST['id_code'];
	$parent_name=$_POST['parent_name'];
	$phone=$_POST['phone'];
	$child_name =$_POST['child_name'];
	$bank_name=$_POST['bank_name'];
	$account_name =$_POST['account_name'];
	$account_number=$_POST['account_number'];
	$account_type=$_POST['account_type'];

	$ins="INSERT INTO registration VALUES(NULL,'$id_code','$parent_name','$phone','$child_name','$bank_name','$account_name','$account_number','$account_type',NULL)";
	$result=$conn->query($ins);
	if($result==true){
		echo "<script> alert('You have successfully join our noble program')</script>";
	}else{
		echo "<script> alert('Check your information before proceeding')</script>".$conn->connect_error;
	}
}
header('refresh:1;confirm_code.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
<style type="text/css">
  body{
    background:#fff;
  }
  .lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background:#57b846;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}

</style>
</head>
<body>
<div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
</body>
</html>
<?php
?>