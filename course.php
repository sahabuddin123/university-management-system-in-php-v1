<?php
session_start();
include('admin/include/config.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Course | Educafe University</title>
        <!----------meta tag area start---------->
        <meta charset="utf-8">
        <meta name="keyword" content="html,css,js,php,laravel,etc.." >
        <meta name="description" content="Most Popular Web site." >
        <meta name="author" content="Sujon kumar sorkar" >
        <meta http-equiv="refresh" content=""> <!-- refresh page -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- Responsive page -->
        <!---------meta tag area end----------->
        <!---------Google Fonts.----------->
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
        <!-- owl carousel css -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.css">
        <!-- fontawesome css-->
        <link rel="stylesheet" href="assets/css/all.min.css">
        <!-- animation css -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Main Style Css Start-->
        <link rel="stylesheet" href="assets/css/course style.css">
        <!-- Main Style Css End-->
        <!-- Responsive css Start -->
        <link rel="stylesheet" href="assets/css/responsive.css">
        <!-- Responsive css End -->
        
    </head>
    <body>
        <div class="wrapper">
            <div id="top"></div>
            <!-- top header start -->
            <header>
                <div class="container">
                    <div class="top_menu">
                        <ul>
                        <li><a href=""><i class="fas fa-phone-volume"></i>+(00) 112 233 445 56</a></li>
                            <li><a href=""><i class="fas fa-envelope"></i>crazycafe.net@gmail.com</a></li>
                            <li><a href=""><i class="fas fa-envelope"></i> Sun-Mon (9am-4pm)</a></li>
                        </ul>
                        <ul class="login_area">
                        <li><a href="Login/index.php">Login</a></li>
                            <li style="padding-top: 7px; color:#fff;">|</li>
						    <li><a href="Login/registration.php">Register</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <!-- top header end -->
            <!-- main manu start -->
 
            <div class="header2">
                <div class="container">
                    <div class="main_header">
                    <ul><img src="assets/image/logo.png" alt="Logo Img"></ul>
                    <ul class="nemu_items">
                            <li><a href="index.php"> Home</a></li>
							<li><a href="about.php"> About</a></li>
							<li><a href="course.php"> Courses</a></li>
							<li><a href="our_Teacher.php"> Teachers</a></li>
							<li><a href="admin/include/result/find-result.php"> Result</a></li>
							<li><a href="hostel/index.php"> Hostel</a></li>
							<li><a href="Library/index.php">Library</a></li>
							<li><a href="contact.php"> Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- main manu end -->
    <!-- course bg  area start -->
    <section>
        <div class="main_bg">
            <div class="course_text">
                <h1>ALL COURSE</h1>
                <ul class="breadcrumb">
                  <li><a href="index.php">Home</a></li>
                  <li><a href="course.php" style="color:#56AB2F;">Course</a></li>
                 </ul>

                
            </div>
        </div>
    </section>
    <!-- course bg  area end -->



    <!-- our_popular_courses_heading area start -->
    <section>
        <div class="container">
        <div class="courses_heading">
            <div class="left_heading">
                <h1><span style="border-top: 2px solid #56AB2F;">Our</span> all Course</h1>
            </div>
            <div class="right_select_catagory">
                <div>
                    <select name="" id="">
                        <optgroup label="">
                            <option value="" label="Select Category"></option>
                            <option value="">H.S.C</option>
                            <option value="">B.A</option>
                            <option value="">M.A</option>
                            
                        </optgroup>
                    </select>
                </div>
                <div>
                    <select name="" id="">
                        <optgroup label="">
                            <option value="" label="Sort By"></option>
                            <option value="">Sujon Kumer</option>
                            
                        </optgroup>
                    </select>
                </div>
                <div class="icon">
                        <i class="fas fa-book" style="border:1px solid #56AB2F;padding:8px;"></i>
                        <i class="fas fa-bars" style="border:1px solid #56AB2F;padding:8px;"></i>
                 </div>
            </div>
        </div>
        </div>
        
    </section>
    <!-- our_popular_courses_heading area start -->

    <!-- our_popular_courses area start -->

    <section>
        <div class="container">
            <div class="our_all_course">
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
                if(getdb()==1)
                {
                    $query="SELECT *FROM course";
                    $result = mysql_query($query);
                    if(mysql_affected_rows()>0)
                    {
                        while($row=mysql_fetch_row($result))
                        {?>
                            <div class="item">
                                <img src="admin/uploads/<?php echo $row[6];?>" alt="!">
                                <h2><?php echo $row[1];?></h2>
                                <p>by <span style="color:#56AB2F;border-bottom: 1px solid #56AB2F; padding-bottom: 10px;"><?php echo $row[2];?></span></p>
                                <p style="padding-top: 25px; color:#666666; padding-bottom: 25px; border-bottom: 1px solid #56AB2F;"><?php echo $row[3];?></p>
                                <div class="button_other">
                                    <ul>
                                        <li><i class="fas fa-user-alt" style="font-size: 15px; padding-right: 5px;"></i><?php echo $row[4];?></li>
                                        <li><a href="">APPLY NOW</a></li>
                                        <li><?php echo $row[5];?></li>
                                    </ul>
                                </div>
                            </div>

                        <?php
                        }
                    }
                        
                }	
    ?>
            </div>
        </div>
    </section>

   
    <!-- BROWSE_ALL_NEWSES area end -->
    <!-- SUBSCRIBE_TO_OUR_NEWSLETTER area start -->
    <section>
        <div class="SUBSCRIBE_TO_OUR_NEWSLETTER">
            <form method="post">
            <div class="heading_and_search">
                <h1>SUBSCRIBE TO OUR NEWSLETTER</h1>
                <p style="font-size:20px;padding-bottom: 20px;">Signup to receive email updates about courses</p>
                <input type="search" name="email" placeholder="Your Email.."> <button name="subscribe"><i class="fas fa-paper-plane"></i></button>
            </div>
            </form>
            <?php
					if(isset($_POST['subscribe'])){
						if(getdb()==1)
						{	$email=$_POST['email'];
							$query="INSERT INTO `subscibe`(`email`)VALUES('$email')";
							$result = mysql_query($query);
							if(mysql_affected_rows()>0)
							{
								echo "<script>alert('Thanks For Subscrition');</script>";
							}
							else{
								echo "<script>alert('Sorry Your Subscrition Mot Allowd');</script>";
							}
						}
					}
			?>
        </div>
    </section>
    <!-- SUBSCRIBE_TO_OUR_NEWSLETTER area end -->
    <!--  Footer area start-->
    <section>
        <div class="wrapper_footer">
            <div class="container">
                <div class="main_footer">
                    <div class="first_cla">
                        <img src="assets/image/footer_edu_logo.png" alt="Logo Img">
                        <p style="
                            line-height: 30px; padding-bottom: 10px; padding-right: 60px;">Lorem ipsum dolor sit ame consectetu
                            adipiscing elit sed diam nonummynibh
                            euismod tincidunt ut laoreet dolorema
                        ad minim veniam.</p>
                        <p style="padding:15px 0px 10px 0px;"><i class="fas fa-phone-volume" " style="padding-right: 10px;"></i> 33 (555) 565688</p>
                        <p style="padding-bottom: 30px;"><i class="far fa-envelope" style="padding-right: 10px;"></i>33 (555) 565688</p>
                    </div>
                    <div class="second_cla">
                        <h1>Link</h1>
                        <ul>
                            <li><i class="fas fa-chevron-right"></i><a href="">Home</a></li>
                            <li><i class="fas fa-chevron-right"></i><a href="">Courses</a></li>
                            <li><i class="fas fa-chevron-right"></i><a href="">News</a></li>
                            <li><i class="fas fa-chevron-right"></i><a href="">Events</a></li>
                        </ul>
                    </div>
                    <div class="third_cla">
                        <ul>
                            <li><i class="fas fa-chevron-right"></i><a href="">Gallery</a></li>
                            <li><i class="fas fa-chevron-right"></i><a href="">Courses</a></li>
                            <li><i class="fas fa-chevron-right"></i><a href="">News</a></li>
                            <li><i class="fas fa-chevron-right"></i><a href="">Events</a></li>
                        </ul>
                    </div>
                    <div class="four_cal">
                        <h1>Support</h1>
                        <ul>
                            <li><i class="fas fa-chevron-right"></i><a href="">Documentation</a></li>
                            <li><i class="fas fa-chevron-right"></i><a href="">Forums</a></li>
                            <li><i class="fas fa-chevron-right"></i><a href="">Language Packs</a></li>
                            <li><i class="fas fa-chevron-right"></i><a href="">Release Status</a></li>
                        </ul>
                    </div>
                    <div five_cal>
                        <h1>Flickr Album <a href="#top" style="color:#fff;padding-left: 110px; font-size: 30px;"><i class="far fa-arrow-alt-circle-up"></i></a></h1>
                        <div class="f_pic_div">
                            <img src="assets/image/f_p1.png" alt="!">
                            <img src="assets/image/f_p2.png" alt="!">
                            <img src="assets/image/f_p3.png" alt="!">
                            <img src="assets/image/f_p1.png" alt="!">
                            <img src="assets/image/f_p2.png" alt="!">
                            <img src="assets/image/f_p3.png" alt="!">
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="bottom_footer_and_social_icon_wrapper">
                    <div class="container">
                        <div class="main_bottom_footer">
                            <p><i class="far fa-copyright"></i> Copy right 2019. All Right Reserved  </p>
                            <p>Developed by <span style="color:#ff4f81;">R.A.S.M</span></p>
                            <ul>
                                <li><a href="http://www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="http://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://www.google.com"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="http://www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="http://www.linkedin.com"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!--  Footer area end-->
    
    <script src="assets/js/jquery-3.4.0.min.js"></script>
    <!-- carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Fontawesome Js -->
    <script src="assets/js/all.min.js"></script>
    <!-- Main Js -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/wow.min.js"></script>
 
     <!-- second slider start -->
    <script>
    $('.second_slid').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
    0:{
    items:1
    },
    600:{
    items:3
    },
    1000:{
    items:3
    }
    }
    });
    </script>
    <!-- second slider end -->
    <!-- ----------------------js area start------------------------- -->
</body>
</html>