<!doctype html>
<?php
if (isset($_POST['sbt']))
{
$adminreg=$_POST['adminreg'];
$db=new mysqli("localhost","root","","proj");
$result = mysqli_query($db, "SELECT * FROM register where reg_no='$adminreg'");
$row=mysqli_fetch_array($result);
if(($row['reg_no']==$adminreg))
{
	$temp=$row['reg_no'];
session_start();
$_SESSION['adminreg'] = $temp;
echo $_SESSION['adminreg'];
	header("location:selection.php");
}
else
	echo "NOT REGISTERED";
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	.border
	{
		height: 300px;
		width: 500px;
		margin-top: 150px;
		margin-left: 450px;
	}
	.title
	{
		height: 40px;
		width: 400px;
		margin-top: 20px;
		margin-left: 50px;
		text-align: center;
		padding-top: 20px;
		font-size: 32px;
	}
	.txt
	{
		height: 40px;
		width: 300px;
		margin-left: 100px;
		margin-top: 50px;
		background:#3E3E3E;
		color: white;
		text-align: center;
		font-size: 24px;
	}
	.txt2
	{
		height: 60px;
		width: 60px;
		margin-left: 220px;
		margin-top: 20px;
		background:#1D6AAA;
		color: white;
		text-align: center;
		border-radius: 20px;
	}
	.txt2:hover
	{
		height: 60px;
		width: 60px;
		margin-left: 220px;
		margin-top: 20px;
		background:#038CFF;
		color: white;
		text-align: center;
		border-radius: 20px;
		border: dotted #FFFFFF;
		transition: all 0.5s ease;
		
	}
	</style>
	<script type="text/javascript">
	function valid()
		{
			var txt=document.getElementById('txt1').value;
			if (txt=="")
				{
					alert("TEXTFIELD LEFT BLANK");
					return false;
				}
		}
	</script>
	<style>
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

<body background="../images/patterns/struckaxiom_@2X.png">
<a href="admin choice.html"><div class="back"></div></a>
<div class="border">
  <div class="title">ENTER REGISTER NUMBER</div>
	<form action="adminreg.php" method="post" onsubmit="return valid()">
		<input type="text" name="adminreg" id="txt1" class="txt"><br/>
		<input type="submit" class="txt2" name="sbt" value="ok">
	</form>
</div>
</body>
</html>