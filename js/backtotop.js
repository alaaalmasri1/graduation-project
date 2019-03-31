 $(window).on("scroll",function() {
        if ($(this).scrollTop() > 50 ) {
            $('#topBtn').fadeIn();
        } else {
            $('#topBtn').fadeOut();
        }
    });

    $("#topBtn").on("click",function() {
        $("html, body").animate({scrollTop: 0}, 800);
     });