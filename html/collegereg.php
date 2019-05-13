<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
 .later{ 
   display: none;
	 
 }
 .showhim:hover .later{
   display : block;
	 transition: 0.5s ease-out;
 }
 .showhim:hover .start{
margin-top: 30px;
transition: 0.5s ease;
	 box-shadow: 0px 9px 0px rgba(19, 34, 38, 1), 0px 9px 25px rgba(0,0,0,.7);
		background: #525b56;
 }
	.start
	{
		width: 700px;
		height:10px;
		background: #132226;
		padding-top:20px;
		padding-bottom: 30px;
		text-align: center;
		transition: 0.5s ease;
		box-shadow: 0px 9px 0px rgba(82, 91, 86, 1), 0px 9px 25px rgba(0,0,0,.7);
		border-radius: 65px;
		color:white;
		font-size: 32px;
	}
	.showhim
	{
		height:60px;width: 700px; margin-top: 100px;margin-left: 40px;
		transition: 0.5s ease-out;
		 margin-left: 335px;
	}
	.button1
	{
		height: 40px;
		width: 100px;
		margin-left:10px;
		background: #8F8F8F;
		text-align: center;
		padding-top: 8px;
		border-radius: 10px;
		font-weight: bolder;
		box-shadow: 0px 3px 0px rgba(19, 34, 38, 1), 0px 9px 25px rgba(0,0,0,.7);
		transition: 0.5s ease;
		cursor:pointer;
	}
	.button1:hover
	{
		height: 40px;
		width: 100px;
		margin-left:10px;
		background:#5DC947;
		text-align: center;
		padding-top: 8px;
		border-radius: 10px;
		font-weight: bolder;
		box-shadow: 0px 3px 0px rgba(255, 255, 255, 1), 0px 9px 25px rgba(0,0,0,.7);
		border-left:solid #13226;
		border-right:solid #13226;
		transition: 0.5s ease;
		color: white;
		
	}
	#bk:hover
	{
		box-shadow: 0px 9px 0px rgba(19, 34, 38, 1), 0px 9px 25px rgba(0,0,0,.7);
		background: #525b56;
	}
	.back
	{
		position: absolute;
		height: 50px;
		width:50px;
		background:url(../images/logo/home-1.jpg);
		border-radius: 50%;
		border-bottom:solid 5px black;
		margin-top:0px;
		margin-left: 10px;
	}
	a
	{
		text-decoration: none !important;
	}
	</style>
</head>

<body background="../images/patterns/congruent_pentagonbw.png">
<a href="collegereg.php"><div class="back"></div></a><a href="login_page.php"><div class="back" style="margin-left: 1300px;background: url(../images/logo/close.jpg)"></div></a>
<div class="showhim">
     <div class="later">
		 <a href="reportsem1.php"><input type="button" id="sem1" class="button1" value="sem1" style="margin-left: 10px"></a>
		<a href="reportsem2.php"><input type="button" class="button1" value="sem2"></a>
		<a href="reportsem3.php"><input type="button" class="button1" value="sem3"></a>
		<a href="reportsem4.php"><input type="button" class="button1" value="sem4"></a>
		<a href="reportsem5.php"><input type="button" class="button1" value="sem5"></a>
		<a href="reportsem6.php"><input type="button" class="button1" value="sem6"></a>
     </div>
     <div class="start">SEMESTER REPORT</div>
</div>
<a href="reportbacks.php"><div class="start" id="bk" style="margin-top: 90px;margin-left:335px;cursor: pointer;">BACKLOG REPORT</div></a>
</body>
</html>