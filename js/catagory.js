$(document).ready(function(){
$('.catagory_item').click(function(){
    var catagory=$(this).attr('id');
    if(catagory == 'all')
        {
            $('.activity_item').addClass('hide');
            setTimeout(function(){
                $('.activity_item').removeClass('hide'); 
            }, 300);
        }else
            {
                $('.activity_item').addClass('hide');
                setTimeout(function(){
                $('.' + catagory).removeClass('hide'); 
            }, 300);
                
            }
});
});