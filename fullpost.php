<?php
include "include/db.php";
include "include/session.php";
include "include/function.php";
?>
<?php
if(isset($_POST['submit']))
{
    $name= mysqli_real_escape_string($connection,$_POST['name']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $email= mysqli_real_escape_string($connection,$_POST['email']);//mysql_real_escape_string — Escapes special characters in a string for use in an SQL statement
    $comment=mysqli_real_escape_string($connection,$_POST['comment']);
    date_default_timezone_get("Asia/Amman");// to know the correct time according to ur computer
    $CureentTime=time();//what is the time it will show u a lot of numbers
    $dateTime=strftime("%B-%d-%Y %H:%M:%S",$CureentTime);//it will transform numbers into days or months on year d
    $dateTime;
    $Postid=$_GET['id'];
    if(empty($name)||empty($email)||empty($comment)) {
        echo $_SESSION['error']="all fileds are reqiured";
    }
    elseif($comment>500)
    {
         echo $_SESSION['error']="500 character are allowed in comment";
    }
   
else {
        global  $connectingDB;
    $Postidfromrl=$_GET['id'];
    {
        $query="INSERT INTO comments(datetime,name,email,comment,status,admin_pannel_id) values('$dateTime','$name','$email','$comment','OFF',' $Postidfromrl')";
        $excute=  mysqli_query($connection,$query);
        if($excute)
        {
            $_SESSION['Successmessage']="comment submited  suecssfully";
        }
        
    }
   
}
}
?>
<html <head>
<meta charset="UTF-8">
<title>Blog page</title>
<link rel="stylesheet" href="css/alaa.css">
<link rel="stylesheet" href="css/blog.css">
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<style>

    .filed-info
    {
        color: rgba(251,174,44);
        font-size: 1.2em;
    text-align:right;
    }
    .comment-info
    {
        color: #365899;
        font-family: sans-serif;
        font-size: 1.1em;
        font-weight: bold;
        padding-top: 10px;
    }
</style>
</head>

<body>
    <div style="height: 10px; background-color:#27aae1;"></div>
    <nav class="navbar  navbar-inverse" role="navigation">
        <div class="container">
            <div class="nav-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">الرئسية</a></li>
                    <li class="active"><a href="blog.php">المدونة</a></li>
                    <li><a href="#">قالو عنا</a></li>
                    <li><a href="#">خدماتنا</a></li>
                    <li><a href="#">اتصل بنا</a></li>
                </ul>
                <form action="blog.php" class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="search" name="search">
                        <button class="btn btn-default" id="searchbutton" name="searchbutton">Go</button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <div style="height: 10px; background-color:#27aae1; margin-top: -20px;"></div>
    <div class="container">
        <div class="blog-header">
            <h1>مدونة جمعية التكافل</h1>

        </div>
        <div class="row">
            <div class="col-sm-8">
               <?php echo message();
                echo Successmessage();?>
                <!-- main area-->
                <?php 
                           global $connectingDB;
                           if(isset($_GET['searchbutton']))
                           {
                              //query button when its active
                               $search=$_GET['search'];
                               $ViewQuery="SELECT * from admin_pannel WHERE datetime LIKE '%$search%' OR  tittle LIKE '%$search%'
                                   OR category LIKE '%$search%' or post LIKE '%$search%'; ";
                           
                           }else
                           {
                              // the deffault search for blog.php
                               $postidfromurl=$_GET['id'];
                           $ViewQuery="SELECT * FROM admin_pannel where id=' $postidfromurl' ORDER BY datetime DESC limit 0,3;";}
                               $EXECUTE= mysqli_query($connection,$ViewQuery);
                          
                           while ($DataRow= mysqli_fetch_array($EXECUTE))
                        {
                       
                            $postid=$DataRow['id'];
                            $title=$DataRow['tittle'];
                             $datetime=$DataRow['datetime'];
                            $Category=$DataRow['category'];
                            $admin=$DataRow['author'];
                            $image=$DataRow['image'];
                            $post=$DataRow['post'];
                          ?>
                <div class="thumbnail">
                    <img class="img-responsive img-rounded" src="upload/<?php echo $image;?>">

                    <div class="caption">
                        <h1 class="head" style="color:#005E90;">
                            <?php echo htmlentities($title);?>
                        </h1>
                        <p class="descrption" style="color: #868686; font-weight: bold;  margin-top: -2px;">catagory:
                            <?php echo $Category;?>published on
                            <?php echo $datetime?>
                        </p>
                        <P class="post">
                            <?php echo $post?>
                        </P>
                    </div>
                 
                </div>
                <span class="filed-info">التعليقات</span>

                <?php }?>
                 <?php
                
                
               $connectingDB;
                $Postidforcomment=$_GET["id"];
                $queryforcomment="SELECT * FROM comments WHERE admin_pannel_id='$Postidforcomment' and status='on'";
                $excute=mysqli_query($connection,$queryforcomment);
                while($row=mysqli_fetch_assoc($excute))
                {
                    $commentdate=$row['datetime'];
                    $commentername=$row['name'];
                 $commentbyuser=$row['comment'];

                ?>
                 <div class="comment-block">
                    <img class="pull-left" src="images/user.png" width="70px; height=30px;">
                     <p class="comment-info"><?php echo $commentername;?></p>
                     <p class="comment-info"><?php echo $commentdate;?></p>
                     <p class="comment-info"><?php echo $commentbyuser;?></p>
                 </div>
                 <?php }?>
                  <form action="fullpost.php?id=<?php echo  $postid; ?>" method="post" enctype="multipart/form-data">
 <fieldset>
    <div class="form-group"><!--putting space optimal space around the input-->
    <label for="title" style="text-align:right;" ><span class="filed-info">الاسم</span></label><!-- the label must match the input name if u want to add the correct feaild-->
    <input  class="form-control" type="text" name="name" id="Name" placeholder="الاسم"><!-- form control allow you to controll the length of the input-->
    </div>
    <div class="form-group"><!--putting space optimal space around the input-->
       <label for="email"><span class="filed-info">البريد الالكترونى</span></label><!-- the label must match the input name if u want to add the correct feaild-->
    <input  class="form-control" type="email" name="email" id="email" placeholder="البريد الالكترونى"><!-- form control allow you to controll the length of the input--> 
    </div>
    
    <div class="form-group"><!--putting space optimal space around the input-->
    <label for="postarea"><span class="filed-info">التعليق</span></label><!-- the label must match the input name if u want to add the correct feaild-->
    <textarea class="form-control" name="comment" id="comment"></textarea>
    </div>
    <input class="btn btn-success btn-block" type="submit" name="submit" value="submit" style="margin:10px;">
</fieldset>
                    </form>

            </div>

            <div class=" col-sm-offset-1 col-sm-3">
                <h2>about us</h2>
                <img class="img-responsive img-circle imageicon" style="max-width: 150px;margin: 0 auto;display: block;" src="images/logo.jpg">
                <p>جمعية التكافل الخيرية ؛ مؤسسة خيرية شعبية غير منتمية لحزب ديني أو سياسي ، مرخصة من وزارة التنمية والشؤون الاجتماعية ، تعمل لنهضة الوطن وخدمة المواطن من خلال محاور عملها .</p>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">الفئات</h2>
                    </div>
                    <div class="panel-body">
                        <?php
                                global $connectingDB;
                   $ViewQuery="SELECT * FROM category ORDER BY datetime desc";
                               $EXECUTE= mysqli_query($connection,$ViewQuery);
                          
                           while ($DataRow= mysqli_fetch_array($EXECUTE))
                        {
                       
                            $postid=$DataRow['id'];
                            $Category=$DataRow['Name'];
                             
                           ?>
                        <a href="blog.php?catagory=<?php echo $Category;?>">
                            <span id="heading" style="font-weight: bold; color: 005E90; ">
                                <?php    echo $Category."<br>";?></span>
                        </a>
                        <?php }?>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
            <!--side area-->
        </div>
        <!--end of row-->
    </div><!-- end of contaainer-->
    <div id="footer">
       <left>
        <hr>
        <p style="text-align:center;">THEME by | ALAA ALMASRI | &copy;2019--ALL rights resereved</p>
        <a style="color: white;text-decoration: none; cursor: pointer;font-weight: bold">http://atkful.com</a>
    </div>
    <div style="height: 10px; background-color: skyblue"></div>
    </div>
</left>
</body>
<?php
    include 'include/footer.php';
    ?>

</html>
