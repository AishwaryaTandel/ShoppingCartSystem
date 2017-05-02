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
    padding: 16px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 10px 10px;
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
<button class="button button5"><a href="i1_index.html">ADMIN LOG IN</a></button>
<button class="button button5"><a href="i1_userregister.html">USER REGISTRATION</a></button>
<button class="button button5"><a href="signup.html">USER SIGN UP</a></button>
<button class="button button5"><a href="cameradisplay.php">CAMERA CATEGORY</a></button>
<button class="button button5"><a href="mobiledisplay.php">MOBILE CATEGORY</a></button>
<br><br><br>
<?php
session_start();
unset($_SESSION['adminname']);
unset($_SESSION['adminpass']);
session_destroy();
echo "<h1>Logged out successfully!</h1>";
?>
</body>
</center>
</body>
</html>