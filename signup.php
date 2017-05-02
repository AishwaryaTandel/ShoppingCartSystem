<?php
session_start();
$name=$_REQUEST['name'];
$pwd=$_REQUEST['pwd'];

$conn=mysqli_connect("localhost","root","","i1_db1_admin");
$sql="select * from user_login where Name='$name' and Password='$pwd'";

$_SESSION['nm']=$name;
$_SESSION['pwd']=$pwd;

$result=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($result))
{
	echo "You are logged in!Go to home option!";
}
else
{
		echo "You are not a valid user! Please register!";
}

?>