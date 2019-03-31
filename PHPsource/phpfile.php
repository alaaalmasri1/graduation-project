<?php
$nameerror="";
$emailerror="";
$subjecterror="";
$contactmessageterror="";
if(isset($_POST['submit']))
{
    if(empty($_POST['name']))
    {
        $nameerror="<p style='color:red;'>name is required</p>";
    }
 else {
        $name=test_input_user($_POST["name"]);
        if(!preg_match("/^[A-Za-z.]*$/",$name))
        {
            $nameerror="latters and white spaces are only allowed";
        }
    }
        if(empty($_POST['email']))
    {
        $emailerror="<p style='color:red;'>EMAIL is required</p>";
    }
 else {
        $email=test_input_user($_POST["email"]);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email))
        {
            $emailerror="<p style='color:red;'>invalid email format</p>";
        }
 }
       if(empty($_POST['subject']))
    {
        $subjecterror="<p style='color:red;'>you must at least write a above 25 chracters</p>";
        
    }
 else {
        $subject=test_input_user($_POST["subject"]);
 }
        if(empty($_POST['contact-message']))
    {
        $contactmessageterror="<p style='color:red;'>what do u want to inform us about</p>";
    }
 else {
        $contactmessage=test_input_user($_POST["contact-message"]);
 }
 //to send a message to a email
 if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['subject'])&&!empty($_POST['contact-message']))
    {
 $to='alaaalmasri272@gmail.com';
 $subject="from submission";
 $body="A person name:".$_POST["name"]."\n"."Email:".$_POST["email"]."\n"."purpose of message".$_POST["subject"]."\n"."Message:".$_POST["contact-message"];
 $sender="from:".$email;
 if(mail($to, $subject, $body,$sender))
 {
     echo"sent sucssfully thank you"."  " .$name." "."we will contact u shortly";
 }
 else
 {
     echo 'something went wrong';
 }
 header("location:index.php");
}
}
 function test_input_user($data)
    {
        return $data;
    }
?>