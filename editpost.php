<?php
include "include/db.php";
include "include/session.php";
include "include/function.php";
?>
<?phpconfirmlogin()?>
<?php
if(isset($_POST['submit']))
{
    $title= mysql_real_escape_string($_POST['title']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $Category= mysql_real_escape_string($_POST['catagory']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $post=mysql_real_escape_string($_POST['post']);
    date_default_timezone_get("Asia/Amman");// to know the correct time according to ur computer
    $CureentTime=time();//what is the time it will show u a lot of numbers
    $dateTime=strftime("%B-%d-%Y %H:%M:%S",$CureentTime);//it will transform numbers into days or months on year d
    $dateTime;
    $admin="alaa almasri";
    $image=$_FILES['Image']['name'];
    $target="upload/".basename($_FILES['Image']['name']);
    if(empty($title)) {
        echo $_SESSION['error']="title cant be empty";
        rediret_to('addnewpost.php');
        exit();
    }
else {
        
        global  $connectingDB;
         $editurl=$_GET['Edit'];
        $query="UPDATE users SET dateTime='$dateTime',tittle='$title',category='$Category,'author='$admin', image='$image',post='$post' WHERE id='$editurl'";
        $excute=  mysqli_query($connection,$query);
        if($excute)
        {
            move_uploaded_file($_FILES['Image']['tmp_name'], $target);
            $_SESSION['Successmessage']="post updated sucssfully";
        rediret_to("dashbored.php");
        }
       
     else
        {
            $_SESSION['error']=" failed updating post ";
             rediret_to("dashbored.php");
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
    <style>
        body
            {
                background-color: #101D42;
            }
        </style>
</head>

<body>
  
            <div class="col-sm-10">
                <h4 style=" margin-left:900px;" >تعديل المنشور</h4>
                <div>
                    <?php echo message();?>
                    <?php echo Successmessage()?>
                    <div>
                        <?php
    $searchquery=$_GET['Edit'];
$connectingDB;
$query="SELECT * FROM admin_pannel WHERE id='$searchquery'";
$execute=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($execute))
{
    $titleupdate=$row['tittle'];
    $catagoryupdate=$row['category'];
 $imageupdate=$row['image'];
        $postupdate=$row['post'];
}

                   
                    
    ?>
                    </div>
                    <form action="addnewpost.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-group">
                                <!--putting space optimal space around the input-->
                                <label for="title" style="float:right;">العنوان:</label><!-- the label must match the input name if u want to add the correct feaild-->
                                <input  value="<?php echo $titleupdate?>"class="form-control" type="text" name="title"  dir="rtl"id="categoriesName" placeholder="name"><!-- form control allow you to controll the length of the input-->
                            </div>
                            <div class="form-group">
                                <!--putting space optimal space around the input-->
                                <label for="catagoryselect" style="float:right;">الفيئة:</label><!-- the label must match the input name if u want to add the correct feaild-->
                                <select class="form-control" id="catagoryselect" name="catagory" dir="rtl">
                                    <?php
        global $connectingDB;
        $alaa="SELECT * FROM admin_pannel ORDER BY datetime DESC";
                        $viewquery="SELECT * from category ORDER by datetime DESC;";
                        $excute=mysqli_query($connection, $viewquery);
                        while ($DataRow= mysqli_fetch_array($excute))
                        {
                            $id=$DataRow['id'];
                            $name=$DataRow['Name'];
                            $postupdate=$DataRow['post'];
                      ?>
                                    <option>
                                        <?php echo $name ?>
                                    </option>
                                    <?php }?>

                                </select>
                            </div>
                            <div class="form-group">
                                <!--putting space optimal space around the input-->
                                <label for="imageselect" style="float:right;">اختار الصورة</label>
                                <span class="Fieldinfo"></span>
                                <img src=upload/<?php echo $imageupdate ?> width=170px height="70px" style="float:right;">
                                <!-- the label must match the input name if u want to add the correct feaild-->
                                <input type="file"  dir="rtl"class="form-control" name="Image" id="imageselect" style="float:right;">
                            </div>
                            <div class="form-group">
                                <!--putting space optimal space around the input-->
                                <label for="postarea" style="float:right;">المنشور</label><!-- the label must match the input name if u want to add the correct feaild-->
                                <textarea class="form-control" name="post" id="postarea">
                                    <?php echo  $postupdate?>
                                </textarea>
                            </div>
                            <input class="btn btn-primary btn-block" type="submit" name="submit" value="تحديث الكومنت">
                        </fieldset>
                    </form>
                </div><!-- end of col-sm-10-->
            </div>
              <div class="container-fluid">
        <!-- this class will give margin to the page-->
        <div class="row">
            <!-- thats means the whole row-->
            <br>
            <br>
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

        <div id="footer">
            <hr>
                  </div>
    </div>
       
        <div style="height: 10px; background-color: skyblue"></div>
</body>
