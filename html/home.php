<!doctype html>
<?php
error_reporting(0);
session_start();
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/menu.css" type="text/css" rel="stylesheet">
<link href="../css/homecontent.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
	</script>
</head>

<body background="../images/patterns/dark_embroidery.png">
<div class="hdr">
<a href="logout.php" class="lgt"></a>
<div class="lgn">WELCOME<br/><?php echo $_SESSION['tname']; ?></div>
<div class="lgnreg"><?php echo $_SESSION['treg']; ?></div>
<div class="lgnreg" style="margin-top: 0px;margin-left:1250px">LOGOUT</div>
	</div>
<div class="menubox">
<div class="menubutton"><a href="home.php">HOME</a></div>
<div class="menubutton"><a href="add_marks.php">VIEW MARKS</a></div>
<div class="menubutton"><a href="stats.php">VIEW STATS</a></div>
	<div class="menubutton"><a href="contact.php">CONTACT</a></div>
</div>
<div class="content">
	<div class="started">GET STARTED</div>
	<div class="major" style="margin-left: 200px;"><div class="sec"></div></div>
	<div class="major"><div class="sec" style="background: url(../images/glasses.jpg);"></div></div>
	<div class="major"><div class="sec" style="background: url(../images/calc.jpg);"></div></div>
	<div class="info">
		<div class="infobox"><center>1. REGISTER</center><br/>+FILL UP THE REGISTER FORM<br/><br/>+PROVIDE THE AVAILABLE MARKS<br/><br/>+YOU SHOULD ATTEND ATLEAST ONE SEMESTER TO GET STATS</div>
		<div class="infobox"><center>2. DATABASE ENTRY</center><br/>+THE ADMIN STORES THE MARKS<br/><br/>+MARKS ARE TAKEN FROM REGISTER<br/><br/>+YOUR FUTURE SEMESTER MARKS WILL BE UPDATED TO THE DATABASE AUTOMATICALLY AS RESULTS ARE ANNOUNCED</div>
			<div class="infobox"><center>3. STATISTICS</center><br/>+STATS ARE AVAILABLE AFTER ADMIN UPDATES MARKS<br/><br/>+CLICK ON VIEW STATS TO CHECK<br/><br/>+FROM BACKS TO MARKS AND ALMOST EVERYTHING ON ONE SITE <center>**EASY ISN'T IT?**</center></div>
	</div>
</div>
</body>
</html>
