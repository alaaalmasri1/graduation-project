<?php
require_once "include/db.php";
require_once "include/session.php";
require_once "include/function.php";
?>
<?php
if(isset($_POST['submit']))
{
    //prevernt sql injection
    $username=  mysql_real_escape_string($_POST['Usename']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $password=  mysql_real_escape_string($_POST['password']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    
    if(empty($username) ||empty($password)) {
        echo $_SESSION['error']="ALL filed must be filled out";
        rediret_to("login.php");
        exit;
    }
 
 else
     
        {
    
           $found_account=login_attmpet($username, $password);
           $_SESSION['user_id']=$found_account['id'];
           $_SESSION['UserName']=$found_account['UserName'];
     $_SESSION['status']=$found_account['status'];
           if($found_account && $_SESSION['status']=='user')
           {
         echo $_SESSION['Successmessage']="login successful {$_SESSION['UserName']}";
        rediret_to("userpannel.php");
        exit;
           }
     elseif($found_account && $_SESSION['status']=='admin')
     {
         echo $_SESSION['Successmessage']="login successful {$_SESSION['UserName']}";
        rediret_to("dashbored.php");
        exit;
     }
           else
           {
                echo $_SESSION['error']="invailid user";
        rediret_to("cliniconline.php");
        exit;
           }
           
        }
    
}

?>
<!DOCTYPE html>
<!--All HTML documents must start with a document type declaration -->
<html lang="en">
<!-- The HTML document itself begins with <html> and ends with and we used en to help with the search engine </html>. -->
<head>
<style>
            body
            {
                background-color:#ffffff;
            }
     </style>
    
    <!-- represents introductory content, typically a group of introductory or navigational aids-->
    <!-- required meta tags-->
    <meta charset="UTF-8"> <!-- s character encoding capable of encoding all characters on the web -->
    <meta name="description" content="altkaful.net website">
    <!--Define a description of your web page:-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <!-- the following value to display the webpage in edge mode, which is the highest stand<!DOCTYPE html>
    <!--html lang="en"-->
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <!--Define keywords for search engines-->
        <meta name="author" content="ALAA almasri,huthaifa khazaleh,shahem qasem"> <!--  Define the author of a page: -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--Setting the viewport to make your website look good on all devices-->
        <!-- favicon -->
        <link rel="icon" href="images/logo.jpg" type="image/gif" sizes="16x16"><!-- icon in the title page-->
        <!-- font-awsome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <!--Main Stylesheet-->
        <link rel="stylesheet" v=1.0 type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <div class="LogosArea">
        <div class="container">
            <div class="col-md-3">
                <a href="index.php" class="headerZfLogo"  title="">
                    <img src="images/logo1.png" class="pull-left logo-zakat" title=""></a></div>
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
    <body>
        <div class="container-fluid"><!-- this class will give margin to the page-->
            <div class="row"><!-- thats means the whole row-->
                
           
                <div class=" col-sm-offset-4 col-sm-4">
                    <br>
                    <br>
                    <br>
                    <br>
                     <?php echo message();
                           echo Successmessage()
                   ;?>
                    <div>
                        <form action="cliniconline.php" method="post">
<fieldset>
    <div class="form-group"><!--putting space optimal space around the input-->
        
        
    <label for="Usename">Username:</label><!-- the label must match the input name if u want to add the correct feaild-->
    <div class="input-group input-group-lg">
            <span class="input-group-addon">
                <i class="fas fa-envelope text-primary"></i>
            </span>
    <input  class="form-control" type="text" name="Usename" id="Usename" placeholder="Usename"><!-- form control allow you to controll the length of the input-->
    </div>
       
    <label for="password">password:</label><!-- the label must match the input name if u want to add the correct feaild-->
     <div class="input-group input-group-lg">
           <span class="input-group-addon">
               <i class="fas fa-lock text-primary"></i>
            </span>
    <input  class="form-control" type="password" name="password" id="password" placeholder="password"><!-- form control allow you to controll the length of the input-->
    </div>
    </div>
    <input class="btn btn-info btn-block" type="submit" name="submit" value="Login">
</fieldset>
                    </form>
     
    
                </div>
            </div>
        </div>
        </div> 
    </body>