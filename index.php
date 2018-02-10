<html>
<head>
<title>Airlines reservation system</title>
<style>
h1 {
font-size:100;
color: red;
font-family:Broadway;
}
marquee {
font-family: comic sans ms;
}
#quick{
text-align: right;
}
#follow{
text-align: left;
}
header {
&nbsp &nbsp
text-align: left;
}
u{
font-size: 18;
color: navy;
font-family: bookman old style;
text-align: center;
}
#active{
color: black;
text-decoration: none;
}
#container {
text-align: center;
}
#footer {
color: white;
background-color: black;
text-align: center;
}
</style>
</head>
<body bgcolor="#E6E6FA">
<header>&nbsp <img src="PVR.jpg">
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp 
<a href="login.php"><img src="login.jpg"></a> &nbsp &nbsp
<a href="signup.php"><img src="signup.jpg"></a></header>
<script type = "text/javascript">
          function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              document.getElementById("img").src = images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              document.getElementById("img").src = images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }

          var images = [], x = -1;
          images[0] = "3.jpg";
          images[1] = "8.jpg";
          images[2] = "2.jpg";
		  function alert1()
		  {
			    alert("Please login first");
		  }
</script>

<body onload = "startTimer()">
<table>

        <tr>
                        <td>
                        <img id="img" src="3.jpg"height="420" width="1330">


                </td>
        </tr>
</table>
<center><marquee direction="left"><b>Welcome to the PVR Airways </b></marquee><br><br></center>
<center>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="index.php"><img src="home.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="about us.php"><img src="about.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="login.php"><img src="book.jpg" onClick="alert1()"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="manage booking.php"><img src="manage booking.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="contact us.php"><img src="contact.jpg"></a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
</center>
<hr>
<br><br><br><br>
<center>
<b><u>Weekend offer get 15% off on flight tickets to Colombo, Paris, Hawaii</u></b><br><br>
<a href="index.php" onClick="alert1()"><img src="colombo.jpg"> <img src="tower.jpeg"> <img src="hawai.jpg"><br><br></a>
<b><u>Special offer for extra baggage</u></b><br> 
<p><b>Now your can carry 4 bags instead of 3</b></p>
<img src="baggage.jpg"> <img src="baggage1.jpg"><br>
<br>
<b><u>Now cancel your booking within 24 hours at no extra cost</u><b></center><br>
<center><a href="manage booking.php"><img src="cancellation.jpg"></a></center>
<br>
<div id="quick"><a href="index.php" id="active">Home</a> | <a href="about us.php">About Us</a> | <a href="index.php" onClick="alert1()">Booking</a> | <a href="manage booking.php">Manage Booking</a> | <a href="contact us.php">Contact Us</a></div>
<hr><div id="follow"><font size="4" color=""><b>Follow us on:</b></font><br>
<img src="fb.png"> &nbsp <img src="google+.png"> &nbsp <img src="insta.png"> &nbsp <img src="twitter.png"></div>
<br><div id="footer">
Copyright &copy PVR Airways 2015 | Designed By: Paras Aggarwal, Vishabh Trehan and Rohan Dhawan. &nbsp &nbsp
</div>
</body>
</html>