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
	$sem1s7=$_POST['sem1s7'];$sem1sp1=$_POST['sem1p1'];$sem1spi1=$_POST['sem1pi1'];
	$sem1sp2=$_POST['sem1p2'];$sem1spi2=$_POST['sem1pi2'];$sem1s8=$_POST['sem1s8'];
	$bcount=0;
	if($sem1st1<35 || ($sem1si1<25 && $sem1s1<60)){$bcount=$bcount+1;}
	if($sem1st2<35 || ($sem1si2<25 && $sem1s2<60)){$bcount=$bcount+1;}
	if($sem1st3<35 || ($sem1si3<25 && $sem1s3<60)){$bcount=$bcount+1;}
	if($sem1st4<26 || ($sem1si4<15 && $sem1s4<35)){$bcount=$bcount+1;}
	if($sem1st5<26 || ($sem1si5<15 && $sem1s5<35)){$bcount=$bcount+1;}
	if($sem1sp1<60 || ($sem1spi1<20 && $sem1s7<80)){$bcount=$bcount+1;}
	if($sem1sp2<13 || ($sem1spi2<5 && $sem1s8<18)){$bcount=$bcount+1;}
echo "total backs=".$bcount;
$sec=$sem1s1+$sem1s2+$sem1s3+$sem1s4+$sem1s5+$sem1s7+$sem1s8;
echo "secured=".$sec;
$total=1000;
	$link = mysqli_connect("localhost", "root", "", "proj");
	if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
// Attempt insert query execution
$sql = "INSERT INTO sem6 (reg_no, sem6subt1, sem6subt2, sem6subt3, sem6subt4, sem6subt5, sem6subp1, sem6subp2,  sem6subi1, sem6subi2, sem6subi3, sem6subi4, sem6subi5, sem6subpi1, sem6subpi2, sem6backs, sem6total, sem6obtained) VALUES ('$temp', '$sem1st1', '$sem1st2', '$sem1st3', '$sem1st4', '$sem1st5', '$sem1sp1', '$sem1sp2','$sem1si1','$sem1si2','$sem1si3','$sem1si4','$sem1si5','$sem1spi1','$sem1spi2', '$bcount', '$total', '$sec')";
if(mysqli_query($link, $sql)){
    echo "<script type='text/javascript'>alert('RECORD SUCCESFULLY UPDATED:REDIRECTING IN 5 SECONDS')</script>";
	header("refresh:5;url=selection.php");
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
	{	if(sem1.sem1t1.value==""||sem1.sem1t2.value==""||sem1.sem1t3.value==""||sem1.sem1t4.value==""||sem1.sem1t5.value==""||sem1.sem1p1.value==""||sem1.sem1p2.value==""||sem1.sem1i1.value==""||sem1.sem1i2.value==""||sem1.sem1i3.value==""||sem1.sem1i4.value==""||sem1.sem1i5.value==""||sem1.sem1pi1.value==""||sem1.sem1pi2.value=="")
			{
				alert("MARKS CANNOT BE LEFT BLANK,MAKE THE MARKS 0 IF ABSENT");
				return false;
			}
	}
	function valid(elem)
	{	if(parseInt(sem1.sem1t1.value)>100||parseInt(sem1.sem1t2.value)>100||parseInt(sem1.sem1t3.value)>100||parseInt(sem1.sem1t4.value)>70||parseInt(sem1.sem1t5.value)>70||parseInt(sem1.sem1p1.value)>200||parseInt(sem1.sem1p2.value)>35)
			{
				alert("MARKS EXCEEDING MAXIMUM LIMIT!!");
				document.getElementById(elem).value="";
				return false;
			}
	if(parseInt(sem1.sem1i1.value)>50||parseInt(sem1.sem1i2.value)>50||parseInt(sem1.sem1i3.value)>50||parseInt(sem1.sem1i4.value)>30||parseInt(sem1.sem1i5.value)>30||parseInt(sem1.sem1pi1.value)>100||parseInt(sem1.sem1pi2.value)>15)
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
	 
	 document.getElementById('sem1s7').value=parseInt(document.getElementById('sem1p1').value)+parseInt(document.getElementById('sem1pi1').value)
	 document.getElementById('sem1s8').value=parseInt(document.getElementById('sem1p2').value)+parseInt(document.getElementById('sem1pi2').value)
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
SEMESTER SIX
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;margin-top: 20px;"></div>
<div class="sub-wrapper" style="margin-top: 10px;">
<form name="sem1" action="sem6.php" method="post" onSubmit="return check()">
	<div class="info">SEMESTER 6<br><br/>
	<input type="submit" name="regbut" class="sub_but"><br/><br/><br/>
	SEMESTER 6
	</div>
	<input type="text" class="text1" style="margin-top: 60px;" placeholder="SYSTEM PROGRAMMING" name="sem1t1" id="sem1t1" onBlur="valid('sem1t1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i1" id="sem1i1" onBlur="valid('sem1i1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s1" id="sem1s1" onBlur="valid('sem1s1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 150">
	<br>
	
	<input type="text" class="text1" placeholder="CRYPTOGRAPHY" name="sem1t2" id="sem1t2" onBlur="valid('sem1t2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i2" id="sem1i2" onBlur="valid('sem1i2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s2" id="sem1s2" onBlur="valid('sem1s2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 150">
	<br>
	
	<input type="text" class="text1" placeholder="THEORY OF COMPUTING" name="sem1t3" id="sem1t3" onBlur="valid('sem1t3')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i3" id="sem1i3" onBlur="valid('sem1i3')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s3" id="sem1s3" onBlur="valid('sem1s3')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 150">
	<br>
	
	<input type="text" class="text1" placeholder="WEB PROGRAMMING" name="sem1t4" id="sem1t4" onBlur="valid('sem1t4')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i4" id="sem1i4" onBlur="valid('sem1i4')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s4" id="sem1s4" onBlur="valid('sem1s4')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<br>
	
	
	<input type="text" class="text1" placeholder="ENTREPRNEURSHIP" name="sem1t5" id="sem1t5" onBlur="valid('sem1t5')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1i5" id="sem1i5" onBlur="valid('sem1i5')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s5" id="sem1s5" onBlur="valid('sem1s5')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<br>
	
	<input type="text" class="text1" placeholder="PROJECT" name="sem1p1" id="sem1p1" onBlur="valid('sem1p1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 200">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1pi1" id="sem1pi1" onBlur="valid('sem1pi1')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s7" id="sem1s7" onBlur="valid('sem1s7')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 300">
	<br>
	
	<input type="text" class="text1" placeholder="WEB PRACTICALS" name="sem1p2" id="sem1p2" onBlur="valid('sem1p2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" placeholder="INTERNALS" name="sem1pi2" id="sem1pi2" onBlur="valid('sem1pi2')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<input type="text" class="txtsmall" placeholder="TOTAL" name="sem1s8" id="sem1s8" onBlur="valid('sem1s8')" onKeyPress="return isnumkey(event)">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	</form>	
</div>	
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;"></div>
	</div>
	</body>
	
</html>
