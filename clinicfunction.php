<?php require_once("include/session.php");?>
<?php require_once("include/function.php");?>
<?php
if(isset($_POST['login_submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $con=mysqli_connect("localhost","root","","clinic");
    $query="select * from login where username='$username' and password='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)==1)
    {
        rediret_to("clinicpannel.php");
    }
    else
    {
        echo "<script>alert('معلومات ادخال خاطئة');</script>";
        rediret_to("cliniconline.php");
        
    }
}


?>