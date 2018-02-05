<html><body bgcolor="white">
<title>Cancellations</title>

<table border=3 width="100%" bgcolor="black" bordercolor="white"><tr><td>
<center>
<font color="white" face="Cambria" size="6.5px" ><b>Indian Railway Catering and Tourism Corporation Limited</b></font><br>
</td></tr></table>
<center><font color="black" face="Cambria" size="5" ><b>A Government of India Enterprise</b></font>
<br><font face="cambria" color="green" size="5" align="right">
<?php
	session_start();
if(isset($_SESSION['name']))
{
	echo "Welcome ";
	echo strtoupper($_SESSION['name']);
	echo " ,  Click here to ";
}
else
	header("location:index.html");
echo "<a href='logout.php'>Logout</a>";
?>
<style type="text/css">
   body{padding:20px; font-size:14px; color:#000000; font-family:Arial, Helvetica, sans-serif;}
   h2 {font-weight:bold; color:#000099; margin:10px 0px; }
   p span {color:#006600; font-weight:bold; }
   a, a:link, a:visited {color:#0000FF;}
   textarea {width: 100%; padding: 10px; margin: 10px 0 15px 0; font-size: 13px; font-family: Consolas,monospace;}
   textarea.html {height: 300px;}
   p {margin: 0 0 10px 0;}
   code, pre {font-family: Consolas,monospace; color: green;}
   ol li {margin: 0 0 15px 0;}
</style>
</head>

<style type="text/css">#cssmenu ul { margin: 0; padding: 0;}
#cssmenu li { margin: 0; padding: 0;}
#cssmenu a { margin: 0; padding: 0;}
#cssmenu ul {list-style: none;}
#cssmenu a {text-decoration: none;}
#cssmenu {height: 70px; background-color: rgb(35,35,35); box-shadow: 0px 2px 3px rgba(0,0,0,.4);}


#cssmenu > ul > li {
    float: left;
    margin-left: 15px;
    position: relative;
}

#cssmenu > ul > li > a {
    color: #FFFFFF;
    font-family: Verdana, 'Lucida Grande';
    font-size: 15px;
    line-height: 70px;
    padding: 15px 20px;
-webkit-transition: color .15s;
   -moz-transition: color .15s;
     -o-transition: color .15s;
        transition: color .15s;
}

#cssmenu > ul > li > a:hover {color: rgb(250,250,250); }


#cssmenu > ul > li > ul {
    opacity: 0;
    visibility: hidden;
    padding: 16px 0 20px 0;
    background-color: rgb(250,250,250);
    text-align: left;
    position: absolute;
    top: 55px;
    left: 50%;
    margin-left: -90px;
    width: 180px;
-webkit-transition: all .3s .1s;
   -moz-transition: all .3s .1s;
     -o-transition: all .3s .1s;
        transition: all .3s .1s;
-webkit-border-radius: 5px;
   -moz-border-radius: 5px;
        border-radius: 5px;
-webkit-box-shadow: 0px 1px 3px rgba(0,0,0,.4);
   -moz-box-shadow: 0px 1px 3px rgba(0,0,0,.4);
        box-shadow: 0px 1px 3px rgba(0,0,0,.4);
}

#cssmenu > ul > li:hover > ul {
    opacity: 1;
    top: 65px;
    visibility: visible;
}

#cssmenu > ul > li > ul:before{
    content: '';
    display: block;
    border-color: transparent transparent rgb(250,250,250) transparent;
    border-style: solid;
    border-width: 10px;
    position: absolute;
    top: -20px;
    left: 50%;
    margin-left: -10px;
}

#cssmenu > ul ul > li { position: relative;}

#cssmenu ul ul a{
    color: rgb(50,50,50);
    font-family: Verdana, 'Lucida Grande';
    font-size: 13px;
    background-color: rgb(250,250,250);
    padding: 5px 8px 7px 16px;
    display: block;
-webkit-transition: background-color .1s;
   -moz-transition: background-color .1s;
     -o-transition: background-color .1s;
        transition: background-color .1s;
}

#cssmenu ul ul a:hover {background-color: rgb(240,240,240);}


#cssmenu ul ul ul {
    visibility: hidden;
    opacity: 0;
    position: absolute;
    top: -16px;
    left: 206px;
    padding: 16px 0 20px 0;
    background-color: rgb(250,250,250);
    text-align: left;
    width: 160px;
-webkit-transition: all .3s;
   -moz-transition: all .3s;
     -o-transition: all .3s;
        transition: all .3s;
-webkit-border-radius: 5px;
   -moz-border-radius: 5px;
        border-radius: 5px;
-webkit-box-shadow: 0px 1px 3px rgba(0,0,0,.4);
   -moz-box-shadow: 0px 1px 3px rgba(0,0,0,.4);
        box-shadow: 0px 1px 3px rgba(0,0,0,.4);
}


#cssmenu ul ul > li:hover > ul { opacity: 1; left: 196px; visibility: visible;}


#cssmenu ul ul a:hover{
    background-color: rgb(205,44,36);
    color: rgb(240,240,240);
}
</style>
<div id='cssmenu'>
<ul>
   <li class='active '><a href="welcome.php"><span>Home</span></a></li>
   <li class='has-sub '><a href='welcome.php'><span>Journey Planner</span></a>
      <ul>
         <li class='has-sub '><a href='welcome.php'><span>Interstate Journey</span></a>
         </li>
         <li class='has-sub '><a href=''><span>Intrastate Journey</span></a>
            <ul>
               <li><a href='welcome.php'><span>Free Services</span></a></li>
               <li><a href='welcome.php'><span>Paid Schemes</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
   <li><a href='news.html'><span>News</span></a></li>
 <li><a href=''><span>Additional VAT Services</span></a></li> 
<li><a href='can.php'><span>Cancellations/Refund</span></a></li> 

<li><a href='tran.php'><span>My Transactions</span></a></li> 
<li class='has-sub '><a href='#'><span>My Profile</span></a>
      <ul>
         <li class='has-sub '><a href='#'><span>Edit Profile</span></a>
            <ul>
               <li><a href=''><span>Personal Information</span></a></li>
               <li><a href='10th.html'><span>Account Settings</span></a></li>
             </ul>
         </li>
         <li class='has-sub '><a href='#'><span>Change Password</span></a>
            <ul>
               <li><a href='m.html'><span> Reset Password</span></a></li>
         <li><a href='education.html'><span>How to change password</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
<li><a href='contact.html' ><span>Contact Us</span></a></li> 
   </ul>
         

</div>
</div>
<font align="right">

</center>
</body> 
<hr>
<font color="white" align="right"><center>
<p> <p>
<table border=0 width="100%">
<tr><td width="235px">
<font size="5" color="brown" face="cambria"><center>QUICK LINKS :</center>
<ul> <font size="4" face="cambria">
<li> <a href="http://www.indianrailways.gov.in/"> Indian Railways </a> </li> 
<li> <a href="http://www.maharajas-express-india.com/"> Maharajas Express </a> </li> 
<li> <a href="http://www.mcdonalds.com/"> McDonalds </a> </li>
<li> <a href="http://www.makemytrip.com/"> Make My Trip </a> </li> 
<li> <a href="http://www.airindia.in/"> Indian Airlines </a> </li>
<li> <a href="http://www.upsrtconline.co.in/"> UPSRTC </a></li> 
</ul> </font> 
</td>

<td bgcolor="pink">
<font size="5" color="black" face="cambria"><center>
<h2><font face="Cambria"><b>Your Transactions</b></font></h2><br>
<font face="Cambria" size="4">
<?php
$x=$_POST['a'];
$y=$_POST['b'];
$z=$_POST['c'];
$user=$_SESSION['name'];
if($y<$z)
echo "Invalid input. You can't cancel $z tickets out of $y bookings.!!<br>";
else
{
mysql_connect("localhost","root","");
	mysql_select_db("irctc");
	$r="SELECT * from tickets where username='$user';";
	$res=mysql_query($r);
	$count=mysql_num_rows($res);
		if($count==0)
			echo "No Transactions found.!!";
		else
			{
			echo "<table border='2'>";
echo "<tr>";
echo "<td><b><center> TRAIN NUMBER </td>";
echo "<td><b><center> PNR NUMBER </td>";
echo "<td><b><center> No. of Tickets </td></tr>";

while($row=mysql_fetch_array($res))
{
echo "<tr>";
echo "<td><center>",$row[2],"</td>";
echo "<td><center>",$row[0],"</td>";
echo "<td><center>",$row[1],"</td>";
echo "</tr>";
}
echo "</table>";
			}
	
}
?>
</td>
<td width="25%" bgcolor="white"><img src="im1.jpeg"></td></tr></table>
<center>
<font size="5" color="blue" face="cambria"><b><u>DEVELOPERS</u><br>
<hr>
<a href="http://www.facebook.com/utkarshmanitripathi" title="Utkarsh on Facebook"><font size="4" color="black" face="cambria">Utkarsh Mani Tripathi</a> 
<br><a href="http://www.facebook.com/Saurabhranjan" title="Saurabh on Facebook"><font size="4" color="black" face="cambria">Saurabh Ranjan</a> </b> <br><hr>
www.irctc.co.in. All Rights Reserved<br />Designed and Hosted by SR-UMT<br />
		<br>
<table border=0 bgcolor="maroon" width="50%"  title="Download Google Chrome">
<tr><td  align="center"><strong> <font size="4" color="white" face="cambria"> Copyright <sup> TM </sup>: Motilal Nehru National Institute of Technology <sup> R </sup>, Allahabad </strong></td></tr>
<tr><td  align="center"><font face="cambria" size="4" Color="white">
** Best view at 1024 x 768 and Google Chrome 10.1 or higher version. **<br><hr>
<font face="cambria" size="3" Color="white">LAST UPDATED : TODAY, <b>00:00 AM</b> <br>
TOTAL VISITORS: TODAY: <b>1,77,589</b><br> TOTAL: <b>99,145,265 Views</b><br> </font>
</td></tr></table>

</body>
</html>