<?php
require_once "include/db.php";
require_once "include/session.php";
require_once "include/function.php";
?>
<?php confirmlogin()?>
<?php
if(isset($_POST['submit']))
{
    $Category=  mysql_real_escape_string($_POST['Categories']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    date_default_timezone_get("Asia/Amman");// to know the correct time according to ur computer
    $CureentTime=time();//what is the time it will show u a lot of numbers
    $dateTime=strftime("%B-%d-%Y %H:%M:%S",$CureentTime);//it will transform numbers into days or months on year d
    $dateTime;
    $admin=$_SESSION['UserName'];
    if(empty($Category)) {
        echo $_SESSION['error']="ALL filed must be filled out";
        rediret_to("dashbored.php");
        exit;
    }
     elseif (strlen ($Category)>=99) {
     echo $_SESSION['error']="too long name";
    rediret_to("dashbored.php");
}
   
 else {
        global  $connectingDB;
     
        $query="INSERT INTO category(datetime, Name,author) 
                 values('$dateTime','$Category','$admin')";
       
        $excute=  mysqli_query($connection,$query);
        if($excute)
        {
            $_SESSION['Successmessage']="catagory added sucssfully";
        rediret_to("categories.php");
        }
        else
        {
            $_SESSION['error']=" failed adding catagory ";
             rediret_to("categories.php");
        }
    
     
}
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>admin dashbored</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/adminstyle.css">
        <script src="js/bootstrap.min.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>
    <body>
     
                <div class="col-sm-10">
                    <h4>ادارة الفئات</h4>
                    <div>
                       <?php echo message();
                           echo Successmessage()
                   ;?>
                    <form action="categories.php" method="post">
<fieldset>
    <div class="form-group" ><!--putting space optimal space around the input-->
    <label for="categoriesName" style="float:right;">:اسم الفئة</label><!-- the label must match the input name if u want to add the correct feaild-->
    <input  class="form-control"  dir="rtl"type="text" name="Categories" id="categoriesName" placeholder="الاسم"><!-- form control allow you to controll the length of the input-->
    </div>
    <input class="btn btn-primary btn-block" type="submit" name="submit" value="اضافة  فئة جديدة">
</fieldset>
                    </form>
                </div><!-- end of col-sm-10-->
                <div class="table-responsive"> 
                    <table class="table table-striped table-hover">
                        <tr>
                       
                       
                       
                        
                         
                         <th>المستخدم</th>
                         <th>الوقت والتاريخ</th>
                         <th>اسم الفيئة</th>
                         <th>الرقم</th>
                        </tr>
                        <?php
                        global $connectingDB;
                        $viewquery="SELECT * from category ORDER by datetime DESC;";
                        $excute=mysqli_query($connection, $viewquery);
                        $srNO=0;
                        while ($DataRow= mysqli_fetch_array($excute))
                        {
                            $id=$DataRow['id'];
                            $datetimes=$DataRow['datetime'];
                            $name=$DataRow['Name'];
                            $creatorname=$DataRow['author'];
                         $srNO++;
                        ?>
                        <tr>
                           
                            
                            
                            <td><?php echo $creatorname;?></td>
                            <td><?php echo $datetimes;?></td>
                            <td><?php echo $name;?></td>
                             <td><?php echo $srNO;?></td>
                        </tr>
                     <?php } ?>
                    </table>
       
                </div>
            </div>
               <div class="container-fluid"><!-- this class will give margin to the page-->
            <div class="row"><!-- thats means the whole row-->
                
             <div class="col-sm-2">
                    <!--col is a responsive bootstrap class and sm means small and -2 that mean take 2 small secion of 12 col-->
<br>
                   <br>
                    <ul id="side_menu" class="nav nav-pills nav-stacked">
                        <!-- makes the boxes arount the item the same and stacked for a full tab around the anchor tag-->
                        
                        <li><a href="userpannel.php"><i class="far fa-list-alt"></i>&nbsp; اضافة منشور</a></li>
                        <li><a href="usercatagories.php"><i class="fas fa-tags"></i>&nbsp;الفئات</a></li>
                       
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp;تسجيل الخروج</a></li>

                    </ul>
                </div><!-- end of side area-->
        </div>
    <div id="footer" style="width:100%;">
            <hr>
       
    </div>
    <div style="height: 10px; background-color: skyblue;width:100%;" ></div>
        </div>
    </body>