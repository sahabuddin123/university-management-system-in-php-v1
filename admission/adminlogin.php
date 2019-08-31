<?php
session_start();
error_reporting(0);
$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}
$aid='110102';
 $apwd='01867033550';
 if($aid!=''&&$apwd!='')
 {
   $query=mysqli_query($con ,"select * from t_admin where ad_id='".$aid."' and ad_pswd='".$apwd."'");
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['ad']=$aid;
    header('location:admin.php');
   }
   else
   {
     echo '<script>';
    echo 'alert("Invalid Login ! Please try again.")';
    echo '</script>';

   }
 }
 else
 {
     echo '<script>';
    echo 'alert("Enter both username and password")';
    echo '</script>';
 
 }




?>





























