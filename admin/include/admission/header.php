<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style>
		*{
			padding:0;
			margin:0;
		}
		body{
			padding:0;
			margin:0;
		}
		a{
			text-decoration:none;
		}
		a:hover{
			text-decoration:none;
		}
		ul{
			list-style:none;
		}
	.head{
		height:300px;
		width:auto;
	}
	.conn{
	margin: 0px 150px;
	}
	header{
	background-color: #56ab2f;
	color: #fff;
	}
	.main-heade{
	height: 50px;
	width: auto;
	display: flex;
	justify-content: space-between;
	align-items: center;
	}
	.heade-left ul{
	display: flex;
	}
	.heade-left ul li{
	padding-left: 30px;
	}
	.heade-left ul li.ac{
	padding: 0;
	}
	.heade-right ul{
	display:flex;
	}
	.heade-right ul li{
	padding-right: 15px;
	border-right: 1px solid #000;
	}
	.heade-right ul li a{
		color: #fff;
	}
	.heade-right ul li a:hover{
		color: #e74c3c;
	}
	.heade-right ul li.ac1{
	padding-left: 15px;
	border:none;
	}
	.menu{
	color: #000;
	background: rgba(250,255,255,0.9);
	height: 80px;
	z-index: 1;
	}
	.all-menu{
	display: flex;
	justify-content:space-between;
	align-items: center;
	}
	.icon img{
	height: 50px;
	width: 100px;
	}
	.right-manu ul{
	display: flex;
	}
	.right-manu ul li{
	padding-right: 20px;
	line-height: 80px;
	color: #000;
	}
	.right-manu ul li.active{
	padding: 0;
	}
	.right-manu ul li a{
	color: #000;
	font-weight: 700;
	}
	.right-manu ul li a:hover{
		color: #e74c3c;
		font-weight: 700;
	}
</style>
</head>
<body>
<div class="brand clearfix">
<header>
		<div class="conn">
				<div class="main-heade">
					<div class="heade-left">
						<ul>
							<li class="ac"><i class="fas fa-phone"></i> +(00) 112 233 445 56</li>
							<li><i class="fas fa-envelope"></i> crazycafe.net@gmail.com</li>
							<li><i class="fas fa-envelope"></i> Sun-Mon (9am-4pm)</li>
						</ul>
					</div>
					<div class="heade-right">
						<ul>
							<li><a href="../Login/index.php">Login</a></li>
							<li class="ac1"><a href="../Login/registration.php">Register</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<div class="menu">
				<div class="conn">
					<div class="all-menu">
						<div class="icon"><img src="images/logo.png" alt=""></div>
						<div class="right-manu">
							<ul>
							<li><a href="../index.php"> Home</a></li>
							<li><a href="../about.php"> About</a></li>
							<li><a href="../course.php"> Courses</a></li>
							<li><a href="../our_Teacher.php"> Teachers</a></li>
							<li><a href="../admin/include/result/find-result.php"> Result</a></li>
							<li><a href="../hostel/index.php"> Hostel</a></li>
							<li><a href="../Library/index.php">Library</a></li>
							<li><a href="../admission/index.php">Admission</a></li>
							<li><a href="../contact.php"> Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
</div>
</body>
</html>


<!-- <div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel</a>
		<span class="menu-btn"><i class="fa fa-bars"></i></span>
		<ul>
							<li><a href="../index.php"> Home</a></li>
							<li><a href="../about.php"> About</a></li>
							<li><a href="../course.php"> Courses</a></li>
							<li><a href="../our_Teacher.php"> Teachers</a></li>
							<li><a href="../admin/include/result/find-result.php"> Result</a></li>
							<li><a href="../hostel/index.php"> Hostel</a></li>
							<li><a href="../Library/index.php">Library</a></li>
							<li><a href="../contact.php"> Contact</a></li>
		</ul>
 </div> -->
	