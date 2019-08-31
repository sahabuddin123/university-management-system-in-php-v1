<?php
session_start();
include('admin/include/config.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="html,css,js,jquery">
		<meta name="description" content="Responsive School Management Template" />
		<meta name="author" content="Sahabuddin">
		<title>School Management System</title>
		<!-- Icon tag -->
		<link rel="shortcut icon" type="image/png" href="assets/image/logo.png">
		<!-- google font link -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<!-- Fontawesome Css -->
		<link rel="stylesheet" href="assets/css/all.min.css">
		<!-- Owl Carsule Css -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<!-- animate Css -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Style Css -->
		<link rel="stylesheet" href="assets/css/school.css">
	</head>
	<body>
		<!-- --------------------------------------------
					header Section Start
		------------------------------------------------->
		<header>
			<div class="container">
				<div class="main-header">
					<div class="header-left">
						<ul>
							<li class="active"><i class="fas fa-phone"></i> +(00) 112 233 445 56</li>
							<li><i class="fas fa-envelope"></i> crazycafe.net@gmail.com</li>
							<li><i class="fas fa-envelope"></i> Sun-Mon (9am-4pm)</li>
						</ul>
					</div>
					<div class="header-right">
						<ul>
							<li><a href="Login/index.php">Login</a></li>
							<li class="active1"><a href="Login/registration.php">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- --------------------------------------------
					header Section End
		------------------------------------------------->
		<!-- --------------------------------------------
					Slider Section Start
		------------------------------------------------->
		<div class="slider-section">
			<div class="owl-carousel owl-theme">
				<div class="slider1">
					<div class="slider-grid2">
						<h1>Take the first step to <br> <span>knowledge</span> with us</h1>
						<p>Claritas est etiam processus dynamicus, qui sequitur mution
						<br>constudium lectorum est notare quam littera gothica.</p><br>
						<a href="">VIEW COURSES</a>
						<a href="">READ MORE</a>
					</div>
				</div>
				<div class="slider1">
					<div class="slider-grid2">
						<h1>Take the first step to <br> <span>knowledge</span> with us</h1>
						<p>Claritas est etiam processus dynamicus, qui sequitur mution
						<br>constudium lectorum est notare quam littera gothica.</p><br>
						<a href="">VIEW COURSES</a>
						<a href="">READ MORE</a>
					</div>
				</div>
				<div class="slider1">
					<div class="slider-grid2">
						<h1>Take the first step to <br> <span>knowledge</span> with us</h1>
						<p>Claritas est etiam processus dynamicus, qui sequitur mution
						<br>constudium lectorum est notare quam littera gothica.</p><br>
						<a href="">VIEW COURSES</a>
						<a href="">READ MORE</a>
					</div>
				</div>
			</div>
			<div class="menu">
				<div class="container">
					<div class="all-menu">
						<div class="icon"><img src="assets/image/logo.png" alt=""></div>
						<div class="right-manu">
							<ul>
							<li><a href="index.php"> Home</a></li>
							<li><a href="about.php"> About</a></li>
							<li><a href="course.php"> Courses</a></li>
							<li><a href="our_Teacher.php"> Teachers</a></li>
							<li><a href="admin/include/result/find-result.php"> Result</a></li>
							<li><a href="hostel/index.php"> Hostel</a></li>
							<li><a href="Library/index.php">Library</a></li>
							<li><a href="admission/index.php">Admission</a></li>
							<li><a href="contact.php"> Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		<!-- --------------------------------------------
					Slider Section End
		------------------------------------------------->
		<!-- --------------------------------------------
			principle_massege Section Start
		------------------------------------------------>
		<div class="principle">
			<div class="principle-left">
				<h1>Message From The Principal</h1>
				<p>Investigationes demonstraverun lectores legere me lius quod ii leg <br>
					unt saepius Claritas est etiam processus dynamicus, qui sequiturm<br>
					utationem consuetudium lectorum Mirum est notare quam litterag<br>
					othica, quam nunc putamus parum claram, anteposuerit litterarum<br>
					formas humanitatis per seacula quarta decima et quinta decimaEo<br>
				dem modo typi qui nunc nobis videntur .</p><br>
				<h4>Thomas Harper</h4>
				<p>Principal of Educare</p>
			</div>
			<div class="princpile-right">
				<img src="assets/image/principle.png" alt="">
			</div>
		</div>
		<!-- --------------------------------------------
			principle_massege Section End
		------------------------------------------------>
		<!-- --------------------------------------------
			courses Section Star
		------------------------------------------------>

		<div class="container">
			<div class="courses">
				<h1>Our Popular Courses</h1>
				<p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet <br>
				doming id quod mazim placerat facer possim assum.</p>
				<div class="sahab owl-carousel owl-theme">

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
					<div class="main-courses">
						<div class="courses-img"><img src="admin/uploads/<?php echo $row[6];?>" alt=""></div>
						<div class="detals-courses">
							<h4></h4>
							<p>by <span></span></p>
							<p></p>
							<ul>
								<li><i class="fas fa-user"></i> <?php echo $row[4];?> </li>
								<li class="active-bg"><a href="">APPLY NOW</a></li>
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
				<div class="more">
					<a href="course.php"><button>Browse All Courses</button></a>
				</div>
				
			</div>
		</div>
		<!-- --------------------------------------------
			courses Section End
		------------------------------------------------>
		<!-- --------------------------------------------
			facts Section Start
		------------------------------------------------>
		<div class="facts">
			<div class="container">
				<div class="fatcs-all">
					<div class="gtid2">
						<h1>Important Facts</h1>
						<p>Nam liber tempor cum soluta nobis eleifend option
						doming id quod mazim facer possim assum.</p>
						<a href=""><button>CONTACT US</button></a>
					</div>
					<div class="grid2">
						<h1 class="count">300</h1>
						<p>Teachers</p>
					</div>
					<div class="grid2">
						<h1 class="count">8978</h1>
						<p>Students</p>
					</div>
					<div class="grid2">
						<h1 class="count">257</h1>
						<p>Courses</p>
					</div>
					<div class="grid2">
						<h1 class="count">500</h1>
						<p>Award Winning</p>
					</div>
				</div>
			</div>
		</div>
		<!-- --------------------------------------------
			facts Section End
		------------------------------------------------>
		<!-- --------------------------------------------
			news Section Start
		------------------------------------------------>
		<div class="news-section">
			<div class="container">
				<h1>RECENT NEWS</h1>
				<p> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet <br>
				doming id quod mazim placerat facer possim assum.</p>
				<section class="layouts section-padding">
					<div class="all-layouts">
						<div class="single-layouts item-1">
							<div class="news-child1-image"></div>
							<div class="news-child1-tag">
								<h4>InterAmerican Campus Open House</h4>
								<small>By <span>Rechard Jones</span></small><br><br>
								<small>17 Oct 2016 | <i class="fas fa-comments"></i> 75</small>
								<p>Vel illum dolore eu feugiat nulla fa Vel illum dolore eu feugiat nulla fa
								at vero eros et acsan et iusto. at vero eros et acsan et iusto.</p>
								<a href=""><button>READ MORE <i class="fas fa-long-arrow-alt-right"></i></button></a>
							</div>
						</div>
						<div class="single-layouts item-2">
							<div class="news-child2-image"></div>
							<div class="news-child2-tag">
								<h4>InterAmerican Campus<br> Open House</h4>
								<small>By <span>Rechard Jones</span></small><br>
								<small>17 Oct 2016 | <i class="fas fa-comments"></i> 75</small>
								<p>Vel illum dolore eu feugiat nulla fa Vel illum dolore eu feugiat nulla faat vero eros et acsan et iusto.</p>
								<a href=""><button>READ MORE <i class="fas fa-long-arrow-alt-right"></i></button></a>
							</div>
						</div>
						<div class="single-layouts item-3">
							<div class="news-child3-image"></div>
							<div class="news-child3-tag">
								<h4>InterAmerican Campus<br> Open House</h4>
								<small>By <span>Rechard Jones</span></small><br>
								<small>17 Oct 2016 | <i class="fas fa-comments"></i> 75</small>
								<p>Vel illum dolore eu feugiat nulla fa Vel illum dolore eu feugiat nulla faat vero eros et acsan et iusto.</p>
								<a href=""><button>READ MORE <i class="fas fa-long-arrow-alt-right"></i></button></a>
							</div>
						</div>
						
					</div>
				</section>
				<a href=""><button>BROWSE ALL NEWS</button></a>
			</div>
		</div>
		<!-- --------------------------------------------
			news Section End
		------------------------------------------------>
		<!-- --------------------------------------------
			student_say Section Start
		------------------------------------------------>
		<div class="student_say">
			<div class="container">
				<h1>What Student Says?</h1>
				<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet<br>
				doming id quod mazim placerat facer possim assum.</p>
				<div class="student_say-main">
					<div class="student_say-item1">
						<div class="top-main">
							<img src="assets/image/lacturer1.png" alt="">
						</div>
						<div class="bottom-main">
							<h3>Nam liber tempor cum soluta nobis eleif
							end option congue nihil impediet doming
							id quod mazim placerat facer possim ass
							um. Typi non habent claritatem.</h3>
							<p>Rubel Hossen</p>
							<small>Department of management</small>
						</div>
					</div>
					<div class="student_say-item1">
						<div class="top-main">
							<img src="assets/image/lacturer2.png" alt="">
						</div>
						<div class="bottom-main">
							<h3>Nam liber tempor cum soluta nobis eleif
							end option congue nihil impediet doming
							id quod mazim placerat facer possim ass
							um. Typi non habent claritatem.</h3>
							<p>Fahima Zerin</p>
							<small>Ui / Ux Designer</small>
						</div>
					</div>
					<div class="student_say-item1">
						<div class="top-main">
							<img src="assets/image/lacturer3.png" alt="">
						</div>
						<div class="bottom-main">
							<h3>Nam liber tempor cum soluta nobis eleif
							end option congue nihil impediet doming
							id quod mazim placerat facer possim ass
							um. Typi non habent claritatem.</h3>
							<p>Romana nasrin</p>
							<small>Web developer</small>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- --------------------------------------------
			student_say Section End
		------------------------------------------------>
		<!-- --------------------------------------------
			subscribe Section Start
		------------------------------------------------>
		<div class="subscribe-section">
			<div class="container">
				<form action="" method="post">
				<div class="subscribe">
					<h1>SUBSCRIBE TO OUR NEWSLETTER</h1>
					<p>Signup to receive email updates about courses</p>
					<input type="text" name="" placeholder="Your email"><a href=""><button><i class="fas fa-envelope"></i></button></a>
				</div>
				</form>
			</div>
		</div>
		<!-- --------------------------------------------
			subscribe Section End
		------------------------------------------------>
		<!-- --------------------------------------------
			footer Section Start
		------------------------------------------------>
		<div class="footer">
			<div class="container">
				<div class="footer-main">
					<div class="footer-child0">
						<h4><img src="assets/image/logo.png" alt=""></h4>
						<p>Lorem ipsum dolor sit ame consectetu
							adipiscing elit sed diam nonummynibh
							euismod tincidunt ut laoreet dolorema
							ad minim veniam.</p>
							<small><i class="fas fa-phone"></i> 33 (555) 565688</small><br>
							<small><i class="fas fa-envelope"></i> 33 (555) 565688</small>
					</div>
					<div class="footer-child1">
						<h4>Link</h4>
						<ul>
								<li><a href="index.php"><span><i class="fas fa-chevron-right"></i></span> Home</a></li>
								<li><a href="course.php"><span><i class="fas fa-chevron-right"></i></span> Courses</a></li>
								<li><a href=""><span><i class="fas fa-chevron-right"></i></span> News</a></li>
								<li><a href=""><span><i class="fas fa-chevron-right"></i></span> Events</a></li>
								
						</ul>
					</div>
					<div class="footer-child2">
						<ul>
								<li><a href=""><span><i class="fas fa-chevron-right"></i></span> Galary</a></li>
								<li><a href="course.php"><span><i class="fas fa-chevron-right"></i></span> Courses</a></li>
								<li><a href=""><span><i class="fas fa-chevron-right"></i></span> News</a></li>
								<li><a href=""><span><i class="fas fa-chevron-right"></i></span> Events</a></li>
						</ul>
					</div>
					<div class="footer-child3">
						<h4>Support</h4>
						<ul>
								<li><a href=""><span><i class="fas fa-chevron-right"></i></span> Documentation</a></li>
								<li><a href=""><span><i class="fas fa-chevron-right"></i></span> Forums</a></li>
								<li><a href=""><span><i class="fas fa-chevron-right"></i></span> Language Packs</a></li>
								<li><a href=""><span><i class="fas fa-chevron-right"></i></span> Release Status</a></li>
						</ul>
					</div>
					<div class="footer-child">
						<h4>Galary</h4>
						<div class="footer-grid">
							<div class="footer-item-grid"><img src="assets/image/albump1.png" alt=""></div>
							<div class="footer-item-grid"><img src="assets/image/albump2.png" alt=""></div>
							<div class="footer-item-grid"><img src="assets/image/albump3.png" alt=""></div>
							<div class="footer-item-grid"><img src="assets/image/albump1.png" alt=""></div>
							<div class="footer-item-grid"><img src="assets/image/albump2.png" alt=""></div>
							<div class="footer-item-grid"><img src="assets/image/albump3.png" alt=""></div>
						</div>
					</div>
				</div>
				<footer>
					<div class="footer-left"><i class="far fa-copyright"></i> Copy right 2016. All Right Reserved </div>
					<div class="footer-mid"> Developed by <span style="color:#ff4f81;">R.A.S.M</span></div>
					<div class="footer-right">
						<ul>
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter-square"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-instagram"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
						</ul>
					</div>

				</footer>
			</div>
		</div>
		<!-- --------------------------------------------
			footer Section End
		------------------------------------------------>
		<!-- animate Js -->
		<script src="assets/js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<!-- Fontawesome Js -->
		<script src="assets/js/all.min.js"></script>
		<!-- jquery Js -->
		<script src="assets/js/jquery.js"></script>
		<!-- owl carousel Js -->
		<script src="assets/js/owl.carousel.min.js"></script>
		<!-- Main Js -->
		<script src="assets/js/main.js"></script>
		
	</body>
</html>