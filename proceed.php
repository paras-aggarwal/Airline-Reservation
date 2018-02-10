<html>
<body>
<?php
$m=$_REQUEST["fn"];
$n=$_REQUEST["ln"];
$con=mysql_connect("localhost","root","paras") or die ("couldn't connect to server");
$db=mysql_select_db("booking",$con) or die ("couldn't select database");
$query="insert book(fname,lname) values('$m','$n')";
$result=mysql_query($query);
$q1="select id from book where fname='$m'";
$r1=mysql_query($q1);
if($r1==FALSE)
{
die(mysql_error());
}
while($row = mysql_fetch_array($r1))
{
$i="Your booking ID is:";
$j=$row['id'];
echo "<script>alert('$i$j')</script>";
echo "<br>";
}
mysql_close($con);
?>
</body>
</html>