<?php
include "include/header.php";
?>
<style>
    *
    {
        text-align: right;
    }
</style>
<div class="breadcrumb">
    <ul>
        <li class="home"><a href="index.php" style="color:#fff;">الرئيسة</a></li>

        <li class="separator">

            &nbsp;
        </li>
        <li class="current" ><a href="calculator.php">حاسبة الزكاة</a></li>
    </ul>
</div>

<div id="middle">

    <style type="text/css">
        .button { width:60px; height:23px ; background:#009203 ; color:#fff; display:table-cell; text-align:center; vertical-align:middle; }
    </style>

    <div class="content-body">
        <span class="side-content-top-L"></span><span class="side-content-top-R"></span>
        <span class="side-content-bottom-L-transparent"></span><span class="side-content-bottom-R-transparent"></span>
        <h1 class="main-title">حاسبة الزكاة</h1>

        <p>
            <div style="padding:10px;margin-top:10px ; background:#f1f1f1">
                <b>طريقة حساب الزكاة </b>
        <p>إذا أردت أن تحسب النصاب بالذهب فهو المال الذي يبلغ أن يشترى به (85) جراماً من الذهب عيار (24). </p>
        <p>
            فلو كان جرام الذهب عيار (24) مثلاً بـ (60) فيكون النصاب هو: (85) جرام × (60) = (5100)، فإن كان مالك قد بلغ النصاب وجب عليك اخراج الزكاة وهي ربع العشر وطريقة حسابها ان تقسم مالك على العدد 40</p>

    </div>
    <p class="form-intro">الحقول المشار إليها بعلامة ( <span class="asterisk">*</span> ) إلزامية.</p>
    <fieldset id="faqIntrest">
        <ul class="form">
            <li class="field">
                <label >سعر غرام الذهب <span class="asterisk">*</span><small>يرجى ادخال سعر غرام الذهب</small></label>
                <div class="field-value"><input type="text" name="goldprice"  id="goldprice" class="textbox required" maxlength="255" />
                </div>
                <span class="clearfix"></span>
            </li>
            

            <li class="field">
                <label >المال المدّخر <span class="asterisk">*</span><small>يرجى ادخال مقدار المال المدّخر</small></label>
                <div class="field-value"><input type="text" name="savdgold" class="textbox required" id="savdgold" maxlength="255" />
                </div>
                <span class="clearfix"></span>
            </li>
            <center><button onclick="calc();"class="button" id="operator">احسب</button></center>
                  <p id="result" style="text-align:center; font-size:20px; ">
            <li  class="fieltd"></li>
            <div style="border-top:solid 1px #FCC90E; margin:10px 0 ; clear:both; " >
                
            </div>

            
        </ul>
    </fieldset>
   
       
    </div>
   <!--Start of footer-->
<script>
    function calc() {
  var num1 = document.getElementById("goldprice").value;
  var num2 = document.getElementById("savdgold").value;
  var num3 = Number(num1) *85;
        var result;
        if(num2>num3)
            {
                num2=num2/40;
               result= document.getElementById('result').innerHTML=" المال الواجب عليه الزكاة: "+ num2;
            
            }
        else
            {
               result= document.getElementById('result').innerHTML="المال لم يبلغ نصاب الزكاة  "
            }
     
}

</script>
<section id="footer">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="copyright">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="designer">

                    </div>
                </div>
            </div>
            <!--End of row-->
        </div>
        <!--End of container-->
    </section>
    <?php include "include/footer.php"?>
