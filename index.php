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
        <meta charset="UTF-8">
        <meta name="description" content="altkaful.net website">
        <!--Define a description of your web page:-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- the following value to display the webpage in edge mode, which is the highest standards mode supported by Internet Explorer and chrome-->
        <meta name="keywords" contentf="HTML,CSS,XML,JavaScript">
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
                                <li><a href="Volunteer.php">التطوع</a></li>
                                <li><a href="Gallery.php">معرض الصور</a></li>
                                <li><a href="about.php">من نحن</a></li>
                                <li><a href="calculator.php">حاسبة الزكاة</a></li>

                                
                                <li><a href="index.php" id="visited">الرئسية</a></li>
                            </ul>
                            <ul class="left" style="margin-top:3px;">
                                <li class="dropdown themesDrop">
                                    <button id="btn" style="margin-left:25px; position:absoloute;
                                    top:5px;"><img src="images/themes.png"></button>
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
    <button id="topBtn" data-toggle="tooltip" title="الرجوع الى اعلى"><i class="fas fa-arrow-up"></i></button>
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
                        <div class="join-us" style="margin-top:50px;">
                            <a href="Volunteer.php" class="vol_btn">انضم لنا</a>
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
                <div class="accord-title" style="margin:10px;">
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
                                        <li class="cta-button"><a href="orphen.php"  class="btn btn-primary">المزيد</a></li>
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
                                        <li class="cta-button"><a href="bread.php"  class="btn btn-primary">المزيد</a></li>
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
                                <li class="cta-button"><a href="package.php"  class="btn btn-primary">المزيد</a></li>
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
    <div class="blog">
        <div class="container">
            <h1 class="text-center">المدونة</h1>
            <p class="text-center">الاخبار المتداول</p>
            <div clas="row" style="background-color:#efefef;">
                <div class="col-md-4">
                    <div class="single-blog">
                        <img src="images/actvity1.jpeg">
                        <h2><a href="#">فعالية طبية لمركز التكافل الصحي في بيت شباب اربد
                            </a></h2>
                        <p class="blog-text">ضمن برنامج التوعية الصحية المجتمعية – حملة اسمعنا صحتك بتهمنا – شارك مركز التكافل الصحي يفعاليات اليوم التثقيفي التوعوي الذي عقدته جمعية التكافل الخيرية – قسم الايتام الاردنيين – في بيت شباب اربد , يوم السبت 17/11/2018 م , حيث تم تقديم فعالية طبية توعوية تضمنت : محاضرة طبية توعوية قدمها مدير المركز الصحي : عبدالمجيد الزعبي , تناول خلالها عدة مواضيع تهم قطاع الشباب</p>
                        <p><a href="blog.php" class="read-more-btn">المزيد</a> </p>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog">
                        <img src="images/activty2.jpeg">
                        <h2><a href="#">التكافل الخيرية تكرم قسم مكافحة المخدرات بالرمثا

                            </a></h2>
                        <p class="blog-text">كرمت جمعية التكافل الخيرية صباح يوم الثلاثاء كلاً من مدير إدارة مكافحة المخدرات الرائد عامر الهياجنة، والنقيب زهير الرحيمي بدرع التميز، وذلك لجهودهم العظيمة في توعية أبناء المجتمع المحلي من مخاطر المخدرات.
                            وأكد الهياجنة على ضرورة التعاون بين مديرية مكافحة المخدرات وجمعية التكافل الخيرية في الحد من ظاهرة انتشار المخدرات بين شباب المجتمع، .</p>
                        <p><a href="blog.php" class="read-more-btn">المزيد</a> </p>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-blog">
                        <img src="images/actvity3.jpeg">
                        <h2><a href="#">فريق التكافل التطوعي يشارك بلدية الرمثا في مبادرة جدارية مدرسة مصعب
                            </a></h2>
                        <p class="blog-text">ضمن برناِ هذه المبادرة لرفع مستوى الوعي والمعرفة لدى الطلاب بمختلف أعمارهم – حملة اسمعنا صحتك بتهمنا – شارك مركز التكافلأ طلقت بلدية الرمثا مبادرة الرسم والكتابة الهادفة على الجدران الداخلية لمدرسة مصعب بن عمير الثانوية للبنين، ونفذ هذه المبادرة فريق التكافل التطوعي وعددهم (35) متطوع حيث قاموا بالرسم على جدران المدرسة الداخلية،</p>
                        <p><a href="blog.php" class="read-more-btn">المزيد</a> </p>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
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
                                <i class="fa fa-map-marker"><span>jordan ,irbid/Ar-Ramtha</span></i>
                            </div>
                            <div class="phone">
                                <i class="fa fa-phone"><span>+ 9607 7777 4922</span></i>
                            </div>
                            <div class="email">
                                <i class="fa fa-envelope"><span>info@altkaful.net
</span></i>
                            </div>
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3363.5312802535504!2d36.00273911465785!3d32.53866340340873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b8d24d544348d%3A0x9e2c0dba51f0adc8!2z2KzZhdi52YrYqSDYp9mE2KrZg9in2YHZhCDYp9mE2K7Zitix2YrYqSDYp9mE2LHZhdir2Kcg2KfZhNin2K_Yp9ix2Kkg2KfZhNi52KfZhdip!5e0!3m2!1sen!2sjo!4v1550997406148" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                                            <input type="text" class="form-control" name="name" id="name" placeholder="الاسم">
                                            <?php echo $nameerror;?>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="البريد الالكترونى">
                                            <?php echo $emailerror?>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="subject" class="form-control" id="subject" placeholder="الموضوع" name="subject">
                                            <?php echo $subjecterror?>
                                            <div class="text_area">
                                                <textarea name="contact-message" id="msg" class="form-control" cols="30" rows="8" placeholder="الرسالة"></textarea>
                                                <?php echo $contactmessageterror?>
                                            </div>
                                            <button type="submit" name="submit" class="btn custom-btn" data-loading-text="Loading...">ارسال</button>
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
    </section>
</body>

</html>
