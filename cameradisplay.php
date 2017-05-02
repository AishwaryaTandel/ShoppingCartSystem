<html>
<script>
function abc(nm)
{
	var http;
    http=new XMLHttpRequest();
	http.open("POST","desc.php?name="+nm,true);
	http.send();
	
	http.onreadystatechange=function(){
		if(http.readyState == 4) {
         var response=http.responseText;
		 document.getElementById('big').innerHTML= response;
		}
	}	
}
function check(nm){
	var http;
	http=new XMLHttpRequest();
	http.open("POST","addtocart.php?name="+nm,"true");
	http.send();
	http.onreadystatechange=function(){
		if(http.readyState==4){
			var res=http.responseText;
			document.getElementById('2').innerHTML=	res;
			if(res=="<p style='color:red'><b>Product has been added to the cart!</b></p>"){
			document.getElementById('mycart').innerHTML="<button class='button button5'><a href='mycart.php'>MY CART</a></button>";
			}
		}
	}	
}	
</script>
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

#productdiv{
	height:200; 
	width:200; 
	border:4px; 
	border-style:solid;
	border-radius: 10px;
	float:left;
	margin: 40px;
}
#big{
	border:4px; 
	border-style:solid;
	border-radius: 10px;
	align:center;
}
#pagination{
	border: 2px solid #555555;
	border-radius: 12px;
	margin-top:300px;
	clear:both;
}
</style>
<body>
<center>
<div id='borderimg1'><h1>MyShoppingCart.com</h1></div><br><br><br>
<button class="button button5"><a href="i1_user1.php">HOME</a></button>
<button class="button button5"><a href="i1_index.html">ADMIN LOG IN</a></button>
<button class="button button5"><a href="signup.html">USER SIGN UP</a></button>
<button class="button button5"><a href="i1_userregister.html">USER REGISTRATION</a></button>
<button class="button button5"><a href="mobiledisplay.php">MOBILE CATEGORY</a></button>
<span id='mycart'></span><br><br><br><br>
<div id="big">
<?php
$conn=mysqli_connect('localhost','root','','i1_db1_admin');
@$page=$_GET['page'];

if($page=='' || $page=="1")
{
	$page1=0;
}
else
	$page1=($page*5)-5;

$result1=mysqli_query($conn,"select * from product_details where Prod_type='DIGITAL CAMERA' OR Prod_type='DSLR'");
$result=mysqli_query($conn,"select * from product_details where Prod_type='DIGITAL CAMERA' OR Prod_type='DSLR' LIMIT $page1,5");
$pages_query=mysqli_num_rows($result1);
$pages=$pages_query/5;
$pages=ceil($pages);

while($row=mysqli_fetch_array($result))
{
	echo "<div id='productdiv'>"; 
	$path=$row['Prod_img'];
	$nm=$row['Prod_name'];
	
	echo "<img src='$path' name='$nm' style='height:140; width:200;' onclick='abc(this.name)'><br><br><br>"; 
	echo "<b>".$row['Prod_name']."</b>";
	echo "</div>";	
}

echo "<div id='pagination'>";

$prev=$page-1;
$next=$page+1;
if(!($page<=1)){
	echo "<a href='cameradisplay.php?page=$prev'>Prev &nbsp;&nbsp;&nbsp;</a>";
}
if($pages>=1){
	for($x=1;$x<=$pages;$x++){

		echo ($x == $page) ?  "<font style='font-size:30px'>&nbsp;&nbsp;&nbsp;<a href='?page=".$x."'>".$x."&nbsp;&nbsp;&nbsp;</a></font>" : "&nbsp;&nbsp;&nbsp;<a href='?page=".$x."'>".$x."&nbsp;&nbsp;&nbsp;</a> ";	
	}	
}
if(!($page>=$pages)){
	echo "&nbsp;&nbsp;&nbsp;<a href='cameradisplay.php?page=$next'>Next &nbsp;&nbsp;&nbsp;</a >";
}
echo "</div>";
?>
</div>
</center>
</body> 