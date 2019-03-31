<?php
$connection=mysqli_connect('localhost','root',"");//one for the server u use and one for name of the user and on for the password
$connectingDB=mysqli_select_db($connection,"atkful");//the link of the connection and name of database
if(!$connection ){
  echo "theres no connection to the database";
}


?>