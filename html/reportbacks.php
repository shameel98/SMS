<!doctype html>
<?php
echo "<h1 style='text-align:center;margin-top:40px;color:white;'>BACKLOG REPORT FOR SEM ONE</h1>";
echo "<table cellspacing='10' cellpadding='6' style='background:#171616;border:solid thin black;border-radius:5px;margin:auto;margin-top:20px;'>";
echo "<tr style='background:#08588f;height:30px;border:solid thin black;border-radius:5px;'><th style='border-radius:5px;color:white;'>TOTAL STUDENTS</th><th style='border-radius:5px;color:white;'>TOTAL BACKS</th><th style='border-radius:5px;color:white;'>TOTAL STUDENTS WITH BACKS</th></tr>";
$con=mysqli_connect("localhost", "root", "", "proj");
$sql="select sum(sem1backs),count(reg_no) from sem1";
$sql2="select count(sem1backs) from sem1 where sem1backs>0";
$result2=mysqli_query($con,$sql2);
while($row2=mysqli_fetch_array($result2))
	$stwb=$row2[0];
$result=mysqli_query($con,$sql)or die(mysqli_error($con));
while ($row=mysqli_fetch_array($result))
{
	$sem1bc=$row[0];
	$sem1sc=$row[1];
}
echo "<tr style='background:white;border:solid thin black;'><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem1sc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem1bc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$stwb."</td>";
echo "</table>";


echo "<h1 style='text-align:center;margin-top:40px;color:white;'>BACKLOG REPORT FOR SEM TWO</h1>";
echo "<table cellspacing='10' cellpadding='6' style='background:#171616;border:solid thin black;border-radius:5px;margin:auto;margin-top:20px;'>";
echo "<tr style='background:#08588f;height:30px;border:solid thin black;border-radius:5px;'><th style='border-radius:5px;color:white;'>TOTAL STUDENTS</th><th style='border-radius:5px;color:white;'>TOTAL BACKS</th><th style='border-radius:5px;color:white;'>TOTAL STUDENTS WITH BACKS</th></tr>";
$ssql="select sum(sem2backs),count(reg_no) from sem2";
$ssql2="select count(sem2backs) from sem2 where sem2backs>0";
$sresult2=mysqli_query($con,$ssql2);
while($srow2=mysqli_fetch_array($sresult2))
	$s2twb=$srow2[0];
$sresult=mysqli_query($con,$ssql)or die(mysqli_error($con));
while ($srow=mysqli_fetch_array($sresult))
{
	$sem2bc=$srow[0];
	$sem2sc=$srow[1];
}
echo "<tr style='background:white;border:solid thin black;'><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem2sc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem2bc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$s2twb."</td>";
echo "</table>";

echo "<h1 style='text-align:center;margin-top:40px;color:white;'>BACKLOG REPORT FOR SEM THREE</h1>";
echo "<table cellspacing='10' cellpadding='6' style='background:#171616;border:solid thin black;border-radius:5px;margin:auto;margin-top:20px;'>";
echo "<tr style='background:#08588f;height:30px;border:solid thin black;border-radius:5px;'><th style='border-radius:5px;color:white;'>TOTAL STUDENTS</th><th style='border-radius:5px;color:white;'>TOTAL BACKS</th><th style='border-radius:5px;color:white;'>TOTAL STUDENTS WITH BACKS</th></tr>";
$tsql="select sum(sem3backs),count(reg_no) from sem3";
$tsql2="select count(sem3backs) from sem3 where sem3backs>0";
$tresult2=mysqli_query($con,$tsql2);
while($trow2=mysqli_fetch_array($tresult2))
	$s3twb=$trow2[0];
$tresult=mysqli_query($con,$tsql)or die(mysqli_error($con));
while ($trow=mysqli_fetch_array($tresult))
{
	$sem3bc=$trow[0];
	$sem3sc=$trow[1];
}
echo "<tr style='background:white;border:solid thin black;'><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem3sc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem3bc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$s3twb."</td>";
echo "</table>";

echo "<h1 style='text-align:center;margin-top:40px;color:white;'>BACKLOG REPORT FOR SEM FOUR</h1>";
echo "<table cellspacing='10' cellpadding='6' style='background:#171616;border:solid thin black;border-radius:5px;margin:auto;margin-top:20px;'>";
echo "<tr style='background:#08588f;height:30px;border:solid thin black;border-radius:5px;'><th style='border-radius:5px;color:white;'>TOTAL STUDENTS</th><th style='border-radius:5px;color:white;'>TOTAL BACKS</th><th style='border-radius:5px;color:white;'>TOTAL STUDENTS WITH BACKS</th></tr>";
$fsql="select sum(sem4backs),count(reg_no) from sem4";
$fsql2="select count(sem4backs) from sem4 where sem4backs>0";
$fresult2=mysqli_query($con,$fsql2);
while($frow2=mysqli_fetch_array($fresult2))
	$s4twb=$frow2[0];
$fresult=mysqli_query($con,$fsql)or die(mysqli_error($con));
while ($frow=mysqli_fetch_array($fresult))
{
	$sem4bc=$frow[0];
	$sem4sc=$frow[1];
}
echo "<tr style='background:white;border:solid thin black;'><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem4sc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem4bc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$s4twb."</td>";
echo "</table>";

echo "<h1 style='text-align:center;margin-top:40px;color:white;'>BACKLOG REPORT FOR SEM FIVE</h1>";
echo "<table cellspacing='10' cellpadding='6' style='background:#171616;border:solid thin black;border-radius:5px;margin:auto;margin-top:20px;'>";
echo "<tr style='background:#08588f;height:30px;border:solid thin black;border-radius:5px;'><th style='border-radius:5px;color:white;'>TOTAL STUDENTS</th><th style='border-radius:5px;color:white;'>TOTAL BACKS</th><th style='border-radius:5px;color:white;'>TOTAL STUDENTS WITH BACKS</th></tr>";
$fisql="select sum(sem5backs),count(reg_no) from sem5";
$fisql2="select count(sem5backs) from sem5 where sem5backs>0";
$firesult2=mysqli_query($con,$fisql2);
while($firow2=mysqli_fetch_array($firesult2))
	$s5twb=$firow2[0];
$firesult=mysqli_query($con,$fisql)or die(mysqli_error($con));
while ($firow=mysqli_fetch_array($firesult))
{
	$sem5bc=$firow[0];
	$sem5sc=$firow[1];
}
echo "<tr style='background:white;border:solid thin black;'><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem3sc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem3bc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$s3twb."</td>";
echo "</table>";


echo "<h1 style='text-align:center;margin-top:40px;color:white;'>BACKLOG REPORT FOR SEM SIX</h1>";
echo "<table cellspacing='10' cellpadding='6' style='background:#171616;border:solid thin black;border-radius:5px;margin:auto;margin-top:20px;'>";
echo "<tr style='background:#08588f;height:30px;border:solid thin black;border-radius:5px;'><th style='border-radius:5px;color:white;'>TOTAL STUDENTS</th><th style='border-radius:5px;color:white;'>TOTAL BACKS</th><th style='border-radius:5px;color:white;'>TOTAL STUDENTS WITH BACKS</th></tr>";
$sisql="select sum(sem6backs),count(reg_no) from sem6";
$sisql2="select count(sem6backs) from sem6 where sem6backs>0";
$siresult2=mysqli_query($con,$sisql2);
while($sirow2=mysqli_fetch_array($siresult2))
	$s6twb=$sirow2[0];
$siresult=mysqli_query($con,$sisql)or die(mysqli_error($con));
while ($sirow=mysqli_fetch_array($siresult))
{
	$sem6bc=$sirow[0];
	$sem6sc=$sirow[1];
}
echo "<tr style='background:white;border:solid thin black;'><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem6sc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$sem6bc."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$s6twb."</td>";
echo "</table>";
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body bgcolor="#171616">
</body>
</html>