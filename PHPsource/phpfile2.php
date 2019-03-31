<?php
$firstnameerror="";
$middlenameerror="";
$lastnameerror="";
$ageerror="";
$gendererror="";
$emailerror="";
$acadmicerror="";
$acadmeicfilederror="";
$phoneerror="";
$filedstudyerror="";
if(isset($_POST['submit']))
{
    if(empty($_POST['first_name']))
    {
        $firstnameerror="<p style='color:red;'>الاسم الاول مطلوب</p>";
    }
 else {
        $firstname=test_input_user($_POST["first_name"]);
        if(!preg_match("/^[A-Za-z.]*$/",$firstname))
        {
            $firstnameerror="الاحرف والفراغات فقط يسمح بها";
        }
    }
      if(empty($_POST['middle_name']))
    {
       $middlenameerror="<p style='color:red;'> اسم الاب مطلوب</p>";
    }
 else {
        $middlename=test_input_user($_POST["middle_name"]);
        if(!preg_match("/^[A-Za-z.]*$/", $middlename))
        {
            $middlenameerror="الاحرف والفراغات فقط يسمح بها";
        }
    }
      if(empty($_POST['family_name']))
    {
        $lastnameerror="<p style='color:red;'> اسم العائلة مطلوب</p>";
    }
 else {
        $lastname=test_input_user($_POST["family_name"]);
        if(!preg_match("/^[A-Za-z.]*$/",  $lastname))
        {
           $lastnameerror="الاحرف والفراغات فقط يسمح بها";
        }
    }
      if(empty($_POST['age']))
    {
       $ageerror="<p style='color:red;'> العمر مطلوب</p>";
    }
 else {
        $age=test_input_user($_POST["age"]);
        if(!preg_match("/^[0-9]*$/",  $age))
        {
            $nameerror="الارقام فقط مسموحة";
        }
    }
      if(empty($_POST['gender']))
    {
       $gendererror="<p style='color:red;'> يجب اختيار انثى او ذكر</p>";
    }
 else {
      $gender=test_input_user($_POST["gender"]);
    }
     if(empty($_POST['volunteer-field_of_learning']))
    {
        $acadmicerror="<p style='color:red;'>التحصيل العلمى مطلوب </p>";
    }
 else {
      $acadmic=test_input_user($_POST["volunteer-field_of_learning"]);
         if(!preg_match("/^([^0-9]*)$/",  $acadmic))//no numbers are allowed
        {
            $acadmicerror="الارقام غير مسموحة";
        }
    }
     if(empty($_POST['volunteer-phone_number']))
    {
        $phoneerror="<p style='color:red;'>رقم الهاتف مطلوب </p>";
    }
 else {
     $phone=test_input_user($_POST["volunteer-phone_number"]);
         if(!preg_match("/^[0-9]*$/",  $phone))
        {
            $phoneerror="<p style='color:red;'>لا يسمح بى الاحرف </p>";
        }
    }
     if(empty($_POST['volunteer-field_of_study']))
    {
         $filedstudyerror="<p style='color:red;'>مجال الدراسة مطلوب </p>";
    }
 else {
     $filed=test_input_user($_POST["volunteer-field_of_study"]);
         if(!preg_match("/^([^0-9]*)$/",$filed))//no numbers are allowed
        {
            $filedstudyerror="الارقام غير مسموحة";
        }
    }
  if(empty($_POST['volunteer-email']))
    {
        $emailerror="<p style='color:red;'>البريد الالكترونى مطلوب</p>";
    }
 else {
        $email=test_input_user($_POST["volunteer-email"]);
        if(!preg_match("/[a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}[.]{1}[a-zA-Z0-9._-]{2,}/", $email))
        {
          $emailerror="<p style='color:red;'>اميل غير معرف </p>";
        }
 }
    
}
 //to send a message to a email
 if(!empty($_POST['first_name'])&&!empty($_POST['middle_name'])&&!empty($_POST['family_name'])&&!empty($_POST['age'])&&!empty($_POST['volunteer-email'])&&!empty($_POST['volunteer-field_of_learning'])&&!empty($_POST['volunteer-field_of_study'])&&!empty($_POST['volunteer-phone_number']))
    {
 $to='alaaalmasri272@gmail.com';
 $subject="from submission";
 $body="الاسم:".$_POST["first_name"]."\n"."اسم الاب:".$_POST["middle_name"]."\n"."اسم العائلة".$_POST["family_name"]."\n"."العمر:".$_POST["age"]."\n"."البريد الالكترونى:".$_POST["volunteer-email"]."\n"."الجنس:".$_POST["gender"]."\n"."الهاتف:".$_POST["volunteer-phone_number"]."\n"."التحصيل العلمى:".$_POST["volunteer-field_of_learning"]."\n"."مجال الدراسة:".$_POST["volunteer-field_of_study"];
$sender="from:".$email;
 if(mail($to, $subject, $body,$sender))
 {
     echo"sent sucssfully thank you"."  " .$firstname." "."we will contact u shortly";
 }
 else
 {
     echo 'something went wrong';
 }
}
 function test_input_user($data)
    {
        return $data;
    }
?>
