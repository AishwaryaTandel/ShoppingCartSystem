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
<script>
function validate_email(email){
var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
 if (!reg.test(email)){
	alert("Email is invalid!!!"); }
 }
function validate_pass(nm){
var no=nm.length;
if(no<9){
	alert("Password length should be greater than 8!");
	}
}
function validate_cpass(pwd,cpwd){
//var pwd=document.getElementById('pwd');
//var cpwd=document.getElementById('cpwd');
if(pwd!=cpwd){
	alert("Both passwords are not matching!");
	}
}
function validate_num(num){
var no=num.length;
if(no!=10){
	alert("Contact no. should have 10 digits!");
	}
}
</script>
</head>
<body>
<center>
<div id='borderimg1'><h1>MyShoppingCart.com</h1></div><br><br><br>
<button class="button button5"><a href="i1_user1.php">HOME</a></button>
<button class="button button5"><a href="i1_index.html">ADMIN LOG IN</a></button>
<button class="button button5"><a href="signup.html">USER SIGN UP</a></button>
<br><br>
<?php
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$contact=$_POST['num'];
$dob=$_POST['dob'];
$pass=$_POST['pwd'];

$conn=mysqli_connect("localhost","root","","i1_db1_admin");
$sql="insert into user_reg(Name, Email, Contact, DOB, Password) values('$user_name','$email','$contact','$dob','$pass')";
$sql1="insert into user_login values('$user_name','$pass')";
if($user_name!='' && $email!='' && $contact!='' && $dob!='' && $pass!=''){
	if(mysqli_query($conn,$sql) && mysqli_query($conn,$sql1)){
		echo "<h2 style='text-align:center'>You have been registered successfully!</h2><br>";
		echo "<h2 style='text-align:center'>Click here to Log in!</h2>";
		echo "<a href='signup.html' style='text-decoration:none;'><h2 style='text-align:center'>LOG IN</h2></a>";
	}
	else echo "wrong!";
}
else{
	echo "<h2 style='text-align:center'>Enter details in each field!</h2>";
	}
?>
</center>
</body>
</html>