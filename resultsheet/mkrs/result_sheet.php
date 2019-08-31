
<html5>
<head>
<title>marksheet</title>
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
<form action="showresult.php" method="post">
<table width="70%" border="0" align="center">
  <tr>
    <td colspan="2" align="center"><h2><strong>Feni Polytchnic Institute CGPA System</strong></h2></td>
  </tr><br /><br />
  <tr>
    <td width="337" align="left"><div align="left"><span class="style9">Department </span></div></td>
    <td width="332" align="center">  <select name="depertment">
        <option>Computer Technology</option>
        <option>Civil Technology</option>
        <option>Electrical Technology</option>
        <option>Power Technology</option>
        <option>Mechanical Technology</option>
        <option>AIDT</option>
      </select>
	</td>
  </tr>
  <tr>
    <td width="337" align="left"><div align="left"><span class="style9">Semester</span></div></td>
    <td width="332" align="center">
				<select name="semester">
				<option> First Semester</option>
				<option> Second Semester</option>
				<option> Third Semester</option>
				<option> Fourth Semester</option>
				<option> Fifth Semester</option>
				<option> Sixth Semester</option>
				<option> Seventh Semester</option>
				<option> Indrastial Etachmaent</option>
				</select>
    </td>
  </tr>
  <tr>
    <td width="337" align="left"><div align="left"><span class="style9"> Roll Number </span></div></td>
    <td width="332" align="center"><input name="roll" type="text" size="37" maxlength="60" /></td>
  </tr>
  <tr>
    <td align="left"><div align="left"><span class="style9">Registation Number </span></div></td>
    <td align="center"><input name="reg" type="text" size="37" maxlength="60" /></td>
  </tr>
  <tr>
    <td width="337" align="left"><div align="left"><span class="style9">Result</span></div></td>
    <td width="332" align="center"></td>
  </tr>
</table><br /><br /><br /><br />
<table width="70%" height="331" border="0" align="center">
  <tr>
    <td width="30%" colspan="7" align="center"><div align="center" class="style12 style13">Marksheet With Subject Code </div></td>
  </tr>
  
  
  <tr>
    <td width="30%" align="center">Subject Code </td>
    <td width="30%" align="center">Marks</td>
    <td width="34%" align="center">Cradite</td>
  </tr>
  <tr>
    <td align="center"><input type="text" name="subject1" /></td>
    <td align="center"><input name="a1" type="text" id="a1" /></td>
    <td align="center"><select name="cradit1">
      <option>4</option>
	  <option>3</option>
	  <option>2</option>
	  <option>1</option>
    </select></td>
  </tr>
  <tr>
    <td height="25" align="center"><input type="text" name="subject2" /></td>
    <td align="center"><input name="a2" type="text" id="a2" /></td>
    <td align="center"><select name="cradit2">
      <option>4</option>
	  <option>3</option>
	  <option>2</option>
	  <option>1</option>
    </select></td>
  </tr>
  <tr>
    <td align="center"><input type="text" name="subject3" /></td>
    <td align="center"><input name="a3" type="text" id="a3" /></td>
    <td align="center"><select name="cradit3">
      <option>4</option>
	  <option>3</option>
	  <option>2</option>
	  <option>1</option>
    </select></td>
  </tr>
  <tr>
    <td align="center"><input type="text" name="subject4" /></td>
    <td align="center"><input name="a4" type="text" id="a4" /></td>
    <td align="center"><select name="cradit4">
      <option>4</option>
	  <option>3</option>
	  <option>2</option>
	  <option>1</option>
    </select></td>
  </tr>
  <tr>
    <td align="center"><input type="text" name="subject5" /></td>
    <td align="center"><input name="a5" type="text" id="a5" /></td>
    <td align="center"><select name="cradit5">
     <option>4</option>
	  <option>3</option>
	  <option>2</option>
	  <option>1</option>
	  <option>0</option>
    </select></td>
  </tr>
  <tr>
    <td align="center"><input type="text" name="subject6" /></td>
    <td align="center"><input name="a6" type="text" id="a6" /></td>
    <td align="center"><select name="cradit6">
      <option>4</option>
	  <option>3</option>
	  <option>2</option>
	  <option>1</option>
    </select></td>
  </tr>
  <tr>
    <td align="center"><input type="text" name="subject7" /></td>
    <td align="center"><input name="a7" type="text" id="a7" /></td>
    <td align="center"><select name="cradit7">
      <option>4</option>
	  <option>3</option>
	  <option>2</option>
	  <option>1</option>
    </select></td>
  </tr>
  <tr>
    <td align="center"><input type="text" name="subject8" /></td>
    <td align="center"><input name="a8" type="text" id="a8" /></td>
    <td align="center"><select name="cradit8">
      <option>4</option>
	  <option>3</option>
	  <option>2</option>
	  <option>1</option>
    </select></td>
  </tr>
  <tr>
    <td colspan="3" align="center">&nbsp;</td>
    </tr>
 
   <tr>
    <td align="center">&nbsp;</td>
    <td align="center"></td>
    <td align="center"></td>
  </tr>
  <tr>
  	<td></td>
  	<td align="center"><input type="submit" name="result" value="Show Result" /> <input type="reset" value="Clear" /></td>
  	<td></td>
  </tr>
</table>

</form>
</body>
</html5>
<?php
if(isset($_POST["result"]))
{
$dep=$_POST["depertment"];
$sem=$_POST["semester"];
//switch ($dep){
	//case 'Computer Technology':
	//break;
	//}
	//roll and reg
	
	$roll=$_POST['roll'];
	$reg=$_POST['reg'];
	
	//subject code
	$code1=$_POST['subject1'];
	$code2=$_POST['subject2'];
	$code3=$_POST['subject3'];
	$code4=$_POST['subject4'];
	$code5=$_POST['subject5'];
	$code6=$_POST['subject6'];
	$code7=$_POST['subject7'];
	$code8=$_POST['subject8'];
	//subject
	$sub1=$_POST['a1'];
	$sub2=$_POST['a2'];
	$sub3=$_POST['a3'];
	$sub4=$_POST['a4'];
	$sub5=$_POST['a5'];
	$sub6=$_POST['a6'];
	$sub7=$_POST['a7'];
	$sub8=$_POST['a8'];
	//cradite
	$cradit1=$_POST['cradit1'];
	$cradit2=$_POST['cradit2'];
	$cradit3=$_POST['cradit3'];
	$cradit4=$_POST['cradit4'];
	$cradit5=$_POST['cradit5'];
	$cradit6=$_POST['cradit6'];
	$cradit7=$_POST['cradit7'];
	$cradit8=$_POST['cradit8'];
	
	$subject=$sub1+$sub2+$sub3+$sub4+$sub5+$sub6+$sub7+$sub8;
	//for Grade letter
	function GreadLetter($number)
	{ 		if($number==4.00)
			{$ss='A+';			}
			elseif ($number==3.75)
				{$ss='A';			}
			elseif ($number==3.50)
				{$ss='A-';			}
			elseif ($number==3.25)
				{$ss='B+';			}
			elseif ($number==3.00)
				{$ss='B';			}
			elseif ($number==2.75)
				{$ss='B-';			}
			elseif ($number==2.50)
				{	$ss='C+';		}
			elseif ($number==2.25)
				{$ss='C';			}
			elseif ($number==2.00)
				{$ss='D';			}
			else
				{$ss='F';			}
		return $ss;	}
	//for Grade Point
	function resultWithCr($number,$selectedCr){ 
	if($selectedCr>=160)
	{	$a1=10;
	$a2=20;
	$a3=30;
	$a4=40;
	$a5=50;
	$a6=60;
	$a7=70;
	$a8=80;	}
	else if($selectedCr>=120 || $selectedCr>=80)
	{	$a1=5;
	$a2=10;
	$a3=15;
	$a4=20;
	$a5=25;
	$a6=30;
	$a7=35;
	$a8=40;	}
	else
	{$a1=2;
	$a2=5;
	$a3=8;
	$a4=11;
	$a5=13;
	$a6=16;
	$a7=21;
	$a8=25;		}
			if($number>=$selectedCr)
				{ $s='4.00';	}
			elseif ($number>=($selectedCr-$a1))
				{ $s='3.75';	}
			elseif ($number>=($selectedCr-$a2))
				{ $s='3.50';	}
			elseif ($number>=($selectedCr-$a3))
				{ $s='3.25';	}
			elseif ($number>=($selectedCr-$a4))
				{ $s='3.00';	}
			elseif ($number>=($selectedCr-$a5))
				{ $s='2.75';	}
			elseif ($number>=($selectedCr-$a6))
				{ $s='2.50';	}
			elseif ($number>=($selectedCr-$a7))
				{ $s='2.25';	}
			elseif ($number>=($selectedCr-$a8))
				{ $s='2.00';	}
			else
				{ $s='0.00';	}

	return $s;
	}
		


//cgpa
	//$gpa=$s+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
	$cdt=$cradit1+$cradit2+$cradit3+$cradit4+$cradit5+$cradit6+$cradit7+$cradit8;
	//echo "<br>1. " .$cdt;
	$crad=(($cradit1*$s)+($cradit2*$s1)+($cradit3*$s4)+($cradit4*$s4)+($cradit5*$s5)+($cradit6*$s6)+($cradit7*$s7)+($cradit8*$s8));

	//echo "<br>" .$crad;
	$cgpa=$crad/$cdt;

}
?>
