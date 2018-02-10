<?php
session_start();
?>
<html>
<head>
<script>
function validateForm() 
{
var x = document.forms["book"]["fn"].value;
var y = document.forms["book"]["ln"].value;
var z = document.forms["book"]["address"].value;
var a = document.forms["book"]["passengers"].value;
if (x == null || x == "")
{
alert("First Name must be filled out");
return false;
}
if (y == null || y == "")
{
alert("Last Name Name must be filled out");
return false;
}
if (z == null || z == "")
{
alert("Address must be filled out");
return false;
}
if (a == null || a == "")
{
alert("Passengers Number must be filled out");
return false;
}
}
</script>
<title>Bookings</title>
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
#follow{
text-align: left;
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
marquee {
color: red;
font-family: comic sans ms;
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
</style>
</head>
<body bgcolor="#E6E6FA"><center><b><blink><font color="red"><?php echo "Welcome  ".$_SESSION['fn'];?></font></blink></b></center>
<h1><div id="header"><img src="take off.jpg"></div></h1>
<center><a href="index.php"><img src="home.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="about us.php"><img src="about.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="bookings.php"><img src="book.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="manage booking.php"><img src="manage booking.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="contact us.php"><img src="contact.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
</center>
<hr><br>
<h3>You need to provide some information to book.</h3>
<marquee direction="left">Note:- This information will not be shared with any other person so be relaxed, The information you are providing will remains confidential.</marquee>
<br><br>
<form name="book" method="post" action="proceed.php" onsubmit="return validateForm()">
<center><table>
<b>Return Way</b><input type="radio" name="ticket" value="Return Way"> &nbsp &nbsp <b>One Way</b><input type="radio" name="ticket" value="One Way">
<br><br>
<tr>
<td><b>First Name:</b></td>
<td><input type="text" placeholder="Enter First Name" name="fn"></td>
</tr>
<tr>
<td><b>Last Name:</b></td>
<td><input type="text" placeholder="Enter Last Name" name="ln"></td>
</tr>
<tr>
<td><b>Permanent Address:</b></td>
<td><textarea rows="2" cols="22" name="address" placeholder="Enter your Address"></textarea>
</tr>
<tr>
<td><b>Choose your class:</b></td>
<td><select name="class[]">
<option>- - - - - - -</option>
<option>First Class</option>
<option>business Class</option>
<option>Economy Class</option>
</select></td>
</tr>
<tr>
<td><b>Journey from:</b></td>
<td><select name="from[]">
<option>-Select-</option>
<option>Abu Dhabi</option>
<option>Agartala</option>
<option>Atlanta</option>
<option>Aukland</option>
<option>Baghdad</option>
<option>Bangaluru</option>
<option>Barcelona</option>
<option>Beijing</option>
<option>Birmingham</option>
<option>Brisbane</option>
<option>Calgary</option>
<option>Chandigarh</option>
<option>Chennai</option>
<option>Chicago</option>
<option>Colombo</option>
<option>Columbia</option>
<option>Columbus</option>
<option>Dhaka</option>
<option>Delhi</option>
<option>Denver,CO</option>
<option>Dubai</option>
<option>Goa</option>
<option>Gujrat</option>
<option>Gorakhpur</option>
<option>Hawaii</option>
<option>Ho Chi Minh City</option>
<option>Hong kong</option>
<option>Istanbul</option>
<option>Jackson</option>
<option>Jammu</option>
<option>Kathmandu</option>
<option>Kolkata</option>
<option>Lucknow</option>
<option>London</option>
<option>Manchester</option>
<option>Melbourne</option>
<option>Midland Odessa</option>
<option>Mumbai</option>
<option>New Orleans</option>
<option>North America</option>
<option>Oakland</option>
<option>Orlando</option>
<option>Paris</option>
<option>Perth</option>
<option>Portland</option>
<option>Pune</option>
<option>Ranchi</option>
<option>San Deigo</option>
<option>San Francisco</option>
<option>Shanghai</option>
<option>Singapore</option>
<option>Srinagar</option>
<option>South Africa</option>
<option>Sydney</option>
<option>Switzerland</option>
<option>South America</option>
<option>Tehran</option>
<option>Tokyo</option>
<option>Tokyo,Narita</option>
<option>Varanasi</option>
<option>Washington DC, Dulles</option>
<option>Washington DC, Reagon</option>
</select>
</tr>
<tr>
<td><b>Journey to:</b></td>
<td><select name="to[]">
<option>-Select-</option>
<option>Abu Dhabi</option>
<option>Agartala</option>
<option>Atlanta</option>
<option>Aukland</option>
<option>Baghdad</option>
<option>Bangaluru</option>
<option>Barcelona</option>
<option>Beijing</option>
<option>Birmingham</option>
<option>Brisbane</option>
<option>Calgary</option>
<option>Chandigarh</option>
<option>Chennai</option>
<option>Chicago</option>
<option>Colombo</option>
<option>Columbia</option>
<option>Columbus</option>
<option>Dhaka</option>
<option>Delhi</option>
<option>Denver,CO</option>
<option>Dubai</option>
<option>Goa</option>
<option>Gujrat</option>
<option>Gorakhpur</option>
<option>Ho Chi Minh City</option>
<option>Hong kong</option>
<option>Istanbul</option>
<option>Jackson</option>
<option>Jammu</option>
<option>Kathmandu</option>
<option>Kolkata</option>
<option>Lucknow</option>
<option>London</option>
<option>Manchester</option>
<option>Melbourne</option>
<option>Midland Odessa</option>
<option>Mumbai</option>
<option>New Orleans</option>
<option>North America</option>
<option>Oakland</option>
<option>Orlando</option>
<option>Perth</option>
<option>Portland</option>
<option>Pune</option>
<option>Ranchi</option>
<option>San Deigo</option>
<option>San Francisco</option>
<option>Shanghai</option>
<option>Singapore</option>
<option>Srinagar</option>
<option>South Africa</option>
<option>Sydney</option>
<option>Switzerland</option>
<option>South America</option>
<option>Tehran</option>
<option>Tokyo</option>
<option>Tokyo,Narita</option>
<option>Varanasi</option>
<option>Washington DC, Dulles</option>
<option>Washington DC, Reagon</option>
</select>
</tr>
<tr>
<td><b>Number of passengers</b></td><td><textarea rows="2" cols="22" placeholder="Enter Passenger Number" name="passengers"></textarea></td>
</tr>
<td><b>Departure Date:</b></td>
<td><select name="ddate[]">
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
<select name="dmonth[]">
<option>MM</option>
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>December</option></select>
<select name="dyear[]">
<option>2015</option>
<option>2016</option>
</select>
<tr>
<td><b>Return Date:</b></td>
<td><select name="rdate[]">
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
<select name="rmonth[]">
<option>MM</option>
<option>January</option>
<option>February</option>
<option>March</option>
<option>April</option>
<option>May</option>
<option>June</option>
<option>July</option>
<option>August</option>
<option>September</option>
<option>October</option>
<option>November</option>
<option>December</option></select>
<select name="ryear[]">
<option>2015</option>
<option>2016</option>
</select></td>
</tr>
</table>
<br></center>
<center><input type="submit" value="Submit" name="book"></center>
</form><br>
<div id="quick"><a href="index.php">Home</a> | <a href="about us.php">About Us</a> | <a href="bookings.php" id="active">Booking</a> | <a href="manage booking.php">Manage Booking</a> | <a href="contact us.php">Contact Us</a></div>
<hr>
<div id="follow"><font size="4" color=""><b>Follow us on:</b></font><br>
<img src="fb.png"> &nbsp <img src="google+.png"> &nbsp <img src="insta.png"> &nbsp <img src="twitter.png"></div>
<div id="footer">
Copyright &copy PVR Airways 2015 | Designed By: Paras Aggarwal, Vishabh Trehan and Rohan Dhawan. &nbsp &nbsp
</div>
</body>
</html>