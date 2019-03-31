<?php
include "include/header.php";
?>

<head>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<style>
    h1
    {
        font-size: 42px;
    }
    #main
    {
        width: 620px;
        height: 350px;
        position: absolute;
        top: 50%;
        left: 30%;
        overflow: hidden;
        
        
        
    }
    body
    {
        margin: 0px;
        padding: 0px;
        font-size: 25px;
        font-weight: bold;
        font-family: 'Raleway', sans-serif;

    }
    #frame
    {
        
        height: 400px;
        width: 650px;
    }
    #controls
    {
        height: 40px;
        width: 97%;
        padding: 10px;
        position: absolute;
        top:90%;
        left: 50%;
        transform: translate(-50%,-50%);
    }
    #seek-bar
    {
        width: 100%;
        height: 10px;
        background-color: gray;
    
        position: absolute;
        bottom: 30px;
        left: 0px;
    }
    #fill
    {
        height: 10px;
        width: 10px;
        background-color: #DBA74A;
    }
    #currentTime
    {
        font-family: monospace;
        font-size: 14px;
        color: #DBA74A;
    }
    #playbtn
    {
        cursor: pointer;
    }
    input[type=range]
    {
        background-clip: #666;
        height: 4px;
        border-radius: 4px;
        outline: none;
    }
    #main
    {
        border: 2px  solid black;
    }
</style>
</head>
<section class="About text-center">
<div class="container">
    <h1>من نحن</h1>
    <hr>
    <div id="frame"></div>
        <div id="main">
        <div id="videopannel">
            <video poster="images/logo.jpg"  id="myVideo" width="625" height="400" src="video/vid2.mp4"></video>
        </div>
        <div id="controls">
            <div id="seek-bar">
                <div id="fill">
                    
                </div>
                <table border="1">
                    <tr>
                        <td width="50%">
                            <div id="currentTime">00:00 / 00:00</div>
                        </td>
                        <td width="30%">
                            <img src="images/Play.png" onclick="playorpuse()" id="playbtn">
                        </td>
                        <td>
                            <img src="images/Speaker.png" id="speaker">
                        </td>
                        <td>
                            <input type="range"  id="volume" min="0" max="1" value="0.40" step="0.20" onchange="changevolume()">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <p class="lead">  جمعية التكافل الخيرية مؤسسة خيرية شعبية غير منتمية لحزب ديني أو سياسي ، مرخصة من وزارة التنمية والشؤون الاجتماعية ، تعمل لنهضة الوطن وخدمة المواطن من خلال محاور عملها . </p>
    <img class="img-thumbnail" src="images/cover.jpg" width="400" height="100" style="margin:30px;">
</div>
</section>
<section class="about-feature text-center">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <i class="fas fa-hands-helping fa-2x"></i>
                <h3>المحور الأغاثي</h3>
                <p style="margin:20px;">الرسالة: تحسين معيشة ذوي الحاجات في المجتمع. توفير معونات ثابتة عينية ونقدية وصحية للأُسر المحتاجة من خلال تدريب وتأهيل الأفراد والأُسر على العمل والانتاج، ودعمهم من الزكوات والصدقات لوصولهم للاكتفاء أو الغنى.</p>
            </div>
            <div class="col-sm-4">
                <i class="fas fa-headset fa-2x"></i>
                <h3>المحور الأجتماعي</h3>
                <p style="margin:20px;">الرؤيا: رصد المظاهر والظواهر السلبية التي تتفشى في المجتمع والعمل على محوها أو تقليلها، ورصد المظاهر والظواهر الايجابية التي تضعف أو تختفي في المجتمع والعمل على تقويتها وإظهارها من خلال برامج ومشاريع معتمده.</p>
            </div>
            <div class="col-sm-4">
          <i class="fas fa-university fa-2"></i>
                <h3>المحور التوعوي</h3>
                <p style="margin:20px;">الرؤيا: توفير معونات ثابتة عينية ونقدية وصحية للأُسر المحتاجة من خلال تدريب وتأهيل الأفراد والأُسر على العمل والانتاج، ودعمهم من الزكوات والصدقات لوصولهم للاكتفاء أو الغنى..</p>
            </div>
        </div>
    </div>
</section>

<section class="about-ceo">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <img class="img-thumbnail" src="images/ceo.jpg" width="400" height="300">
            </div>
            <div class="col-sm-7">
                <h2>جمعية خيرية تقدم المعونات لأرامل  أيتام  فقراء  عجزة  مرضى</h2>
                <p>عدت الجمعية نظاماً خاصاً بموظفيها مصدق من وزارة العمل و ألحقت جميع موظفيها بالضمان الاجتماعي ونجزت مشاريع وقفية خيرية وأخرى ربحية استثمارية لتغطية مساعداتها ونفقاتها الإدارية التشغيلية وأوشكت على بناء أول وأكبر مجمع وقفي خيري في لواء الرمثا </p>
               
            </div>
        </div>
    </div>
</section>
<section id="footer">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6">
                
            </div>
            
        </div>
        <!--End of row-->
    </div>
    <!--End of container-->
</section>
<script type="text/javascript">
var vid=document.getElementById("myVideo");
var fillbar=document.getElementById("fill");
var currenttime=document.getElementById("currentTime");
var volumeslider=document.getElementById("volume");
function playorpuse()
{
    if(vid.paused)
        {
            vid.play();
            $("#playbtn").attr("src","images/pause.png");
        }
    else
        {
            vid.pause();
            $("#playbtn").attr("src","images/play.png");
        }
}
vid.addEventListener('timeupdate',function(){
    var position=vid.currentTime/vid.duration;
    fillbar.style.width=position*100+'%';
    if(vid.ended)
        {
             $("#playbtn").attr("src","images/play.png");
        }
});
    function changevolume()
    {
        vid.volume=volumeslider.value;
        
    }
    
</script>
<?php include "include/footer.php";
?>