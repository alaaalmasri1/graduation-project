<?php include"include/db.php";
include "include/session.php";
include "include/function.php";
?>
<!DOCTYPE html>
<!--All HTML documents must start with a document type declaration -->
<html lang="en">
<!-- The HTML document itself begins with <html> and ends with and we used en to help with the search engine </html>. -->

    <!-- represents introductory content, typically a group of introductory or navigational aids-->
    <!-- required meta tags-->
    <meta charset="UTF-8"> <!-- s character encoding capable of encoding all characters on the web -->
    <meta name="description" content="altkaful.net website">
    <!--Define a description of your web page:-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- the following value to display the webpage in edge mode, which is the highest stand<!DOCTYPE html>
    <!--html lang="en"-->

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="altkaful.net website">
        <!--Define a description of your web page:-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- the following value to display the webpage in edge mode, which is the highest standards mode supported by Internet Explorer and chrome-->
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <!--Define keywords for search engines-->
        <meta name="author" content="ALAA almasri,huthaifa khazaleh,shahem qasem"> <!--  Define the author of a page: -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Setting the viewport to make your website look good on all devices-->
        <title>جمعية التكافل الخيرية</title>
        <!-- favicon -->
        <link rel="icon" href="images/logo.jpg" type="image/gif" sizes="16x16"><!-- icon in the title page-->
        <!-- font-awsome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!--Main Stylesheet-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" v=1.0 type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <!--loading-->
    <div class="LogosArea">
        <div class="container">
            <div class="col-md-3">
                <a href="index.php" class="headerZfLogo" title="">
                    <img src="images/logo1.png" id="logo" class="pull-left logo-zakat" title="جمعية التكافل"style="width:150px; margin-right:20px;"></a></div>
            <!--col-md-3-->
            <div class="col-md-6">
                <img src="images/logo2.png" class="slogin" title="الرؤية: الريادة والتميز في خدمة فريضة الزكاة"></div>
            <!--col-md-6-->
            <div class="col-md-3">
                <a href=https://jordan.gov.jo/wps/portal/%5c?lang=ar target="_blank" class="headerGovLogo" title="حكومة الاردن"><img src="images/jordan%20logo.png" class="pull-rightlogo logo-uae" ></a></div>
            <!--col-md-3-->
        </div>
        <!--container-->

    </div>

<body data-spy="scroll" data-target="#header">
    <!-- to the element that should be used as the scrollable area-->
    <!--Start Hedaer Section-->
    <!--section and div are A sections in a document-->
    
    <section id="header">
        <div class="header-area">
            <div class="top_header">
                <div class="continer" style="background-color:#009b77;">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm- col-xs-4 zero_mp">
                            <!--/divide the top-header-->
                            <div class="col-md-4">
                                <div class="social text-right" style="padding-top: 15px;">
                                    <a href="https://www.facebook.com/altkafulpage/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://twitter.com/AwaqlehKhaled?lang=ar" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-google-plus-g"></i></a>
                                    <a href="https://www.youtube.com/user/altkafulmedia?sub_confirmation=1" target="_blank"><i class="fab fa-youtube" style="color:red;"></i></a>
                                </div>
                            </div>
                            
                        </div>
                        <!--End of col-md-4-->
                        <div class="col-md-4 ">
                            <div class="phone" style="padding-left:150px; padding-top: 5px;">
                               
                            </div>
                        </div>
                        <!--End of col-md-4-->
                        <!--logs of facebook and twitter and google plus and twitter-->

                      
                        <!--col-md-4-->
                        <!--end of the column 4-->
                    </div>
                    <!-- end of row-->
                </div>
                <!-- end of continer-->
            </div>
            <!-- end of top-header-->
            <div class="header_menu text-center" id="nav">
                <div class="container">
                    <nav class="navbar navbar-default zero_mp ">
                        <!-- Brand and 0toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div>
                        <!--End of navbar-header-->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right main_menu">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">اخرى
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="Medical Complex.php">مركز التكافل الصحى</a></li>
                                        <li><a href="blog.php">المدونة</a></li>
                                    </ul>
                                </li>
                              
                                <li><a href="project.php">مشاريع الجمعية</a>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">الانشطة
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="activity.php">انشطة الجمعية</a></li>
                                       
                                        <li><a href="courses.php">دورات تدربية</a></li>
                                    </ul>
                                </li>
                                <li><a href="payment.php">التبرع</a></li>
                                <li><a href="Volunteer.php">التطوع</a></li>
                                <li><a href="Gallery.php">معرض الصور</a></li>
                                <li><a href="about.php">من نحن</a></li>
                                <li><a href="calculator.php">حاسبة الزكاة</a></li>

                                
                                <li><a href="index.php" id="visited">الرئسية</a></li>
                            </ul>
                            <ul class="left" style="margin-top:3px;">
                                <li class="dropdown themesDrop">
                                    <button id="btn"><img src="images/themes.png"></button>
                                </li>
                               
                                <li class="FontChanger">
                                  <li id="Li4" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1006 dropdown  Pull-Corner" style="background-color: #074a7e;">
            <a href="login.php" style="color:#F4F4F4; margin:15px; font-size:20px;">تسجيل الدخول</a>
            



                                </li>
                            </ul>
                        </div>

                    </nav>
                </div>

                <!-- /.navbar-collapse -->
            </div>
            <!--End of container-->
        </div>
        <!--End of header menu-->
    <!--Start of slider section-->

    <body>
<br>
<br>
<br>
<div id="content">
				<div class="row">
	<div class="col-md-12">
			</div>
</div>
<div class="page-section row">
		
		<div class="col-md-12">
		<p style="text-align: left;"></p><div class="box-section   " style=""><p></p>
<h2 style="text-align: center;"><span style="color: #008000;">للتبرع والدعم</span></h2>
<h2 style="text-align: center;"><span style="color: #008000;"><strong>*من داخل المملكة الأردنية الهاشمية* </strong><strong><br>
</strong><strong>{البنك الإسلامي الأردني} </strong></span></h2>
<h2 style="text-align: center;"><span style="color: #008000;"><strong>بجميع فروعه والرئيسي</strong></span></h2>
<h2 style="text-align: center;"><span style="color: #008000;"><strong>على حساب</strong><strong>: </strong><strong>جمعية التكافل الخيرية فرع الرمثا </strong></span></h2>
<h2 style="text-align: center;"><span style="color: #008000;"><strong>swft code</strong></span></h2>
<h2 style="text-align: center;"><span style="color: #008000;"><strong>JIBAJOAM</strong></span></h2>
<h2 style="text-align: center;"><span style="color: #008000;">&nbsp;</span></h2>
<h2 style="text-align: center;"><span style="color: #008000;"><strong>13166</strong></span></h2>
<h2 style="text-align: center;"><span style="color: #008000;">&nbsp;</span></h2>
<h2 style="text-align: center;"><span style="color: #008000;"><strong>*من خارج المملكة*</strong></span></h2>
<h2 style="text-align: center;"><span style="color: #008000;">&nbsp;</span></h2>
<h2 style="text-align: center;"><span style="color: #008000;">البنك الاسلامي فرع 75</span></h2>
<h2 style="text-align: center;"><span style="color: #008000;">&nbsp;</span></h2>
<h2 style="text-align: center;"><span style="color: #008000;">رقم الحساب : 0979657410400004</span></h2>
<h2 style="text-align: center;"><span style="color: #008000;">&nbsp;</span></h2>
<h2 style="text-align: center;"><span style="color: #008000;">&nbsp;</span></h2>
<h2 style="text-align: center;"><span style="color: #008000;"><strong>I-BAN:JO 49 JIBA 0750 0009 7965 7410 4000 04</strong></span></h2>
<p></p></div><p></p>
			</div>
		</div>
</div>
        </body>
    </section>
     <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="copyright">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="designer">
                           
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
    </body>
   
</html>