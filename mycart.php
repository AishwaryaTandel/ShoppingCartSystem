<html>
<head>
<style>
body  {
    background-image: url("paper.jpg");
   }

#borderimg1 { 
    border: 10px solid transparent;
    padding: 15px;
    border-image-source: url(circle.png);
    border-image-repeat: round;
    border-image-slice: 30;
    border-image-width: 10px;        
}

.button {
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 10px 20px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
	border-radius: 12px;
}

.button5:hover {
    background-color: #555555;
    color: white;
	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
a{
	text-decoration:none;
	color: 000000;
}
#admindiv{
	height:400; 
	width:425; 
	border:4px; 
	border-style:solid;
	border-radius: 10px;
	font-size: 20px;
}
</style>
<script>
function remove1(cid1)
{
	var http=new XMLHttpRequest();
	http.open("POST","remove.php?cid="+cid1,"true");
	http.send();
	http.onreadystatechange=function(){
		if(http.readyState==4){
			var res=http.responseText;
		}
	}
}
</script>
</head>
<body>
<center>
<div id='borderimg1'><h1>MyShoppingCart.com</h1></div><br>
<button class="button button5"><a href="i1_user1.php">HOME</a></button>
<button class="button button5"><a href="i1_index.html">ADMIN LOG IN</a></button>
<button class="button button5"><a href="logout.php">USER LOG OUT</a></button>
<br><br>
<?php
$conn=mysqli_connect("localhost","root","","i1_db1_admin");
$sql="select* from cart";
$result=mysqli_query($conn,$sql);
$c=0;
echo "<form action='payment.html' method='post'>";
echo "<table>";
while($row=mysqli_fetch_array($result))
{
	$path=$row['Prod_img'];
	$pname=$row['Prod_name'];
	$ptype=$row['Prod_type'];
	$btype=$row['Brand_type'];
	$pdesc=$row['Prod_desc'];
	$cost=$row['Cost'];
	$cid=$row['cid'];
	$c=$c+$cost;
	echo "<tr>";
	echo "<td>";
	echo "<img src='$path' alt='Image not available!' height=200 width=200>";
	echo "</td>";
	echo "<td>";
	echo "PRODUCT NAME :   ".$pname."<br>";
	echo "PRODUCT TYPE :   ".$ptype."<br>";
	echo "BRAND TYPE :   ".$btype."<br>";
	echo "PRODUCT DESCRIPTION :   ".$pdesc."<br>";
	echo "PRODUCT COST :   ".$cost."<br>";
	echo "<input type='button' value='REMOVE FROM CART' name='$cid' style='float:right' onclick=remove1(this.name)>";
	echo "</td>";
	echo "</tr>";	
}
echo "</table>";
echo "<div style='height:60; width:320; border:1px; border-style:solid;'";
echo "<p>TOTAL BILL  :</p>".$c;
ECHO "</div>";
echo "<input type='submit' class='button button5' value='PROCEED TO PAYMENT >>' style='float:right'>"; 
echo "</form>";
$_SESSION['pi']=$row['Prod_img'];
$_SESSION['pn']=$row['Prod_name'];
$_SESSION['pt']=$row['Prod_type'];
$_SESSION['bt']=$row['Brand_type'];
$_SESSION['pd']=$row['Prod_desc'];
$_SESSION['c']=$row['Cost'];
$_SESSION['cid']=$row['cid'];
?>
</center>
</body>
</html>