$(document).ready(function(e) {
	var newsNum = $(".newsTicker li").length;
	
	var totalNews_W =0;	
	for(var i=0; i<newsNum; i++){
		var news_W = $(".newsTicker li").eq(i).outerWidth(true);
		totalNews_W = totalNews_W + news_W;
	}
	
	$(".newsTicker").css('width', totalNews_W+'px');	
	
	var speed =1, animAmount, animInterval;
	
	animateNews();

	function animateNews(){
		$(".newsTicker li").eq(0).animate({
			'marginLeft' : '-='+ speed + 'px'
		},1, function(){
			animAmount = speed;
			var animNews_W = $(".newsTicker li").eq(0).outerWidth(true);
			
			console.log($(this));
			
			if(animAmount >= animNews_W){
				$(this).parent().append($(this));
				$(this).removeAttr('style');	
			}
			
			animInterval = setTimeout(function(){
				animateNews();	
			});	
		});
	}
	
	$(".newsTicker").hover(function(){
		clearTimeout(animInterval);
		$(".newsTicker li").eq(0).stop();	
	}, function(){
		animateNews();	
	});
});