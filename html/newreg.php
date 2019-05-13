<!doctype html>

<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
	.con
	{
		height: 110px;
		width: 270px;
		border: dotted #F59100;
		background:url(../images/patterns/congruent_pentagonbw.png);
		margin: auto;
		font-weight: bold;
	}
	input
	{
		margin-left: 30px;
		
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
	<script type="text/javascript">
		var dtobj = new Date()
			var curmonth= dtobj.getMonth()
			var curyear= dtobj.getFullYear()
			var curdate= dtobj.getDate()
		
	function rtch(sam)
		{
			if(sam=="op1")
				{
					document.getElementById(sam).value=curyear;
					document.getElementById('txt1').value="YEAR";
				}
			else if(sam=="op2")
				{
					document.getElementById(sam).value=curmonth+1;
					document.getElementById('txt1').value="MONTH";
				}
			else if(sam=="op3")
				{
					document.getElementById(sam).value=curdate;
					document.getElementById('txt1').value="DATE";
				}
			else
				document.getElementById('txt1').value="default";
		}
	</script>
</head>

<body background="../images/patterns/retina_wood_@2X.png">
<a href="admin choice.html"><div class="back"></div></a>
<form method="post" action="newreg.php">
<div class="con">
	<input type="radio" name="select" id="op1" value="2017" onClick="rtch(this.id)"><label for="op1">CHECK THIS YEAR</label><br/>
	<input type="radio" name="select" id="op2" value="01" onClick="rtch('op2')"><label for="op2">CHECK THIS MONTH</label><br/>
	<input type="radio" name="select" id="op3" value="01" onClick="rtch('op3')"><label for="op3">CHECK TODAY</label><br/>
	<input type="radio" name="select" id="op4" value="01" onClick="rtch('op4')"><label for="op4">ALL REGISTERED USERS</label><br/>
	<input type="submit" name="sub" value="FIND THE REGISTERED USERS" style="margin-left: 25px; margin-top: 5px" >
	<input type="hidden" value="YEAR" name="txt" id="txt1">
	</div>
</form>
</body>
</html>
<?php
error_reporting(0);
if(isset($_POST['sub']))
{
$date=$_POST['select'];
$info=$_POST['txt'];
$today = date('Y-m-d');
$con = mysqli_connect("localhost", "root", "", "proj");
if($info=="MONTH")
$sql = "SELECT name,reg_no,dtreg FROM register where MONTH(dtreg) = '$date'";
else if($info=="YEAR")
$sql = "SELECT name,reg_no,dtreg FROM register where YEAR(dtreg) = '$date'";
else if($info=="DATE")
	$sql = "SELECT name,reg_no,dtreg FROM register where dtreg = '$today'";
	else if($info=="default")
	$sql = "SELECT name,reg_no,dtreg FROM register where YEAR(dtreg) > 2000";
$result = mysqli_query($con,$sql)or die(mysqli_error($con));
echo "<h2 style='color:black;text-align:center;'>LIST OF REGISTERED USERS</h2>";
echo "<table style='background:#171616;border:solid thin black;border-radius:5px;margin:auto;margin-top:20px;'>";
echo "<tr style='background:#08588f;height:30px;border:solid thin black;border-radius:5px;'><th style='border-radius:5px;color:white;'>REGISTER NUMBER</th><th style='border-radius:5px;color:white;'>NAME</th><th style='border-radius:5px;color:white;'>DATE REGISTERED</th></tr>";
while($row = mysqli_fetch_array($result)) {
    $regno = $row['reg_no'];
    $name = $row['name'];
	$cdate=$row['dtreg'];
    echo "<tr style='background:white;border:solid thin black;'><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$regno."</td><td style='width: 300px;text-align:center;border-radius:5px;font-weight:bolder;'>".$name."</td><td style='width: 300px;text-align:center;border-radius:5px;font-weight:bolder;'>".$cdate."</td></tr>";
} 

echo "</table>";
}
?>