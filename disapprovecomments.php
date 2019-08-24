<?php require_once("include/session.php");?>
<?php require_once("include/function.php");?>
<?php require_once("include/db.php");?>
<?php
if(isset($_GET["id"]))
{
    $idFromURL=$_GET["id"];
    $connectingDB;
    $query="UPDATE  comments SET status='OFF' WHERE id='$idFromURL'";
    $execute=mysqli_query($connection,$query);
    if($execute)
    {
        
       
            $_SESSION['Successmessage']="comment  disapproved successcfull waiting for admin approval" ;
        rediret_to("comments.php");
        }
        else
        {
            $_SESSION['error']=" something went wrong";
             rediret_to("comments.php");
        }
    }
?>