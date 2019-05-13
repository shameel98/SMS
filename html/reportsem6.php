<!doctype html>
<?php
$con = mysqli_connect("localhost", "root", "", "proj");

$sql = "SELECT * FROM sem6,register where sem6.reg_no=register.reg_no order by sem6.sem6obtained desc";
$result = mysqli_query($con,$sql)or die(mysqli_error($con));
$i=1;
echo "<h2 style='color:white;text-align:center;'>SEMESTER SIX REPORT RANKING WISE</h2>";
echo "<table style='background:#171616;border:solid thin black;border-radius:5px;margin:auto;margin-top:50px;'>";
echo "<tr style='background:#08588f;height:30px;border:solid thin black;border-radius:5px;'><th style='border-radius:5px;color:white;'>RANKING</th><th style='border-radius:5px;color:white;'>REGISTER NO</th><th style='border-radius:5px;color:white;'>NAME</th><th style='border-radius:5px;color:white;'>OBTAINED</th><th style='border-radius:5px;color:white;'>TOTAL SEM1 BACKS</th></tr>";
while($row = mysqli_fetch_array($result)) {
    $regno = $row['reg_no'];
    $s1ob = $row['sem6obtained'];
    $s1back = $row['sem6backs'];
    echo "<tr style='background:white;border:solid thin black;'><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$i."</td><td style='width: 200px;text-align:center;border-radius:5px;font-weight:bolder;'>".$regno."</td><td style='width: 300px;text-align:center;border-radius:5px;font-weight:bolder;'>".$row['name']."</td><td style='width: 10px;text-align:center;border-radius:5px;font-weight:bolder;'>".$s1ob."</td><td style='width: 300px;text-align:center;border-radius:5px;font-weight:bolder;'>".$s1back."</td></tr>";
	$i++;
} 

echo "</table>"
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body bgcolor="#171616">
</body>
</html>