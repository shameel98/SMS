<!doctype html>
<?php
session_start();
echo"<div style='color:white;border-bottom:solid;width:100px;text-align:center;font-weight:bolder;margin-left:10px;'> ADDING MARKS FOR<br/>".$_SESSION['adminreg']."</div>";
if(isset($_POST['regbut']))
{
error_reporting(0);
session_start();
$temp=$_SESSION['adminreg'];
	$sem1s1=$_POST['sem1s1'];$sem1st1=$_POST['sem1t1'];$sem1si1=$_POST['sem1i1'];
	$sem1s2=$_POST['sem1s2'];$sem1st2=$_POST['sem1t2'];$sem1si2=$_POST['sem1i2'];
	$sem1s3=$_POST['sem1s3'];$sem1st3=$_POST['sem1t3'];$sem1si3=$_POST['sem1i3'];
	$sem1s4=$_POST['sem1s4'];$sem1st4=$_POST['sem1t4'];$sem1si4=$_POST['sem1i4'];
	$sem1s5=$_POST['sem1s5'];$sem1st5=$_POST['sem1t5'];$sem1si5=$_POST['sem1i5'];
	$sem1s6=$_POST['sem1s6'];$sem1st6=$_POST['sem1t6'];$sem1si6=$_POST['sem1i6'];
	$sem1s7=$_POST['sem1s7'];$sem1sp1=$_POST['sem1p1'];$sem1spi1=$_POST['sem1pi1'];
	$sem1sp2=$_POST['sem1p2'];$sem1spi2=$_POST['sem1pi2'];$sem1s8=$_POST['sem1s8'];
	$sem1sp3=$_POST['sem1p3'];$sem1spi3=$_POST['sem1pi3'];$sem1s9=$_POST['sem1s9'];
	$bcount=0;
	if($sem1st1<35 || ($sem1si1<25 && $sem1s1<60)){$bcount=$bcount+1;}
	if($sem1st2<35 || ($sem1si2<25 && $sem1s2<60)){$bcount=$bcount+1;}
	if($sem1st3<35 || ($sem1si3<25 && $sem1s3<60)){$bcount=$bcount+1;}
	if($sem1st4<26 || ($sem1si4<15 && $sem1s4<35)){$bcount=$bcount+1;}
	if($sem1st5<26 || ($sem1si5<15 && $sem1s5<35)){$bcount=$bcount+1;}
	if($sem1st6<26 || ($sem1si6<15 && $sem1s6<35)){$bcount=$bcount+1;}
	if($sem1sp1<35 || ($sem1spi1<15 && $sem1s7<35)){$bcount=$bcount+1;}
	if($sem1sp2<13 || ($sem1spi2<5 && $sem1s8<18)){$bcount=$bcount+1;}
	if($sem1sp3<13 || ($sem1spi3<5 && $sem1s9<18)){$bcount=$bcount+1;}
echo "total backs=".$bcount;
$sec=$sem1s1+$sem1s2+$sem1s3+$sem1s4+$sem1s5+$sem1s6+$sem1s7+$sem1s8+$sem1s9;
echo "secured=".$sec;
$total=1000;
	$link = mysqli_connect("localhost", "root", "", "proj");
	if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
// Attempt insert query execution
$sql = "INSERT INTO sem5 (reg_no, sem5subt1, sem5subt2, sem5subt3, sem5subt4, sem5subt5, sem5subt6, sem5subp1, sem5subp2, sem5subp3,  sem5subi1, sem5subi2, sem5subi3, sem5subi4, sem5subi5, sem5subi6, sem5subpi1, sem5subpi2, sem5subpi3, sem5backs, sem5total, sem5obtained) VALUES ('$temp', '$sem1st1', '$sem1st2', '$sem1st3', '$sem1st4', '$sem1st5', '$sem1st6', '$sem1sp1', '$sem1sp2', '$sem1sp3','$sem1si1','$sem1si2','$sem1si3','$sem1si4','$sem1si5','$sem1si6','$sem1spi1','$sem1spi2','$sem1spi3', '$bcount', '$total', '$sec')";
if(mysqli_query($link, $sql)){
   echo "<script type='text/javascript'>alert('RECORD SUCCESFULLY UPDATED:REDIRECTING IN 5 SECONDS')</script>";
	header("refresh:5;url=sem6.php");
}
	else
	{
    echo "<script type='text/javascript'>alert('ERROR REGISTERING')</script>";
}
// Close connection
	mysqli_close($link);
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/adding.css" type="text/css" rel="stylesheet">
<script type="application/javascript">
	function check()
	{	if(sem1.sem1t1.value==""||sem1.sem1t2.value==""||sem1.sem1t3.value==""||sem1.sem1t4.value==""||sem1.sem1t5.value==""||sem1.sem1t6.value==""||sem1.sem1p1.value==""||sem1.sem1p2.value==""||sem1.sem1p3.value==""||sem1.sem1i1.value==""||sem1.sem1i2.value==""||sem1.sem1i3.value==""||sem1.sem1i4.value==""||sem1.sem1i5.value==""||sem1.sem1i6.value==""||sem1.sem1pi1.value==""||sem1.sem1pi2.value==""||sem1.sem1pi3.value=="")
			{
				alert("MARKS CANNOT BE LEFT BLANK,MAKE THE MARKS 0 IF ABSENT");
				return false;
			}
	}
	function valid(elem)
	{	if(parseInt(sem1.sem1t1.value)>100||parseInt(sem1.sem1t2.value)>100||parseInt(sem1.sem1t3.value)>100||parseInt(sem1.sem1t4.value)>70||parseInt(sem1.sem1t5.value)>70||parseInt(sem1.sem1t6.value)>100||parseInt(sem1.sem1p1.value)>100||parseInt(sem1.sem1p2.value)>35||parseInt(sem1.sem1p3.value)>35)
			{
				alert("MARKS EXCEEDING MAXIMUM LIMIT!!");
				document.getElementById(elem).value="";
				return false;
			}
	if(parseInt(sem1.sem1i1.value)>50||parseInt(sem1.sem1i2.value)>50||parseInt(sem1.sem1i3.value)>50||parseInt(sem1.sem1i4.value)>30||parseInt(sem1.sem1i5.value)>30||parseInt(sem1.sem1i6.value)>30||parseInt(sem1.sem1pi1.value)>50||parseInt(sem1.sem1pi2.value)>15||parseInt(sem1.sem1pi3.value)>15)
			{
				alert("MARKS EXCEEDING MAXIMUM LIMIT!!");
				document.getElementById(elem).value="";
				return false;
			}
	 document.getElementById('sem1s1').value=parseInt(document.getElementById('sem1t1').value)+parseInt(document.getElementById('sem1i1').value)
	 document.getElementById('sem1s2').value=parseInt(document.getElementById('sem1t2').value)+parseInt(document.getElementById('sem1i2').value)
	 document.getElementById('sem1s3').value=parseInt(document.getElementById('sem1t3').value)+parseInt(document.getElementById('sem1i3').value)
	 document.getElementById('sem1s4').value=parseInt(document.getElementById('sem1t4').value)+parseInt(document.getElementById('sem1i4').value)
	 document.getElementById('sem1s5').value=parseInt(document.getElementById('sem1t5').value)+parseInt(document.getElementById('sem1i5').value)
	 document.getElementById('sem1s6').value=parseInt(document.getElementById('sem1t6').value)+parseInt(document.getElementById('sem1i6').value)
	 
	 document.getElementById('sem1s7').value=parseInt(document.getElementById('sem1p1').value)+parseInt(document.getElementById('sem1pi1').value)
	 document.getElementById('sem1s8').value=parseInt(document.getElementById('sem1p2').value)+parseInt(document.getElementById('sem1pi2').value)
	 document.getElementById('sem1s9').value=parseInt(document.getElementById('sem1p3').value)+parseInt(document.getElementById('sem1pi3').value)
	}
	function isnumkey(evt)
	{
		var charcode=(evt.which)?evt.which:Event.keyCode
		if(charcode>31 && (charcode<48||charcode>57))
			return false;
		return true;
	}
	</script>
</head>

<body background="../images/patterns/dark_embroidery.png">
<a href="admin choice.html"><div class="back"></div></a>
<div class="wrapper" style="color: white;font-size: 24px;text-align: center;height: 500px">
SEMESTER FIVE
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;margin-top: 20px;"></div>
<div class="sub-wrapper" style="margin-top: 10px;">
<form name="sem1" action="sem5.php" method="post" onSubmit="return check()">
	<div class="info">SEMESTER 5<br><br/>
	<input type="submit" name="regbut" class="sub_but"><br/><br/><br/>
	SEMESTER 5
	</div>
	<input type="text" class="text1" style="margin-top:35px;" placeholder="DCN" name="sem1t1" id="sem1t1" onBlur="valid('sem1t1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i1" id="sem1i1" onBlur="valid('sem1i1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s1" id="sem1s1" onBlur="valid('sem1s1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 150">
	<br>
	
	<input type="text" class="text1" placeholder="SOFTWARE ENGINEERING" name="sem1t2" id="sem1t2" onBlur="valid('sem1t2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i2" id="sem1i2" onBlur="valid('sem1i2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s2" id="sem1s2" onBlur="valid('sem1s2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 150">
	<br>
	
	<input type="text" class="text1" placeholder="COMPUTER ARCHITECTURE" name="sem1t3" id="sem1t3" onBlur="valid('sem1t3')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i3" id="sem1i3" onBlur="valid('sem1i3')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s3" id="sem1s3" onBlur="valid('sem1s3')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 150">
	<br>
	
	<input type="text" class="text1" placeholder="JAVA PROGRAMMING" name="sem1t4" id="sem1t4" onBlur="valid('sem1t4')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i4" id="sem1i4" onBlur="valid('sem1i4')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s4" id="sem1s4" onBlur="valid('sem1s4')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<br>
	
	<input type="text" class="text1" placeholder="MICRO PROCESSOR" name="sem1t5" id="sem1t5" onBlur="valid('sem1t5')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i5" id="sem1i5" onBlur="valid('sem1i5')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s5" id="sem1s5" onBlur="valid('sem1s5')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<br>
	
	<input type="text" class="text1" placeholder="BANKING & FINANCE" name="sem1t6" id="sem1t6" onBlur="valid('sem1t6')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i6" id="sem1i6" onBlur="valid('sem1i6')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s6" id="sem1s6" onBlur="valid('sem1s6')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<br>
	
	<input type="text" class="text1" placeholder="PROJECT" name="sem1p1" id="sem1p1" onBlur="valid('sem1p1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1pi1" id="sem1pi1" onBlur="valid('sem1pi1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s7" id="sem1s7" onBlur="valid('sem1s7')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 150">
	<br>
	
	<input type="text" class="text1" placeholder="JAVA PRACTICALS" name="sem1p2" id="sem1p2" onBlur="valid('sem1p2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1pi2" id="sem1pi2" onBlur="valid('sem1pi2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s8" id="sem1s8" onBlur="valid('sem1s8')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	<input type="text" class="text1" placeholder="MP PRACTICALS" name="sem1p3" id="sem1p3" onBlur="valid('sem1p3')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1pi3" id="sem1pi3" onBlur="valid('sem1pi3')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s9" id="sem1s9" onBlur="valid('sem1s9')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	</form>	
</div>	
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;"></div>
	</div>
	</body>
	
</html>
