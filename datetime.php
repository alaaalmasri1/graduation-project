<?php
date_default_timezone_get("Asia/Amman");// to know the correct time according to ur computer
$cureentTime=time();//what is the time it will show u a lot of numbers
$dateTime=strftime("%B-%d-%Y %H:%m:%S",$cureentTime);//it will transform numbers into days or months on year depend on the format
echo $dateTime;
?>