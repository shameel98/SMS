<!doctype html>
<?php
error_reporting(0);
if(isset($_POST['gobtn']))
{
$uname=$_POST['uname'];
$pword=$_POST['pword'];
$uname=stripcslashes($uname);
$pword=stripcslashes($pword);
//database connection
$db=new mysqli("localhost","root","","proj");
$result = mysqli_query($db, "SELECT * FROM register where reg_no='$uname' and password='$pword'");
//query
//$result = mysql_query("select * from proj.register where name='$uname' and password='$pword'");
$row=mysqli_fetch_array($result);
if(($row['reg_no']==$uname) && ($row['password']==$pword))
{
	$temp=$row['name'];	
	$temp2=$row['reg_no'];
	 session_start();
 $_SESSION['tname'] = $temp;
	$_SESSION['treg'] = $temp2;
	header("Location:home.php?regno=$temp");
}
	else if(($uname=="admin") && ($pword=="admin"))
	{
		header("Location:admin choice.html");
	}
	else if(($uname=="staff") && ($pword=="staff"))
	{
		header("Location:collegereg.php");
	}
else
{
	//echo"<script type='text/javascript'>alert('login failed')</script>";
	echo"<div style='color:red;width:300px;height:20px;margin-left:550px;'>USERNAME/PASSWORD INCORRECT</div>";
}
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/login_style.css" rel="stylesheet" type="text/css">
<script type="application/javascript">
	function validate()
	{
	if(myform.uname.value=="" || myform.pword.value=="")
	{alert("USERNAME/PASSWORD CANNOT BE SET TO BLANK");return false;}
	}
	</script>
</head>

<body background="../images/patterns/stardust_@2X.png">
<div class="logo"><img src="../images/logo/logo1.jpg" width="250" height="150"></div>
   <div class="cover">
    <form name="myform" action="login_page.php" method="post" onsubmit="return validate()">
    <br/><br/><br/>
    <input type="text" name="uname" id="regpass" class="txt" placeholder="REGISTER_NO" hspace="30">
    <input type="password" name="pword" class="txt" placeholder="PASSWORD" hspace="28">
<input type="submit" value="LOGIN" class="button1" name="gobtn">
</form>
	</div>
</body>
</html>