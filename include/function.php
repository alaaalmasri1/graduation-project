<?php
include 'include/db.php';
require_once "include/session.php";
?>
<?php
function rediret_to($New_Location)
{
    header("Location:".$New_Location);
    exit;
}
function login_attmpet($username,$password)
        
{  
    global $connectingDB;
    global $connection;
    $admin="";
    $Query="SELECT * FROM registeration WHERE UserName='$username'AND Password='$password';";
    $EXECUTE= mysqli_query($connection,$Query);
    if($admin=mysqli_fetch_assoc($EXECUTE))//to check if the username and password exist
    {
       
        return $admin;
    }
    else
    {
        return NULL;
    }
 
}
function  login()
{
    if(isset($_SESSION['user_id']))
    {
        return TRUE;
    }
}
function confirmlogin()
{
    if(!login())
    {
        echo $_SESSION['error']="login required";
        rediret_to("login.php");
    }
}

?>
