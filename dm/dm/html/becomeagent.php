<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>accomodia popup</title>                               
                                 <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                                <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <link rel="stylesheet" href="../css/apopup.css">
                            
                                </head>
<body oncontextmenu='return false' class='snippet-body'>
                                <!-- JQUERY STEP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

<div class="overlay">

</div>

<div class="wrapper" >
    
    <button type="button" class="btn-close btn-adjust" aria-label="Close"></button>
    <form action="">
        <div id="wizard">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="form-row"> <input type="text" class="form-control" placeholder="Price (Naira)"> </div>
                <div class="form-row"> <input type="text" class="form-control" placeholder="Address"> </div>
                <div class="form-row"> <input type="text" class="form-control" placeholder="Title"> </div>
                <div class="form-row"> <input type="text" class="form-control" placeholder="Whatsapp Phone Number"> </div>
            </section>
            
            
            
            <!-- SECTION 2 -->
            <h4></h4>
            <section>
               
    <div class="form-row">
        <label for="front">
          Frontage
            </label>
            <input id="front" type="file" name="uploadfile" class="form-control hidde" style="display:initial ;"> 
    </div>

    <div class="form-row">
        <label for="Room1">
          Room image-1 
            </label>
            <input id="Room" type="file" name="uploadfile" class="form-control hidde" style="display:initial ;"> 
    </div> 
    <div class="form-row">
        <label for="Room">
          Room image-2
            </label>
            <input id="Room2" type="file" name="uploadfile" class="form-control hidde" style="display:initial ;"> 
    </div>

    <div class="form-row">
        <label for="kitchen">
            Kitchen 
            </label>
            <input id="kitchen" type="file" name="uploadfile" class="form-control hidde" style="display:initial ;"> 
    </div>

    <div class="form-row">
        <label for="toilet">
            Toilet 
            </label>
            <input id="toilet" type="file" name="uploadfile" class="form-control hidde" style="display:initial ;"> 
    </div>

    <div class="form-row">
        <label for="backyard">
          Backyard 
            </label>
            <input id="backyard" type="file" name="uploadfile" class="form-control hidde" style="display:initial ;"> 
    </div> 
</section>
           
            <!-- SECTION 3 -->
            <h4></h4>
            <section> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                    <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                    <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " /> </svg>
                <p class="success">This house has successfully been uploaded to <span style="font-weight: bolder; color: blue;">Acomodia</span>.</p>
            </section>

            <!-- SECTION 4 -->
            <h4></h4>
            <section>
                <div class="form-row  form-control n-close" onclick=""> 
                    <button type="button" class="btn-close" aria-label="Close"></button> </div>
            </section>
        </div>
    </form>
</div>
<center><p></p>
<button type="button" class="btn btn-primary btn-lg">Become an agent</button>
<a href="becomeagent.php">
<button type="button" class="btn btn-primary btn-lg">Already an agent</button></a>

</center>





 <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<script type='text/Javascript'>$(function(){
$("#wizard").steps({
headerTag: "h4",
bodyTag: "section",
transitionEffect: "fade",
enableAllSteps: true,
transitionEffectSpeed: 500,
onStepChanging: function (event, currentIndex, newIndex) {
if ( newIndex === 1 ) {
$('.steps ul').addClass('step-2');
} else {
$('.steps ul').removeClass('step-2');
}
if ( newIndex === 2 ) {
$('.steps ul').addClass('step-3');
} else {
$('.steps ul').removeClass('step-3');
}

if ( newIndex === 3 ) {
$('.steps ul').addClass('step-4');
$('.actions ul').addClass('step-last');
} else {
$('.steps ul').removeClass('step-4');
$('.actions ul').removeClass('step-last');
}
return true;
},
labels: {
finish: ".....",
next: "Next",
previous: "Previous"
}
});
// Custom Steps Jquery Steps
$('.wizard > .steps li a').click(function(){
$(this).parent().addClass('checked');
$(this).parent().prevAll().addClass('checked');
$(this).parent().nextAll().removeClass('checked');
});
// Custom Button Jquery Steps
$('.forward').click(function(){
$("#wizard").steps('next');
})
$('.backward').click(function(){
$("#wizard").steps('previous');
})
// Checkbox
$('.checkbox-circle label').click(function(){
$('.checkbox-circle label').removeClass('active');
$(this).addClass('active');
})

$( ".btn-close" ).click(function() {
  $( ".wrapper" ).hide( "fast","linear" );
  $( ".overlay" ).hide( "fast","linear" );
});

$( ".n-close" ).click(function() {
  $( ".wrapper" ).hide( "fast","linear" );
  $( ".overlay" ).hide( "fast","linear" );
});


$( ".btn-lg" ).click(function() {
  $( ".wrapper" ).show( "fast","linear" );
  $( ".overlay" ).show( "fast","linear" );
});
})
</script>
</body>
</html>