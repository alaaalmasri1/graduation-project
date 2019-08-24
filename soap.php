<?php
require_once "include/db.php";

require_once "include/function.php";
require_once "include/session.php";
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
                                <li><a href="payment.php">التبرع</a></li>
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
<?php
if(isset($_POST['submit']))
{
    $name=  mysql_real_escape_string($_POST['name']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $email=  mysql_real_escape_string($_POST['mob']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $phone=  mysql_real_escape_string($_POST['email']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
     $question=  mysql_real_escape_string($_POST['question']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $course="دورة صناعة الصابون";
     $query="INSERT INTO course(name,email,phone,question,coursename) 
                 values(' $name','$email',' $phone','$question','$course')";
       
        $excute=  mysqli_query($connection,$query);
        if($excute)
        {
            $_SESSION['Successmessage']="تم ارسال المعلمومات بى نجاح ";
        rediret_to("admin.php");
        }
        else
        {
            $_SESSION['error']=" فشل فى عملية الارسال ";
             rediret_to("admin.php");
        }
}

?>
<style>

form_main {
    width: 100%;
}
.form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
}
.heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
}
.heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
}   
.form {
    border-radius: 7px;
    padding: 6px;
}
.txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
}
.txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
}
.txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
}

</style>
<div class="container">
	<div class="row">
    <div class="col-md-12">
    <center>
		<div class="form_main">
                <h4 class="heading"><strong>دورة  </strong> صناعة الصابون والمنطفات<span></span></h4>
                <div class="form">
                <form action="soap.php" method="post" id="contactFrm" name="contactFrm">
                    <input type="text" dir=rtl required="" placeholder="ادخل الاسم " value="" name="name" class="txt">
                    <input type="text" dir="rtl" required="" placeholder="ادخل رقم الهاتف" value="" name="mob" class="txt">
                    <input type="text" dir="rtl" required="" placeholder="البريد الالكترونى" value="" name="email" class="txt">
                    
                	 <textarea dir=rtl placeholder="استفسارات عن الدورات" name="question" type="text" class="txt_3"></textarea>
                     <input  type="submit" value="ارسال" name="submit" class="txt2">
                </form>
                   </div>
                
            </div>
        </center>
            </div>
        </div>
	</div>






<?php
include "include/footer.php";

?>