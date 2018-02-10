<html>
<head>
<script>
function validateForm2() 
{
var a = document.forms["signup"]["fname"].value;
var b = document.forms["signup"]["lname"].value;
var y = document.forms["signup"]["Username"].value;
var z = document.forms["signup"]["password"].value;
var d = document.forms["signup"]["password2"].value;
var c = document.forms["signup"]["id"].value;
var x = document.forms["signup"]["mobno"].value;
if (a == null || a == "")
{
alert("First Name must be filled out");
return false;
}
if (b == null || b == "")
{
alert("Last Name must be filled out");
return false;
}
if (y == null || y == "")
{
alert("Username must be filled out");
return false;
}
if (z == null || z == "")
{
alert("Password must be filled out");
return false;
}

if (d == null || d == "")
{
alert("You must confirm your Password");
return false;
}

if (c == null || c == "")
{
alert("Alternate Email must be filled out");
return false;
}
if (x == null || x == "")
{
alert("Mobile No. must be filled out");
return false;
}
}
function alert1()
{
	alert("Please login first");
}
</script>
<title>Sign Up</title>
<style>
body {
width: 900px;
margin-left: auto;
margin-right: auto;
}
#quick{
text-align: right;
}
h3 {
color: navy;
font-family: bookman old style;
text-align: center;
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
<center><form name="signup" method="post" action="signup.php" onsubmit="return validateForm2()">
<br>
<h3>Create your account</h3>
<br>
<table>
<tr>
<td><b>First Name:</b></td> <td><input type="text" placeholder="Enter First Name" name="fname"></td>
</tr>
<tr>
<td><b>Last Name:</b></td> <td><input type="text" placeholder="Enter Last Name" name="lname"></td>
</tr>
<tr>
<td><b>Create a username:</b></td> <td><input type="text" placeholder="Enter Username" name="Username"></td>
</tr>
<tr>
<td><b>Create a password:</b></td> <td><input type="password" placeholder="Enter Password" name="password"></td>
</tr>
<tr>
<td><b>Confirm password:</b></td> <td><input type="password" placeholder="Confirm your Password" name="password2"></td>
</tr>
<tr>
<td><b>Alternate Email address:</b></td> <td><input type="email" placeholder="abc@xyz.com" name="id"></td>
</tr>
<tr>
<td><b>Date of birth:</b></td>
<td><select name="date[]">
<option>DD</option>
<option>1</option><option>2</option>
<option>3</option><option>4</option>
<option>5</option><option>6</option>
<option>7</option><option>8</option>
<option>9</option><option>10</option>
<option>11</option><option>12</option>
<option>13</option><option>14</option>
<option>15</option><option>16</option>
<option>17</option><option>18</option>
<option>19</option><option>20</option>
<option>21</option><option>22</option>
<option>23</option><option>24</option>
<option>25</option><option>26</option>
<option>27</option><option>28</option>
<option>29</option><option>30</option>
<option>31</option></select>
<select name="month[]">
<option>MM</option>
<option>January</option><option>February</option>
<option>March</option><option>April</option>
<option>May</option><option>June</option>
<option>July</option><option>August</option>
<option>September</option><option>October</option>
<option>November</option><option>December</option>
</select>
<select name="Year[]">
<option>YYYY</option>
<option>1951</option><option>1952</option>
<option>1953</option><option>1954</option>
<option>1955</option><option>1956</option>
<option>1957</option><option>1958</option>
<option>1959</option><option>1960</option>
<option>1961</option><option>1962</option>
<option>1963</option><option>1964</option>
<option>1965</option><option>1966</option>
<option>1967</option><option>1968</option>
<option>1969</option><option>1970</option>
<option>1971</option><option>1972</option>
<option>1973</option><option>1974</option>
<option>1975</option><option>1976</option>
<option>1977</option><option>1978</option>
<option>1979</option><option>1980</option>
<option>1981</option><option>1982</option>
<option>1983</option><option>1984</option>
<option>1985</option><option>1986</option>
<option>1987</option><option>1988</option>
<option>1989</option><option>1990</option>
<option>1991</option><option>1992</option>
<option>1993</option><option>1994</option>
<option>1995</option><option>1996</option>
<option>1997</option><option>1998</option>
<option>1999</option><option>2000</option>
<option>2001</option><option>2002</option>
<option>2003</option><option>2004</option>
<option>2005</option><option>2006</option>
<option>2007</option><option>2008</option>
<option>2009</option><option>2010</option>
<option>2011</option><option>2012</option>
<option>2013</option><option>2014</option>
<option>2015</option></select></td>
</tr>
<tr>
<td><b>Mobile No. :</b></td> <td><input type="text" placeholder="Enter Mobile Number" name="mobno"></td>
</tr>
<tr></tr><tr></tr><tr></tr>
<tr>
<td></td><td><input type="checkbox" name="agreement">&nbsp <b>I agree to the <u>Terms of Use</u> & <u>Privacy Policy</u></b></td>
<tr>
<td></td> <td><input type="submit" value="Sign up" name = "sign"></td>
</tr>
</form></center>
<table
<?php
if(isset($_REQUEST['sign']))
{
$fn=$_REQUEST["fname"];
$ln=$_REQUEST["lname"];
$user=$_REQUEST["Username"];
$pass=$_REQUEST["password"];
$id1=$_REQUEST["id"];
$mob_no=$_REQUEST["mobno"];
$con=mysql_connect("localhost","root","paras") or die ("couldn't connect to server");
$db=mysql_select_db("signup",$con) or die("couldn't select database");
$query="insert new values('$fn','$ln','$user','$pass','$id1','$mob_no')";
$result=mysql_query($query) or die ("The Mobile Number you are using with is account is already in use...");
mysql_close($con);
echo "<br><br>Congratulations!!!!...Your account has been successfully created";
echo "<h4>Login to book online</h4>";
echo "<center><a href='login.php'><img src='login now.jpg'></a></center>";
}
?>
<br><br><br><br>
<div id="quick"><a href="index.php">Home</a> | <a href="about us.php">About Us</a> | <a href="signup.php" onClick="alert1()">Booking</a> | <a href="manage booking.php">Manage Booking</a> | <a href="contact us.php">Contact Us</a></div>
<hr>
<div id="follow"><font size="4" color=""><b>Follow us on:</b></font><br>
<img src="fb.png"> &nbsp <img src="google+.png"> &nbsp <img src="insta.png"> &nbsp <img src="twitter.png"></div>
<div id="footer">
Copyright &copy PVR Airways 2015 | Designed By: Paras Aggarwal, Vishabh Trehan and Rohan Dhawan. &nbsp &nbsp
</div></table>
</body>
</html>