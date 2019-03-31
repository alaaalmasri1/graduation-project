<?php

include "include/header.php";
?>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        padding-top: 20px
    }
    html {
    font-family: Lato, 'Helvetica Neue', Arial, Helvetica, sans-serif;
    font-size: 14px;
}

h5 {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
    margin: 0;
}

.card {
    font-size: 1em;
    overflow: hidden;
    padding: 0;
    border: none;
    border-radius: .28571429rem;
    box-shadow: 0 1px 3px 0 #d4d4d5, 0 0 0 1px #d4d4d5;
}

.card-block {
    font-size: 1em;
    position: relative;
    margin: 0;
    padding: 1em;
    border: none;
    border-top: 1px solid rgba(34, 36, 38, .1);
    box-shadow: none;
}

.card-img-top {
    display: block;
    width: 100%;
    height: auto;
}

.card-title {
    font-size: 1.28571429em;
    font-weight: 700;
    line-height: 1.2857em;
}

.card-text {
    clear: both;
    margin-top: .5em;
    color: rgba(0, 0, 0, .68);
}

.card-footer {
    font-size: 1em;
    position: static;
    top: 0;
    left: 0;
    max-width: 100%;
    padding: .75em 1em;
    color: rgba(0, 0, 0, .4);
    border-top: 1px solid rgba(0, 0, 0, .05) !important;
    background: #fff;
}

.card-inverse .btn {
    border: 1px solid rgba(0, 0, 0, .05);
}

.profile {
    position: absolute;
    top: -12px;
    display: inline-block;
    overflow: hidden;
    box-sizing: border-box;
    width: 25px;
    height: 25px;
    margin: 0;
    border: 1px solid #fff;
    border-radius: 50%;
}

.profile-avatar {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.profile-inline {
    position: relative;
    top: 0;
    display: inline-block;
}

.profile-inline ~ .card-title {
    display: inline-block;
    margin-left: 4px;
    vertical-align: top;
}

.text-bold {
    font-weight: 700;
}

.meta {
    font-size: 1em;
    color: rgba(0, 0, 0, .4);
}

.meta a {
    text-decoration: none;
    color: rgba(0, 0, 0, .4);
}

.meta a:hover {
    color: rgba(0, 0, 0, .87);
}

    #custom_carousel .item {

        color: #000;
        background-color: #eee;
        padding: 20px 0;
    }

    #custom_carousel .controls {
        overflow-x: auto;
        overflow-y: hidden;
        padding: 0;
        margin: 0;
        white-space: nowrap;
        text-align: center;
        position: relative;
        background: #ddd
    }

    #custom_carousel .controls li {
        display: table-cell;
        width: 1%;
        max-width: 90px
    }

    #custom_carousel .controls li.active {
        background-color: #eee;
        border-top: 3px solid orange;
    }

    #custom_carousel .controls a small {
        overflow: hidden;
        display: block;
        font-size: 10px;
        margin-top: 5px;
        font-weight: bold
    }

</style>
<div class="container-fluid">
    <div id="custom_carousel" class="carousel slide" data-ride="carousel" data-interval="2500">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-9">
                            <h2 style="margin-left:750px;">مشروع دفئ الشتاء</h2>
                            <p style="font-size:20px;">ظراً لما يعانيه إخواننا اللاَّجئين السوريين من معاناة مع دخول موسم الشتاء ، فلا يجدون غطاءً فإذا بهم يلتحفون السماء ويموت الأطفال من شدة البرد ، لذلك سعت جمعية الشيخ عبدالله النوري الخيرية لإطلاق حملة #دفء_الشتاء لإغاثة إخواننا اللاجئين السوريين حيث تتضمن الحملة توفير المواد اللاَّزمة من الغذاء والكساء والدواء ومواد التدفئة </p>
                            <button class="btn btn-primary" style="float:right;">للمزيد</button>
                        </div>
                        <div class="col-md-3"><img src="images/winter.jpg" class="img-responsive"></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <h2 style="margin-left:750px;">مشاربع رمضانية</h2>
                            <p style="font-size:20px;">من المهمات التي أثبتت أثرها على المشاركين بها هي المحاضن التربوية,كيف بها أن تصنع للمجتمع قادة لمعركة الحياة,ولذا يحسن بالقائمين عليها العناية بها وتفعيل بعض البرامج التي سيكون شهر رمضان خير من يدعمها من اهافها خطة متكاملة تتضمن أهداف يسيرة العدد متينة المعنى ,يندرج منها آليات مقننة للعمل.وموزعة المهام.
                                زيارات الدعاة في بيوتهم,وعمل اللقاءات معهم و.
                                توعية الناس من خلال القوافل الدعوية.وتنسيق بعض البرامج النافعة .</p>
                            <button class="btn btn-primary" style="float:right;">للمزيد</button>
                        </div>
                        <div class="col-md-3"><img src="images/project2.jpg" style="height:150px;" class="img-responsive"></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <h2 style="margin-left:750px;">مشروع الاضاحى</h2>
                            <p style="font-size:20px;">ير من الدول العربية والأجنبية، ففي الاردن يتم تنفيذ المشروع من خلال شراء الأعداد المطلوبة وذبحها في المجازر والمسالخ الحكومية ومن ثم توزيعها على الفقراء والمحتاجين والأسر المتعففة التي تقوم الجمعية برعايتها والتي لها قوائم محددة في الجمعية.
                                أما في الخارج فيتم الاتفاق مع عدد من الجمعيات التي تقوم بتنفيذ المشروع وفق آلية محددة بعد أن نقوم بإرسال تكلفة الأضاحي لتلك الدول</p>
                            <button class="btn btn-primary" style="float:right;">للمزيد</button>
                        </div>
                        <div class="col-md-3"><img src="images/p3.jpg" class="img-responsive"></div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9">
                            <h2 style="margin-left:750px;">مشروع السلة الغذائية</h2>
                            <p style="font-size:20px;">تأمين الأسر الأشد احتياجاً (بطرد الخير) من المواد الأساسية كالأرز والسكر والطحين والشاي والزيت والمعلبات المختلفة وغيرها، تأمين أسر الفقراء الأيتام والمساكين بعد عمل دراسة جادة على أوضاعهم.
                                أهداف المشروعومن
                                تأمين العيش الكريم من خلال توفير الماد الأساسيةو
                                التعاون مع المؤسسات والأفراد لسد احتياجات الفقراء و
                                نشر الابتسامة والمحبة والرحمة بين أبناء الوطن وإيصال الطرد إلى بيوت غير القادرين على الحضور إلى الجمعية</p>
  <a href="basket.php"><button class="btn btn-primary" style="float:right;">للمزيد</button></a>
                        </div>
                        <div class="col-md-3"><img src="images/food.png" class="img-responsive"></div>
                    </div>
                </div>
            </div>
            <!-- End Item -->
        </div>
        <!-- End Carousel Inner -->
        <div class="controls">
            <ul class="nav">
                <li data-target="#custom_carousel" data-slide-to="0" class="active"><a href="#"><img src="images/winter.jpg" style="width:150px;"><small>مشروع دفئ الشتاء</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="1"><a href="#"><img src="images/project2.jpg" style="width:100px;"><small>مشروع رمضانى</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="2"><a href="#"><img src="images/p3.jpg" style="width:100px;"><small>مشروع الاضاحى</small></a></li>
                <li data-target="#custom_carousel" data-slide-to="3"><a href="#"><img src="images/food.png" style="width:100px;"><small>مشروع السلة الغذائية</small></a></li>
            </ul>
        </div>
    </div>
    <!-- End Carousel -->
</div>
    <div class="container"  style="margin:40px;" >
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="images/p2.jpg">
                    <div class="card-block">
                       <a href="#"><h5 style="text-align:center;" class="text-bold">مشروع السلة الغذائية</h5></a> 
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="images/p1.jpg">
                    <div class="card-block">
                       <a href="#"><h5 style="text-align:center;" class="text-bold">مشروع الصدقة الجارية</h5></a> 
                    </div>
                </div>
            </div>
           <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="images/%D8%AD3.jpg">
                    <div class="card-block">
                       <a href="#"><h5 style="text-align:center;" class="text-bold">مشروع الرخيف الخيرى</h5></a> 
                    </div>
                </div>
            </div>
           <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="images/p5.jpg">
                    <div class="card-block">
                       <a href="#"><h5 style="text-align:center;" class="text-bold">مشروع مساعدة المرضى</h5></a> 
                    </div>
                </div>
            </div>
        <div class="row ">
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card card-inverse card-primary " style="margin:5px;">
                    <img class="card-img-top" src="images/p6.jpg">
                    <blockquote class="card-blockquote p-3">
                        <a href="#"><h5 style="text-align:center;" class="text-bold">مشروع كفالة اليتيم</h5></a> 
                    
                        
                    </blockquote>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info" style="margin:5px;">
                    <img class="card-img-top" src="upload/%D8%A7%D9%84%D8%B7%D8%B1%D9%88%D8%AF%20%D8%A7%D9%84%D8%BA%D8%B0%D8%A7%D8%A6%D9%8A%D8%A9.jpg">
                    <div class="card-block">
                       <a href="#"> <h4 class="card-title mt-3">مشروع  طرد الخير</h4></a>
                        
                       
                    </div>
                    
                </div>
            </div>
              <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info" style="margin:5px;">
                    <img class="card-img-top" src="images/p8.jpg">
                    <div class="card-block">
                       <a href="#"> <h4 class="card-title mt-3" style="text-align:center">مشروع رمضان</h4></a>
                        
                       
                    </div>
                    
                </div>
            </div>
           <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card card-inverse card-info" style="margin:5px;">
                    <img class="card-img-top" src="images/p9.jpeg" style="height:260px;">
                    <div class="card-block">
                       <a href="#"> <h4 class="card-title mt-3" style="text-align:center">مشروع الاضاحى</h4></a>
                        
                       
                    </div>
                    
                </div>
            </div>
        </div>
</div>
</div>
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
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(ev) {
        $('#custom_carousel').on('slide.bs.carousel', function(evt) {
            $('#custom_carousel .controls li.active').removeClass('active');
            $('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
        })
    });

</script>

<?php
include "include/footer.php";

?>
