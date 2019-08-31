

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
    <style>
      .riyaj{
        margin-top:100px;
      }
      .sahab{
        margin-left:300px;
      }
    </style>

	</head>
	<body>
  <div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
    <div class="riyaj"></div>
    <div class="sahab">
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
			$db=mysql_select_db("educafe");
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

function del(){
	$msk=1;
	if(getdb()==1){
		$stid=intval($_GET['id']);
		$query="DELETE FROM `contact` WHERE `id`='$stid'";
		$result = mysql_query($query);
		if(mysql_affected_rows()>0)
		{
			$ms= 'Delete';
		}
		else
		{
			$ms= 'Error';
		}
	}
	return $msk;
}
	if(getdb()==1)
	{
		$query="SELECT *FROM `contact`";
		$result = mysql_query($query);
		if(mysql_affected_rows()>0)
		{
				echo"<table width='90%' border='3' align='center' >
  <tr border='5'><th colspan='6' align='center' scope='col' border='5'><h1>USER COUNTACT US</h1></th></tr>
  <tr><th width='10' align='center' scope='col'>ID</th><th width='10' align='center' scope='col'>NAME</th><th width='10' align='center' scope='col'>EMAIL</th><th width='10' align='center' scope='col'>SUBJECT</th><th width='10' align='center' scope='col'>MESSAGE</th><th width='10' align='center' scope='col'>ACTION</th></tr>";
				while($r=mysql_fetch_row($result)){
				echo "<tr border='5'>
   <th width='10' align='center' scope='col'>".$r[0]."</th>
    <th width='20' align='center' scope='col'>".$r[1]."</th>
    <th width='20' align='center' scope='col'>".$r[2]."</th>
    <th width='10' align='center' scope='col'>".$r[3]."</th>
    <th width='20' align='center' scope='col'>".$r[4]."</th>
    <th width='10' align='center' scope='col'><a herf='del()'>Delete</a></th>
  </tr>";
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

?>
</div>
</div>
</div>
			<!-- start: FOOTER -->
      <?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			<>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>

