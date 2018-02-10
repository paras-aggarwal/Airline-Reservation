<html>
<head>
<script>
function validateForm1() 
{
var x = document.forms["cancel"]["books"].value;
var y = document.forms["cancel"]["lname"].value;
if (x == null || x == "")
{
alert("Booking Reference must be filled out");
return false;
}
if (y == null || y == "")
{
alert("Last Name must be filled out");
return false;
}
}
</script>
<title>Manage booking</title>
<style>
h1 {
font-size: 36;
color: red;
font-family: cooper black;
text-align: center;
}
h3 {
color: navy;
font-family: bookman old style;
text-align: center;
}
body {
width: 900px;
margin-left: auto;
margin-right: auto;
}
#header {
&nbsp &nbsp
}
#footer {
color: white;
background-color: black;
text-align: center;
}
#log{
text-align: right;
}
#quick{
text-align: right;
}
#follow{
text-align: left;
}
#active{
color: black;
text-decoration: none;
}
</style>
<script>
function alert1()
{
	alert("Please login first");
}
</script>
</head>
<body bgcolor="#E6E6FA">
<h1><div id="header"><img src="take off.jpg"></div></h1>
<center><a href="index.php"><img src="home.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="about us.php"><img src="about.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="login.php"><img src="book.jpg" onClick="alert1()"></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="manage booking.php"><img src="manage booking.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="contact us.php"><img src="contact.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
</center>
<hr><br>
<center><h3>Manage your booking</h3></center>
<br><br><center>
<table>
<tr>
<form name="cancel" method="post" action="manage booking.php" onsubmit="return validateForm1()">
<td><b>Booking reference:</b></td><td><input type="text" Placeholder="Enter Booking ID" name="books"></td>
<td></td><td>(A Unique 6 Digit Booking ID Provided to You)</td>
</tr>
<tr>
<td><b>Last Name:</b></td><td><input type="text" placeholder="Enter Last Name" name="lname"></td>
</tr></table><br>
<form>
<center><input type="submit" value="CANCEL BOOKING" name="cancel">
</form></center>
<?php
if (isset($_REQUEST['cancel']))
{
$a=$_REQUEST["books"];
$b=$_REQUEST["lname"];
$con=mysql_connect("localhost","root","paras") or die ("couldn't connect to server");
$db=mysql_select_db("booking",$con) or die ("couldn't select database");
$query="delete from book where id=$a";
$result=mysql_query($query);
mysql_close($con);
$i="Your booking has been cancelled";
echo "<script>alert('$i')</script>";
}
echo "<br>";
?>
<br><br><br><br>
<br><br><br><br><br>
<div id="quick"><a href="index.php">Home</a> | <a href="about us.php">About Us</a> | <a href="manage booking.php" onClick="alert1()">Booking</a> | <a href="manage booking.php" id="active">Manage Booking</a> | <a href="contact us.php">Contact Us</a></div>
<hr>
<div id="follow"><font size="4" color=""><b>Follow us on:</b></font><br>
<img src="fb.png"> &nbsp <img src="google+.png"> &nbsp <img src="insta.png"> &nbsp <img src="twitter.png"></div>
<div id="footer">
Copyright &copy PVR Airways 2015 | Designed By: Paras Aggarwal, Vishabh Trehan and Rohan Dhawan. &nbsp &nbsp
</div>
</body>
</html>