<!doctype html>
<?php
session_start();
echo"<div style='color:black;border-bottom:solid;width:1400px;text-align:center;font-weight:bolder;margin-left:10px;'> SESSION FOR----".$_SESSION['adminreg']."----CREATED</div>";
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	.section
	{
		height: 100px;
		width: 200px;
		border: solid;
		margin-left: 200px;
		margin-top: 50px;
		font-family: calibri;
		text-align: center;
		font-size:36px;
		padding-top: 15px;
		padding-bottom: 50px;
		border-radius: 20px;
		float: left;
	}
	.section:hover
	{
		height: 100px;
		width: 200px;
		border: double;
		margin-left: 200px;
		margin-top: 50px;
		font-family: calibri;
		text-align: center;
		color:white;
		background: #2EADD4;
		font-size:36px;
		padding-top: 15px;
		padding-bottom: 50px;
		border-radius: 20px;
		float: left;
		transition: 0.5s ease;
	}
	.back
	{
		height: 50px;
		width:50px;
		background:url(../images/logo/home-1.jpg);
		border-radius: 50%;
		border-bottom:solid 5px black;
		margin-top:20px;
	}

	</style>
</head>

<body background="../images/patterns/logo_x_pattern.png">
<a href="admin choice.html"><div class="back"></div></a>
<a href="sem1.php"><div class="section">ADD SEMESTER <br/>1 MARKS</div></a>
	<a href="sem2.php"><div class="section">ADD SEMESTER <br/>2 MARKS</div></a>
<a href="sem3.php"><div class="section">ADD SEMESTER <br/>3 MARKS</div></a>
<a href="sem4.php"><div class="section">ADD SEMESTER <br/>4 MARKS</div></a>
<a href="sem5.php"><div class="section">ADD SEMESTER <br/>5 MARKS</div></a>
<a href="sem6.php"><div class="section">ADD SEMESTER <br/>6 MARKS</div></a>
</body>
</html>