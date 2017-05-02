<?php
session_start();
if(isset($_SESSION['pwd']))
{
	$name=$_REQUEST['name'];
	$conn=mysqli_connect("localhost","root","","i1_db1_admin");
	$sql="select * from product_details where Prod_name='$name'";
	$result=mysqli_query($conn,$sql);
	if($row=mysqli_fetch_array($result))
	{
		$ptype=$row['Prod_type'];
		$btype=$row['Brand_type'];
		$pdesc=$row['Prod_desc'];
		$cost=$row['Cost'];
		$path=$row['Prod_img'];
		$sql1="insert into cart(Prod_name, Prod_type, Brand_type, Prod_desc, Cost, Prod_img) values('$name','$ptype','$btype','$pdesc',$cost,'$path')";
		if(mysqli_query($conn,$sql1)){
			echo "<p style='color:red'><b>Product has been added to the cart!</b></p>";
		}
	}
}
else
	echo "<p style='color:red'><b>Login please!!!</b></p>";

?>