<?php
error_reporting(0);
session_start();
$temp=$_SESSION['treg'];
$db=new mysqli("localhost","root","","proj");
if($db==false)
	echo"ERROR IN CONNECTING DATABASE";
	$con1=mysqli_query($db,"select * from sem1 where reg_no='$temp'");
$sem1=mysqli_fetch_array($con1);
if(($sem1['reg_no']==$temp))
{
$regno=$sem1['reg_no'];
$s1st1=$sem1['sem1subt1'];
$s1st2=$sem1['sem1subt2'];
$s1st3=$sem1['sem1subt3'];
$s1st4=$sem1['sem1subt4'];
$s1st5=$sem1['sem1subt5'];
$s1st6=$sem1['sem1subt6'];
$s1st7=$sem1['sem1subt7'];
$s1si1=$sem1['sem1subi1'];
$s1si2=$sem1['sem1subi2'];
$s1si3=$sem1['sem1subi3'];
$s1si4=$sem1['sem1subi4'];
$s1si5=$sem1['sem1subi5'];
$s1si6=$sem1['sem1subi6'];
$s1sp1=$sem1['sem1subp1'];
$s1spi1=$sem1['sem1subpi1'];
$s1sp2=$sem1['sem1subp2'];
$s1spi2=$sem1['sem1subpi2'];
$s1ob=$sem1['sem1obtained'];
$s1back=$sem1['sem1backs'];
$s1total=$sem1['sem1total'];
}
else
{
$regno=0;
$s1st1=0;
$s1st2=0;
$s1st3=0;
$s1st4=0;
$s1st5=0;
$s1st6=0;
$s1st7=0;
$s1si1=0;
$s1si2=0;
$s1si3=0;
$s1si4=0;
$s1si5=0;
$s1si6=0;
$s1sp1=0;
$s1spi1=0;
$s1sp2=0;
$s1spi2=0;
$s1ob=0;
$s1back=0;
$s1total=0;
}



// everything for the semester 2
	$con2=mysqli_query($db,"select * from sem2 where reg_no='$temp'");
$sem2=mysqli_fetch_array($con2);
if(($sem2['reg_no']==$temp))
{
$regno=$sem2['reg_no'];
$s2st1=$sem2['sem2subt1'];
$s2st2=$sem2['sem2subt2'];
$s2st3=$sem2['sem2subt3'];
$s2st4=$sem2['sem2subt4'];
$s2st5=$sem2['sem2subt5'];
$s2st6=$sem2['sem2subt6'];
$s2st7=$sem2['sem2subt7'];
$s2si1=$sem2['sem2subi1'];
$s2si2=$sem2['sem2subi2'];
$s2si3=$sem2['sem2subi3'];
$s2si4=$sem2['sem2subi4'];
$s2si5=$sem2['sem2subi5'];
$s2si6=$sem2['sem2subi6'];
$s2sp1=$sem2['sem2subp1'];
$s2spi1=$sem2['sem2subpi1'];
$s2sp2=$sem2['sem2subp2'];
$s2spi2=$sem2['sem2subpi2'];
$s2ob=$sem2['sem2obtained'];
$s2back=$sem2['sem2backs'];
$s2total=$sem2['sem2total'];
}
else
{
$regno=0;
$s2st1=0;
$s2st2=0;
$s2st3=0;
$s2st4=0;
$s2st5=0;
$s2st6=0;
$s2st7=0;
$s2si1=0;
$s2si2=0;
$s2si3=0;
$s2si4=0;
$s2si5=0;
$s2si6=0;
$s2sp1=0;
$s2spi1=0;
$s2sp2=0;
$s2spi2=0;
$s2ob=0;
$s2back=0;
$s2total=0;
}



// everything for the semester 3
	$con3=mysqli_query($db,"select * from sem3 where reg_no='$temp'");
$sem3=mysqli_fetch_array($con3);
if(($sem3['reg_no']==$temp))
{
$regno=$sem3['reg_no'];
$s3st1=$sem3['sem3subt1'];
$s3st2=$sem3['sem3subt2'];
$s3st3=$sem3['sem3subt3'];
$s3st4=$sem3['sem3subt4'];
$s3st5=$sem3['sem3subt5'];
$s3st6=$sem3['sem3subt6'];
$s3st7=$sem3['sem3subt7'];
$s3si1=$sem3['sem3subi1'];
$s3si2=$sem3['sem3subi2'];
$s3si3=$sem3['sem3subi3'];
$s3si4=$sem3['sem3subi4'];
$s3si5=$sem3['sem3subi5'];
$s3si6=$sem3['sem3subi6'];
$s3sp1=$sem3['sem3subp1'];
$s3spi1=$sem3['sem3subpi1'];
$s3sp2=$sem3['sem3subp2'];
$s3spi2=$sem3['sem3subpi2'];
$s3ob=$sem3['sem3obtained'];
$s3back=$sem3['sem3backs'];
$s3total=$sem3['sem3total'];
}
else
{
$regno=0;
$s3st1=0;
$s3st2=0;
$s3st3=0;
$s3st4=0;
$s3st5=0;
$s3st6=0;
$s3st7=0;
$s3si1=0;
$s3si2=0;
$s3si3=0;
$s3si4=0;
$s3si5=0;
$s3si6=0;
$s3sp1=0;
$s3spi1=0;
$s3sp2=0;
$s3spi2=0;
$s3ob=0;
$s3back=0;
$s3total=0;
}


// everything for the semester 4
$con4=mysqli_query($db,"select * from sem4 where reg_no='$temp'");
$sem4=mysqli_fetch_array($con4);
if(($sem4['reg_no']==$temp))
{
$regno=$sem4['reg_no'];
$s4st1=$sem4['sem4subt1'];
$s4st2=$sem4['sem4subt2'];
$s4st3=$sem4['sem4subt3'];
$s4st4=$sem4['sem4subt4'];
$s4st5=$sem4['sem4subt5'];
$s4st6=$sem4['sem4subt6'];
$s4st7=$sem4['sem4subt7'];
$s4si1=$sem4['sem4subi1'];
$s4si2=$sem4['sem4subi2'];
$s4si3=$sem4['sem4subi3'];
$s4si4=$sem4['sem4subi4'];
$s4si5=$sem4['sem4subi5'];
$s4si6=$sem4['sem4subi6'];
$s4sp1=$sem4['sem4subp1'];
$s4spi1=$sem4['sem4subpi1'];
$s4sp2=$sem4['sem4subp2'];
$s4spi2=$sem4['sem4subpi2'];
$s4ob=$sem4['sem4obtained'];
$s4back=$sem4['sem4backs'];
$s4total=$sem4['sem4total'];
}
else
{
$regno=0;
$s4st1=0;
$s4st2=0;
$s4st3=0;
$s4st4=0;
$s4st5=0;
$s4st6=0;
$s4st7=0;
$s4si1=0;
$s4si2=0;
$s4si3=0;
$s4si4=0;
$s4si5=0;
$s4si6=0;
$s4sp1=0;
$s4spi1=0;
$s4sp2=0;
$s4spi2=0;
$s4ob=0;
$s4back=0;
$s4total=0;
}
	
	
	//sem5
	$con5=mysqli_query($db,"select * from sem5 where reg_no='$temp'");
$sem5=mysqli_fetch_array($con5);
if(($sem5['reg_no']==$temp))
{
$regno=$sem5['reg_no'];
$s5st1=$sem5['sem5subt1'];
$s5st2=$sem5['sem5subt2'];
$s5st3=$sem5['sem5subt3'];
$s5st4=$sem5['sem5subt4'];
$s5st5=$sem5['sem5subt5'];
$s5st6=$sem5['sem5subt6'];
$s5si1=$sem5['sem5subi1'];
$s5si2=$sem5['sem5subi2'];
$s5si3=$sem5['sem5subi3'];
$s5si4=$sem5['sem5subi4'];
$s5si5=$sem5['sem5subi5'];
$s5si6=$sem5['sem5subi6'];
$s5sp1=$sem5['sem5subp1'];
$s5spi1=$sem5['sem5subpi1'];
$s5sp2=$sem5['sem5subp2'];
$s5spi2=$sem5['sem5subpi2'];
$s5sp3=$sem5['sem5subp3'];
$s5spi3=$sem5['sem5subpi3'];
$s5ob=$sem5['sem5obtained'];
$s5back=$sem5['sem5backs'];
$s5total=$sem5['sem5total'];
}
else
{
$regno=0;
$s5st1=0;
$s5st2=0;
$s5st3=0;
$s5st4=0;
$s5st5=0;
$s5st6=0;
$s5si1=0;
$s5si2=0;
$s5si3=0;
$s5si4=0;
$s5si5=0;
$s5si6=0;
$s5sp1=0;
$s5spi1=0;
$s5sp2=0;
$s5spi2=0;
$s5sp3=0;
$s5spi3=0;
$s5ob=0;
$s5back=0;
$s5total=0;
}


// EVERYTHING FOR SEMESTER 6
	$con6=mysqli_query($db,"select * from sem6 where reg_no='$temp'");
$sem6=mysqli_fetch_array($con6);
if(($sem6['reg_no']==$temp))
{
$regno=$sem6['reg_no'];
$s6st1=$sem6['sem6subt1'];
$s6st2=$sem6['sem6subt2'];
$s6st3=$sem6['sem6subt3'];
$s6st4=$sem6['sem6subt4'];
$s6st5=$sem6['sem6subt5'];
$s6si1=$sem6['sem6subi1'];
$s6si2=$sem6['sem6subi2'];
$s6si3=$sem6['sem6subi3'];
$s6si4=$sem6['sem6subi4'];
$s6si5=$sem6['sem6subi5'];
$s6sp1=$sem6['sem6subp1'];
$s6spi1=$sem6['sem6subpi1'];
$s6sp2=$sem6['sem6subp2'];
$s6spi2=$sem6['sem6subpi2'];
$s6ob=$sem6['sem6obtained'];
$s6back=$sem6['sem6backs'];
$s6total=$sem6['sem6total'];
}
else
{
$regno=0;
$s6st1=0;
$s6st2=0;
$s6st3=0;
$s6st4=0;
$s6st5=0;
$s6si1=0;
$s6si2=0;
$s6si3=0;
$s6si4=0;
$s6si5=0;
$s6sp1=0;
$s6spi1=0;
$s6sp2=0;
$s6spi2=0;
$s6ob=0;
$s6back=0;
$s6total=0;
}	
	
	
	//ACTUAL STATS CODE REPRESENTATION
$finalscore=$s1total+$s2total+$s3total+$s4total+$s5total+$s6total;
$gotscore=$s1ob+$s2ob+$s3ob+$s4ob+$s5ob+$s6ob;
$s1per=($s1ob/800)*100;
$s2per=($s2ob/800)*100;
$s3per=($s3ob/800)*100;
$s4per=($s4ob/800)*100;
$s5per=($s5ob/1000)*100;
$s6per=($s6ob/1000)*100;
if($s1per!=0 && $s2per!=0 && $s3per!=0 && $s4per!=0 && $s5per!=0 && $s6per!=0){$per=($s1per+$s2per+$s3per+$s4per+$s5per+$s6per)/6;$sem=6;}
else if($s1per!=0 && $s2per!=0 && $s3per!=0 && $s4per!=0 && $s5per!=0){$per=($s1per+$s2per+$s3per+$s4per+$s5per)/5;$sem=5;}
else if($s1per!=0 && $s2per!=0 && $s3per!=0 && $s4per!=0){$per=($s1per+$s2per+$s3per+$s4per)/4;$sem=4;}
else if($s1per!=0 && $s2per!=0 && $s3per!=0){$per=($s1per+$s2per+$s3per)/3;$sem=3;}
else if($s1per!=0 && $s2per!=0){$per=($s1per+$s2per)/2;$sem=2;}
else if($s1per!=0){$per=$s1per;$sem=1;}
else {$per=0;$sem=0;}
$finalbacks=$s1back+$s2back+$s3back+$s4back+$s5back+$s6back;
$gpa=$per/9.5;

$practical1=$s1sp1+$s1spi1+$s1st3+$s1si3;
$practical2=$s1sp2+$s1spi2+$s1st4+$s1si4;
$practical3=$s2sp1+$s2spi1+$s2st3+$s2si3;
$practical4=$s2sp2+$s2spi2+$s2st4+$s2si4;
$practical5=$s3sp1+$s3spi1+$s3st3+$s3si3;
$practical6=$s3sp2+$s3spi2+$s3st4+$s3si4;
$practical7=$s4sp1+$s4spi1+$s4st4+$s4si4;
$practical8=$s4sp2+$s4spi2+$s4st3+$s4si3;
$practical9=$s5sp2+$s5spi2+$s5st4+$s5si4;
$practical10=$s5sp3+$s5spi3+$s5st5+$s5si5;
$practical11=$s6sp2+$s6spi2+$s6st4+$s6si4;
$finalpracticals=max($practical1,$practical2,$practical3,$practical4,$practical5,$practical6,$practical7,$practical8,$practical9,$practical10,$practical11);
if($finalpracticals>0)
{
if($finalpracticals==$practical1) $bestsub="PROGRAMMING IN C";
if($finalpracticals==$practical2) $bestsub="DIGITAL ELECTRONICS";
if($finalpracticals==$practical3) $bestsub="DATA STRUCTURES";
if($finalpracticals==$practical4) $bestsub="DATABASE MANAGEMENT";
if($finalpracticals==$practical5) $bestsub="OOPS USING C++";
if($finalpracticals==$practical6) $bestsub="TALLY";
if($finalpracticals==$practical7) $bestsub="VISUAL BASIC";
if($finalpracticals==$practical8) $bestsub="UNIX";
if($finalpracticals==$practical9) $bestsub="JAVA";
if($finalpracticals==$practical10) $bestsub="MICRO PROCESSOR";
if($finalpracticals==$practical11) $bestsub="WEB PROGRAMMING";
}




$array1 = array($practical1,$practical2,$practical3,$practical4,$practical5,$practical6,$practical7,$practical8,$practical9,$practical10,$practical11);
$finalbpracticals=min(array_filter($array1));
if($finalbpracticals>0)
{
if($finalbpracticals==$practical1) $badsub="PROGRAMMING IN C";
if($finalbpracticals==$practical2) $badsub="DIGITAL ELECTRONICS";
if($finalbpracticals==$practical3) $badsub="DATA STRUCTURES";
if($finalbpracticals==$practical4) $badsub="DATABASE MANAGEMENT";
if($finalbpracticals==$practical5) $badsub="OOPS USING C++";
if($finalbpracticals==$practical6) $badsub="TALLY";
if($finalbpracticals==$practical7) $badsub="VISUAL BASIC";
if($finalbpracticals==$practical8) $badsub="UNIX";
if($finalbpracticals==$practical9) $badsub="JAVA";
if($finalbpracticals==$practical10) $badsub="MICRO PROCESSOR";
if($finalbpracticals==$practical11) $badsub="WEB PROGRAMMING";
}

$mx=max($s1per,$s2per,$s3per,$s4per,$s5per,$s6per);
if($mx>0)
{
if($mx==$s1per) $disp="SEMESTER 1";
if($mx==$s2per) $disp="SEMESTER 2";
if($mx==$s3per) $disp="SEMESTER 3";
if($mx==$s4per) $disp="SEMESTER 4";
if($mx==$s5per) $disp="SEMESTER 5";
if($mx==$s6per) $disp="SEMESTER 6";
}