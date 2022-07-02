$("#comment-1").fadeOut('fast');
$("#comment-2").fadeOut('fast');
$("#comment-3").fadeOut('fast');
$("#comment-4").fadeOut('fast');
$("#comment-5").fadeOut('fast');
$("#comment-6").fadeOut('fast');
$(".overlay").hide('fast');
$(".post-holder").hide('fast');

$(".study-tool-tool").fadeOut('fast');
$(".grid-icon").click(function () {
    $(".study-tool-tool").fadeToggle('fast');
    $(".grid-icon").fadeToggle('fast');
    $(".close-icon").fadeToggle('fast');

});

$(".close-icon").click(function () {
    $(".study-tool-tool").fadeToggle('fast');
    $(".grid-icon").fadeToggle('fast');
    $(".close-icon").fadeToggle('fast');
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


