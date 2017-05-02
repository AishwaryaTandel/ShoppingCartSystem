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
</style>
</head>
<body>
<center>
<div id='borderimg1'><h1>MyShoppingCart.com</h1></div><br><br><br>
<button class="button button5"><a href="i1_user1.php">HOME</a></button>
<button class="button button5"><a href="cameradisplay.php">CAMERA CATEGORY</a></button>
<button class="button button5"><a href="mobiledisplay.php">MOBILE CATEGORY</a></button>
<button class="button button5"><a href="i1_adminlogout.php">ADMIN LOG OUT</a></button>
<br><br><br>
<?php
$pname=$_REQUEST['pname'];
$city=$_REQUEST['city'];
$ptype=$_REQUEST['ptype'];
$btype=$_REQUEST['btype'];
$img = "images/". $_FILES['file']['name'];
$pdesc=$_REQUEST['pdesc'];
$cost=$_REQUEST['cost'];
	
if($pname!='' && $city!='' && $ptype!='' && $btype!='' && $pdesc!='' && $img!='' && $cost!=''){
if((($_FILES["file"]["type"]=="image/gif")||($_FILES["file"]["type"]=="image/jpeg")||($_FILES["file"]["type"]=="image/png"))&&($_FILES["file"]["size"]<30000)){
	//$_FILES["file"]["name"];
	//$_FILES["file"]["tmp_name"];
	
	move_uploaded_file($_FILES["file"]["tmp_name"],"images/".$_FILES["file"]["name"]);
}
	$conn=mysqli_connect('localhost','root','','i1_db1_admin');
$sql="insert into product_details(Prod_name, City, Prod_type, Brand_type, Prod_desc, Cost, Prod_img) values('$pname','$city','$ptype','$btype','$pdesc',$cost,'$img')";
if(mysqli_query($conn,$sql)){
	echo "<h2>Product details inserted successfully!</h2><h2><a href='i1_addproduct.html'>Add another product</a></h1>";
}
}
else
	echo "<h2>Enter details of product in each field!</h2>";
?>
</body>
</center>
</body>
</html>