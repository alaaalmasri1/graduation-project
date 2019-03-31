<?php
require 'PHPsource/phpfile.php';
require_once "include/db.php";
require_once "include/session.php";
require_once "include/function.php";
?>
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
    <div class="container-load">
        <div class="lds-spinner" style="width:100%;height:100%;">
            <img src="images/english.png" style="width:200px; height: 200px;">
            <span class="Count" data-value="100%" style="padding-top: 190x">100%</span>

        </div>
    </div>
    <!--loading-->
    <div class="LogosArea">
        <div class="container">
            <div class="col-md-3">
                <a href="index.php" class="headerZfLogo" title="">
                    <img src="images/logo1.png" class="pull-left logo-zakat" title="جمعية التكافل"></a></div>
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
    <?php 
 echo Successmessage()                ;?>
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
                            <div class="address">
                                <ul style="margin-top:10px; margin-left:100px;">
                                    <li><a href="login.php" class="btn btn-primary btn-sm">الدخول</a></li>
                                    <li> <a href="logout.php" class="btn btn-success btn-sm">الخروج</a></li>

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

                        <div class="col-md-4">
                            <ul class="login" style="width:100%;padding-top: 10px; backgro">

                                <li>
                                    <a title="تسجيل جديد" href="admin.php">تسجيل جديد</a>
                                </li>

                                <li>
                                </li>
                                <li><a href="dashbored.php" target="_self" title="صفحة التحكم">
                                        صفحة التحكم</a></li>
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
                                <li><a href="index.html" id="visited">الرئسية</a></li>
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
                                <li><a href="contact.html">ارسل خبرا</a></li>
                                <li><a href="about.php">من نحن</a></li>


                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">اخرى
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="calculator.php">حاسبة الزكاة</a></li>
                                        <li><a href="Medical Complex.php">مركز التكافل الصحى</a></li>
                                        <li><a href="blog.php">blog</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="left">
                                <li class="dropdown themesDrop">
                                    <button id="btn"><img src="images/themes.png"></button>
                                </li>
                                <li><a href="#" aria-hidden="true" data-toggle="modal" data-target="#HSearch" title="بحث" style="font-size: 14px;"><i class="fa fa-search" aria-hidden="true"></i></a></li>



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
    <!--Start of slider section-->
    <section>
        <div id="background-slideshow">
            <img id="home-image" class="slides" src="images/takfal1.jpg" />
            <img id="shop-image" class="slides" src="images/%D9%83%D9%81%D8%B1-%D9%84%D9%84%D9%85%D9%88%D9%82%D8%B91.jpg" />
            <img id="dine-image" class="slides" src="images/2-1.jpg" />
            <img id="watch-image" class="slides" src="images/WhatsApp-Image-2018-10-30-at-11.13.07-AM.jpeg" />
        </div>
        <!--end of the slider-->
        <!--news ticker in jquery-->
    </section>
    <section>
        <div class="newsTickerCon">
            <ul class="newsTicker">
                <li>البشير يرعى حفل تخريج ثلاث دورات في قيادة الحاسوب الدولية (ICDL)</li>
                <li>التكافل الخيرية وبالتعاون مع الهيئة الهاشمية تنفذ المرحلة الأولى من مشروع دفئ الشتاء ورغيف الخبز</li>
                <li>جمعية الحسين تسلم المعينات الحركية والاجهزة الطبية للمرضى من مختلف الاعمار والجنسيات</li>
                <li>فعالية طبية لمركز التكافل الصحي في بيت شباب اربد</li>
                <li>فريق التكافل التطوعي يشارك بلدية الرمثا في مبادرة جدارية مدرسة مصعب</li>
                <li>التكافل الخيرية تكرم قسم مكافحة المخدرات بالرمثا</li>
            </ul>
        </div>
    </section>
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <!--Start of welcome section-->
    <section id="welcome">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="welcome-header">
                        <h2> شكرا لزيارة موقع جمعية التكافل الخيرية</h2>
                        <p>جمعية التكافل الخيرية هى مؤسسة غير ربحية القريبة منك التى تقدم الخدمات الاتية</p>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item-list">
                                <div class="welcome-icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                                <h4>نطام التبرع</h4>
                                <p> للتبرع والدعم من داخل المملكة الأردنية الهاشمية بجميع فروعة </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item-list">
                                <div class="welcome-icon">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                                <h4>المشاريع الخيرية</h4>
                                <P> جمعية التكافل الاجتماعية تفوك على القيام بى مشاربع تعمل على تنمية المجتمعات والحد من الفقر والبطالة</P>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item-list">
                                <div class="welcome-icon">
                                    <i class="fas fa-hands-helping"></i>
                                </div>
                                <h4>الانشطة</h4>
                                <P> جمعية التكافل الاجتماعية تقوم على القيام بى دورات تدربية وانشطة وفعاليات لها دور فى تنمية المجتمع الاردنى</P>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of col-md-3-->
                <div class="col-md-3">
                    <div class="item">
                        <div class="single_item">
                            <div class="item-list">
                                <div class="welcome-icon">
                                    <i class="fa fa-users"></i>
                                </div>
                                <h4>اللجان</h4>
                                <P> جمعية التكافل الاجتماعية تقوم على انشاء لجنات لرعاية الايتام والاجئين ولجنات اعلامية واجتماعية</P>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-3-->
            </div>
            <!--End of row-->

        </div>
        <!--End of container-->

    </section>
    <!--end of welcome section-->
    <!--Start of volunteer-->
    <section id="volunter">
        <div class="container">
            <div class="row">
                <div class="volunter-area">
                    <div class="col-md-3 col-md-offset-1">
                        <div class="join-us">
                            <a href="" class="vol_btn">انضم لنا</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="volunter_content">
                            <h3>ثقافة التطوع <span>تحتاج لمن يتطوع لينشرها فكن متطوعا</span></h3>
                            <p>يُنمّي العمل التطوعي عند المتطوع مهارات جديدة، ويبرز مهارات كانت موجودة لديه أصلاً، حيث يبدأ المتطوع بممارسة نشاطات ومهارات يعرفها جيداً، ثم ينتهي الأمر به لممارسة مهارات لم يفكر يوماً ما بأنه قادر على ممارستها، مما يزيد الشغف لتعلم
                                مهارات جديدة، وتوسيع الأنشطة التطوعية القائمة وتطويرها</p>
                        </div>
                    </div>
                    <!--end of col-md-8-->

                    <!-- end of col-md-3-->
                </div>
                <!-- end of volunture-area-->
            </div>
            <!-- end of row-->
        </div>
        <!-- end of continer-->
    </section>
    <!--project-->
    <div class="box-section">
        <div class="accordion-box" id="accordion-35">
            <div class="accord-elem  active ">
                <div class="accord-title">
                    <h3> ابرز مشاريع الجمعية</h3>

                </div>
                <div class="accord-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="pricing-section">
                                    <ul class="pricing-table basic">
                                        <li class="title">
                                            <p class="project">مشروع كفالة الأيتام</p>
                                        </li>
                                        <li class="bullet-item">
                                            <p><span style="color: #ff6600;"><strong>كفالة 1500 اسره شهريا</strong></span></p>
                                        </li>
                                        <li class="bullet-item">
                                            <p><span style="color: #ff6600;"><strong>اكثر من 20000 دينار شهريا</strong></span></p>
                                        </li>
                                        <li class="bullet-item">
                                            <p><span style="color: #ff6600;"><strong>كفالة ايتام على مستوى اقليم الشمال</strong></span></p>
                                        </li>
                                        <li class="bullet-item">
                                            <p><span style="color: #ff6600;"><strong>انشطة ورحلات حج وعمرة للأيتام</strong></span></p>
                                        </li>
                                        <li class="cta-button"><button type="button" class="btn btn-primary">المزيد</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="pricing-section  ">
                                    <ul class="pricing-table basic">
                                        <li class="title">
                                            <p class="project">مشروع الرغيف الخيري</p><span></span>
                                        </li>
                                        <li class="bullet-item">
                                            <p><span style="color: #ff6600;"><strong>تغطية نفقات اكثر من 500 عائلة</strong></span></p>
                                        </li>
                                        <li class="bullet-item">
                                            <p><span style="color: #ff6600;"><strong>توزيع 15000 رغيف خبز شهريا</strong></span></p>
                                        </li>
                                        <li class="bullet-item">
                                            <p><span style="color: #ff6600;"><strong>شمولية البرنامج السوري والبرنامج الاردني </strong></span></p>
                                        </li>
                                        <li class="bullet-item">
                                            <p><span style="color: #ff6600;"><strong>التعامل مع اكثر من 50 مخبز على مستوى الاردن</strong></span></p>
                                        </li>
                                        <li class="cta-button"><button type="button" class="btn btn-primary">المزيد</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p>
                                    <div class="pricing-section  ">
                                        <ul class="pricing-table basic">
                                            <li class="title">
                                                <p class="project">مشروع طرد الخير</p><span></span>
                                            </li>
                                            <li class="bullet-item">
                                                <p><span style="color: #ff6600;"><strong>توزيع اكثر من 10000 طرد في رمضان</strong></span></p>
                                            </li>
                                            <li class="bullet-item">
                                                <p><span style="color: #ff6600;"><strong>توزيع 1000 طرد شهريا</strong></span></p>
                                            </li>
                                            <li class="bullet-item">
                                                <p><span style="color: #ff6600;"><strong>طرود خيرية من كافة انحاء الوطن العربي</strong></span></p>
                                            </li>
                                            <li class="bullet-item">
                                                <p><span style="color: #ff6600;"><strong>توزيع طرود الخير للأخوة السوريين</strong></span></p>
                                            </li>
                                            <li class="cta-button"><button type="button" class="btn btn-primary">المزيد</button></li>
                                        </ul>
                                    </div>
                            </div>
                            <p>&nbsp;</p>

                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog-->
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest_blog text-center">
                        <h2>latest blog</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cum libero vitae quos eaque commodi.</p>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-4">
                    <div class="blog_news">
                        <div class="single_blog_item">
                            <div class="blog_img">
                                <img src="images/" alt="">
                            </div>
                            <div class="blog_content">
                                <a href="">
                                    <h3>Climate change is affecting bird migration</h3>
                                </a>
                                <div class="expert">
                                    <div class="left-side text-left">
                                        <p class="left_side">
                                            <span class="clock"><i class="fa fa-clock-o"></i></span>
                                            <span class="time">Aug 19, 2016</span>
                                            <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                        </p>
                                        <p class="right_side text-right">
                                            <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                <span class="count">0</span></a>
                                        </p>
                                    </div>
                                </div>

                                <p class="blog_news_content">Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit. </p>
                                <a href="" class="blog_link">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-4-->
                <div class="col-md-4">
                    <div class="blog_news">
                        <div class="single_blog_item">
                            <div class="blog_img">
                                <img src="img/air_pollutuon.jpg" alt="">
                            </div>
                            <div class="blog_content">
                                <a href="">
                                    <h3>How to avoid indoor air pollution?</h3>
                                </a>
                                <div class="expert">
                                    <div class="left-side text-left">
                                        <p class="left_side">
                                            <span class="clock"><i class="fa fa-clock-o"></i></span>
                                            <span class="time">Aug 19, 2016</span>
                                            <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                        </p>
                                        <p class="right_side text-right">
                                            <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                <span class="count">0</span></a>
                                        </p>
                                    </div>
                                </div>

                                <p class="blog_news_content">Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit. </p>
                                <a href="" class="blog_link">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-4-->
                <div class="col-md-4">
                    <div class="blog_news">
                        <div class="single_blog_item">
                            <div class="blog_img">
                                <img src="img/threat_bear.jpg" alt="">
                            </div>
                            <div class="blog_content">
                                <a href="">
                                    <h3>Threat to Yellowstone’s grizzly bears.</h3>
                                </a>
                                <div class="expert">
                                    <div class="left-side text-left">
                                        <p class="left_side">
                                            <span class="clock"><i class="fa fa-clock-o"></i></span>
                                            <span class="time">Aug 19, 2016</span>
                                            <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                        </p>
                                        <p class="right_side text-right">
                                            <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                <span class="count">0</span></a>
                                        </p>
                                    </div>
                                </div>

                                <p class="blog_news_content">Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit. </p>
                                <a href="" class="blog_link">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-4-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!-- end of blog-->


    <!--Start of counter-->
    <section id="counter">
        <div class="counter_img_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="counter_header">
                            <h2>انجازتنا</h2>
                        </div>
                    </div>
                    <!--End of col-md-12-->
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <i class="fa fa-users" style="color:skyblue"></i>
                                <div class="counter_text">
                                    <span class="count" data-value="385621">385621</span>
                                    <p>عدد طرود الخير الموزعة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <i class="fa fa-users" style="color:skyblue"></i>
                                <div class="counter_text">
                                    <span class="count" data-value="385621">385621</span>
                                    <p>اجمالى المساعدات السنوية</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <i class="fa fa-coffee" style="color:skyblue"></i>
                                <div class="counter_text">
                                    <span class="count" data-value="3578">3578</span>
                                    <p>عدد الايتام المكفولين</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="counter_item text-center">
                            <div class="sigle_counter_item">
                                <i class="fa fa-flask" style="color:skyblue"></i>
                                <div class="counter_text">
                                    <span class="count" data-value="1479">1479</span>
                                    <p>عدد الاسر المكفولة</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </div>
    </section>
    <!--start of event-->
    <section id="event">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="event_header text-center">
                        <h2>احدث الاخبار</h2>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 zero_mp">
                            <div class="event_item">
                                <div class="event_img">
                                    <img src="images/%D8%A7%D9%86%D8%AC%D8%A7%D8%B22.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 zero_mp">
                            <div class="event_item">
                                <div class="event_text text-center">
                                    <a href="">
                                        <h4> في قيادة الحاسوب الدولية (ICDL)</h4>
                                    </a>
                                    <h6>البشير يرعى حفل تخريج ثلاث دورات في قيادة الحاسوب الدولية (ICDL)</h6>
                                    <p>رعى الأستاذ خالد البشير مدير مدرسة الثانوية الشاملة للبين سابقاً حفل تخريج المتدربين من دورات قيادة الحاسوب الدولية “ICDL” السادسة والسابعة والثامنة للنصف الثاني من عام 2018 بمركز التدريب المهني والحرفي والتعليمي بجمعية التكافل
                                        الخيرية في مدينة الرمثا يوم الأحد الموافق 16/12/2018، وقدم البشير كلمة تشجيعية في الحث على الاستمرار في العمل ومواصلة التعليم.
                                </p>
                                    <a href="" class="event_btn">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                    <div class="row">
                        <div class="col-md-6 zero_mp">
                            <div class="event_item">
                                <div class="event_text text-center">
                                    <a href="">
                                      <h4>جمعية التكافل الخيرية تشارك في منصة الإبداع والابتكار الشبابي</h4>
                                    </a>
                                   
                                    <p>تحت رعاية الأمين العام لوزارة الشباب عطوفة الدكتور ثابت النابلسي، وضمن مشروع مكاني شاركت جمعية التكافل الخيرية فرع النعيمة بمشروع “مختبر الابتكار الاجتماعي في منصة الإبداع والابتكار الشبابي” في مدينة الحسن الرياضية للشباب،</p>
                                    <a href="" class="event_btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 zero_mp">
                            <div class="event_item">
                                <div class="event_img">
                                    <img src="images/%D8%A7%D9%86%D8%AC%D8%A7%D8%B24.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                </div>
                <!--End of col-md-8-->
                <div class="col-md-4">
                    <div class="event_news">
                        <div class="event_single_item fix">
                            <div class="event_news_img floatleft">
                                <img src="images/%D8%A7%D9%86%D8%AC%D8%A7%D8%B21.jpg" width="200" alt="">
                            </div>
                            <div class="event_news_text">
                                <a href="#">
                                    <h4>محاضرة طبية توعوية حول مرض السكري</h4>
                                </a>
                                <p>ضمن حملة اسمعنا صحتك بتهمنا، قدم طاقم مركز التكافل الصحي التابع لجمعية التكافل الخيرية : محاضرة طبية توعوية للاخوات ومن مختلف الجنسيات، حول داء ( السكري ) . في مقر جمعية الابرار النسائية الخيرية والتي مقرها لواء الرمثا، وذلك اليوم
                                السبت الموافق 2016/4/23 م .</p>
                            </div>
                        </div>
                    </div>
                    <div class="event_news">
                        <div class="event_single_item fix">
                            <div class="event_news_img floatleft">
                                <img src="im" alt=""h>
                            </div>
                            <div class="event_news_text">
                                <a href="#">
                                    <h4>Keep your house envirome..</h4>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="event_news">
                        <div class="event_single_item fix">
                            <div class="event_news_img floatleft">
                                <img src="img/tree_cut_3.jpg" alt="">
                            </div>
                            <div class="event_news_text">
                                <a href="#">
                                    <h4>Urgent Clothe Needed Needed</h4>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="event_news">
                        <div class="event_single_item fix">
                            <div class="event_news_img floatleft">
                                <img src="img/tree_cut_4.jpg" alt="">
                            </div>
                            <div class="event_news_text">
                                <a href="#">
                                    <h4>One Tree Thousand Hope</h4>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="event_news">
                        <div class="event_single_item fix">
                            <div class="event_news_img floatleft">
                                <img src="img/tree_cut_3.jpg" alt="">
                            </div>
                            <div class="event_news_text">
                                <a href="#">
                                    <h4>One Tree Thousand Hope</h4>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-4-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <!--end of event-->

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="colmd-12">
                    <div class="contact_area text-center">
                        <h3>اتصل بنا</h3>
                        <p>يمكنكم التواصل معنا ع البريد الالكترونى او العاتف او الفاكس</p>
                    </div>
                </div>
            </div>
            <!--End of row-->
            <div class="row">
                <div class="col-md-6">
                    <div class="office">
                        <div class="title">
                            <h5>معلومات المكتب</h5>
                        </div>
                        <div class="office_location">
                            <div class="address">
                                <i class="fa fa-map-marker"><span>jordan Road, amman 1205, swalih</span></i>
                            </div>
                            <div class="phone">
                                <i class="fa fa-phone"><span>+ 9675824</span></i>
                            </div>
                            <div class="email">
                                <i class="fa fa-envelope"><span>alaa_almasri4@yahoo.com</span></i>
                            </div>
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d6765.44635977211!2d35.851806800000006!3d32.022611399999995!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1548054198507" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="msg">
                        <div class="msg_title">
                            <h5>اترك رسالة</h5>
                        </div>
                        <div class="form_area">
                            <!-- CONTACT FORM -->

                            <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                <div id="message"></div>
                                <form action="index.php" method="post">
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                            <?php echo $nameerror;?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                                            <?php echo $emailerror?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="subject" class="form-control" id="subject" placeholder="Subject" name="subject">
                                            <?php echo $subjecterror?>
                                            <div class="text_area">
                                                <textarea name="contact-message" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                                <?php echo $contactmessageterror?>
                                            </div>
                                            <button type="submit" name="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of col-md-6-->
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    </form>
    <!--End of contact-->
    <!--Start of footer-->
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

    <!--End of footer-->
    <!-- JQUERY-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <script src="js/backtotop.js"></script>
    <script src="js/main.js"></script>
    <script src="js/backtotop.js"></script>
    <script src="js/jquery.ticker.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!--Counter UP-->
    <script>
        $(window).scroll(startCounter);

        function startCounter() {
            if ($(window).scrollTop() > 180) {
                $(window).off("scroll", startCounter);
                $('.count').each(function() {
                    var $this = $(this);
                    jQuery({
                        Counter: 0
                    }).animate({
                        Counter: $this.text()
                    }, {
                        duration: 9000, //A string or number determining how long the animation will run.
                        easing: 'swing', //A string indicating which easing function to use for the transition.
                        step: function() {
                            $this.text(Math.ceil(this.Counter));
                        }
                    });
                });
            }
        }

    </script>
    <script>
        //color code
        var color = ["#FF0033", "#CCFF33", "#CC6699", "#66FF99", "#003399"];
        var i = 0;
        document.querySelector("#btn").addEventListener("click", function() {
            i = i < color.length ? ++i : 0;
            document.querySelector(".continer").style.background = color[i];
        });
        //decrease font size

    </script>

</body>

</html>
