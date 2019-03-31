<?php include"include/db.php";
include "include/session.php";
include "include/function.php";
?>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['first'];
    $family=$_POST['family'];
    $address=$_POST['address'];
     if(empty($name)&&empty($family)&&empty($address)) {
        echo $_SESSION['error']="ALL filed must be filled out";
    }
    else
    {
         global  $connectingDB;
         $query="INSERT INTO donation(fname,family,	address) 
                 values('$name','$family','$address')";
         $excute=  mysqli_query($connection,$query);
       
        
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
            <a href="login.php" style="color:#F4F4F4; margin:15px; font-size:20p">تسجيل الدخول</a>
            



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
    <style type="text/css">
body {
	margin-top:40px;
}
.stepwizard-step p {
	margin-top: 10px;
}
.stepwizard-row {
	display: table-row;
}
.stepwizard {
	display: table;
	width: 50%;
	position: relative;
}
.stepwizard-step button[disabled] {
	opacity: 1 !important;
	filter: alpha(opacity=100) !important;
}
.stepwizard-row:before {
	top: 14px;
	bottom: 0;
	position: absolute;
	content: " ";
	width: 100%;
	height: 1px;
	background-color: #ccc;
	z-order: 0;
}
.stepwizard-step {
	display: table-cell;
	text-align: center;
	position: relative;
}
.btn-circle {
	width: 30px;
	height: 30px;
	text-align: center;
	padding: 6px 0;
	font-size: 12px;
	line-height: 1.428571429;
	border-radius: 15px;
}
        h2{
text-align:left;
}



.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}


.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}


.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}
</style>
    <body>
<br>
<br>
<br>
<div class="container">
 <div>
           <div>
                       <?php echo message();
                           echo Successmessage()
                   ;?>          
      <div class="stepwizard col-md-offset-3">
    <div class="stepwizard-row setup-panel">
          <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        <p>الخطوة الاولى</p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        <p>الخطوة الثانية</p>
      </div>
          <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        <p>الخطوة الثاثة</p>
      </div>
        </div>
  </div>
      <form  action="payment.php" method="post">
    <div class="row setup-content" id="step-1">
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
          
              <div class="form-group">
            <label class="control-label">الاسم</label>
            <input  maxlength="100" type="text" required="required" class="form-control" name="first" placeholder="Enter First Name"  />
          </div>
              <div class="form-group">
            <label class="control-label">العائلة</label>
            <input maxlength="100" type="text" required="required" class="form-control" name="family" placeholder="Enter Last Name" />
          </div>
              <div class="form-group">
            <label class="control-label">العنوان</label>
            <textarea required="required" class="form-control"  name="address"placeholder="Enter your address" ></textarea>
          </div>
            <input class="btn btn-primary nextBtn btn-lg pull-right" type="submit" name="submit" value="التالى">
            
            </div>
      </div>
        </div>
               </form>
    <div class="row setup-content" id="step-2">
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
           
              <div class="form-group">
            <label class="control-label">المبلغ المراد التبرع بة</label>
            <input maxlength="200" type="text" required="required" class="form-control" placeholder="يردى ادخال المبلغ" />
          </div>
              <div class="form-group">
            <label class="control-label">العملة</label>
           <select id="inputState" class="form-control">
        <option selected>دينار</option>
        <option>...</option>
      </select>
          </div>
              <input class="btn btn-primary nextBtn btn-lg pull-right" type="submit" name="submit" value="التالى">
            
            </div>
      </div>
        </div>
    <div class="row setup-content" id="step-3">
          <div class="col-xs-6 col-md-offset-3">
        <div class="col-md-12">
              <h3> Step 3</h3>
                 <div class="form-group">
               
                </div>
                <p>يمكنك التبرع على حساب البنك الاسلامى الذى رقمة:0979657410400004 عن طريق الوسائل الاتية</p>
             <label for="fname">البطاقات التى يمكن استخدامها</label>
            <div class="icon-container">
                <a href="https://usa.visa.com/"><i class="fab fa-cc-visa" style="color:navy;"></i></a>
                <a href="https://www.paypal.com/us/home">  <i class="fab fa-paypal" style="color:blue;"></i></a>
                <a href="https://www.mastercard.us/en-us.html">   <i class="fab fa-cc-mastercard"  style="color:red;"></i></a>
            </div>
          </div>
            </div>
        </div>
    </div>


<script type="text/javascript">
  $(document).ready(function () {
  var navListItems = $('div.setup-panel div a'),
		  allWells = $('.setup-content'),
		  allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
	  e.preventDefault();
	  var $target = $($(this).attr('href')),
			  $item = $(this);

	  if (!$item.hasClass('disabled')) {
		  navListItems.removeClass('btn-primary').addClass('btn-default');
		  $item.addClass('btn-primary');
		  allWells.hide();
		  $target.show();
		  $target.find('input:eq(0)').focus();
	  }
  });

  allNextBtn.click(function(){
	  var curStep = $(this).closest(".setup-content"),
		  curStepBtn = curStep.attr("id"),
		  nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
		  curInputs = curStep.find("input[type='text'],input[type='url'],textarea[textarea]"),
		  isValid = true;

	  $(".form-group").removeClass("has-error");
	  for(var i=0; i<curInputs.length; i++){
		  if (!curInputs[i].validity.valid){
			  isValid = false;
			  $(curInputs[i]).closest(".form-group").addClass("has-error");
		  }
	  }

	  if (isValid)
		  nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});
  </script>
  <?php include"include/footer.php"?>
</body>
</html>
