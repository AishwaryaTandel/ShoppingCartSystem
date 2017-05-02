<?php
$name=$_REQUEST['name'];
$conn=mysqli_connect('localhost','root','','i1_db1_admin');

$result=mysqli_query($conn,"select * from product_details where Prod_name='$name'");

$row=mysqli_fetch_array($result);
if($row)
{
 
	$path=$row['Prod_img'];
	echo "<img src='$path' height=200 width=200'>"; 
    echo "<h4>PRODUCT NAME:".$row['Prod_name']."</h4>";
	echo "<h4>PRODUCT DESCRIPTION:".$row['Prod_desc']."</h4>";
	echo "<h4>PRODUCT TYPE:".$row['Prod_type']."</h4>";
	echo "<h4>BRAND TYPE:".$row['Brand_type']."</h4>";
	echo "<h4>PRODUCT COST:".$row['Cost']."</h4>";
	$nm=$row['Prod_name'];
	echo "<input type='button' name='$nm' class='button button5' value='ADD TO CART' onclick='check(this.name)'/>";
	echo "<div id='2'></div>";
}
?>

