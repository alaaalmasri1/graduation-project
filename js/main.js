var indexer = 0;
var animateInterval;
function animate(){
        if(indexer == 0){
            $("#background-slideshow > #watch-image").fadeOut(2000);
            $("#background-slideshow > #home-image").fadeIn(2000);
        }
        else if(indexer == 1){
            $("#background-slideshow > #home-image").fadeOut(2000);
            $("#background-slideshow > #shop-image").fadeIn(2000);
        }
        else if(indexer == 2){
            $("#background-slideshow > #shop-image").fadeOut(2000);
            $("#background-slideshow > #dine-image").fadeIn(2000);
        }
        else if(indexer == 3){
            $("#background-slideshow > #dine-image").fadeOut(2000);
            $("#background-slideshow > #watch-image").fadeIn(2000);
        }

        if(indexer == 3) indexer = 0;
        else indexer++;
    }
    animateInterval = setInterval(animate, 10000);
    animate();
var vid=document.getElementById("myVideo");
var fillbar=document.getElementById("fill");
var currenttime=document.getElementById("currentTime");
var volumeslider=document.getElementById("volume");
function playorpuse()
{
    if(vid.paused)
        {
            vid.play();
        }
    else
        {
            vid.pause();
        }
}
