<?php
session_start();
include('../admin/include/student/config/DbFunction.php');
$obj=new DbFunction();
	$rs=$obj->showCourse();
	$rs1=$obj->showCountry();
	$ses=$obj->showSession();
	$res1=$ses->fetch_object();
include('includes/config.php');
include('includes/dbcon.php');
if(isset($_POST['submit']))
{
$course=$_POST['course-short'];
$session=$_POST['session'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$gname=$_POST['gname'];
$ocp=$_POST['ocp'];
$income=$_POST['income'];
$category=$_POST['category'];
$ph=$_POST['ph'];
$nation=$_POST['nation'];
$emailid=$_POST['email'];
$password=$_POST['password'];
$board1=$_POST['board1'];
$board2=$_POST['board2'];
$roll1=$_POST['roll1'];
$roll2=$_POST['roll2'];
$pyear1=$_POST['pyear1'];
$pyear2=$_POST['pyear2'];
$sub1=$_POST['sub1'];
$sub2=$_POST['sub2'];
$marks1=$_POST['marks1'];
$marks2=$_POST['marks2'];
$fmarks1=$_POST['fmarks1'];
$fmarks2=$_POST['fmarks2'];
// $imgfile=$_FILES["postimage"]["name"];
// // get the image extension
// $extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// // allowed extensions
// $allowed_extensions = array(".jpg","jpeg",".png",".gif");
// // Validation for allowed extensions .in_array() function searches an array for a specific value.
// if(!in_array($extension,$allowed_extensions))
// {
// echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
// }
// else
// {
// //rename the image file
// $imgnewfile=md5($imgfile).$extension;
// // Code for move image into directory
// move_uploaded_file($_FILES["postimage"]["tmp_name"],"postimages/".$imgnewfile);
// }

$query=mysqli_query($con,"insert into studentadmison(course,session,fastname,middleName,lastName,gender,gname,
ocp,income,category,ph,nation,email,password,board1,board2,roll1,roll2,pyear1,pyear2,sub1,
sub2,marks1,marks2,fmarks1,fmarks2) values ('$course','$session','$fname','$mname','$lname','$gender','$gname','$ocp','$income',
'$category','$ph','$nation','$emailid','$password','$board1','$board2','$roll1','$roll2','$pyear1','$pyear2','$sub1','$sub2','$marks1','$marks2',
'$fmarks1','$fmarks2')");
if($query)
{
echo "<script>alert('Post successfully added');</script>";
}
else{
	echo "<script>alert('Post Unsuccessfull added');</script>"; 
} 


}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>User Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
<div id="wrapper">	
<?php include('includes/header.php');?>
	<div class="ts-main-content">
				<?php include('includes/sidebar.php');?>

		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Student Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
			<form method="post" action="" name="registration" enctype="multipart/form-data" class="form-horizontal" onSubmit="return valid();">
<div class="panel-heading">Personal Informations</div>
<div class="row">
									<div class="col-lg-12">
										<div class="panel panel-default">
											<div class="panel-heading">Register</div>
											<div class="panel-body">
												<div class="row">
													<div class="col-lg-10">
														<div class="form-group">
															<div class="col-lg-4">
																<label>Select Course<span id="" style="font-size:11px;color:red">*</span>	</label>
															</div>
															<div class="col-lg-6">
																<select class="form-control" name="course-short" id="cshort"  onchange="showSub(this.value)" required="required" >
																	<option VALUE="">SELECT</option>
																	<?php while($res=$rs->fetch_object()){?>
																	
																	<option VALUE="<?php echo htmlentities($res->cid);?>"><?php echo htmlentities($res->cshort)?></option>
																<?php }?>   </select>
															</div>
														</div>
														<br><br>
													<div class="form-group">
														<div class="col-lg-4">
															<label>Current  Session<span id="" style="font-size:11px;color:red">*</span></label>
														</div>
														<div class="col-lg-6">
															<input class="form-control" name="session" value="<?php echo htmlentities($res1->session);?>" readonly>
														</div>
														<br><br>
													</div>
													<br><br>	
												</div>
											</div>
										</div>
									</div>
								</div>
									<div class="panel-body">
												<div class="row">
													<div class="col-lg-12">
														<div class="form-group">
															<div class="col-lg-2">
																<label>First Name<span id="" style="font-size:11px;color:red">*</span>	</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" name="fname" required="required" pattern="[A-Za-z]+$">
															</div>
															<div class="col-lg-2">
																<label>Middle Name</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" name="mname">
															</div>
														</div>
														<br><br>
														
														<div class="form-group">
															<div class="col-lg-2">
																<label>Last Name</label>
															</div>
															<div class="col-lg-4">
																<input class="form-control" name="lname" pattern="[A-Za-z]+$">
															</div>
															<div class="col-lg-2">
																<label>Gender</label>
																
															</div>
															<div class="col-lg-4">
																<input type="radio" name="gender" id="male" value="Male"> &nbsp; Male &nbsp;
																<input type="radio" name="gender" id="female" value="feale"> &nbsp; Female &nbsp;
																<input type="radio" name="gender" id="other" value="other"> &nbsp; Other &nbsp;
															</div>
														</div>
														<br><br>
														<div class="form-group">
															<div class="col-lg-2">
																<label>Guardian Name<span id="" style="font-size:11px;color:red">*</span>	</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" name="gname" required="required" pattern="[A-Za-z]+$">
															</div>
															<div class="col-lg-2">
																<label>Occupation</label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" name="ocp" id="ocp">
															</div>
														</div>
														<br><br>
														
														<div class="form-group">
															<div class="col-lg-2">
																<label>Family Income<span id="" style="font-size:11px;color:red">*</span></label>
																
															</div>
															<div class="col-lg-4">
																<select class="form-control" name="income"  id="income"required="required" >
																	<option VALUE="">SELECT</option>
																	<option VALUE="200000">200000</option>
																	<option value="500000">500000</option>
																	<option value="700000">700000</option>
																	
																</select>
															</div>
															<div class="col-lg-2">
																<label>Category<span id="" style="font-size:11px;color:red">*</span></label>
																
															</div>
															<div class="col-lg-4">
																<select class="form-control" name="category"  id="category" required="required" >
																	<option VALUE="">SELECT</option>
																	<option VALUE="general">General</option>
																	<option value="obc">OBC</option>
																	<option value="sc">SC</option>
																	<option value="st">ST</option>
																	<option value="other">Other</option>
																</select>
															</div>
														</div>
														<br><br>
														
														
														
														<div class="form-group">
															<div class="col-lg-2">
																<label>Physically Challenged<span id="" style="font-size:11px;color:red">*</span></label>
																
															</div>
															<div class="col-lg-4">
																<select class="form-control" name="ph"  id="ph"required="required" >
																	<option VALUE="">SELECT</option>
																	<option VALUE="yes">Yes</option>
																	<option value="no">No</option>
																	
																</select>
															</div>
															<div class="col-lg-2">
																<label>Nationality<span id="" style="font-size:11px;color:red">*</span></label>
																
															</div>
															<div class="col-lg-4">
																<input class="form-control" name="nation" id="nation">
															</div>
														</div>
														<br><br>
													</div>
													<br><br>
												</div>
												<div class="form-group">
															<div class="col-lg-2">
																<label>Picture<span id="" style="font-size:11px;color:red">*</span></label>	
															</div>
															<div class="col-lg-4">
																<input type="file"  name="postimage" id="image">
															</div>
															<div class="col-lg-2">
																<label>Email Id: <span id="" style="font-size:11px;color:red">*</span></label>	
															</div>
															<div class="col-lg-4">
															<input type="email" name="email" id="email"  class="form-control" onBlur="checkAvailability()" required="required">
															</div>
												</div>		
												<br><br>
												<div class="form-group">
															<div class="col-lg-2">
																<label>Password: <span id="" style="font-size:11px;color:red">*</span></label>	
															</div>
															<div class="col-lg-4">
																<input type="password" name="password" id="password"  class="form-control" required="required">
															</div>
															<div class="col-lg-2">
																<label>Confirm Password:<span id="" style="font-size:11px;color:red">*</span></label>	
															</div>
															<div class="col-lg-4">
															<input type="password" name="cpassword" id="cpassword"  class="form-control" required="required">
															</div>
												</div>		
												<br><br>
															
											</div>
										</div>
										<div class="form-group">
																			<div class="panel panel-default">
																				<!-- /.panel-heading -->
																				<div class="panel-body">
																					<div class="table-responsive">
																						<table class="table">
																							<thead>
																								<tr>
																									<div class="col-lg-6">
																										<th>&nbsp;&nbsp;&nbsp;&nbsp;Board<span id="" style="font-size:11px;color:red">*</span>	</label></th>
																									</div>
																									<div class="col-lg-6">
																										<th>&nbsp;&nbsp;&nbsp;&nbsp;Roll No</th>
																									</div>
																									<div class="col-lg-6">
																										<th>&nbsp;&nbsp;&nbsp;&nbsp;Year Of Passing<span id="" style="font-size:11px;color:red">*</span></th>
																									</div>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td><div class="col-lg-6">
																										<input class="form-control" type="text" name="board1">
																									</div></td>
																									<td><div class="col-lg-6">
																										<input class="form-control" type="text" name="roll1" >
																									</div></td>
																									<td><div class="col-lg-6">
																										<input class="form-control"  type="text" name="pyear1" >
																									</div></td>
																								</tr>
																								<tr>
																									<td><div class="col-lg-6">
																										<input class="form-control" type="text" name="board2" >
																									</div></td>
																									<td><div class="col-lg-6">
																										<input class="form-control" type="text" name="roll2" >
																									</div></td>
																									<td><div class="col-lg-6">
																										<input class="form-control"  type="text" name="pyear2" >
																									</div></td>
																								</tr>
																								
																							</tbody>
																						</table>
																					</div>
																					<!-- /.table-responsive -->
																					
																					<!-- /.panel-body -->
																				</div>
																				<!-- /.panel -->
																			</div>
																		</div>
																		<br><br>
																		<div class="form-group">
																			<div class="panel panel-default">
																				<!-- /.panel-heading -->
																				<div class="panel-body">
																					<div class="table-responsive">
																						<table class="table">
																							<thead>
																								<tr>
																									<div class="col-lg-6">
																										<th>S.No</th>
																									</div>
																									<div class="col-lg-6">
																										<th>&nbsp;&nbsp;&nbsp;&nbsp;Department</th>
																									</div>
																									<div class="col-lg-6">
																										<th>&nbsp;&nbsp;&nbsp;&nbsp;GPA Obtained</th>
																									</div>
																									<div class="col-lg-6">
																										<th>&nbsp;&nbsp;&nbsp;&nbsp;Full GPA</th>
																									</div>
																								</tr>
																							</thead>
																							<tbody>
																								<tr>
																									<td>1</td>
																									<td><div class="col-lg-6">
																										<input class="form-control"  type="text" name="sub1">
																									</div></td>
																									<td><div class="col-lg-6">
																										<input class="form-control"  type="text" name="marks1">
																									</div></td>
																									<td><div class="col-lg-6">
																										<input class="form-control"  type="text" name="fmarks1">
																									</div></td>
																								</tr>
																								
																								<tr>
																									<td>2</td>
																									<td><div class="col-lg-6">
																										<input class="form-control"  type="text" name="sub2">
																									</div></td>
																									<td><div class="col-lg-6">
																										<input class="form-control"  type="text" name="marks2">
																									</div></td>
																									<td><div class="col-lg-6">
																										<input class="form-control"  type="text" name="fmarks2">
																									</div></td>
																								</tr>
																								
																							</tbody>
																						</table>
																					</div>
																					<!-- /.table-responsive -->
																					
																					<!-- /.panel-body -->
																				</div>
																				<!-- /.panel -->
																			</div>
																		</div>
<div class="form-group">
<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>

</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
	<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>

</html>