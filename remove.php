<?php
$cid=$_REQUEST['cid'];
$conn=mysqli_connect("localhost","root","","i1_db1_admin");
$sql="delete from cart where cid='$cid'";

if(mysqli_query($conn,$sql))
	echo "product removed from cart";
?>