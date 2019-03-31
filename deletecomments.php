<?php require_once("include/session.php");?>
<?php require_once("include/function.php");?>
<?php require_once("include/db.php");?>
<?php
if(isset($_GET["id"]))
{
    $idFromURL=$_GET["id"];
    $connectingDB;
    $query="DELETE  FROM comments where id='$idFromURL' ORDER by datetime desc";
    $execute=mysqli_query($connection,$query);
    if($execute)
    {
        
       
            $_SESSION['Successmessage']="comment  deleted successcfully";
        rediret_to("comments.php");
        }
        else
        {
            $_SESSION['error']=" something went wrong";
             rediret_to("comments.php");
        }
    }
?>