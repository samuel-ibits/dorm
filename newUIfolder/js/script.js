$("#comment-1").fadeOut('fast');
$("#comment-2").fadeOut('fast');
$("#comment-3").fadeOut('fast');
$("#comment-4").fadeOut('fast');
$("#comment-5").fadeOut('fast');
$("#comment-6").fadeOut('fast');
$(".overlay").hide('fast');
$(".post-holder").hide('fast');


$(".close-icon").click(function () {
    $(".study-tool-tool").toggle('fast');
    $(".grid-icon").toggle('fast');
    $(".close-icon").toggle('fast');
});

$(".study-tool-tool").fadeOut('fast');
$(".grid-icon").click(function () {
    $(".study-tool-tool").toggle('fast');
    $(".grid-icon").toggle('fast');
    $(".close-icon").toggle('fast');

});

$(".page-content").click(function () {
    $(".study-tool-tool").hide('fast');
    $(".grid-icon").show('fast');
    $(".close-icon").hide('fast');

});




$("#send-1").click(function () {
    $("#comment-1").fadeToggle('fast');
});

$("#send-2").click(function () {
    $("#comment-2").fadeToggle('fast');
});

$("#send-3").click(function () {
    $("#comment-3").fadeToggle('fast');
});

$("#send-4").click(function () {
    $("#comment-4").fadeToggle('fast');
});

$("#send-5").click(function () {
    $("#comment-5").fadeToggle('fast');
});

$("#send-6").click(function () {
    $("#comment-6").fadeToggle('fast');
});



$(".open-mobile-search").click(function () {
    $(".create-mobile-review").fadeToggle('fast');
    $(".search").fadeToggle('fast');
    $(".open-create-review").fadeToggle('fast');
    $(".open-mobile-search").fadeToggle('fast');
  });



  $(".open-create-review").click(function () {
    $(".create-mobile-review").fadeToggle('fast');
    $(".search").fadeToggle('fast');
    $(".open-create-review").fadeToggle('fast');
    $(".open-mobile-search").fadeToggle('fast');
  });


  $(".remove").click(function () {
    $(".overlay").fadeToggle('fast');
    $(".post-holder").fadeToggle('fast');
});

$(".add-review").click(function () {
    $(".overlay").fadeToggle('fast');
    $(".post-holder").fadeToggle('fast');
});


$(".create-mobile-review").click(function () {
    $(".overlay").fadeToggle('fast');
    $(".post-holder").fadeToggle('fast');
});



$(".menu-toggler").click(function () {
    $(".menu-list-title-sub-side").toggle('fast');
    $(".logo-pc").toggle('fast'); 
    $(".user-info").toggle('fast');
    $(".user-img").toggleClass("relative-class", 'fast');
    $(".user-img").toggleClass("user-img", 'fast');
    $(".user").toggleClass("flexer", 'fast');
    $(".user").toggleClass("user", 'fast');
});


$("#chat-2").hide('fast');
$("#chat-3").hide('fast');
$("#chat-4").hide('fast');
$("#chat-5").hide('fast');
$("#chat-6").hide('fast');
         




 $("#chatopen-1").click(function () {
    
$("#chat-1").fadeIn('fast');
$("#chat-2").hide('fast');
$("#chat-3").hide('fast');
$("#chat-4").hide('fast');
$("#chat-5").hide('fast');
$("#chat-6").hide('fast');

        });


        
 $("#chatopen-2").click(function () {
    
    $("#chat-1").hide('fast');
    $("#chat-2").fadeIn('fast');
    $("#chat-3").hide('fast');
    $("#chat-4").hide('fast');
    $("#chat-5").hide('fast');
    $("#chat-6").hide('fast');
    
            });


             
 $("#chatopen-3").click(function () {
    
    $("#chat-1").hide('fast');
    $("#chat-2").hide('fast');
    $("#chat-3").fadeIn('fast');
    $("#chat-4").hide('fast');
    $("#chat-5").hide('fast');
    $("#chat-6").hide('fast');
    
            });
    


            $("#artMore").click(function () {
                $("#art").fadeIn('fast');
                $(".categories-grid").fadeOut('fast');
            });
    
            $(".circle-back").click(function () {
                $(".category-sub").fadeOut('fast');
                $(".categories-grid").fadeIn('fast');
    
            });

            $("#pi1").click(function () {
                $("#pi1").toggleClass("fixed-image", 'fast');
            });

            $("#pi2").click(function () {
                $("#pi2").toggleClass("fixed-image", 'fast');
            });

            $("#pi3").click(function () {
                $("#pi3").toggleClass("fixed-image", 'fast');
            });

            $("#pi4").click(function () {
                $("#pi4").toggleClass("fixed-image", 'fast');
            });

            $("#pi5").click(function () {
                $("#pi5").toggleClass("fixed-image", 'fast');
            });

            $("#pi6").click(function () {
                $("#pi6").toggleClass("fixed-image", 'fast');
            });

            $("#pi7").click(function () {
                $("#pi7").toggleClass("fixed-image", 'fast');
            });


            $(".accomodia-inspect").hide("fast");
            $("#accomodia-ispect-1").click(function () {
                $(".accomodia-inspect").toggle("fast");
                $(".accomodia-card-holder").toggle("fast");
            });


            $("#accomodia-ispect-1-pc").click(function () {
                $(".accomodia-inspect").toggle("fast");
                $(".accomodia-card-holder").toggle("fast");
            });


            $(".back-to-accomodia").click(function () {
                $(".accomodia-inspect").toggle("fast");
                $(".accomodia-card-holder").toggle("fast");
            });

            
            $(".mobile-filter").hide('fast');
            $(".filter-holder").toggle('fast');
            $("#filt1-title").click(function () {
                $("#flt1").toggleClass("down", 'fast');
                $("#filter1").toggle('fast');
                $("#filter2").hide('fast');
                $("#filter3").hide('fast');
                $("#filter4").hide('fast');
                $(".filter-holder").show('fast');
            });
            

            $("#filt2-title").click(function () {
                $("#flt2").toggleClass("down", 'fast'); 
                $("#filter2").toggle('fast');
                $("#filter1").hide('fast');
                $("#filter3").hide('fast');
                $("#filter4").hide('fast');
                $(".filter-holder").show('fast');
            });
            $("#filt3-title").click(function () {
                $("#flt3").toggleClass("down", 'fast');
                $("#filter3").toggle('fast');
                $("#filter2").hide('fast');
                $("#filter1").hide('fast');
                $("#filter4").hide('fast');
                $(".filter-holder").show('fast');
            });
            $("#filt4-title").click(function () {
                $("#flt4").toggleClass("down", 'fast'); 
                $("#filter4").toggle('fast');
                $("#filter2").hide('fast');
                $("#filter3").hide('fast');
                $("#filter1").hide('fast');
                $(".filter-holder").show('fast');
            });