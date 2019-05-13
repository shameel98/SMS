<!doctype html>
<?php
$db=new mysqli("localhost","root","","proj");
if($db==false)
	echo"ERROR IN CONNECTING DATABASE";
	$con1=mysqli_query($db,"select * from sem1 where reg_no='1BO18MCA55'");
$sem1=mysqli_fetch_array($con1);
if(($sem1['reg_no']=="14ycsb7043"))
{
$regno=$sem1['reg_no'];
$s1s1=$sem1['s1sub1'];
$s1s2=$sem1['s1sub2'];
$s1s3=$sem1['s1sub3'];
$s1s4=$sem1['s1sub4'];
$s1s5=$sem1['s1sub5'];
$s1s6=$sem1['s1sub6'];
$s1s7=$sem1['s1sub7'];
$s1ob=$sem1['s1obtained'];
}
else
{
$regno=0;
$s1s1="NOT ENTERED/UPDATED";
$s1s2="NOT ENTERED/UPDATED";
$s1s3="NOT ENTERED/UPDATED";
$s1s4="NOT ENTERED/UPDATED";
$s1s5="NOT ENTERED/UPDATED";
$s1s6="NOT ENTERED/UPDATED";
$s1s7="NOT ENTERED/UPDATED";
$s1ob="NOT ENTERED/UPDATED";
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<div style="height: 100px; width: 100px; border:solid red;">
	<?php echo $s1ob; ?>
</div>
<div style="height: 100px; width: 100px; border:solid red;">
	<?php echo $s1s1; ?>
</div>
</body>
</html>