<?php
include("db_connect.php");

if(isset($_POST['confirm'])){
	$id_code =$_POST['id_code'];
 
	$sel="SELECT * FROM registration WHERE id_code='$id_code'";
	$res=$conn->query($sel);
	if($res->num_rows > 0){
		while ($row=$res->fetch_assoc()){
			$_SESSION['id_code']=$row['id_code'];
			$_SESSION['parent_name']=$row['parent_name'];
			$_SESSION['phone']=$row['phone'];
			$_SESSION['child_name']=$row['child_name'];
			$_SESSION['bank_name']=$row['bank_name'];
			$_SESSION['account_name']=$row['account_name'];
			$_SESSION['account_number']=$row['account_number'];
			$_SESSION['account_type']=$row['account_type'];
		}
		echo "<script> alert('Account has been registered')</script>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{
    font-family:Chicle-Regular;
    src: url("fonts/Chicle-Regular.ttf") format("truetype");
}
*{
    font-family:Chicle-Regular;
}
body{
    margin:0px;
    padding:0px;
    box-sizing:border-box;
}
.loader-wrapper{
    width:30%;
    height:auto;
    border:hidden;
    display:flex;
    flex-direction:column;
    margin:10% auto;
}
.image-wrapper{
    border:hidden;
    width:100%;
    height:300px;
}
.image-wrapper img{
    width:100%;
    height:100%;
}
.content-wrapper{
    border:hidden;
    width:100%;
}
h1{
    text-align:center;
    color:#57b846;
    text-shadow:1px 0px 1px white;
}
@media (max-width:320px){
 .loader-wrapper{
    width:100%;
    border:hidden;
 }   
}
@media (min-width:320px) and (max-width:375px){
 .loader-wrapper{
    width:100%;
    border:hidden;
 }   
}
@media (min-width:375px) and (max-width:425px){
 .loader-wrapper{
    width:100%;
    border:hidden;
 }   
}
@media (min-width:425px) and (max-width:768px){
 .loader-wrapper{
    width:90%;
    border:hidden;
 }  
 h1{
    text-align:center;
    color:#57b846;
    font-size:9vw;
} 
}
@media (min-width:768px) and (max-width:1024px){
 .loader-wrapper{
    width:80%;
    border:hidden;
    margin:5% auto;
}  
.image-wrapper{
    height:500px;
}
 h1{
    text-align:center;
    color:#57b846;
    font-size:6vw;
    line-height:.6;
} 
}
</style>
</head>
<body>
<div class="loader-wrapper">
    <div class="image-wrapper">
        <img src="image/load.gif">
    </div>
    <div class="content-wrapper">
    <h1>Account has been registered !</h1>
    </div>
</div>
</body>
</html>
<?php
header("refresh:1.8;landing.php");
	}else{
		echo "<script> alert('Account not valid')</script>";
		header("refresh:2;confirm_code.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
@font-face{
    font-family:Chicle-Regular;
    src: url("fonts/Chicle-Regular.ttf") format("truetype");
}
*{
    font-family:Chicle-Regular;
}
body{
    margin:0px;
    padding:0px;
    box-sizing:border-box;
}
.loader-wrapper{
    width:30%;
    height:auto;
    border:hidden;
    display:flex;
    flex-direction:column;
    margin:10% auto;
}
.image-wrapper{
    border:hidden;
    width:100%;
    height:300px;
}
.image-wrapper img{
    width:100%;
    height:100%;
}
.content-wrapper{
    border:hidden;
    width:100%;
}
h1{
    text-align:center;
    color:#EB2323;
    text-shadow:1px 0px 1px white;
}
@media (max-width:320px){
 .loader-wrapper{
    width:100%;
    border:hidden;
 }   
}
@media (min-width:320px) and (max-width:375px){
 .loader-wrapper{
    width:100%;
    border:hidden;
 }   
}
@media (min-width:375px) and (max-width:425px){
 .loader-wrapper{
    width:100%;
    border:hidden;
 } 
  h1{
    text-align:center;
    color:#EB2323;
    font-size:10vw;
}   
}
@media (min-width:425px) and (max-width:768px){
 .loader-wrapper{
    width:90%;
    border:hidden;
 }  
 h1{
    text-align:center;
    color:#EB2323;
    font-size:9vw;
} 
}
@media (min-width:768px) and (max-width:1024px){
 .loader-wrapper{
    width:80%;
    border:hidden;
    margin:5% auto;
}  
.image-wrapper{
    height:500px;
}
 h1{
    text-align:center;
    color:#EB2323;
    font-size:6vw;
    line-height:.6;
} 
}
</style>
</head>
<body>
<div class="loader-wrapper">
    <div class="image-wrapper">
        <img src="image/fake.png">
    </div>
    <div class="content-wrapper">
    <h1>Invalid Account / code !</h1>
    </div>
</div>
</body>
</html>
<?php
}
}
?>