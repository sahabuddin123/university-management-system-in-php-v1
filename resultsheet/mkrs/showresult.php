<?php
include_once('result_sheet.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
<!--
.style9 {font-size: 16px; font-weight: bold; font-style: italic; }
.style12 {
	font-size: 26px;
	font-weight: bold;
}
.style13 {font-size: 24px}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
</head>

<body>
<table width="100%" border="1">
  <tr>
    <td colspan="7" align="center"><div align="center" class="style12">Marksheet With Subject Code </div></td>
  </tr>
  <tr>
    <td colspan="7" align="center"><?php echo"Department : " .$dep ?></td>
  </tr>
  <tr>
    <td colspan="7" align="center"><?php echo"Semester : " .$sem ?></td>
  </tr>
  <tr>
    <td colspan="3" align="center"><?php echo "Roll Number : " .$roll ?></td>
    <td colspan="4" align="center"><?php echo "Registation Number :  " .$reg ?></td>
  </tr>
  <tr>
    <td width="15%" align="center">Subject Code </td>
    <td width="15%" align="center">Marks</td>
    <td width="15%" align="center">Cradite</td>
    <td width="16%" align="center">GPA</td>
    <td width="15%" align="center">Grade</td>
    <td width="12%" align="center">Total Marks </td>
    <td width="12%" align="center">CGPA</td>
  </tr>
  <tr>
    <td align="center"><?php echo $code1 ?></td>
    <td align="center"><?php echo $sub1 ?></td>
    <td align="center"><?php echo $cradit1 ?></td>
    <td align="center"><?php if($cradit1==4){ echo $s=resultWithCr($sub1,160);}
	else  if($cradit1==3){ echo $s=resultWithCr($sub1,120);}
	else  if($cradit1==2){ echo $s=resultWithCr($sub1,80);}
	else { echo $s=resultWithCr($sub1,40);}
	 ?></td>
    <td align="center"><?php echo GreadLetter($s);?></td>
    <td rowspan="9" align="center" valign="middle"><?php echo  $subject ?></td>
    <td rowspan="9" align="center" valign="middle"><?php echo  $cgpa ?></td>
  </tr>
  <tr>
    <td align="center"><?php echo $code2 ?></td>
    <td align="center"><?php echo $sub2 ?></td>
    <td align="center"><?php echo $cradit2 ?></td>
    <td align="center"><?php if($cradit2==4){ echo $s=resultWithCr($sub2,160);}
	else  if($cradit2==3){ echo $s=resultWithCr($sub2,120);}
	else  if($cradit2==2){ echo $s=resultWithCr($sub2,80);}
	else { echo $s=resultWithCr($sub2,40);} ?></td>
    <td align="center"><?php echo GreadLetter($s); ?></td>
  </tr>
  <tr>
    <td align="center"><?php echo $code3 ?></td>
    <td align="center"><?php echo $sub3 ?></td>
    <td align="center"><?php echo $cradit3 ?></td>
    <td align="center"><?php 
	 if($cradit3==4){ echo $s=resultWithCr($sub3,160);}
	else  if($cradit3==3){ echo $s=resultWithCr($sub3,120);}
	else  if($cradit3==2){ echo $s=resultWithCr($sub3,80);}
	else { echo $s=resultWithCr($sub3,40);}?></td>
    <td align="center"><?php echo GreadLetter($s); ?></td>
  </tr>
  <tr>
    <td align="center"><?php echo $code4 ?></td>
    <td align="center"><?php echo $sub4 ?></td>
    <td align="center"><?php echo $cradit4 ?></td>
    <td align="center"><?php 
	if($cradit4==4){ echo $s=resultWithCr($sub4,160);}
	else  if($cradit4==3){ echo $s=resultWithCr($sub4,120);}
	else  if($cradit4==2){ echo $s=resultWithCr($sub4,80);}
	else { echo $s=resultWithCr($sub4,40);}
	 ?></td>
    <td align="center"><?php echo GreadLetter($s); ?></td>
  </tr>
  <tr>
    <td align="center"><?php echo $code5 ?></td>
    <td align="center"><?php echo $sub5 ?></td>
    <td align="center"><?php echo $cradit5 ?></td>
    <td align="center"><?php 
		if($cradit5==4){ echo $s=resultWithCr($sub5,160);}
	else  if($cradit5==3){ echo $s=resultWithCr($sub5,120);}
	else  if($cradit5==2){ echo $s=resultWithCr($sub5,80);}
	else { echo $s=resultWithCr($sub5,40);}
	
	 ?></td>
    <td align="center"><?php echo GreadLetter($s); ?></td>
  </tr>
  <tr>
    <td align="center"><?php echo $code6 ?></td>
    <td align="center"><?php echo $sub6 ?></td>
    <td align="center"><?php echo $cradit6 ?></td>
    <td align="center"><?php
		if($cradit6==4){ echo $s=resultWithCr($sub6,160);}
	else  if($cradit6==3){ echo $s=resultWithCr($sub6,120);}
	else  if($cradit6==2){ echo $s=resultWithCr($sub6,80);}
	else { echo $s=resultWithCr($sub6,40);}
	
	?></td>
    <td align="center"><?php echo GreadLetter($s); ?></td>
  </tr>
  <tr>
    <td align="center"><?php echo $code7 ?></td>
    <td align="center"><?php echo $sub7 ?></td>
    <td align="center"><?php echo $cradit7 ?></td>
    <td align="center"><?php 
		if($cradit7==4){ echo $s=resultWithCr($sub7,160);}
	else  if($cradit7==3){ echo $s=resultWithCr($sub7,120);}
	else  if($cradit7==2){ echo $s=resultWithCr($sub7,80);}
	else { echo $s=resultWithCr($sub7,40);}
	
	 ?></td>
    <td align="center"><?php echo GreadLetter($s); ?></td>
  </tr>
  <tr>
    <td align="center"><?php echo $code8 ?></td>
    <td align="center"><?php echo $sub8 ?></td>
    <td align="center"><?php echo $cradit8 ?></td>
    <td align="center"><?php 
		if($cradit8==4){ echo $s=resultWithCr($sub8,160);}
	else  if($cradit8==3){ echo $s=resultWithCr($sub8,120);}
	else  if($cradit8==2){ echo $s=resultWithCr($sub8,80);}
	else { echo $s=resultWithCr($sub8,40);}
	
	?></td>
    <td align="center"><?php echo GreadLetter($s); ?></td>
  </tr>
  <tr>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center">&nbsp;</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"></td>
    <td align="center"></td>
    <td colspan="4" align="center"><input type="submit" value="Save Result" />
        <input type="reset" name="Submit2" value="Clear" />    </td>
    <td align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>


