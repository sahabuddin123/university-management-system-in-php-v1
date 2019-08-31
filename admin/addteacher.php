
<?php
session_start();
// include('include/config.php');
// include('include/checklogin.php');
// check_login();

if(isset($_POST['submit']))
{
$target_dir = "teacherImage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $msge = "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
		if (file_exists($target_file)) {
			$msge = "Sorry, file already exists.";
			$uploadOk = 0;
		} 
		// elseif($imageFileType != ".jpg" || $imageFileType != ".png" || $imageFileType != ".jpeg"
		// || $imageFileType != ".gif" ) {
		// 	$msge = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		// 	$uploadOk = 0;
		// }
	} 
	else {
        $msge = "File is not an image.";
        $uploadOk = 0;
	}
	if ($uploadOk == 0)
{
		echo $msge;
		echo"<script>alert('Sorry, your file was not uploaded.');</script>";
	// if everything is ok, try to upload file
} 
else {
	$co=mysql_connect("localhost","root","");
		if(!$co){
			echo"<script>alert('Sorry, Server Not Found.');</script>";
		}
		else{
			$db=mysql_select_db("educafe");
			if(!$db){
				echo"<script>alert('Sorry, Database Not Found.');</script>";
			}
			else{
				$tid=$_POST['tid'];
				$tname=$_POST['tname'];
				$tdigree=$_POST['tdigree'];
				$tpost=$_POST['tpost'];
                $tdepartment=$_POST['tdepartment'];
                $tabout=$_POST['tabout'];
                $tfb=$_POST['tfb'];
                $ttw=$_POST['ttw'];
                $tgmail=$_POST['tgmail'];
					$query="INSERT INTO `addteacher`(`tid`,`tname`,`tdigree`,`tpost`,`tdepartment`,`tabout`,`tfb`,`ttw`,`tgmail`,`timagename`,`timagepath`)
							values('$tid','$tname','$tdigree','$tpost','$tdepartment','$tabout','$tfb','$ttw','$tgmail','".basename( $_FILES["fileToUpload"]["name"])."','teacherImage/".basename( $_FILES["fileToUpload"]["name"])."')";
					mysql_query($query);
						if(mysql_affected_rows()){
							if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
								echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
							} 
							else 
							{
								echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
							}
							echo"<script>alert('Coures Succssfully register');</script>";
						}
						else{
							echo"<script>alert('Coures register Unsuccssfully');</script>";
						}
			}
		}
	}


}

?>

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


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container"> 
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Add Teacher</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Educafe University</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
							<form method="post" action="" name="course" class="form-horizontal" enctype="multipart/form-data" onSubmit="return valid();">
											
											<div class="hr-dashed"></div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Teacher Id </label>
												<div class="col-sm-8">
													<input type="number" value="" name="tid"  class="form-control"> </div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Teacher Name</label>
												<div class="col-sm-8">
	<input type="text" class="form-control" name="tname" id="cns" value="" required="required">
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Education Qulification</label>
												<div class="col-sm-8">
	<input type="text" class="form-control" name="tdigree" id="cns" value="" required="required">
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Teacher Post</label>
												<div class="col-sm-8">
	<input type="text" class="form-control" name="tpost" id="cns" value="" required="required">
						 
												</div>
											</div>
											<div class="form-group">
												<label class="col-sm-2 control-label">Teacher Department</label>
												<div class="col-sm-8">
	<input type="text" class="form-control" name="tdepartment" id="tdepartment" value="" required="required">
						 
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">About Of Teacher</label>
												<div class="col-sm-8">
	<input type="text" class="form-control" name="tabout" id="tdepartment" value="" required="required">
						 
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">Facebook Link</label>
												<div class="col-sm-8">
	<input type="text" class="form-control" name="tfb" id="tdepartment" value="" required="required">
						 
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">Twetter Link</label>
												<div class="col-sm-8">
	<input type="text" class="form-control" name="ttw" id="tdepartment" value="" required="required">
						 
												</div>
											</div>
                                            <div class="form-group">
												<label class="col-sm-2 control-label">Google Plus Link</label>
												<div class="col-sm-8">
	<input type="text" class="form-control" name="tgmail" id="tdepartment" value="" required="required">
						 
												</div>
											</div>
<div class="form-group">
									<label class="col-sm-2 control-label">Upload Image</label>
									<div class="col-sm-8">
									<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" required="">
												</div>
											</div>



												<div class="col-sm-8 col-sm-offset-2">
													
	

												<input class="btn btn-primary" type="submit" name="submit" value="Add Teacher">
												</div>
											</div>

										</form></div>
							</div>
							</div>
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
