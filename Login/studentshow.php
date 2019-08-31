<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
function getdb(){
$msg=1;
	$con=mysql_connect("localhost","root","");
	if(!$con)
		{
			$msg="Server is not connect";
		}
		else
		{
			$db=mysql_select_db("school_management");
		if(!$db)
				{
					$msg="Data is not Found";
				}
				else
				{
					$msg=1;
				}
			}
				return $msg;
}
if(isset($_POST['show']))
{

	$roll=$_POST['roll'];
	$reg=$_POST['reg'];
	
	if(getdb()==1)
	{
		$query="SELECT *FROM `student_info` WHERE `roll`='$roll' AND `reg`='$reg'";
		$result = mysql_query($query);
		if(mysql_affected_rows()>0)
		{
				echo"<table width='50%' height='100' align='center'><tr>
      <th height='50' colspan='2' align='center' scope='col'>Student Information </th>
    </tr>";
				while($r=mysql_fetch_row($result)){
				echo"<tr><td width='393' height='50' align='left'>Student's Id : </td><td width='353' height='50'>".$r[0]."</td></tr>";
				echo"<tr><td width='393' height='50' align='left'>Student's Name : </td><td width='353' height='50'>".$r[1]."</td></tr>";
				echo"<tr><td width='393' height='50' align='left'>Roll No : </td><td width='353' height='50'>".$r[2]."</td></tr>";
				echo"<tr><td width='393' height='50' align='left'>Registration No : </td><td width='353' height='50'>".$r[3]."</td></tr>";
				echo"<tr><td width='393' height='50' align='left'>Father's Name : </td><td width='353' height='50'>".$r[4]."</td></tr>";
				echo"<tr><td width='393' height='50' align='left'>Mothe's Name : </td><td width='353' height='50'>".$r[5]."</td></tr>";
				echo"<tr><td width='393' height='50' align='left'>Date Of Birth : </td><td width='353' height='50'>".$r[6]."</td></tr>";
				echo"<tr><td width='393' height='50' align='left'>Sex : </td><td width='353' height='50'>".$r[7]."</td></tr>";
				echo"<tr><td width='393' height='50' align='left'>Phone No : </td><td width='353' height='50'>".$r[8]."</td></tr>";
				echo"<tr><td width='393' height='50' align='left'>Address : </td><td width='353' height='50'>".$r[9]."</td></tr>";
				}
				echo "</table>";
		}
		else{
		echo "Sorry 404 Data Not Found ";
		}
			
	}
	//else
//		{
//			$a=db_con();
//		}
//	echo $a;
}
?>
<a href="student_singup.php">Goto Login</a><br />
<a href="edit_info.php">Edit Information</a>
<a href="logout.php">logout</a>
</body>
</html>
