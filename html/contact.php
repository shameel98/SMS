<!doctype html>
<?php
error_reporting(0);
session_start();
if(isset($_POST['sub']))
{
	$reg_no=$_POST['reg_no'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$msg=$_POST['msg'];
	$link = mysqli_connect("localhost", "root", "", "proj");
	if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
// Attempt insert query execution
$sql = "INSERT INTO feedbaack (reg_no, email, contact, msg) VALUES ('$reg_no', '$email','$contact','$msg')";
if(mysqli_query($link, $sql)){
    echo "<div style=color:white>"."Records inserted successfully."."</div>";
}
	else
	{
    echo "<script type='text/javascript'>alert('ERROR SENDING FEEDBACK')</script>";
		//header("location:contact.php");
}
// Close connection
	mysqli_close($link);
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/menu.css" type="text/css" rel="stylesheet">
<link href="../css/contact.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
	function isnumkey(evt)
	{
		var charcode=(evt.which)?evt.which:Event.keyCode
		if(charcode>31 && (charcode<48||charcode>57))
			return false;
		return true;
	}
	function valid()
	{
		if(document.getElementById('regno').value==""||document.getElementById('emaili').value==""||document.getElementById('cno').value==""||document.getElementById('mesg').value=="")
			{
				alert("CANNOT LEAVE THE FIELDS BLANK");
				return false;
			}
		else
			return true;
	}
	</script>
</head>

<body background="../images/patterns/zwartevilt_@2X.jpg">
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
<div class="container" id="cf">
	<form action="contact.php" method="post" onSubmit="return valid()">
		<input class="txtcls" type="text" placeholder="REGISTER NUMBER" name="reg_no" id="regno">
		<input class="txtcls2" type="email" placeholder="E-MAIL" name="email" id="emaili">
		<input class="txtcls3" type="text" placeholder="CONTACT NUMBER"  maxlength="10" name="contact" onKeyPress="return isnumkey(event)" id="cno">
		<textarea class="txtcls4" rows="5" cols="20" name="msg" placeholder="FEEDBACK" id="mesg"></textarea>
		<input class="subbut" name="sub" type="submit" value="">
	</form>
</div> 
</body>
</html>

