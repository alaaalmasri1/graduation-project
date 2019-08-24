<?php
require_once "include/db.php";
require_once "include/session.php";
require_once "include/function.php";
?>

?>


<html>
    <head>
        <style>
            body
            {
                background-color: #101D42;
            }
        </style>
        <meta charset="UTF-8">
        <title>volontter info</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminstyle.css">
        <script src="js/bootstrap.min.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    </head>
    <body>
        
                <div class="col-sm-10">
                    <h4 style="margin-left:900px;">مسجلى الدورات</h4>
                    <div>
                       <?php echo message();
                           echo Successmessage()
                   ;?>
                       
                </div><!-- end of col-sm-10-->
                <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                        <tr>
                          
                              <th>اسم الدورة</th>
                           <th>استفسار</th>
                        <th>الهاتف</th>
                       <th>البريد الالكترونى</th>
                        <th> الاسم</th>

                        </tr>
                        <?php
                        global $connectingDB;
                        $viewquery="SELECT * from course;";
                        $excute=mysqli_query($connection, $viewquery);
                        while ($DataRow= mysqli_fetch_array($excute))
                        {
                            $name=$DataRow['name'];
                           $email=$DataRow['email'];
                            $phone=$DataRow['phone'];
                            $question=$DataRow['question'];
                         $coursename=$DataRow['coursename'];
                          
                    ?>
                        <tr>
                           
                            
                           
                        
                          
                        
                          <td><?php echo $coursename;?></td>
                                   <td><?php echo $question;?></td>
                                   <td><?php echo  $email;?></td>
                                    <td><?php echo  $phone;?></td>
                            <td><?php echo  $name;?></td>
                             
                        </tr>
                     <?php } ?>
                    </table>
      
        <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  
    
                </div>
            </div>
            <div class="container-fluid"><!-- this class will give margin to the page-->
            <div class="row"><!-- thats means the whole row-->
                <br>
                <br>
                
                <div class="col-sm-2">
                    <!--col is a responsive bootstrap class and sm means small and -2 that mean take 2 small secion of 12 col-->

                    <ul id="side_menu" class="nav nav-pills nav-stacked">
                        <!-- makes the boxes arount the item the same and stacked for a full tab around the anchor tag-->
                        <li ><a href="dashbored.php"><i class="fas fa-home"></i>&nbsp;لوحة التحكم</a></li>
                        <li><a href="addnewpost.php"><i class="far fa-list-alt"></i>&nbsp; اضافة منشور</a></li>
                        <li><a href="categories.php"><i class="fas fa-tags"></i>&nbsp;الفئات</a></li>
                        <li ><a href="admin.php"><i class="fas fa-user"></i>&nbsp;اضافة مستخدم</a></li>
                          <li><a href="volinfo.php"><i class="fas fa-user-check"></i>&nbsp;معلومات المتطوعين</a></li>
                        <li><a href="comments.php"><i class="fas fa-comments"></i>&nbsp;التعليقات</a></li>
                         <li class="active"><a href="corurseinfo.php"><i class="fas fa-book"></i>&nbsp;مسجليى الدورات</a></li>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;تسجيل الخروج</a></li>

                    </ul>
                </div><!-- end of side area-->
        </div>
    <div id="footer">
            <hr>
        <p>THEME by | ALAA ALMASRI | &copy;2019--ALL rights resereved</p>
        <a style="color: white;text-decoration: none; cursor: pointer;font-weight: bold">http://atkful.com</a>
        <p>this page is for admin and user for controling posts </p>
    </div>
    <div style="height: 10px; background-color: skyblue"></div>
    </body>