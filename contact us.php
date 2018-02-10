<html>
<head>
<title>Conatct Us</title>
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
#quick{
text-align: right;
}
#active{
color: black;
text-decoration: none;
}
#follow{
text-align: left;
}
#header {
&nbsp &nbsp
}
#footer {
color: white;
background-color: black;
text-align: center;
}
.small {
width: 400px;
margin-left: auto;
margin-right: auto;
}
</style>
</head>
<script>
function alert1()
{
alert("Thankyou for giving us your feedback\nWe will contact you soon...")
}
function alert2()
{
	alert("Please login first");
}
</script>
<body bgcolor="#E6E6FA">
<h1><div id="header"><img src="take off.jpg"></div></h1>
<center><a href="index.php"><img src="home.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="about us.php"><img src="about.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="login.php"><img src="book.jpg" onClick="alert2()"></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="manage booking.php"><img src="manage booking.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="contact us.php"><img src="contact.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
</center>
<hr>
<br>
<h3>Leave a message for us.</h3>
<br>
<center>
<form method="post" name="feedback">
<table>
<tr>
<td><b>Name:</b></td>
<td><input type="text" placeholder="Enter your Name" name="name"></td>
</tr>
<tr>
<td><b>Mobile:</b></td>
<td><input type="text" placeholder="Enter Mobile Number" name="mob"></td>
</tr>
<tr>
<td><b>E-mail:</b></td>
<td><input type="text" placeholder="Enter your E-mail" name="mail"></td>
</tr>
<tr>
<td><b>Feedback:</b></td>
<td><textarea rows="5" placeholder="Enter your Feedback" cols="22">
</textarea>
</tr>
</table>
</center>
<center><form>
<input type="submit" value="SUBMIT" onclick="alert1()">
</form></center>
<div class="small"><hr></div>
<center><h3>Contact Us</h3></center>
<center><table>
<tr><td>+919992011441</td> <td>&nbsp &nbsp &nbsp parasaggarwal015@gmail.com</td>
</tr>
<tr><td>+919467015841</td> <td>&nbsp &nbsp &nbsp rohandhawan97@gmail.com</td>
</tr>
<tr><td>+917206746436</td> <td>&nbsp &nbsp &nbsp trehan.vishabh8@gmail.com</td></center>
</table>
<br>
<div id="quick"><a href="index.php">Home</a> | <a href="about us.php">About Us</a> | <a href="contact us.php" onClick="alert2()">Booking</a> | <a href="manage booking.php">Manage Booking</a> | <a href="contact us.php" id="active">Contact Us</a></div>
<hr>
<div id="follow"><font size="4" color=""><b>Follow us on:</b></font><br>
<img src="fb.png"> &nbsp <img src="google+.png"> &nbsp <img src="insta.png"> &nbsp <img src="twitter.png"></div>
<div id="footer">
Copyright &copy PVR Airways 2015 | Designed By: Paras Aggarwal, Vishabh Trehan and Rohan Dhawan. &nbsp &nbsp
</div>
</body>
</html>