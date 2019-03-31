<?php
require 'PHPsource/phpfile2.php';
require "include/db.php";
require "include/session.php";
require_once "include/function.php";
?>

<?php

if(isset($_POST['add']))
{
    $fname= $_POST['first_name'];//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $mname= $_POST['middle_name'];//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $lname=$_POST['family_name'];
    $age=$_POST['age'];
     $gender=$_POST['gender'];
     $acdamic=$_POST['volunteer-field_of_learning'];
     $fstudy=$_POST['volunteer-field_of_study'];
     $phone=$_POST['volunteer-phone_number'];
     $email=$_POST['volunteer-email'];
   
   
        global  $connectingDB;
        $query="INSERT INTO volunteer(fname, mname, lname, age, gender,fstudy, phone, email) VALUES ('$fname','$mname','$lname','$age','$gender','$fstudy','$phone','$email')";
        $excute=  mysqli_query($connection,$query);
        if($excute)
        {
           
            $_SESSION['Successmessage']=" معلومات المتطوع تمت اضافتها بنجاح";
        rediret_to("volunteer.php");
        }
        else
        {
            $_SESSION['error']=" خطا فى اضافة معلومات المتطوع";
             rediret_to("volunteer.php");
        }
    
}

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
                              
                                <li><a href="blog.html">مشاريع الجمعية</a>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">الانشطة
                                        <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="activity.php">انشطة الجمعية</a></li>
                                        <li><a href="#">الندوات الرئسية</a></li>
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
<style>
    .v-bg {
    background-image: url(./images/%D8%AA%D8%B7%D9%88%D8%B9.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 450px;
    background-position: center;
    text-align: left;
    position: relative;
}
   .volnter  {
    font-family: 'Tajawal', sans-serif;
        font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
</style>
<div class="v-bg">

</div>
<div class="volnter"></div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <div id="w0">

                </div> <br>
                <h2>جمعية التكافل تطلق مبادرة وطنيّة لتطوّع الشباب</h2>
                <br>
            </div>
            <p><strong>أطلقت جمعية التكافل  مبادرة </strong><strong>وطنيّة للتطوّع تهدف </strong><strong>إلى تعزيز ونشر ثقافة التطوّع في المجتمع وتحفيز الشّباب بمختلف أعمارهم وأماكنهم ليسهموا في بناء تلك الثّقافة بالشّراكة مع القطاعين العام والخاص ومؤسّسات المجتمع المدنيّ.</strong></p>
            <p><strong>وتهدف المبادرة التي تمّ إطلاقها ضمن حملة وطنيّة في كافّة مناطق المملكة إلى إبراز دور الشّباب كجزء أساسي في عمليّة التطوّع ومنحهم الفرص الكافية لإظهار طاقاتهم وقدراتهم باعتبارهم الشّريحة الأكبر في المجتمع، بالإضافة إلى توحيد كافّة جهود مختلف القطاعات والمؤسّسات وتوجيهها لزيادة فرص مشاركة جيل الشّباب في أعمال تطوعيّة من شأنها بناء قدراتهم وخبراتهم وإحداث تغيير إيجابيّ في مجتمعاتهم.</strong></p>
            <p><strong>&nbsp;وتعمل المبادرة مع مختلف الجهات ذات العلاقة لمأسسة العمل التطوّعي والبناء على ما تم إنجازه في هذا المجال على المستوى الوطنيّ، وفتح مجموعة من الشّراكات الوطنيّة الواسعة لتوفير أكبر عدد ممكن من الفرص التطوعيّة، كما تهدف المبادرة إلى تعزيز الإطار المؤسّسي للتطوّع واستثمار كافة الفرص المتاحة لنقل وبناء الخبرات بين جيل الشّباب وكافة الشّركاء.</strong></p>
            <p><strong>وحملت المبادرة الوطنيّة شعار "تطوّع وابنِ ثقافة جيل" إيماناً بأهميّة القيم التي يحملها العمل التطوّعي وأثره في عمليّة التّنمية، إضافةً إلى الدّور الهام للتطوّع في بناء جيل منتمٍ متمكّن قادر على تحويل التحدّيات المحيطة إلى فرص من خلال تأسيس مبادرات مجتمعيّة تطوّعية مبتكرة تُسهم في حل تلك التحدّيات، إضافةً إلى رفع كفاءة جيل الشّباب من خلال توفير فرص تطوّعية مناسبة لهم بمختلف المؤسّسات والقطاعات لتعزيز خبراتهم وزيادة فرصهم لدخول سوق العمل بشكل أفضل.</strong></p>
            <p><strong>وتستمر المبادرة للوصول إلى مختلف المناطق والجهات من خلال تنظيم مجموعة من الفعاليّات والحملات الإعلانيّة والإعلاميّة للوصول إلى مختلف شرائح المجتمع.</strong></p>
            <p><strong>وتتضمّن المبادرة في مراحلها المتقدمة </strong><strong>منصّة الكترونيّة توافقيّة، سيتم تطويرها لتمكين الشّباب ليأسّسوا حسابات لهم على الانترنت، وتوفير مجموعة من التدريبات في مجال التطوع والمهارات الحياتيّة والتّوظيف.</strong></p> <br><br>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="well well-lg" id="volunteer_form">
                <div class="volunteer-form">
                    <div class="box box-solid">
                        <div class="box-body">
                            <form action="volunteer.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="_csrf" value="y-yblp48J1Kn-zr5Vedrxw_FI45YJBO14ahsmFqX8aOHoq_D0FlXHtC1aJgctQyJOJ935wplf9qE0TXXD6Ow0A==">
                                <div class="row">
            <?php echo message();?>
                        <?php 
                      echo Successmessage()
                   ;?>
                                    
                                   
                                    <div class="col-md-4">
                                        <div class="form-group field-volunteer-family_name required">
                                            <label class="control-label" for="volunteer-family_name">العائلة</label>

                                            <input type="text" id="volunteer-family_name" class="form-control" name="family_name" maxlength="255" aria-required="true">
                                                  <?php echo $lastnameerror;?>
                                            <div class="help-block"></div>

                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group field-volunteer-middle_name required">
                                            <label class="control-label" for="volunteer-middle_name">اسم الأب</label>

                                            <input type="text" id="volunteer-middle_name" class="form-control" name="middle_name" maxlength="255" aria-required="true">
                                             <?php echo $middlenameerror;?>
                                            <div class="help-block"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                       
                                        <div class="form-group field-volunteer-first_name required">
                                            <label class="control-label" for="volunteer-first_name">الإسم</label>

                                            <input type="text" id="volunteer-first_name" class="form-control" name="first_name" maxlength="255" aria-required="true">
                                            <?php echo $firstnameerror;?>
                                            <div class="help-block"></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                   
                                    <div class="col-md-4">
                                    
                                           

                                             <div class="form-group field-volunteer-field_of_learning required">
                                            <label class="control-label" for="volunteer-field_of_learning">التحصيل العلمى</label>

                                            <input type="text" id="volunteer-field_of_learning" class="form-control" name="volunteer-field_of_learning" maxlength="255" aria-required="true">
                                             <?php echo $acadmicerror?>
                                            <div class="help-block"></div>

                                        </div>
                                    </div>
                                     <div class="col-md-4">
                                        <div class="form-group field-volunteer-gender required">
                                            <label class="control-label" for="volunteer-gender">الجنس</label>

                                            <div class="form-group">
                                                <select class="form-control" id="exampleFormControlSelect1" name="gender">
                             <optgroup label="اختر">                                
<option value="ذكر">ذكر</option>
                                                <option value="انثى">انثى</option>
                                                 </optgroup>
                                                </select>
                    <?php echo $gendererror?>
                                            </div>
                                            <div class="help-block"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group field-volunteer-age required">
                                            <label class="control-label" for="volunteer-age">العمر</label>

                                            <input type="text" id="volunteer-age" class="form-control" name="age" aria-required="true">
                                            <div class="help-block"></div>
                                            <?php echo $ageerror?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group field-volunteer-field_of_study required">
                                            <label class="control-label" for="volunteer-field_of_study">التخصص</label>

                                            <input type="text" id="volunteer-field_of_study" class="form-control" name="volunteer-field_of_study" maxlength="255" aria-required="true">
                                           <?php echo $filedstudyerror?>
                                            <div class="help-block"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group field-volunteer-phone_number required">
                                            <label class="control-label" for="volunteer-phone_number">رقم الهاتف</label>

                                            <input type="text" id="volunteer-phone_number" class="form-control" name="volunteer-phone_number" maxlength="255" aria-required="true">
<?php echo $phoneerror?>
                                            <div class="help-block"></div>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group field-volunteer-email required">
                                            <label class="control-label" for="volunteer-email">البريد الإلكتروني</label>

                                            <input type="text" id="volunteer-email" class="form-control" name="volunteer-email" maxlength="255" aria-required="true">
                                            <?php echo $emailerror;?>
                                            <div class="help-block"></div>

                                        </div>
                                    </div>
                                </div>
                    <hr>
                    <hr>


                    <div class="box box-solid box-actions">
                        <div class="box-body">
                            <button type="submit" id="submit-form"  name="submit" class="btn btn-success btn-lg" style="margin-left:400px;">ارسل</button>
                              <button type="submit" id="submit-form"  name="add" class="btn btn-success btn-lg">اضافة</button> </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
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
<?php
include "include/footer.php";
?>
 
