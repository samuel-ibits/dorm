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
                $("#flt2").removeClass("down", 'fast');
                $("#flt3").removeClass("down", 'fast');
                $("#flt4").removeClass("down", 'fast');
                $("#filter1").toggle('fast');
                $("#filter2").hide('fast');
                $("#filter3").hide('fast');
                $("#filter4").hide('fast');
                $(".filter-holder").show('fast');
            });
            

            $("#filt2-title").click(function () {
                $("#flt2").toggleClass("down", 'fast'); 
                $("#flt1").removeClass("down", 'fast');
                $("#flt3").removeClass("down", 'fast');
                $("#flt4").removeClass("down", 'fast');
                $("#filter2").toggle('fast');
                $("#filter1").hide('fast');
                $("#filter3").hide('fast');
                $("#filter4").hide('fast');
                $(".filter-holder").show('fast');
            });
            $("#filt3-title").click(function () {
                $("#flt3").toggleClass("down", 'fast');
                $("#flt2").removeClass("down", 'fast');
                $("#flt1").removeClass("down", 'fast');
                $("#flt4").removeClass("down", 'fast');
                $("#filter3").toggle('fast');
                $("#filter2").hide('fast');
                $("#filter1").hide('fast');
                $("#filter4").hide('fast');
                $(".filter-holder").show('fast');
            });
            $("#filt4-title").click(function () {
                $("#flt4").toggleClass("down", 'fast'); 
                $("#flt2").removeClass("down", 'fast');
                $("#flt3").removeClass("down", 'fast');
                $("#flt1").removeClass("down", 'fast');
                $("#filter4").toggle('fast');
                $("#filter2").hide('fast');
                $("#filter3").hide('fast');
                $("#filter1").hide('fast');
                $(".filter-holder").show('fast');
            });



            $(".meeting-card-holder").hide("fast");
            $(".meeting-card-holder-dark-bg").hide("fast");
            $("#meetagent1").click(function () {
            $(".meeting-card-holder").show("fast");
            $(".meeting-card-holder-dark-bg").show("fast");
            });
            
            $(".meeting-card-holder-dark-bg").click(function () {
            $(".meeting-card-holder").hide("fast");
            $(".meeting-card-holder-dark-bg").hide("fast");
            });


            
share = document.getElementById('shareDorm')
  
share.addEventListener('click', event => {
    if(navigator.share){
        navigator.share({
            text:"Dorm: student help apk",
            url:'https://dorm.com.ng.apps/dorm_v2_lite.apk'
        }).then(() => {
            console.log('thanks for sharing!');
        })
        .catch((err) =>console.error(err));
    }
    else{
        alert("unsupported by browser please share link manully");
        
        function copyToClipboard(element) {
var $temp = $("<input>");
$("body").append($temp);
$temp.val($(element).text()).select();
document.execCommand("copy");


swal("COPIED!", "Link COPIED!", "success");
}
    }
});


var d = new Date(),
    minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
    hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
    ampm = d.getHours() >= 12 ? 'pm' : 'am',
    months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];


   fulldate = days[d.getDay()]+' '+months[d.getMonth()]+' '+d.getDate()+' '+d.getFullYear()

    document.getElementById("dateId").innerHTML = fulldate;


//Reference: 
//https://www.onextrapixel.com/2012/12/10/how-to-create-a-custom-file-input-with-jquery-css3-and-php/
;(function($) {

    // Browser supports HTML5 multiple file?
    var multipleSupport = typeof $('<input/>')[0].multiple !== 'undefined',
        isIE = /msie/i.test( navigator.userAgent );

    $.fn.customFile = function() {

      return this.each(function() {

        var $file = $(this).addClass('custom-file-upload-hidden'), // the original file input
            $wrap = $('<div class="file-upload-wrapper">'),
            $input = $('<input type="text" class="file-upload-input" />'),
            // Button that will be used in non-IE browsers
            $button = $('<button type="button" class="file-upload-button">Select a File</button>'),
            // Hack for IE
            $label = $('<label class="file-upload-button" for="'+ $file[0].id +'">Select a File</label>');

        // Hide by shifting to the left so we
        // can still trigger events
        $file.css({
          position: 'absolute',
          left: '-9999px'
        });

        $wrap.insertAfter( $file )
          .append( $file, $input, ( isIE ? $label : $button ) );

        // Prevent focus
        $file.attr('tabIndex', -1);
        $button.attr('tabIndex', -1);

        $button.click(function () {
          $file.focus().click(); // Open dialog
        });

        $file.change(function() {

          var files = [], fileArr, filename;

          // If multiple is supported then extract
          // all filenames from the file array
          if ( multipleSupport ) {
            fileArr = $file[0].files;
            for ( var i = 0, len = fileArr.length; i < len; i++ ) {
              files.push( fileArr[i].name );
            }
            filename = files.join(', ');

          // If not supported then just take the value
          // and remove the path to just show the filename
          } else {
            filename = $file.val().split('\\').pop();
          }

          $input.val( filename ) // Set the value
            .attr('title', filename) // Show filename in title tootlip
            .focus(); // Regain focus

        });

        $input.on({
          blur: function() { $file.trigger('blur'); },
          keydown: function( e ) {
            if ( e.which === 13 ) { // Enter
              if ( !isIE ) { $file.trigger('click'); }
            } else if ( e.which === 8 || e.which === 46 ) { // Backspace & Del
              // On some browsers the value is read-only
              // with this trick we remove the old input and add
              // a clean clone with all the original events attached
              $file.replaceWith( $file = $file.clone( true ) );
              $file.trigger('change');
              $input.val('');
            } else if ( e.which === 9 ){ // TAB
              return;
            } else { // All other keys
              return false;
            }
          }
        });

      });

    };

    // Old browser fallback
    if ( !multipleSupport ) {
      $( document ).on('change', 'input.customfile', function() {

        var $this = $(this),
            // Create a unique ID so we
            // can attach the label to the input
            uniqId = 'customfile_'+ (new Date()).getTime(),
            $wrap = $this.parent(),

            // Filter empty input
            $inputs = $wrap.siblings().find('.file-upload-input')
              .filter(function(){ return !this.value }),

            $file = $('<input type="file" id="'+ uniqId +'" name="'+ $this.attr('name') +'"/>');

        // 1ms timeout so it runs after all other events
        // that modify the value have triggered
        setTimeout(function() {
          // Add a new input
          if ( $this.val() ) {
            // Check for empty fields to prevent
            // creating new inputs when changing files
            if ( !$inputs.length ) {
              $wrap.after( $file );
              $file.customFile();
            }
          // Remove and reorganize inputs
          } else {
            $inputs.parent().remove();
            // Move the input so it's always last on the list
            $wrap.appendTo( $wrap.parent() );
            $wrap.find('input').focus();
          }
        }, 1);

      });
    }

}(jQuery));

$('input[type=file]').customFile();