<!doctype html>
<html lang="en">
    <head>
        <title>Project Name</title>
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
        <link rel="stylesheet" href="assets/css/homepage style.css">
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
                            <li><a href=""><i class="fas fa-phone"></i> +(00) 112 233 445 56</a></li>
                            <li><a href=""><i class="fas fa-envelope"></i> crazycafe.net@gmail.com</a></li>
                            <li><a href=""><i class="fas fa-envelope"></i> Sun-Mon (9am-4pm)</a></li>
                        </ul>
                        <ul class="login_area">
                            <li><a href="Login_v9/login.html">Login</a></li>
                            <li style="padding-top: 7px; color:#fff;">|</li>
                            <li><a href="">Register</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            <!-- top header end -->
            <div class="header2 ">
                <div class="container">
                    <div class="main_header ">
                    <ul><img src="assets/image/logo.png" alt="Logo Img"></ul>
                    <ul class="nemu_items " >
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
    <!-- First slider start  -->
    <script>
    $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
    
    margin:10,
    loop:true,
    nav:true,
    navText:["<i class='fas fa-arrow-left left-icon'></i>" , "<i class='fas fa-arrow-right right-icon'></i>"],
    autoplay:true,
    
    autoplayTimeout:3000,
    // autoplayHoverPause:true,
    responsive:{
    0:{
    items:1
    },
    600:{
    items:3
    },
    1000:{
    items:1
    }
    }
    });
    });
    </script>
    <!-- first slider end -->
    <!-- ----------------------js area start------------------------- -->
</body>
</html>