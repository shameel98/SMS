<!doctype html>
<?php
if(isset($_POST['regbut']))
{
	$name=$_POST['name'];
	$reg_no=$_POST['reg_no'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$repass=$_POST['repass'];
	$marks=$_POST['marks'];
	$dtreg=date('Y-m-d');
	$link = mysqli_connect("localhost", "root", "", "proj");
	if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	}
// Attempt insert query execution
$sql = "INSERT INTO register (name, reg_no, email, password,marks,dtreg) VALUES ('$name', '$reg_no', '$email','$pass','$marks','$dtreg')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
	header("location:login_page.php");
}
	else
	{
    echo "<script type='text/javascript'>alert('ERROR REGISTERING')</script>";
		header("location:registration_page.php");
}
// Close connection
	mysqli_close($link);
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="../css/registration.css" rel="stylesheet" type="text/css">
<script type="application/javascript">
	function check()
	{	if(rform.name.value==""||rform.reg_no.value==""||rform.email.value==""||rform.pass.value==""||rform.repass.value==""||rform.marks.value=="")
			{
				alert("fields cannot be set blank");
				return false;
			}
		else
		{
			var tpass=document.getElementById('ipass').value;
			var trpass=document.getElementById('irpass').value;
				if(tpass!=trpass)
					{
				document.getElementById('notf').style.visibility="visible";
				document.getElementById('irpass').value="";
				document.getElementById('ipass').value="";
						return false;
					}
			else
			return true;
	}	
	}
	function mlim()
	{
		if(document.getElementById('ipass').value.length<=8)
			{
				document.getElementById('pnotf').style.visibility="visible";
				document.getElementById('ipass').value="";
			}
		else if(document.getElementById('ipass').value.length>8)
			document.getElementById('pnotf').style.visibility="hidden";
	}
	function elim()
	{
		document.getElementById('pnotf').style.visibility="hidden";
	}
	function alpha(evt){
evt=(evt)?evt:window.event;
var charCode=(evt.which)?evt.which:evt.keyCode;
if(charCode>32 && (charCode<65 ||charCode>90) &&(charCode<97 ||charCode>122)){
return false;
}
return true;
}
	</script>
</head>

<body background="../images/patterns/dark_embroidery.png">
<div class="pval" id="pnotf">THE PASSWORD MUST BE MINIMUM OF 8 CHARACTERS</div>
<div class="container">
<div class="info" id="notf">PASSWORD DID NOT MATCH</div>
<form name="rform" action="registration_page.php" method="post" onSubmit="return check()">
	<input type="text" class="box" name="name" placeholder="NAME" onFocus="elim()" onKeyPress="return alpha(event)"><br/>
	<input type="text" class="box" name="reg_no"placeholder="REGISTER NUMBER" onFocus="elim()"><br/>
	<input type="email" class="box" name="email"placeholder="EMAIL" onFocus="elim()"><br/>
	<input type="password" class="box" name="pass" id="ipass" placeholder="PASSWORD" onBlur="mlim()"><br/>
	<input type="password" class="box" name="repass" id="irpass" placeholder="RE-ENTER PASSWORD"><br/>
	<textarea class="box" cols="30" rows="10" name="marks" id="marks" placeholder="MARKS INFORMATION" onFocus="elim()"></textarea>
	<input type="submit" class="but" value="REGISTER" name="regbut">
</form>
</div>
</body>
</html>
