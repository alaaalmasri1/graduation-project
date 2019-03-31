<?php

include "include/db.php";
include "include/session.php";
include "include/function.php";
?>
<html>
<head>
<meta charset="UTF-8">
<title>Blog page</title>
<link rel="stylesheet" href="css/alaa.css">
<link rel="stylesheet" href="css/blog.css">
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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
                    <li class="active"><a href="blog.php?page=<?php echo $id?>">المدونة</a></li>
                    
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
                <!-- main area-->
                <?php 
                           global $connectingDB;
                           if(isset($_GET['searchbutton']))
                           {
                              //query button when its active
                               $search=$_GET['search'];
                               $ViewQuery="SELECT * from admin_pannel WHERE datetime LIKE '%$search%' OR  tittle LIKE '%$search%'
                                   OR category LIKE '%$search%' or post LIKE '%$search%'; ";
                           
                           }
                elseif(isset($_GET['page']))
                       {
                    $page=$_GET['page'];
                    
                    if($page==0)
                    {
                        $showpage=0;
                    }
                    else
                    {
                        $showpage=($page*5)-5;
                    }
                           $ViewQuery="SELECT * FROM admin_pannel ORDER BY datetime DESC limit $showpage,4;";
                           
                }
                
                else
                           {
                              // the deffault search for blog.php
                           $ViewQuery="SELECT * FROM admin_pannel ORDER BY datetime DESC limit 0,4;";}
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
                            <?php if(strlen($post)>150){$post=substr($post,0,550).'...';}
                            echo $post;
                            ?>
                        </P>
                    </div>
                   <a href="fullpost.php?id=<?php echo $postid;?>"><span class= "btn btn-info">المزيد</span></a>
                </div>
                <?php }?>
                <nav>
                <ul class="pagination pull-left">
               <?php 
                //pagenintion code
                global $connectingDB;
                $pagnitonquery="select COUNT(*) from admin_pannel";
                    $executepage=mysqli_query($connection,$pagnitonquery);
                $rowpage=mysqli_fetch_array($executepage,MYSQLI_NUM);
                $totalpost=array_shift($rowpage);
               // echo $totalpost;
                 $pagenitionperpage= $totalpost/5;
                  $pagenitionperpage=ceil($totalpost);
                for($i=1;$i<=$pagenitionperpage;$i++)
                {
                ?>
                
                    <li><a href="blog.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
                    <?php }?>
                    </ul>
                </nav>
            </div>
            <div class=" col-sm-offset-1 col-sm-3">
               
                <img class="img-responsive img-circle imageicon" style="max-width: 150px;margin: 0 auto;display: block;" src="images/logo.jpg">
                <p>جمعية التكافل الخيرية ؛ مؤسسة خيرية شعبية غير منتمية لحزب ديني أو سياسي ، مرخصة من وزارة التنمية والشؤون الاجتماعية ، تعمل لنهضة الوطن وخدمة المواطن من خلال محاور عملها .</p>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 class="panel-title">النشاطات</h2>
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
        <hr>
        <a style="color: white;text-decoration: none; cursor: pointer;font-weight: bold">http://atkful.com</a>
    </div>
    <div style="height: 10px; background-color: skyblue"></div>
</body>
<?php
    include 'include/footer.php';
    ?>

</html>
