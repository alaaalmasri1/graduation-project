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
        .box-section {
        font-size: 15px;
        color: black;
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
        padding: 20px;
        margin-bottom: 20px;
        background: wheat;
    }

    h4 {
        font-style: normal;
        font-weight: 400;
        text-transform: none;
        font-family: scheherazad;
        margin-top: 10px;
        margin-bottom: 10px
    }
</style>
</head>
<section class="About text-center">
<div class="container">
    <hr>
   <div class="box-section   " style="">
                <p></p>
                 <div id="frame"></div>
        <div id="main">
        <div id="videopannel">
            <video poster="images/logo.jpg"  id="myVideo" width="625" height="400" src="video/%D8%A8%D8%B1%D9%88%D9%85%D9%88%20__%20%D9%85%D8%B4%D8%A7%D8%B1%D9%8A%D8%B9%20%D8%B4%D9%87%D8%B1%20%D8%B1%D9%85%D8%B6%D8%A7%D9%86%20%D8%A7%D9%84%D9%85%D8%A8%D8%A7%D8%B1%D9%83%20%D9%81%D9%8A%20%D8%AC%D9%85%D8%B9%D9%8A%D8%A9%20%D8%A7%D9%84%D8%AA%D9%83%D8%A7%D9%81%D9%84%20%D8%A7%D9%84%D8%AE%D9%8A%D8%B1%D9%8A%D8%A9%20%D9%84%D8%B9%D8%A7%D9%85%202018%D9%85.mp4"></video>
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
                <p style="text-align: right;">
                </p>
                <h2 style="text-align: right;"><span style="color: #ff6600;"><strong>التعريف بالمشروع</strong><strong>:</strong></span></h2>
                <h3 style="text-align: right;">&nbsp;تأمين الأسر الأشد احتياجاً طرد الخير من المواد الأساسية كالأرز السكر والطحين والشاي والزيت والمعلبات المختلفة وغيرها، أسر الفقراء الأيتام والمساكين بعد عمل دراسة جادة على أوضاعهم.</h3>
                <h3 style="text-align: right;">وإيصال الطرد إلى بيوت غير القادرين على الحضور إلى الجمعية .</h3>
                <h2 style="text-align: right;"><span style="color: #ff6600;"><strong>أهداف المشروع:</strong></span></h2>
                <h3 style="text-align: right;">1- تأمين العيش الكريم من خلال توفير الماد الأساسية.</h3>
                <h3 style="text-align: right;">2- التعاون مع المؤسسات والأفراد لسد احتياجات الفقراء.</h3>
                <h3 style="text-align: right;">3- نشر الابتسامة والمحبة والرحمة بين أبناء الوطن.</h3>
                <h3 style="text-align: right;"><span style="color: #008000;"><strong>قال الله تعالى</strong><strong>:</strong></span></h3>
                <h3 style="text-align: right;"><span style="color: #008000;"><strong>سورة الإنسان</strong> (ويطعمون الطعام على حبه مسكيناً ويتيماً وأسيراً)</span></h3>
                <h3 style="text-align: right;"><span style="color: #008000;"><strong>والمعنى</strong><strong>:</strong></span></h3>
                <h3 style="text-align: right;">أنهم يطعمون الطعام وهم يحبونه لأنهم يحتاجونه، ولأنه جاء من كدهم ويطعمون – أيضاً- &nbsp;لأنهم يحبون الله والعمل الذي يقربهم إليه سبحانه</h3>
                <h3 style="text-align: right;"><span style="color: #008000;"><strong>وفي الحديث</strong><strong>:</strong></span></h3>
                <h3 style="text-align: right;"><span style="color: #008000;">إن الله تعالى يقول يوم القيامة: “…… يا ابن آدم! استطعمتك فلم تطعمني فقال &nbsp;يا رب وكيف أطعمك وأنت رب العالمين؟ قال: أما علمت أنه استطعمك عبدي فلان فلم.، أما علمت أنك لو أطعمته لوجدت ذلك عندي ؟ رواه مسلم (2569</span>)</h3>
                <ul style="text-align: right;">
                    <li>
                        <h3>تأمل أيها العاقل اللبيب والأخ الحبيب في هذا الحديث الصحيح الصريح الذي يحذر من عدم إطعام الفقير والمحتاج وأنت قادر مستطيع ! ؟</h3>
                    </li>
                </ul>
                <ul style="text-align: right;">
                    <li>
                        <h3>تذكر أن الله سيقول لك يوم تقف بين يديه : استطعمتك فلم تطعمني. وفي حديث آخر قال رسول الله صلى الله عليه وسلم : “… وأطعموا الجائع…”</h3>
                    </li>
                    <li>
                        <h3>رواه البخاري (3046).</h3>
                    </li>
                </ul>
                <ul style="text-align: right;">
                    <li>
                        <h3>وتذكر أنّ من أحب الأعمال الصالحة إلى الله تعالى كما في الحديث :</h3>
                    </li>
                </ul>
                <h3 style="text-align: right;">رواه الطبراني وصححه الألباني&nbsp;&nbsp;&nbsp;&nbsp; ” أو تطرد عنه ” – &nbsp;المسلم – &nbsp;جوعاً</h3>
                <h2 style="text-align: right;"><strong><span style="color: #ff6600;">الإنجازات من هذا المشروع</span> :</strong></h2>
                <h3 style="text-align: right;">1_ توزع الجمعية في أول يومين من كل شهر الطرد (السلة الغذائية) لـ (130) أسرة</h3>
                <h3 style="text-align: right;">أردنية في مدينة الرمثا .</h3>
                <h3 style="text-align: right;">2_ وكذلك لـ (25) أسرة أردنية في بلدية النعيمة .</h3>
                <h3 style="text-align: right;">3_ وكذلك لـ (20) أسرة في مدينة الطرة .</h3>
                <h3 style="text-align: right;">4_ وتوزع الجمعية (4000) طرد كل شهر لصالح اللاجئين السوريين في لواء الرمثا وبلدة النعيمة .</h3>
                <h3 style="text-align: right;">&nbsp;&nbsp; تكلفة الطرد الواحد (33) دينار أردني*</h3>
                <h3 style="text-align: right;">* تستقبل الجمعية كل ستة أشهر طلبات المحتاجين لدراستها لتعمل على تصنيف الأسر وتقديم المساعدة لها شهرياً .</h3>
                <h2 style="text-align: center;"><span style="color: #ff6600;">إطعام اللقم يدفع النقم</span></h2>
                <p>&nbsp;</p>
                <h2 style="text-align: right;">لمشاهدة مشاريع الجمعية، <span style="color: #ff6600;"><a style="color: #ff6600;" title="مشاريع الجمعية" href="https://www.youtube.com/user/altkafulmedia">اضغط هنا</a></span></h2>
                <p>&nbsp;</p>
                <p></p>
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