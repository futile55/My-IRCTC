<html><body bgcolor="white">
<title>Login</title>

<table border=3 width="100%" bgcolor="black" bordercolor="white"><tr><td>
<center>
<font color="white" face="Cambria" size="6.5px" ><b>Indian Railway Catering and Tourism Corporation Limited</b></font><br>
</td></tr></table>
<center><font color="black" face="Cambria" size="5" ><b>A Government of India Enterprise</b></font>
<br><font face="cambria" color="green" size="5" align="right">
<hr>
<marquee behavior="alternate" direction="left"  scrollamount="4" onmouseover="stop()" onmouseout="start()">
<img src="im1.jpeg" height="35%" width="23%" title="E-Catering Services">
<img src="im2.jpeg" height="35%" width="23%" title="Rail-Tour Package">
<img src="im3.jpeg" height="35%" width="23%" title="Fly with IRCTC">
<img src="im4.jpeg" height="35%" width="23%" title="Snapdeal : Dil ki Deal">
<img src="im5.jpeg" height="35%" width="23%" title="McDonalds : Book Food">
<img src="im6.jpeg" height="35%" width="23%" title="FTR-Coach/Train Booking">
<img src="im7.jpeg" height="35%" width="23%" title="Air India">
<img src="im8.jpeg" height="35%" width="23%" title="Maharajas' Express">
<img src="im9.gif" height="35%" width="23%" title="Radio Cabs">
<img src="im1.jpeg" height="35%" width="23%" title="E-Catering Services">
<img src="im2.jpeg" height="35%" width="23%" title="Rail-Tour Package">
<img src="im3.jpeg" height="35%" width="23%" title="Fly with IRCTC">
<img src="im4.jpeg" height="35%" width="23%" title="Snapdeal : Dil ki Deal">
<img src="im5.jpeg" height="35%" width="23%" title="McDonalds : Book Food">
<img src="im6.jpeg" height="35%" width="23%" title="FTR-Coach/Train Booking">
<img src="im7.jpeg" height="35%" width="23%" title="Air India">
<img src="im8.jpeg" height="35%" width="23%" title="Maharajas' Express">
<img src="im9.gif" height="35%" width="23%" title="Radio Cabs">

</marquee><hr>

<?php
session_start();
$x=$_POST['x'];
$y=$_POST['y'];

if(empty($x) || empty($y))
echo "Data Incomplete.!!";
else 
{
	mysql_connect("localhost","root","");
	mysql_select_db("irctc");
	$q="SELECT * FROM users where name='$x' and password='$y'";	
	$result=mysql_query($q);
	$count=mysql_num_rows($result);
		if($count==0)
			echo "No Records found.!!";
		else
			{
			$_SESSION['name']=$x;
			header ("location:welcome.php");
			}
}		
?>