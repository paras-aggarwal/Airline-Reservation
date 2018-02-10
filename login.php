<?php
session_start();
?>
<html>
<head>
<title> Log in </title>
<style>
body {
width: 900px;
margin-left: auto;
margin-right: auto;
}
h3 {
color: navy;
font-family: bookman old style;
text-align: center;
}
.small {
width: 350px;
margin-left: auto;
margin-right: auto;
}
#quick{
text-align: right;
}
#note{
font-family: comic sans ms;
}
#follow{
text-align: left;
}
#footer {
color: white;
background-color: black;
text-align: center;
}
</style>
<script>
function validateForm3()
{
	var u1 = document.login.uname.value;
var p1 = document.login.pass.value;
     if(u1=="")
	 {
		 alert("Username can't be blank");
	 }
	 
     if(p1=="")
	 {
		 alert("Password can't be blank");
	 }
}
function alert1()
{
	alert("please login first");
}
</script>
</head>
<body bgcolor="#E6E6FA">
<center><img src="PVR.jpg"></center><br>
<center><a href="index.php"><img src="home.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="about us.php"><img src="about.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="login.php"><img src="book.jpg" onClick="alert1()"></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="manage booking.php"><img src="manage booking.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="contact us.php"><img src="contact.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
</center>
<hr>
<br>
<form name="login" method="post" action="login.php" onSubmit="return validateForm3()">
<center><h3>You must login first</h3>
<div id="note"><font color="red">Please note once you logged In and try to go to another page, you will be automatically logged out...</font>
</div><br><br>
<table>
<tr>
<td><b>Username:</b></td> <td><input type="text" placeholder="Enter Username" name="uname"></td>
</tr>
<td><b>Password:</b></td> <td><input type="password" placeholder="Enter Password" name="pass"></td>
</tr></table><br>
<input type="submit" value="Log in" name="log"></center>
</form>
<div class="small"><hr></div>
<center>OR<br><br>
<a href=signup.php><img src="Create Account.jpg"></a>
<?php
if(isset($_REQUEST['log']))
{
$u=$_REQUEST['uname'];
$p=$_REQUEST['pass'];
$con=mysql_connect("localhost","root","paras") or die ("couldn't connect to server");
$db=mysql_select_db("signup",$con) or die ("couldn't select database");
$query="select * from new where user = '$u' and pass ='$p'";
$result=mysql_query($query) or die("query failed:".mysql_error());
$num = mysql_num_rows($result);
$q = "select fn from new where user='$u'";
$rs = mysql_query($q);
$a1=" ";
$a2 =" ";

	while($row = mysql_fetch_assoc($rs))
	{
		$a1 = $row['fn'];
	}
	if($num>0)
	{
		$_SESSION['fn'] = $a1;
		header("location:http://localhost/Airline%20Reservation%20System/bookings.php");
	}
	else
	{
			$a2="<br><br><b>Invalid Username or Password</b>";
	        echo '<font size="3" color="red">';
			echo "$a2";
			echo '</font>';
	}

	
mysql_close($con);
}
?>
<br><br><br><br><br><br><br><br>
<div id="quick"><a href="index.php">Home</a> | <a href="about us.php">About Us</a> | <a href="login.php" onClick="alert1()">Booking</a> | <a href="manage booking.php">Manage Booking</a> | <a href="contact us.php">Contact Us</a></div>
<hr>
<div id="follow"><font size="4" color=""><b>Follow us on:</b></font><br>
<img src="fb.png"> &nbsp <img src="google+.png"> &nbsp <img src="insta.png"> &nbsp <img src="twitter.png"></div>
<div id="footer">
Copyright &copy PVR Airways 2015 | Designed By: Paras Aggarwal, Vishabh Trehan and Rohan Dhawan. &nbsp &nbsp
</div>
</body>
</html>