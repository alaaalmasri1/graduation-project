<?php
require "include/db.php";
require_once "include/session.php";
require_once "include/function.php";
?>
<?php
if(isset($_GET["id"]))
{
   
    $idfromurl=$_GET["id"];
      $connectingDB;
    $query="DELETE FROM registeration WHERE id='$idfromurl'";
$Excute=  mysqli_query($connection,$query);
if($Excute)
{
    
            $_SESSION['Successmessage']="Admin deleted sucssfully";
        rediret_to("admin.php");
        }
 else {
            
            $_SESSION['error']=" failed deleting Admin ";
             rediret_to("admin.php");
        
        }
        
}
?>