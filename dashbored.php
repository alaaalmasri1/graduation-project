<?php
include 'include/session.php';
require 'include/function.php';
include "include/db.php";
?>
<?php confirmlogin()?>
<html>
<head>
    <meta charset="UTF-8">
    <title>admin dashbored</title>
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
    <br>
    <div class="table-responsive">
        
                <div class="col-sm-10">
                    <div>
                        <?php echo message();?>
                        <?php 
                      echo Successmessage()
                   ;?>
                        <h4>لوحة التحكم</h4>
                        <table class=" table table-striped table-hover">
                            <tr>
                                

                               
                                
                                
                                
                              
                                <th>العملية</th>
                                  <th>التعليقات</th>
                                 <th>الوقت والتاريخ</th>
                                <th>المستخدم</th>
                                <th>الفئة</th>
                                <th>الصور</th>
                                <th>عنوان المنشور</th>
                                  <th>الرقم</th>
                            </tr>
                            <?php
                        $connectingDB;
                        $ViewQuery="SELECT * FROM  admin_pannel order by datetime Desc;";
                        $Excute=  mysqli_query($connection,$ViewQuery);
                        $srNO=0;
                        while ($DataRow = mysqli_fetch_array($Excute)) {
                            $id=$DataRow['id'];
                            $tittle=$DataRow['tittle'];
                            $datetime=$DataRow['datetime'];
                            $category=$DataRow['category'];
                            $author=$DataRow['author'];
                            $image=$DataRow['image'];
                           $post=$DataRow['post'];
                           $srNO++;
                        ?>

                            <tr>
                               
                                
                               
                                
                               
                              
                                <!-- ehco the user id so get the post-->
                                <td><a href="editpost.php?Edit=<?php echo $id;?>>">
                                        <span class="btn btn-warning">تعديل </span> </a>
                                    <a href="deletepost.php?delete=<?php echo $id;?>>">
                                        <span class="btn btn-danger">حذف </span> </a>
                                </td>
                                  <td>المعالجة</td>
                                 <td>
                                   
                                    <?php if(strlen($datetime)>11){$datetime=substr($datetime,0,16).'..';}
                            echo $datetime;
                            ?>
                                </td>
                                
                                <td>
                                    <?php echo $author?>
                                </td>
                                <td>
                                    <?php echo $category?>
                                </td>
                                 <td><img src="upload/<?php echo $image?>" width="200" height="60px"></td>
                                <td style="color:#5e5eff;">
                                    <?php if(strlen($tittle>20)){$tittle=substr($tittle, 0,20).'..';}//if condition  that limit the lengtht of the title
                                echo $tittle
                                        ;?>
                                </td>
                                 <td>
                                    <?php echo $srNO;?>
                                </td>
                                
                            </tr>

                            <?php }?>
                        </table>
                    </div>


                </div><!-- end of col-sm-10-->
                <div class="container-fluid">
            <!-- this class will give margin to the page-->
            <div class="row">
                <!-- thats means the whole row-->

                <div class="col-sm-2">
                    <!--col is a responsive bootstrap class and sm means small and -2 that mean take 2 small secion of 12 col-->

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
