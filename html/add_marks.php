<!doctype html>
<?php
include 'code.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/menu.css" type="text/css" rel="stylesheet">
<link href="../css/adding.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
	/*window.onload=function convert()
	{
		var x = document.getElementsByTagName("INPUT");
		for(var i=0;i<x.length;i++)
			{
				if(parseInt(x[i].value)==0)
				x[i].value="NOT UPDATED";
			}
	}*/
	</script>
</head>

<body background="../images/patterns/dark_embroidery.png">
<div class="hdr">
<a href="logout.php" class="lgt"></a>
<div class="lgn">WELCOME<br/><?php echo $_SESSION['tname']; ?></div>
<div class="lgnreg"><?php echo $_SESSION['treg']; ?></div>
<div class="lgnreg" style="margin-top: 0px;margin-left:1235px">LOGOUT</div>
</div>
<div class="menubox">
<div class="menubutton"><a href="home.php">HOME</a></div>
<div class="menubutton"><a href="add_marks.php">VIEW MARKS</a></div>
<div class="menubutton"><a href="stats.php">VIEW STATS</a></div>
<div class="menubutton"><a href="contact.php">CONTACT</a></div>
</div>
<div class="wrapper">
<div class="sub-wrapper" style="font-weight:bolder;color:white;margin-top:40px">
<form name="sem1">
	<div class="info">SEMESTER 1<br><br/><input type="text" disabled="disabled" class="text2" value="TOTAL"><input type="text" disabled="disabled" class="text3" value="<?php echo $s1total; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="SECURED"><input type="text" disabled="disabled" class="text3" name="sem1sec" value="<?php echo $s1ob; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="BACKLOGS"><input type="text" disabled="disabled" class="text3" name="sem1back" value="<?php echo $s1back; ?>"><br/><br/>
	SEMESTER 1
	</div>
	
	<div class="header">SUBJECTS:</div><div class="header" style="margin-left: 110px;">THEORY:</div><div class="header" style="margin-left: 240px;">INTERNALS:</div><div class="text2" style="margin-left: 240px;background:none;margin:0px;" disabled="disabled"></div><br/>
	LANGUAGE:<input type="text" class="text1" style="margin-top: 35px;margin-left: 56px;" value="<?php echo $s1st1; ?>" name="sem1t1" id="sem1t1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s1si1; ?>" name="sem1i1" id="sem1i1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	ENGLISH:<input type="text" class="text1" style="margin-left: 75px;" value="<?php echo $s1st2; ?>" name="sem1t2" id="sem1t2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s1si2; ?>" name="sem1i2" id="sem1i2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	C PROGRAMMING:<input type="text" class="text1" style="margin-left: 3px;" value="<?php echo $s1st3; ?>" name="sem1t3" id="sem1t3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s1si3; ?>" name="sem1i3" id="sem1i3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	DIGITAL-ELEC:<input type="text" class="text1" style="margin-left: 30px;" value="<?php echo $s1st4; ?>" name="sem1t4" id="sem1t4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s1si4; ?>" name="sem1i4" id="sem1i4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	DESCRETE MATHS:<input type="text" class="text1" style="margin-left: 0px;" value="<?php echo $s1st5; ?>" name="sem1t5" id="sem1t5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s1si5; ?>" name="sem1i5" id="sem1i5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	PUBLIC HEALTH:<input type="text" class="text1" style="margin-left: 18px;" value="<?php echo $s1st6; ?>" name="sem1t6" id="sem1t6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s1si6; ?>" name="sem1i6" id="sem1i6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	CC AND EC:<input type="text" class="text1" style="visibility: hidden" placeholder="CC & EC" value="0">
	<input type="label" disabled="disabled" style="visibility: hidden" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" style="margin-left: 63px;" value="<?php echo $s1st7; ?>" name="sem1i7" id="sem1i7" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	C PRACTICALS:<input type="text" class="text1" style="margin-left: 32px;" value="<?php echo $s1sp1; ?>" name="sem1p1" id="sem1p1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s1spi1; ?>" name="sem1pi1" id="sem1pi1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	
	ELECTRONICS LAB:<input type="text" class="text1" style="margin-left: 0px;" value="<?php echo $s1sp2; ?>" name="sem1p2" id="sem1p2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s1spi2; ?>" name="sem1pi2" id="sem1pi2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	</form>	
</div>	
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;"></div>


<div class="sub-wrapper" style="font-weight:bolder;color:white;margin-top:40px">
<form name="sem2">
	<div class="info">SEMESTER 2<br><br/><input type="text" disabled="disabled" class="text2" value="TOTAL"><input type="text" disabled="disabled" class="text3" value="<?php echo $s2total; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="SECURED"><input type="text" disabled="disabled" class="text3" name="sem2sec" value="<?php echo $s2ob; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="BACKLOGS"><input type="text" disabled="disabled" class="text3" name="sem2back" value="<?php echo $s2back; ?>"><br/><br/>
	SEMESTER 2
	</div>
	
	<div class="header">SUBJECTS:</div><div class="header" style="margin-left: 110px;">THEORY:</div><div class="header" style="margin-left: 240px;">INTERNALS:</div><div class="text2" style="margin-left: 240px;background:none;margin:0px;" disabled="disabled"></div><br/>
	LANGUAGE:<input type="text" class="text1" style="margin-top: 35px;margin-left: 66px;" value="<?php echo $s2st1; ?>" name="sem2t1" id="sem2t1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s2si1; ?>" name="sem2i1" id="sem2i1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 30">
	<br>
	
	ENGLISH:<input type="text" class="text1" style="margin-left: 85px;" value="<?php echo $s2st2; ?>" name="sem2t2" id="sem2t2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s2si2; ?>" name="sem2i2" id="sem2i2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	DATA STRUCTURE:<input type="text" class="text1" style="margin-left: 10px;" value="<?php echo $s2st3; ?>" name="sem2t3" id="sem2t3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s2si3; ?>" name="sem2i3" id="sem2i3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	DBMS:<input type="text" class="text1" style="margin-left: 112px;" value="<?php echo $s2st4; ?>" name="sem2t4" id="sem2t4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s2si4; ?>" name="sem2i4" id="sem2i4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	NUMERIC MATHS:<input type="text" class="text1" style="margin-left: 17px;" value="<?php echo $s2st5; ?>" name="sem2t5" id="sem2t5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s2si5; ?>" name="sem2i5" id="sem2i5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	IND CONSTITUTION:<input type="text" class="text1" style="margin-left: 0px;" value="<?php echo $s2st6; ?>" name="sem2t6" id="sem2t6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s2si6; ?>" name="sem2i6" id="sem2i6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	CC AND EC:<input type="text" class="text1" style="visibility: hidden" placeholder="CC & EC" value="0">
	<input type="label" disabled="disabled" style="visibility: hidden" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" style="margin-left: 69px;" value="<?php echo $s2st7; ?>" name="sem2i7" id="sem2i7" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	DS PRACTICALS:<input type="text" class="text1" style="margin-left: 28px;" value="<?php echo $s2sp1; ?>" name="sem2p1" id="sem2p1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s2spi1; ?>" name="sem2pi1" id="sem2pi1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	
	DBMS LAB:<input type="text" class="text1" style="margin-left: 72px;" value="<?php echo $s2sp2; ?>" name="sem2p2" id="sem2p2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s2spi2; ?>" name="sem2pi2" id="sem2pi2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	</form>	
</div>	
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;"></div>

<div class="sub-wrapper" style="font-weight:bolder;color:white;margin-top:40px">
<form name="sem3">
	<div class="info">SEMESTER 3<br><br/><input type="text" disabled="disabled" class="text2" value="TOTAL"><input type="text" disabled="disabled" class="text3" value="<?php echo $s3total; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="SECURED"><input type="text" disabled="disabled" class="text3" name="sem3sec" value="<?php echo $s3ob; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="BACKLOGS"><input type="text" disabled="disabled" class="text3" name="sem3back" value="<?php echo $s3back; ?>"><br/><br/>
	SEMESTER 3
	</div>
	
	<div class="header">SUBJECTS:</div><div class="header" style="margin-left: 110px;">THEORY:</div><div class="header" style="margin-left: 240px;">INTERNALS:</div><div class="text2" style="margin-left: 240px;background:none;margin:0px;" disabled="disabled"></div><br/>
	LANGUAGE:<input type="text" class="text1" style="margin-top: 35px;margin-left: 56px;" value="<?php echo $s3st1; ?>" name="sem3t1" id="sem3t1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s3si1; ?>" name="sem3i1" id="sem3i1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 30">
	<br>
	
	ENGLISH:<input type="text" class="text1" style="margin-left: 75px;" value="<?php echo $s3st2; ?>" name="sem3t2" id="sem3t2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s3si2; ?>" name="sem3i2" id="sem3i2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	OOPS C++:<input type="text" class="text1" style="margin-left: 70px;" value="<?php echo $s3st3; ?>" name="sem3t3" id="sem3t3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s3si3; ?>" name="sem3i3" id="sem3i3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	FINANCIAL A/C:<input type="text" class="text1" style="margin-left: 25px;" value="<?php echo $s3st4; ?>" name="sem3t4" id="sem3t4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s3si4; ?>" name="sem3i4" id="sem3i4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	OS:<input type="text" class="text1" style="margin-left: 127px;" value="<?php echo $s3st5; ?>" name="sem3t5" id="sem3t5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s3si5; ?>" name="sem3i5" id="sem3i5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	CULTURE/DVSTY:<input type="text" class="text1" style="margin-left: 14px;" value="<?php echo $s3st6; ?>" name="sem3t6" id="sem3t6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s3si6; ?>" name="sem3i6" id="sem3i6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	CC AND EC:<input type="text" class="text1" style="visibility: hidden" placeholder="CC & EC" value="0">
	<input type="label" disabled="disabled" style="visibility: hidden" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" style="margin-left: 60px;" value="<?php echo $s3st7; ?>" name="sem3i7" id="sem3i7" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	C++ PRACTICALS:<input type="text" class="text1" style="margin-left: 10px;" value="<?php echo $s3sp1; ?>" name="sem3p1" id="sem3p1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s3spi1; ?>" name="sem3pi1" id="sem3pi1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	
	TALLY LAB:<input type="text" class="text1" style="margin-left: 56px;" value="<?php echo $s3sp2; ?>" name="sem3p2" id="sem3p2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s3spi2; ?>" name="sem3pi2" id="sem3pi2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	</form>	
</div>	
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;"></div>


<div class="sub-wrapper" style="font-weight:bolder;color:white;margin-top:40px">
<form name="sem4">
	<div class="info">SEMESTER 4<br><br/><input type="text" disabled="disabled" class="text2" value="TOTAL"><input type="text" disabled="disabled" class="text3" value="<?php echo $s4total; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="SECURED"><input type="text" disabled="disabled" class="text3" name="sem3sec" value="<?php echo $s4ob; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="BACKLOGS"><input type="text" disabled="disabled" class="text3" name="sem3back" value="<?php echo $s4back; ?>"><br/><br/>
	SEMESTER 4
	</div>
	
	<div class="header">SUBJECTS:</div><div class="header" style="margin-left: 110px;">THEORY:</div><div class="header" style="margin-left: 240px;">INTERNALS:</div><div class="text2" style="margin-left: 240px;background:none;margin:0px;" disabled="disabled"></div><br/>
	LANGUAGE:<input type="text" class="text1" style="margin-top: 35px;margin-left: 56px;" value="<?php echo $s4st1; ?>" name="sem4t1" id="sem4t1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s4si1; ?>" name="sem4i1" id="sem4i1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 30">
	<br>
	
	ENGLISH:<input type="text" class="text1" style="margin-left: 75px;" value="<?php echo $s4st2; ?>" name="sem4t2" id="sem4t2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s4si2; ?>" name="sem4i2" id="sem4i2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	UNIX:<input type="text" class="text1" style="margin-left: 106px;" value="<?php echo $s4st3; ?>" name="sem4t3" id="sem4t3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s4si3; ?>" name="sem4i3" id="sem4i3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	VISUAL PROGRAM:<input type="text" class="text1" style="margin-left: -2px;" value="<?php echo $s4st4; ?>" name="sem4t4" id="sem4t4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s4si4; ?>" name="sem4i4" id="sem4i4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	OP RESEARCH:<input type="text" class="text1" style="margin-left: 32px;" value="<?php echo $s4st5; ?>" name="sem4t5" id="sem4t5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s4si5; ?>" name="sem4i5" id="sem4i5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	PERSONALITY D/T:<input type="text" class="text1" style="margin-left: 2px;" value="<?php echo $s4st6; ?>" name="sem4t6" id="sem4t6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s4si6; ?>" name="sem4i6" id="sem4i6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	CC AND EC:<input type="text" class="text1" style="visibility: hidden" placeholder="CC & EC" value="0">
	<input type="label" disabled="disabled" style="visibility: hidden" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" style="margin-left: 60px;" value="<?php echo $s4st7; ?>" name="sem4i7" id="sem4i7" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	VB PRACTICALS:<input type="text" class="text1" style="margin-left: 18px;" value="<?php echo $s4sp1; ?>" name="sem4p1" id="sem4p1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s4spi1; ?>" name="sem4pi1" id="sem4pi1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	
	UNIX LAB:<input type="text" class="text1" style="margin-left: 70px;" value="<?php echo $s4sp2; ?>" name="sem4p2" id="sem4p2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s4spi2; ?>" name="sem4pi2" id="sem4pi2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	</form>	
</div>	
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;"></div>

<div class="sub-wrapper" style="font-weight:bolder;color:white;margin-top:40px">
<form name="sem5">
	<div class="info">SEMESTER 5<br><br/><input type="text" disabled="disabled" class="text2" value="TOTAL"><input type="text" disabled="disabled" class="text3" value="<?php echo $s5total; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="SECURED"><input type="text" disabled="disabled" class="text3" name="sem3sec" value="<?php echo $s5ob; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="BACKLOGS"><input type="text" disabled="disabled" class="text3" name="sem3back" value="<?php echo $s5back; ?>"><br/><br/>
	SEMESTER 5
	</div>
	
	<div class="header">SUBJECTS:</div><div class="header" style="margin-left: 110px;">THEORY:</div><div class="header" style="margin-left: 240px;">INTERNALS:</div><div class="text2" style="margin-left: 240px;background:none;margin:0px;" disabled="disabled"></div><br/>
	DCN:<input type="text" class="text1" style="margin-top: 35px;margin-left: 158px;" value="<?php echo $s5st1; ?>" name="sem5t1" id="sem5t1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s5si1; ?>" name="sem5i1" id="sem5i1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 50">
	<br>
	
	S/W ENGINEERING:<input type="text" class="text1" style="margin-left: 42px;" value="<?php echo $s5st2; ?>" name="sem5t2" id="sem5t2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s5si2; ?>" name="sem5i2" id="sem5i2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	COMP-ARCHITECTURE:<input type="text" class="text1" style="margin-left: 6px;" value="<?php echo $s5st3; ?>" name="sem5t3" id="sem5t3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s5si3; ?>" name="sem5i3" id="sem5i3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	JAVA PROGRAMMING:<input type="text" class="text1" style="margin-left: 20px;" value="<?php echo $s5st4; ?>" name="sem5t4" id="sem5t4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s5si4; ?>" name="sem5i4" id="sem5i4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	MICRO PROCESSOR:<input type="text" class="text1" style="margin-left: 32px;" value="<?php echo $s5st5; ?>" name="sem5t5" id="sem5t5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s5si5; ?>" name="sem5i5" id="sem5i5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	BANKING AND FINANCE:<input type="text" class="text1" style="margin-left: 0px;" value="<?php echo $s5st6; ?>" name="sem5t6" id="sem5t6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s5si6; ?>" name="sem5i6" id="sem5i6" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	PROJECT:<input type="text" class="text1" style="margin-left: 116px;" value="<?php echo $s5sp1; ?>" name="sem5p1" id="sem5p1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s5spi1; ?>" name="sem5pi1" id="sem5pi1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	JAVA PRACTICALS:<input type="text" class="text1" style="margin-left: 44px;" value="<?php echo $s5sp2; ?>" name="sem5p2" id="sem5p2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s5spi2; ?>" name="sem5pi2" id="sem5pi2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	
	ALP LAB:<input type="text" class="text1" style="margin-left: 120px;" value="<?php echo $s5sp3; ?>" name="sem5p3" id="sem5p3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s5spi3; ?>" name="sem5pi3" id="sem5pi3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	</form>	
</div>	
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;"></div>

<div class="sub-wrapper" style="font-weight:bolder;color:white;margin-top:40px">
<form name="sem6">
	<div class="info">SEMESTER 6<br><br/><input type="text" disabled="disabled" class="text2" value="TOTAL"><input type="text" disabled="disabled" class="text3" value="<?php echo $s6total; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="SECURED"><input type="text" disabled="disabled" class="text3" name="sem3sec" value="<?php echo $s6ob; ?>"><br/>
	
	<input type="text" disabled="disabled" class="text2" value="BACKLOGS"><input type="text" disabled="disabled" class="text3" name="sem3back" value="<?php echo $s6back; ?>"><br/><br/>
	SEMESTER 6
	</div>
	
	<div class="header">SUBJECTS:</div><div class="header" style="margin-left: 110px;">THEORY:</div><div class="header" style="margin-left: 240px;">INTERNALS:</div><div class="text2" style="margin-left: 240px;background:none;margin:0px;" disabled="disabled"></div><br/>
	SYSTEM PROGRAMMING:<input type="text" class="text1" style="margin-top: 35px;margin-left: 0px;" value="<?php echo $s6st1; ?>" name="sem6t1" id="sem6t1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s6si1; ?>" name="sem6i1" id="sem6i1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem2hin" value="MAX 50">
	<br>
	
	CRYPTOGRAPHY:<input type="text" class="text1" style="margin-left: 62px;" value="<?php echo $s6st2; ?>" name="sem6t2" id="sem6t2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s6si2; ?>" name="sem6i2" id="sem6i2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	THEORY OF COMPUTING:<input type="text" class="text1" style="margin-left: -2px;" value="<?php echo $s6st3; ?>" name="sem6t3" id="sem6t3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<input type="text" class="text1" value="<?php echo $s6si3; ?>" name="sem6i3" id="sem6i3" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 50">
	<br>
	
	WEB PROGRAMMING:<input type="text" class="text1" style="margin-left: 27px;" value="<?php echo $s6st4; ?>" name="sem6t4" id="sem6t4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s6si4; ?>" name="sem6i4" id="sem6i4" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	ENTREPRENEURSHIP:<input type="text" class="text1" style="margin-left: 28px;" value="<?php echo $s6st5; ?>" name="sem6t5" id="sem6t5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 70">
	<input type="text" class="text1" value="<?php echo $s6si5; ?>" name="sem6i5" id="sem6i5" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 30">
	<br>
	
	
	PROJECT:<input type="text" class="text1" style="margin-left: 120px;" value="<?php echo $s6sp1; ?>" name="sem6p1" id="sem6p1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 200">
	<input type="text" class="text1" value="<?php echo $s6spi1; ?>" name="sem6pi1" id="sem6pi1" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 100">
	<br>
	
	WEB PRACTICALS:<input type="text" class="text1" style="margin-left: 49px;" value="<?php echo $s6sp2; ?>" name="sem6p2" id="sem6p2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 35">
	<input type="text" class="text1" value="<?php echo $s6spi2; ?>" name="sem6pi2" id="sem6pi2" disabled="disabled">
	<input type="label" disabled="disabled" class="text2" name="sem1hin" value="MAX 15">
	<br>
	
	</form>	
</div>	
<div style="height: 0px; width: 100%;border: double #BD2F31; margin-top: 5px;"></div>


</div>
</body>
</html>
