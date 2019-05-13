<!doctype html>
<?php
session_start();
include 'code.php';
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/stat.css" type="text/css" rel="stylesheet">
<link href="../css/menu.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
	function prg()
	{
		var s1b="<?php echo $s1back; ?>";
		var s2b="<?php echo $s2back; ?>";
		var s3b="<?php echo $s3back; ?>";
		var s4b="<?php echo $s4back; ?>";
		var s5b="<?php echo $s5back; ?>";
		var s6b="<?php echo $s6back; ?>";
	if(parseInt(document.getElementById('persem1').value)>0)
	{
		if(s1b>0)document.getElementById('persem1').style.borderColor="#f92f39";
		else document.getElementById('persem1').style.borderColor="#1AE343";
	}
		
		if(parseInt(document.getElementById('persem2').value)>0)
		{
			if(s2b>0){document.getElementById('persem2').style.borderColor="#f92f39";
		document.getElementById('line1').style.background="#1AE343";}
			else{document.getElementById('persem2').style.borderColor="#1AE343";
		document.getElementById('line1').style.background="#1AE343";}
		}
		
		if(parseInt(document.getElementById('persem3').value)>0)
		{
		if(s3b>0){document.getElementById('persem3').style.borderColor="#f92f39";
		document.getElementById('line2').style.background="#1AE343";}
		else{document.getElementById('persem3').style.borderColor="#1AE343";
		document.getElementById('line2').style.background="#1AE343";}
		}
		
		if(parseInt(document.getElementById('persem4').value)>0)
		{
		if(s4b>0){document.getElementById('persem4').style.borderColor="#f92f39";
		document.getElementById('line3').style.background="#1AE343";}
		else{document.getElementById('persem4').style.borderColor="#1AE343";
		document.getElementById('line3').style.background="#1AE343";}
		}
		
		if(parseInt(document.getElementById('persem5').value)>0)
			{
		if(s5b>0){document.getElementById('persem5').style.borderColor="#f92f39";
		document.getElementById('line4').style.background="#1AE343";}
		else{document.getElementById('persem5').style.borderColor="#1AE343";
		document.getElementById('line4').style.background="#1AE343";}
			}
		
		if(parseInt(document.getElementById('persem6').value)>0)
		{
			if(s6b>0){document.getElementById('persem6').style.borderColor="#f92f39";
		document.getElementById('line5').style.background="#1AE343";}
		else{document.getElementById('persem6').style.borderColor="#1AE343";
		document.getElementById('line5').style.background="#1AE343";}
	}
	}
	</script>
</head>

<body background="../images/patterns/sat.png" onLoad="prg()">
<div class="hdr">
<a href="logout.php" class="lgt" style="background: url(../images/logo/logout2.png);color:gray;"></a>
<div class="lgn" style="color: gray;">WELCOME<br/><?php echo $_SESSION['tname']; ?></div>
<div class="lgnreg" style="color: gray;"><?php echo $_SESSION['treg']; ?></div>
<div class="lgnreg" style="margin-top: 0px;margin-left:1235px;color: gray;">LOGOUT</div>
</div>
<div class="menubox">
<div class="menubutton" style="border-bottom-color: grey;color:grey">
<a href="home.php">HOME</a></div>
<div class="menubutton" style="border-bottom-color: grey;color:grey">
<a href="add_marks.php">VIEW MARKS</a></div>
<div class="menubutton" style="border-bottom-color: grey;color:grey">
<a href="stats.php">VIEW STATS</a></div>
<div class="menubutton" style="border-bottom-color: grey;color:grey">
<a href="contact.php">CONTACT</a></div>
</div>
<div class="info">
<form>
	<div class="label">REGNO : <input style="font-weight: bolder;text-align: center;text-transform: uppercase;"type="text" value="<?php echo $temp ?>" disabled="disabled"></div>
	<div class="label">NAME. : <input style="font-weight: bolder;text-align: center;text-transform: uppercase;" type="text" value="<?php echo $_SESSION['tname']; ?>" disabled="disabled"></div>
	
	<input type="text" name="persem1" id="persem1" class="perseminfo" style="margin-left: 120px;" value="<?php echo round($s1per,1); ?>" title="SEMESTER 1 PERCENTAGE" disabled="disabled"><input type="text" id="line1" class="line">
	<input type="text" name="persem2" id="persem2" class="perseminfo" value="<?php echo round($s2per,1); ?>" title="SEMESTER 2 PERCENTAGE" disabled="disabled"><input type="text" id="line2" class="line">
	<input type="text" name="persem3" id="persem3" class="perseminfo" value="<?php echo round($s3per,1); ?>" title="SEMESTER 3 PERCENTAGE" disabled="disabled"><input type="text" id="line3" class="line">
	<input type="text" name="persem4" id="persem4" class="perseminfo" value="<?php echo round($s4per,1); ?>" title="SEMESTER 4 PERCENTAGE" disabled="disabled"><input type="text" id="line4" class="line">
	<input type="text" name="persem5" id="persem5" class="perseminfo" value="<?php echo round($s5per,1); ?>" title="SEMESTER 5 PERCENTAGE" disabled="disabled"><input type="text" id="line5" class="line">
	<input type="text" name="persem6" id="persem6" class="perseminfo" value="<?php echo round($s6per,1); ?>" title="SEMESTER 6 PERCENTAGE" disabled="disabled">
	
	<div class="infosec1">
	<div class="infosec2">
	<div class="label2">MARKS SECURED : <input class="text-style" value="<?php echo $gotscore; ?>" type="text" disabled="disabled">/<?php echo $finalscore; ?></div>
	<div class="label2">...PERCENTAGE... : <input class="text-style" type="text" value="<?php echo round($per,2);?>" disabled="disabled">/<?php echo $sem; ?></div>
	<div class="label2">..........GPA.......... : <input class="text-style" type="text" value="<?php echo round($gpa,1);?>" disabled="disabled"></div>
	<div class="label2">.TOTAL BACKS. : <input class="text-style" type="text" value="<?php echo $finalbacks ?>" disabled="disabled"></div>
	</div>
	<div class="infosec3">
		<div class="label2" title="ONLY SUBJECTS WITH PRACTICALS CONSIDERED">BEST SUBJECT : <input class="text-style2" type="text" disabled="disabled" value="<?php echo $bestsub; ?>"></div>
		<div class="label2" title="ONLY SUBJECTS WITH PRACTICALS CONSIDERED">BAD SUBJECT : <input class="text-style2" type="text" disabled="disabled" value="<?php echo $badsub; ?>"></div>
		<div class="label2" style="width: 400px;">BEST PERFORMANCE : <input class="text-style2" type="text" disabled="disabled" value="<?php echo $disp; ?>"></div>
	</div>
	</div>
</form>	
</div>
</body>
</html>
