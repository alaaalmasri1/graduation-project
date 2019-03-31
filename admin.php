<?php
require_once "include/db.php";
require_once "include/session.php";
require_once "include/function.php";
?>
<?php
if(isset($_POST['submit']))
{
    $username=  mysql_real_escape_string($_POST['Usename']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $password=  mysql_real_escape_string($_POST['password']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $confirmpassword=  mysql_real_escape_string($_POST['Confirmpassword']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
$status=mysql_real_escape_string($_POST['status']);
    date_default_timezone_get("Asia/Amman");// to know the correct time according to ur computer
    $CureentTime=time();//what is the time it will show u a lot of numbers
    $dateTime=strftime("%B-%d-%Y %H:%M:%S",$CureentTime);//it will transform numbers into days or months on year d
    $dateTime;
    $admin=$_SESSION['UserName'];
    $uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
    if(empty($username)&&empty($password)&&empty($confirmpassword)) {
        echo $_SESSION['error']="ALL filed must be filled out";
        rediret_to("admin.php");
        exit;
    }
     elseif (strlen ($password)<4) {
     echo $_SESSION['error']="at least 4 chahracter";
    rediret_to("admin.php");
}
 elseif ($password!==$confirmpassword) {
     echo $_SESSION['error']="password/confirm password does not match";
    rediret_to("admin.php");
}
   
 else {
        global  $connectingDB;
      if(preg_match('/[!@#$%*a-zA-Z0-9]{8,}/',$password) && preg_match_all('/[0-9]/',$password) >= 2)

        {
        $query="INSERT INTO registeration(datetime,UserName,Password,addedby,	status) 
                 values('$dateTime','$username','$password','$admin','$status')";
       
        $excute=  mysqli_query($connection,$query);
        if($excute)
        {
            $_SESSION['Successmessage']="Admin added sucssfully";
        rediret_to("admin.php");
        }
        else
        {
            $_SESSION['error']=" failed adding Admin ";
             rediret_to("admin.php");
        }
    }
     else
     {
          $_SESSION['error']=" Must be a minimum of 8 characters and 2 number Symbols allowed are : ! @ # $ % * ";
             rediret_to("admin.php");
         
     }
    
 }
}
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
        <title>manage admin</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/adminstyle.css">
        <script src="js/bootstrap.min.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

    </head>
    <body>
       
                <div class="col-sm-10">
                    <h4 dir="rtl">اضافة مستخدم</h4>
                    <div>
                       <?php echo message();
                           echo Successmessage()
                   ;?>
                        <form action="admin.php" method="post">
<fieldset>
    <div class="form-group"><!--putting space optimal space around the input-->
    <label for="Usename"  style="float:right;">:اسم المستخدم</label><!-- the label must match the input name if u want to add the correct feaild-->
    <input  class="form-control" type="text" name="Usename" id="Usename" placeholder="الاسم" dir="rtl"><!-- form control allow you to controll the length of the input-->
    </div>
    <div class="form-group"><!--putting space optimal space around the input-->
    <label for="password" style="float:right;">:الرقم السرى</label><!-- the label must match the input name if u want to add the correct feaild-->
    <input  class="form-control" type="password" name="password" id="password" placeholder="كلمة المرور" dir="rtl"><!-- form control allow you to controll the length of the input-->
    </div>
    <div class="form-group"><!--putting space optimal space around the input-->
    <label for="Confirmpassword" style="float:right;">:التحقق من كلمة السر</label><!-- the label must match the input name if u want to add the correct feaild-->
    <input  class="form-control" type="password" name="Confirmpassword" id="Confirmpassword" placeholder="اعادة كتابة السر" dir="rtl"><!-- form control allow you to controll the length of the input-->
    </div>
     <div class="form-group"><!--putting space optimal space around the input-->
    <label for="status" style="float:right;">:الحالة</label><!-- the label must match the input name if u want to add the correct feaild-->
    <input  class="form-control" type="text" name="status" id="status" placeholder="الحالة" dir=rtl><!-- form control allow you to controll the length of the input-->
    </div>
    <input class="btn btn-primary btn-block" type="submit" name="submit" value="اضافة مستخدم">
</fieldset>
                    </form>
                </div><!-- end of col-sm-10-->
                <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                        <tr>
                        
                       
                       
                        
                       
                        <th>العملية</th>
                           <th>الحالة</th>
                         <th>اسم المستخدم</th>
                        <th>تم الاضافة من</th>
                         <th>الوقت والتاريخ</th>
                        <th>الرقم</th>
                        
                        </tr>
                        <?php
                        global $connectingDB;
                        $viewquery="SELECT * from registeration ORDER by datetime DESC;";
                        $excute=mysqli_query($connection, $viewquery);
                        $srNO=0;
                        while ($DataRow= mysqli_fetch_array($excute))
                        {
                            $id=$DataRow['id'];
                            $datetimes=$DataRow['datetime'];
                           $username=$DataRow['UserName'];
                            $Admin=$DataRow['addedby'];
                            $status=$DataRow['status'];
                         $srNO++;
                        ?>
                        <tr>
                            
                           
                           
                           
                          
                            <td>  <a href="deleteadmin.php?id=<?php echo $id;?>">
                                    <span class= "btn btn-danger">حذف</span></a></td>
                                      <td><?php echo $status;?></td>
                                     <td><?php echo $Admin;?></td>
                                     <td><?php echo $username;?></td>
                                     <td><?php echo $datetimes;?></td>
                                    <td><?php echo $srNO;?></td>
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
                        <li class="active"><a href="admin.php"><i class="fas fa-user"></i>&nbsp;اضافة مستخدم</a></li>
                                <li><a href="volinfo.php"><i class="fas fa-user-check"></i>&nbsp;معلومات المتطوعين</a></li>
                        <li><a href="comments.php"><i class="fas fa-comments"></i>&nbsp;التعليقات</a></li>
                       
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;تسجيل الخروج</a></li>

                    </ul>
                </div><!-- end of side area-->
                 </div>
        </div>
    <div id="footer">
            <hr>
       
    </div>
    <div style="height: 10px; background-color: skyblue"></div>
    </body>