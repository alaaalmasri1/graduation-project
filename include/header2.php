<!DOCTYPE html>
<!--All HTML documents must start with a document type declaration -->
<html lang="en">
<!-- The HTML document itself begins with <html> and ends with and we used en to help with the search engine </html>. -->
<head>
    <!-- represents introductory content, typically a group of introductory or navigational aids-->
    <!-- required meta tags-->
    <meta charset="UTF-8"> <!-- s character encoding capable of encoding all characters on the web -->
    <meta name="description" content="altkaful.net website">
    <!--Define a description of your web page:-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- the following value to display the webpage in edge mode, which is the highest stand<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8"> /*s character encoding capable of encoding all characters on the web */
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
        <link rel="stylesheet"  type="text/css" href="css/medical.css">
    <link rel="stylesheet"  type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
</head>
<div class="container-load" >

    <div class="lds-spinner" style="width:100%;height:100%;">
        <img src="images/english.png" style="width:200px; height: 200px;">
        <span class="Count" data-value="100%" style="padding-top: 80px">100%</span>

    </div>
</div>
<button id="topBtn" style="margin-right:10px;"><i class="fas fa-arrow-up" style="margin-right:10px;"></i></button>
<!--loading-->
<div class="LogosArea">
    <div class="container">
        <div class="col-md-3">
            <a href="index.php" class="headerZfLogo"  title="صندوق الزكاة">
                <img src="images/logo1.png" class="pull-left logo-zakat" title="صندوق الزكاة"></a></div>
        <!--col-md-3-->
        <div class="col-md-6">
            <img src="images/logo2.png" class="slogin" title="الرؤية: الريادة والتميز في خدمة فريضة الزكاة"></div>
        <!--col-md-6-->
        <div class="col-md-3">
            <a href="http://government.ae/" target="_blank" class="headerGovLogo" title="حكومة الاردن"><img src="images/jordan%20logo.png" class="pull-rightlogo logo-uae"></a></div>
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
            <div class="continer"  style="background-color:#009b77;">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm- col-xs-4 zero_mp">
                        <!--/divide the top-header-->
                        <div class="col-md-4">
                            <div class="social text-right" style="padding-top: 15px;">
                                <a href="https://www.facebook.com/altkafulpage/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/esanmakkah?lang=ar" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-google-plus-g"></i></a>
                                <a href="https://www.youtube.com/user/altkafulmedia?sub_confirmation=1" target="_blank"><i class="fab fa-youtube" style="color:red;"></i></a>
                            </div>
                        </div>
                        <div class="address">
                           <ul style="margin-top:10px; margin-left:100px;">
                             <li><a href="login.php" class="btn btn-primary btn-sm" >الدخول</a></li> 
                         <li> <a href="logout.php" class="btn btn-success btn-sm" >الخروج</a></li>
                            
                         </ul>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4 ">
                        <div class="phone" style="padding-left:150px; padding-top: 5px;">
                            <i class="fa fa-phone floatleft"></i>
                            <p>+96787547824</p>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <!--logs of facebook and twitter and google plus and twitter-->

                    <div class="col-md-3">
                        <ul class="login" style="width:100%;padding-top: 10px;">
                            <li>
                            </li>
                        </ul>
                    </div>
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
                    <!-- Brand and toggle get grouped for better mobile display -->
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
                            <li><a href="index.php" id="visited">الرئسية</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">اللجان
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">اللجنة التوعوية</a></li>
                                    <li><a href="#">اللجنة الاعلامية</a></li>
                                    <li><a href="#">اللجنة الاجتماعية</a></li>
                                    <li><a href="#">اللجنة الاغاثية</a></li>
                                    <li><a href="#">اللجنة رعاية الايتام</a></li>
                                    <li><a href="#"> اللجنة رعاية الاجئين</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">مشاريع الجمعية</a>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">الانشطة
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">انشطة الجمعية</a></li>
                                    <li><a href="#">الندوات الرئسية</a></li>
                                    <li><a href="#">دورات تدربية</a></li>
                                </ul>
                            </li>
                            <li><a href="features.html">التبرع</a></li>
                            <li><a href="contact.html">الاتصال بنا</a></li>
                            <li><a href="Gallery.php">معرض الصور</a></li>
 <li><a href="about.php">من نحن</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">اخرى
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="calculator.php">حاسبة الزكاة</a></li>
                                    <li><a href="Medical Complex.php">مركز التكافل الصحى</a></li>
                              <li><a href="blog.php">المدونة</a></li>

                                </ul>
                            </li>
                        </ul>
                        <ul class="left">
                            <li class="dropdown themesDrop">
                                <button id="btn"><img src="images/themes.png"></button>
                            </li>
                            <li><a href="#" aria-hidden="true" data-toggle="modal" data-target="#HSearch" title="بحث" style="font-size: 14px;"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            <li><i rel="invert" class="fa fa-eye-slash styleswitch invert" aria-hidden="true" style="color: #49494c !important;"></i><i rel="default" class="fa fa-eye styleswitch default" aria-hidden="true" style="display: none;"></i></li>



                            <li><a class="jfontsize-m2" title="تصغير الخط" style="cursor: pointer; font-size: 14px;">-<i class="fa fa-font" class="A-" aria-hidden="true"></i></a></li>
                            <li><a id="jfontsize-d2" class="selected" title="الحجم الطبيعي للخط" style="cursor: pointer; font-size: 14px;"><i class="fa fa-font" aria-hidden="true"></i></a></li>
                            <li><a id="jfontsize-p2" title="تكبير الخط" style="cursor: pointer; font-size: 14px;">+<i class="fa fa-font" aria-hidden="true"></i></a></li>
                            <li class="FontChanger">

                               

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
</section>