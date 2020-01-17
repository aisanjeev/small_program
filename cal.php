<?php
include"header.html";

$user=$_REQUEST['user'];

$pass=$_REQUEST['pass'];

//$query="select * from user where name='$user' and pass='$pass'"
if($user=='sanjeev' & $pass=="admin")
{
	echo "Welcome ".$user;
}
else
{
	echo"<script>alert('Wrong Id and pass')</script>";
	
	//header('Location:index.php');
	
}


?>