<?php
$ext = substr(__FILE__, strrpos(__FILE__, ".") + 1);
require dirname(__FILE__)."/config.$ext";
$s_dbid = FALSE;





   function symp_connect() {
         global $s_dbhost, $s_dbuser, $s_dbpass, $s_dbname,$s_dbid;
   
            $s_dbid = @mysqli_connect($s_dbhost, $s_dbuser, $s_dbpass,$s_dbname);
   
            
      }
   
       function symp_disconnect() {
         global $s_dbid;
   
            mysqli_close($s_dbid);
            $s_dbid = FALSE;
      }
   
	
	symp_connect();




?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Welcome || Spatto Services</title>

    <!-- Fav Icons -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/leaflet.css">
    <link rel="stylesheet" href="assets/css/spacing.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!--==================================================================== 
                                Start Header area
        =====================================================================-->
        <header class="main-header">

            <div class="header-top bg-orange">
                <div class="container">
                    <div class="top-inner">
                        <ul class="top-left">
                            <li><i class="fa fa-envelope"></i> <a href="mailto:info@spatto.co">info@spatto.co</a></li>
                            <li><i class="fas fa-map-marker-alt"></i> Dehradun, Uttarakhand - India</li>
                        </ul>

                        <div class="top-right ml-auto">
                            <div class="social-style-one">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container clearfix" style="background: #fff;">

                    <div class="header-inner d-lg-flex align-items-center">

                        <div class="logo-outer d-flex align-items-center">
                            <div class="logo" style="width: 100%;"><a href="home.php"><img src="assets/images/logo-2.png" alt="" title="" style="margin-left: 30%;"></a></div>
                        </div>

                        <div class="nav-outer clearfix ml-lg-auto mr-lg-auto">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header clearfix">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="border: 2px #fe6600 solid;background-color: #fe6600;border-radius: 8px;color: #fff;">
                                        <span class="icon-bar" style="background-color:#fff;"></span>
                                        <span class="icon-bar" style="background-color:#fff;"></span>
                                        <span class="icon-bar" style="background-color:#fff;"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="user/rules.php">Rules</a></li>
                                        <li><a href="/user">Login</a></li>
                                        <li><a href="/user/signup.php">A/C Open</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="news.php">New Update</a></li>  
                                        <li><a href="business-listing.php">Promotion</a></li>
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>

                        <div class="menu-number">
                            <!--<i class="flaticon-people"></i> <a href="callto:+918892666688">+91 8892 6666 88</a>-->
                        </div>
                    </div>

                </div>
            </div>
            <!--End Header Upper-->
        </header>
        <!--==================================================================== 
                                End Header area
        =====================================================================-->

        <!--==================================================================== 
            Start Hero Section
        =====================================================================-->
        <style>
        .hero-inner h1 span:after {
            content: '';
            color: var(--primary-color, #fe6600);
        }
        </style>
        <section class="hero-section overlay" style="margin-top: 0px;">
            <div class="container">
                <div class="hero-inner" style="padding-top: 10px;padding-bottom: 0px;text-align: center;max-width: 100%;">
                    
                   <h1 style="margin: 0px;font-size: 100px;color: #fe6600;;"> Spatto </h1>  <h1 style="margin-top: 5px;font-size: 25px; line-height: 2;">
                     <span class="wow fadeInUp" data-wow-duration="1s"  data-wow-delay="0.5s">?????? ?????????????????? ?????????????????????????????? ?????????????????? ?????????<br> ??????????????? ????????? ???????????? ???????????????????????? ?????? ???????????????????????? ?????? ????????? <br>?????? 100% ??????????????????????????????????????? ???????????? ???????????? ?????????</span><br></h1>

                    <!--<a href="#about" style="padding: 10px 20px;" class="theme-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Click Here <i class="fas fa-arrow-down" style="font-size: 20px;"></i> &nbsp; ( ???????????? ??????????????? )  </a>-->
                    <a href="#about" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp; padding-top: 5px; min-width: 150px; margin-top: 10px;height: 40px;" class="theme-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s"> <i class="fas fa-arrow-down" style="font-size: 25px;padding: 0px;"></i> </a>
                    
                    
                    
                    
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Hero Section
        =====================================================================-->

        <!--==================================================================== 
            Start Our Success Section
        =====================================================================-->
        


<?php


$sql = "select `username` from `join` order by id desc limit 1";           
$result = @mysqli_query($s_dbid,$sql);
list($user) = @mysqli_fetch_row($result);

$total_id = substr($user,2);

$sql = "select count(*) from `join` where misc like 'active'";           
$result = @mysqli_query($s_dbid,$sql);
list($active_id) = @mysqli_fetch_row($result);



$sql = "select `username` from `join_store` where username not like 'demo' order by id desc limit 1";           
$result = @mysqli_query($s_dbid,$sql);
list($vendor_user) = @mysqli_fetch_row($result);

$vendor_id = substr($vendor_user,2);

?>	
	

        
        <div class="our-success pb-30 rpb-0 wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;margin-top: 120px;">
            <div class="container">
                <div class="success-wrap bg-orange">
                    <div class="row">
                        
                        
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="success-item">
                                <div class="success-icon">
                                    <i class="flaticon-computer"></i>
                                </div>
                                <div class="success-content">
                                    <span class="count-text" data-speed="2500" data-stop="<?=$total_id?>">0</span>
                                    <p>Total Customer</p>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="success-item">
                                <div class="success-icon">
                                    <i class="flaticon-review"></i>
                                </div>
                                <div class="success-content">
                                    <span class="count-text" data-speed="2500" data-stop="<?=$total_id-280?>">0</span>
                                    <p>Happy Customer</p>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="success-item">
                                <div class="success-icon">
                                    <i class="flaticon-badge"></i>
                                </div>
                                <div class="success-content">
                                    <span class="count-text" data-speed="2500" data-stop="<?=$total_id-197?>">0</span>
                                    <p>Active Customers</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-lg-6 col-md-6">
                            <div class="success-item">
                                <div class="success-icon">
                                    <i class="flaticon-edit"></i>
                                </div>
                                <div class="success-content">
                                    <span class="count-text" data-speed="2500" data-stop="<?=$vendor_id?>">0</span>
                                    <p>Vendor Tieups</p>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!--==================================================================== 
            End Our Success Section
        =====================================================================-->

        <!--==================================================================== 
            Start About Us Section
        =====================================================================-->
        <section id="about" class="about-us pb-150 rpb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-image rmb-50">
                            <img class="wow fadeInBottomLeft" data-wow-duration="2s" src="assets/images/about/about.jpg" alt="About Spatto">
                            <!--<div class="about-border"></div>-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-25 wow fadeInUp" data-wow-duration="2s">
                                <h3 style="text-align: center;">We Will Help You get <br>Financial <span style="color:#F16614" >Freedom.</span></h3>
                                <h3 style="text-align: center;">?????? ???????????? ?????????????????? <span style="color:#F16614">??????????????????????????????</span> <br>?????????????????? ????????? ????????? ?????????????????????</h3>
                            </div>
                            <ul>
                                <li  style="color: #c34224;list-style: disc;">We want to empower women. Our aim is to provide financial freedom to women of india and make their lives better.<br></li>
                                <li style="list-style: disc"><p class="wow fadeInUp" data-wow-duration="2s">?????? ????????????????????? ?????? ??????????????? ??????????????? ??????????????? ???????????? ????????? ????????????????????? ?????? ?????????????????? ???????????? ?????????????????? ??????????????? ?????? ???????????? ???????????? ??????????????? ??????????????? ?????? ??????????????? ??????????????? ?????????</p>
                                  <hr style="border-top: 2px solid #1f9810;">
                                </li>
                                <li  style="color: #c34224;list-style: disc;"><i class="wow fadeInUp" data-wow-duration="2s">Traditional, 100% for daily essentials grocery market with 100% profit for everyone. To fullfill daily needs of everyone. Same day delivery, TV Promotion and Customer Care Number will be provided for easy access. <br>
                                    </i></li>
                                <li style="list-style: disc"><p class="wow fadeInUp" data-wow-duration="2s">??????????????????????????? ,100% ?????????????????? ?????? ????????????, ?????? ?????? ??????????????? ?????? ????????????????????? ??????????????????, ????????????, ????????? ?????? 100% ????????????????????? ???????????? , ??????????????? ?????????????????? ?????? ????????????????????? ?????? ???????????? ?????? ???????????? ????????? ????????? ????????????????????? ??????????????????, ???????????? ?????? ????????????????????????, ?????? ?????????????????? ???????????? ??????????????? ?????? ????????? ???</p></i></li>
                            </ul>
                            

                            
                            
                            <!--<a href="about.php" class="theme-btn wow fadeInUp" data-wow-duration="2s" style=" background-color:#1f9810; visibility: visible; animation-duration: 2s; animation-name: fadeInUp;padding: 10px;min-width: 100px;">???????????? ??????????????? <i class="fas fa-arrow-right"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End About Us Section
        =====================================================================-->
   
        <!--==================================================================== 
            Start Service Section
        =====================================================================-->
        <section class="services-section bg-snow pt-140 rpt-90 pb-110 rpb-60" style="padding-top: 70px;">
            <div class="container">
                <div class="row justify-content-center" style="background-color: #fe6600;margin-bottom: 70px;">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-title text-center wow fadeInUp animated" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;padding: 30px 10px;">
                            <!--<h2 style="color: #177fdf;">Services We Offer.</h2>-->
                            <!--<h3 style="color: #177fdf;">(?????? ?????? ?????????????????? ?????????????????? ???????????? ?????????)</h3>-->
                            <!--<p><span style="color: #c34224;">Know more about the services and facilities we provide </span><br>??????????????? ?????????????????? ?????????????????? ?????? ???????????? ???????????? ?????????????????? ?????? ???????????????????????? ?????? ???????????? ????????? ???????????? ???????????????</p>-->
                            <h3 style="line-height: 1.5;color: #fff;">Our Services<br>??????????????? ??????????????????</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-duration="2s">
                            <div class="service-icon d-flex">
                                <img src="assets/images/services/shopping.png" alt="Services">
                                <a href="about.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="service-content">
                              <h4><a href="about.php" style="color: #177fdf;">Grocery Shopping</a></h4>
                                <ul>
                                  <li style="list-style: disc;color: #c34224;">Purchase from your Local Shopping Store</li>
                                   <li style="list-style: disc;">???????????? ??????????????? ??????, ??????????????? ??????, ??????????????? ????????????????????? ??????, ???????????? ???????????? ??????, ?????? ?????? ????????????????????? ?????? ??????????????? ?????????????????????</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="service-icon d-flex">
                                <img src="assets/images/services/spatto-delivery-van.png" alt="Services" style="height: 60px;">
                                <a href="about.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="service-content">
                                <h4><a href="about.php" style="color: #177fdf;">Delivery Option</a></h4>
                                <ul>
                                  <li style="list-style: disc;color: #c34224;">Place Order and Get Home Delivery from Spatto</li>
                                  <li style="list-style: disc;">???????????? ??????????????? ??????, ???????????? ?????? ?????? ??????????????? <br>??????????????? ????????????, ?????? ??????????????? ????????? ????????????????????? <br><br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                            <div class="service-icon d-flex">
                                <img src="assets/images/services/speaker-new-4-2a.jpg" alt="Services" style="width: 80px;height: 68px;">
                                <a href="about.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="service-content">
                                <h4><a href="about.php" style="color: #177fdf;">Affiliate Programme</a></h4>
                                <ul>
                                  <li style="list-style: disc;color: #c34224;">Refer people and get rewarded </li>
                                  <li style="list-style: disc;">?????????????????? ?????? ?????????????????? ??????????????? ?????? ??????????????? ??????<br> ?????????????????? ????????????????????? ????????????<br><br><br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="separetor wow fadeInUp" data-wow-duration="2s"></div>
                    <!--<div class="col-lg-4 col-md-6">-->
                    <!--    <div class="service-item wow fadeInUp" data-wow-duration="2s">-->
                    <!--        <div class="service-icon d-flex">-->
                    <!--            <img src="assets/images/services/icon2.png" alt="Services">-->
                    <!--            <a href="about.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>-->
                    <!--        </div>-->
                    <!--        <div class="service-content">-->
                    <!--          <h4><a href="about.php" style="color: #177fdf;">Mobile Recharge</a></h4>-->
                    <!--            <ul>-->
                    <!--              <li style="list-style: disc;color: #c34224;">Soon we will provide Mobile Recharge Facility 10%<font style='color:#1f6aaf'>*</font> less to our users</li>-->
                    <!--              <li style="list-style: disc;">??????????????? ?????? ?????? ???????????? ???????????? ?????? Spatto ?????????????????? ??????, ?????????????????? ????????????????????? ?????? 10% ?????? ????????? ?????????????????? ??????????????????</li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--        <font style='color:#1f6aaf;margin-left: -20px;'>*</font> Condition Apply-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <div class="service-icon d-flex">
                                <img src="assets/images/services/insurance-icon.png" alt="Services">
                                <a href="about.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="service-content">
                                <h4><a href="about.php" style="color: #177fdf;">Insurance Advisor</a></h4>
                                <ul>
                                  <li style="list-style: disc;color: #c34224;">Soon we will provide Insurance Facility to users. </li>
                                  <li style="list-style: disc;">?????? ????????????, ????????? ???????????????????????? ??????, ???????????? ?????????????????? ??????, ???????????? ?????? ????????????, ?????????????????? ?????? ????????? ?????????<br><br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                            <div class="service-icon d-flex">
                                <img src="assets/images/services/insurance.png" alt="Services" style="height: 65px;">
                                <a href="about.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="service-content">
                                <h4><a href="about.php" style="color: #177fdf;">In Future Help</a></h4>
                                <ul>
                                  <li style="list-style: disc;color: #c34224;">For any financial need in future get help from Spatto</li>
                                  <li style="list-style: disc;">?????????????????? ?????? ????????? ???????????? ??????????????? ?????? ???????????? ?????????????????? ?????? ???????????? ??????????????? ?????? ????????????, spatto ?????? ?????????????????? ??????????????? ???????????? ???????????? ??????</li>
                                </ul></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-duration="2s">
                            <div class="service-icon d-flex">
                                <img src="assets/images/services/icon6.png" alt="Services">
                                <a href="business-listing.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="service-content">
                                <h4><a href="about.php" style="color: #177fdf;">Grow Your Business</a></h4>
                                <ul>
                                  <li  style="list-style: disc;color: #c34224;">Promote your own busines with Spatto </li>
                                  <li style="list-style: disc;">Spatto ?????? ?????????????????? ?????? ?????? ???????????? ????????? ??????, <br> ????????????????????? ?????? ?????????????????? ?????? ?????????????????? ?????? ???????????? ?????? <br><br></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="separetor wow fadeInUp" data-wow-duration="2s"></div>
                    <!--<div class="col-lg-4 col-md-6">-->
                    <!--    <div class="service-item wow fadeInUp" data-wow-duration="2s">-->
                    <!--        <div class="service-icon d-flex">-->
                    <!--            <img src="assets/images/services/icon6.png" alt="Services">-->
                    <!--            <a href="about.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>-->
                    <!--        </div>-->
                    <!--        <div class="service-content">-->
                    <!--            <h4><a href="about.php" style="color: #177fdf;">Grow Your Business</a></h4>-->
                    <!--            <ul>-->
                    <!--              <li  style="list-style: disc;color: #c34224;">Promote your own busines with Spatto </li>-->
                    <!--              <li style="list-style: disc;">Spatto ?????? ?????????????????? ?????? ?????? ???????????? ????????? ??????, <br> ????????????????????? ?????? ?????????????????? ?????? ?????????????????? ?????? ???????????? ?????? <br><br></li>-->
                    <!--            </ul>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-duration="2s">
                            <div class="service-icon d-flex">
                                <img src="assets/images/services/growth-icon.png" alt="Services">
                                <a href="contact.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="service-content">
                                <h4><a href="about.php" style="color: #177fdf;">Business Growth</a></h4>
                                <ul>
                                  <li  style="list-style: disc;color: #c34224;">Refer any Daily Essential Shop/Business to Spatto </li>
                                  <li style="list-style: disc;">?????????????????? ?????? ??????????????? ????????????, <br>????????????????????? ?????? growth ?????????????????? ?????? ???????????? <br>Spatto ?????? Tie-up ????????????????????? ???</li> 
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;padding-bottom: 80px;">
                            <div class="service-icon d-flex">
                                <img src="assets/images/services/jobs.png" alt="Services">
                                <a href="career.php" class="ml-auto"><i class="fas fa-angle-double-right"></i></a>
                            </div>
                            <div class="service-content">
                                <h4><a href="about.php" style="color: #177fdf;">Apply for job</a></h4>
                                <ul>
                                  <li  style="list-style: disc;color: #c34224;">For Jobs in your Local Area</li>
                                  <li style="list-style: disc;">???????????? ????????????????????? ??????, Spatto ??????, ??????????????? ???????????? ?????? ???????????? ??????????????? ????????????, ???????????? ???????????????????????? ???????????? ?????????????????? - <a href="mailto:Spattoask@gmail.com"  style="color: #177fdf;">Spattoask@gmail.com</a></li>	  
                                </ul>
<!--                                Mention Post for Applying :- -->
                                <!--Tele Caller, Field Executive, Field Manager, Superviser.-->
<!--                                <span style="color: #177fdf;">Telecaller</span> :  only Female  10th/12th,  Age 18-30 yrs, <span style="color: #177fdf;">Field Executive</span> : Male/Female 10th/12th,   Age 18-30 yrs, <span style="color: #177fdf;">Field Manager</span> : -->
<!--Male/Female Graduate Age 30-40 yrs, <span style="color: #177fdf;">Field Supervisor</span> : Male/Female ???Graduate Age 25-40 yrs-->
                                <br>
                                <form method="post" action="career.php"><button class="theme-btn" type="submit" style="background-color:#1f9810; padding: 7px 0px 7px 0px;min-width: 150px;margin-top: 10px;margin-left: 15px;">Apply Now</button></form>
                            </div>
                        </div>
                        <form method="post" action="https://spatto.co/about.php"><button class="theme-btn" type="submit" style="background-color:#1f9810; padding: 7px 0px 7px 0px;min-width: 150px;margin-top: 10px;margin-left: 15px;">Next</button></form>
                    </div>
                    
                    
                    
                    
                    
                    
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Service Section
        =====================================================================-->
   
        
   
      
   
   
        <!--==================================================================== 
            Start Call Back Section
        =====================================================================-->
        <!-- <section class="call-back-section text-white py-150 rpt-90 rpb-100">
            <div class="call-back-shap"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title wow fadeInUp"  data-wow-duration="2s">
                            <h2>Request A Call Back.</h2>
                            <p>??????????????? ???????????? ???????????? ???????????? ????????? ????????????????????? ?????????????????? ????????????, ???????????? ?????? ???????????? ???????????? ????????? ?????? ????????????</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form id="call-back-form" class="call-back-form" name="call-back-form" action="#" method="post">
                            <div class="row clearfix">
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <input type="text" name="full-name" class="form-control" value="" placeholder="Full Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email-address" class="form-control" value="" placeholder="Email Here" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone-number" class="form-control" value="" placeholder="Phone No.">
                                    </div>
                                </div>
                                <div class="col-md-6">        
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" value="" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-10">        
                                    <div class="form-group">
                                        <input type="text" name="short-text" class="form-control" value="" placeholder="Short Text">
                                    </div>
                                </div>                                               
                            </div>
                            <div class="form-group call-submit text-center">
                                <button class="theme-btn" type="submit">Submit Now <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="cta-section bg-orange pt-130 rpt-80 pb-135 rpb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="cta-text wow fadeInUp rmb-25" data-wow-duration="2s">
                            <h3>???????????? ?????? ????????????????????????????????? ???????????????????????? <br>???????????? ??????????????? ?????? ????????? <br>????????? ???????????? ??????????????? ??????????</h3>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cta-btn wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
                            <a href="user/rules.php" style="min-width: 150px;padding: 7px 47px 7px 45px; min-width: 150px; margin-top: 10px;margin-left: 10px;" class="theme-btn">?????????????????? ???????????? </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==================================================================== 
            End Call Back Section
        =====================================================================-->
   
        
        <!--==================================================================== 
                                Start Footer Section
        =====================================================================-->
        <footer class="footer-section bg-black pt-10 rpt-50">
            
            
            <!-- Copyright Area-->
            <div class="copyright-area rmt-45">
               <div class="container">
                    <div class="copyright-inner align-items-center">
                        <div class="copyright-wrap order-2 order-md-1">
                            <p>Copyright ?? Spatto <span>2021</span> | All Rights Reserved. CIN No. : <font style="color:#fe6600">U74999UR2021PTC013067</font></p>
                            <!-- Scroll Top Button -->
                            <button class="scroll-top scroll-to-target wow fadeInUp" data-wow-duration="2s" data-target="html"><i class="fas fa-angle-double-up"></i></button>
                            <!-- footer menu -->
                        </div>
                        <ul class="footer-menu order-1 order-md-2">
                            <li><a href="career.php">Jobs</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--==================================================================== 
                                End Footer Section
        =====================================================================-->
    </div>
    <!--End pagewrapper-->
    
    <!-- jequery plugins -->
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/leaflet.min.js"></script>
    <script src="assets/js/appear.js"></script>
    <!-- Custom script -->
    <script src="assets/js/script.js"></script>
</body>
</html>