<?php
namespace Dompdf;
require_once 'dompdf/autoload.inc.php';
session_start();
ob_start();
require_once('includes/configpdo.php');
error_reporting(0);
?>

<html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Result</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/lobipanel/lobipanel.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" >
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
        <script src="js/jquery.min.js"></script>
    </head>
    <body>

    <div class="panel-heading">
             <h2 class="title" align="center">Educafe Result System</h2>
    </div>
<?php 
$rollid=$_SESSION['rollid'];
$classid=$_SESSION['classid'];
$qery = "SELECT   tblstudents.StudentName,tblstudents.RollId,tblstudents.Gender,tblstudents.DOB,tblstudents.RegDate,tblstudents.StudentId,tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses on tblclasses.id=tblstudents.ClassId where tblstudents.RollId=? and tblstudents.ClassId=? ";
$stmt21 = $mysqli->prepare($qery);
$stmt21->bind_param("ss",$rollid,$classid);
$stmt21->execute();
                 $res1=$stmt21->get_result();
                 $cnt=1;
                   while($result=$res1->fetch_object())
                  {  ?>
<table class="table table-hover table-bordered">
    <tr>
    <th><p><b>Student Name :</b> <?php echo htmlentities($result->StudentName);?></p></th>
    <th><p><b>Gender  :</b> <?php echo htmlentities($result->Gender);?></p></th>
    </tr>
    <tr>
    <th><p><b>Student Roll :</b> <?php echo htmlentities($result->RollId);?></p></th>
    <th><p><b>Student Date Of Birth :</b> <?php echo htmlentities($result->DOB);?></p></th>
    </tr>
    <tr>
    <th><p><b>Student Semester:</b> <?php echo htmlentities($result->ClassName);?></p></th>
    <th><p><b>Student Session:</b> <?php echo htmlentities($result->Section);?></p></th>
    </tr>
</table>
<?php }

    ?>
 
 <table class="table table-hover table-bordered">
                                                <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Subject</th>    
                                                            <th colspan="2">Marks</th>
                                                        </tr>
                                               </thead>
  


                                                  
                                                  <tbody>
<?php                                              
// Code for result
 $query ="SELECT t.StudentName,t.RollId,t.ClassId,t.marks,t.gpa ,SubjectId,tblsubjects.SubjectName,tblsubjects.SubjectCradite FROM
 (SELECT sts.StudentName,sts.RollId,sts.ClassId,tr.marks,tr.gpa ,SubjectId FROM tblstudents AS sts 
 JOIN  tblresult AS tr ON tr.StudentId=sts.StudentId) AS t JOIN tblsubjects ON tblsubjects.id=t.SubjectId 
WHERE (t.RollId=? AND t.ClassId=?)";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("ss",$rollid,$classid);
$stmt->execute();
                 $res=$stmt->get_result();
                 $cnt=1;
                 $st=0;
	              $tgpa=0;
                   while($row=$res->fetch_object())
                  {

    ?>

                                                    
                                                    <tr>
                                                      <th scope="row"><?php echo htmlentities($cnt);?></th>
                                                			<td><?php echo htmlentities($row->SubjectName);?></td>
                                                			<td><?php echo htmlentities($totalmarks=$row->marks);?></td>
															                        <td><?php echo htmlentities($totalgp=$row->gpa);?></td>
                                                		</tr>
<?php
	$cad=$row->SubjectCradite;
	$srct=$totalgp*$cad;
	$st+=$cad;
	$tgpa+=$srct;
	$cgpaf=$tgpa/$st;
	$totlcount+=$totalmarks;
$cnt++;}
if($cgpaf==4.00){
  $gl="A+";
}
elseif($cgpaf>=3.75 && $cgpaf<4.00){
  $gl="A";
}
elseif($cgpaf>=3.50 && $cgpaf<3.75){
  $gl="A-";
}
elseif($cgpaf>=3.25 && $cgpaf<3.50){
  $gl="B+";
}
elseif($cgpaf>=3.00 && $cgpaf<3.25){
  $gl="B";
}
elseif($cgpaf>=2.75 && $cgpaf<3.00){
  $gl="B-";
}
elseif($cgpaf>=2.50 && $cgpaf<2.75){
  $gl="C+";
}
elseif($cgpaf>=2.25 && $cgpaf<2.50){
  $gl="C";
}
elseif($cgpaf>=2.00 && $cgpaf<2.25){
  $gl="D";
}
else{
  $gl="F";
}
?>
                <tr>
								  <th scope="row" colspan="2">Total Marks</th>
								  <td colspan="2" align="center"><b><?php echo htmlentities($totlcount); ?></b></td>
								</tr>
								<tr>
								  <th scope="row" colspan="2">CGPA</th>
								  <td colspan="2" align="center"><b><?php echo htmlentities($cgpaf); ?></b></td>
								</tr>
                <tr>
								  <th scope="row" colspan="2">Grate Latter</th>
								  <td colspan="2" align="center"><b><?php echo htmlentities($gl); ?></b></td>
								</tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->
        <script src="js/prism/prism.js"></script>

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->

    </body>
</html>

<?php
$html = ob_get_clean();
$dompdf = new DOMPDF();
$dompdf->setPaper('A4', 'landscape');
$dompdf->load_html($html);
$dompdf->render();
//dompdf->stream("",array("Attachment" => false));
$dompdf->stream("result.pdf");
?>