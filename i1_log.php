<?php
session_start();
$name=$_REQUEST['name'];
$pass=$_REQUEST['pass'];
$conn=mysqli_connect('localhost','root','','i1_db1_admin');
$sql="select * from info where Name='$name' and Password='$pass'";
$result=mysqli_query($conn,$sql);
if(!mysqli_num_rows($result))
	{
		echo "<BR><BR><p style='color:red'><b>You are not a valid user admin!!!</b></p>";
	}
else
	echo "Go ahead";
    $_SESSION['adminname']=$name;
    $_SESSION['adminpass']=$pass;
?>