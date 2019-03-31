<?php
include 'include/session.php';
require 'include/function.php';
include "include/db.php";
?>
<?php confirmlogin()?>
<html>
<head>
    <meta charset="UTF-8">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/adminstyle.css">
    <script src="js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style>
        body
            {
                background-color: #101D42;
            }
        </style>
</head>

<body>
    <br>
    <br>
    <div class="table-responsive">

                <div class="col-sm-10">
                        <?php echo message();?>
                        <?php 
                      echo Successmessage()
                   ;?>
                        <h4 style="float:right;">التحكم بى التعليقات</h4>
                        <div class="table-responsive">
                           <h1 style="float:right;margin:20px;">التعليقات غير المسموح بها</h1>
                            <table class="table table-striped table-hover">
                              <tr>
                                  
                                  

                                                        
                                   
                                   <th>عدم الموافقة</th>
                                   <th>الموافقة</th>
                                    <th>التعليق</th> 
                                   <th>التاريخ</th>
                                    <th>اسم المعلق</th>
                                   <th>الرقم</th>
                              
                              </tr>  
                              <?php
                                $connectingDB;
                                $query="SELECT * FROM comments where status='OFF'";
                                $execute=mysqli_query($connection,$query);
                                $srNO=0;
                        while ($DataRow = mysqli_fetch_array($execute)) {
                            
                            
                              $commentid=$DataRow['id'];
                             $datetime=$DataRow['datetime'];
                            $presonname=$DataRow['name'];
                            $personcomment=$DataRow['comment'];
                            $commentpostid=$DataRow['admin_pannel_id'];
                           $srNO++; 
                        
                                ?>
                                <tr>
                                  
                           
                            
                          
                                      
                                       <td><a href="deletecomments.php?id=<?php echo  $commentid?> "><span class="btn btn-danger">حذف</span></a></td>
                                           <td><a href="approvecomments.php ?id=<?php echo $commentid?>" ><span class="btn btn-success">موافقة</span></a></td>
                                            <td><?php echo $personcomment?> </td>
                                          <td><?php echo $datetime?> </td>
                                          <td><?php echo  $presonname?> </td>
                                         <td><?php echo $srNO?> </td>
                                 <?php }?>
                                </tr>
                                
                        
                            </table>
                            <div class="table-responsive">
                           <h1 style="float:right;">التعليقات الموافق عليها</h1>
                            <table class="table table-striped table-hover">
                              <tr>
                                 
                                  
                                   
                                                         
                                   
                                   <th>عدم الموافقة</th>
                                   <th>الموافقة</th>
                                   <th>التعليق</th>  
                                    <th>التاريخ</th>
                                    <th>اسم المعلق</th>
                              <th>الرقم</th>
                              </tr>  
                              <?php
                                $connectingDB;
                                $query="SELECT * FROM comments where status='on'";
                                $execute=mysqli_query($connection,$query);
                                $srNO=0;
                        while ($DataRow = mysqli_fetch_array($execute)) {
                            
                            
                              $commentid=$DataRow['id'];
                             $datetime=$DataRow['datetime'];
                            $presonname=$DataRow['name'];
                            $personcomment=$DataRow['comment'];
                            $commentpostid=$DataRow['admin_pannel_id'];
                           $srNO++; 
                        
                                ?>
                                <tr>
                                   
                            
                            
                            
                                    
                                      
                                    
                                                 
                                                 
                                                    <td><a href="deletecomments.php?id=<?php echo  $commentid?> "><span class="btn btn-danger">حذف</span></a></td>
                                                       <td><a href="approvecomments.php"><span class="btn btn-success">موافقة</span></a></td>
                                                    
                                                  <td><?php echo $personcomment?> </td>
                                                  <td><?php echo $datetime?> </td>
                                                <td><?php echo $presonname?> </td>
                                                    <td><?php echo $srNO?> </td>
                                 <?php }?>
                                </tr>
                                
                        
                            </table>
                        </div>
                        
                        <div>
                        
                    </div>
                   
                </div><!-- end of col-sm-10-->
            </div>
             <div class="container-fluid"><!-- this class will give margin to the page-->
            <div class="row"><!-- thats means the whole row-->
                
             <div class="col-sm-2">
                    <!--col is a responsive bootstrap class and sm means small and -2 that mean take 2 small secion of 12 col-->
<br>
                   <br>
                     <ul id="side_menu" class="nav nav-pills nav-stacked">
                        <!-- makes the boxes arount the item the same and stacked for a full tab around the anchor tag-->
                        <li class="active"><a href="dashbored.php"><i class="fas fa-home"></i>&nbsp;لوحة التحكم</a></li>
                        <li><a href="addnewpost.php"><i class="far fa-list-alt"></i>&nbsp; اضافة منشور</a></li>
                        <li><a href="categories.php"><i class="fas fa-tags"></i>&nbsp;الفئات</a></li>
                        <li><a href="admin.php"><i class="fas fa-user"></i>&nbsp;اضافة مستخدم</a></li>
                                <li><a href="volinfo.php"><i class="fas fa-user-check"></i>&nbsp;معلومات المتطوعين</a></li>
                        <li><a href="comments.php"><i class="fas fa-comments"></i>&nbsp;التعليقات</a></li>
                       
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;تسجيل الخروج</a></li>

                    </ul>
                </div><!-- end of side area-->
        </div>
        </div>
    </div>
    <div id="footer">
        <hr>
     
      
    </div>
    <div style="height: 10px; background-color: skyblue"></div>
</body>
