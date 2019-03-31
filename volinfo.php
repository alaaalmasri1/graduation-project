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
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/adminstyle.css">
        <script src="js/bootstrap.min.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    </head>
    <body>
        
                <div class="col-sm-10">
                    <h4 style="margin-left:900px;">معلومات المتطوعين</h4>
                    <div>
                       <?php echo message();
                           echo Successmessage()
                   ;?>
                       
                </div><!-- end of col-sm-10-->
                <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                        <tr>
                    
                        
                       
                       
                      
                     
                    
                        
                        <th>البريد الالكترونى</th>
                             <th>الهاتف</th>
                              <th>المجال الدراسى</th>
                              <th>الجنس</th>
                            <th>العمر</th>
                         <th>اسم العائلة</th>
                         <th>اسم الاب</th>
                        <th> الاسم</th>

                        </tr>
                        <?php
                        global $connectingDB;
                        $viewquery="SELECT * from  volunteer;";
                        $excute=mysqli_query($connection, $viewquery);
                        while ($DataRow= mysqli_fetch_array($excute))
                        {
                            $fname=$DataRow['fname'];
                           $mname=$DataRow['mname'];
                            $lname=$DataRow['lname'];
                            $age=$DataRow['age'];
                         $gender=$DataRow['gender'];
                            $fstudy=$DataRow['fstudy'];
                            $phone=$DataRow['phone'];
                            $email=$DataRow['email'];
                    ?>
                        <tr>
                           
                            
                           
                        
                          
                        
                          
                            <td><?php echo  $email;?></td>
                                  <td><?php echo  $phone;?></td>
                                 <td><?php echo $fstudy;?></td>
                                 <td><?php echo  $gender;?></td>
                                <td><?php echo $age;?></td>
                             <td><?php echo $lname;?></td>
                            <td><?php echo $mname;?></td>
                             <td><?php echo $fname;?></td>
                           
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
                          <li class="active"><a href="volinfo.php"><i class="fas fa-user-check"></i>&nbsp;معلومات المتطوعين</a></li>
                        <li><a href="comments.php"><i class="fas fa-comments"></i>&nbsp;التعليقات</a></li>
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