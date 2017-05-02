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
#paymentdiv{
	height:425; 
	width:425; 
	border:4px; 
	border-style:solid;
	border-radius: 10px;
	font-size: 20px;
}
</style>
</head>
<body>
<center>
<div id='borderimg1'><h1>MyShoppingCart.com</h1></div><br>
<button class="button button5"><a href="i1_user1.php">HOME</a></button>
<button class="button button5"><a href="logout.php">USER LOG OUT</a></button>
<br><br>
<?php
session_start();
if($_POST['code']==$_SESSION['vercode'])
{
	echo "<br><h2 style='color:red; text-align:center' >Verification successful!!!</h2><br>";
}
else
{
	echo "<br><h2 style='color:red; text-align:center' >Invalid code!!! Payment unsuccessfull!</h2><br>";
}
?>
</center>
</body>
</html>