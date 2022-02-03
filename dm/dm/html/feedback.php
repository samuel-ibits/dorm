
<?php include('Mail.php'); // includes the PEAR Mail class, already on your server.

session_start();
$useri=$_SESSION['dormuserid'];

if (isset($_POST['submit'])){
$usefull = $_POST['usefull']; // form field
 $experience= $_POST['experience']; // form field
 $newfeauture = $_POST['newfeauture']; // form field
 
 $mostvalue = $_POST['mostvalue'];
$mostused= $_POST['mostused'];
$teribleexp = $_POST['teribleexp'];
 $improve = $_POST['improve'];

$username = 'info@dorm.com.ng'; // your email address
$password = 'J[G-W7hxUGpr'; // your email address password

$from = "dormcomn@dorm.com.ng";
$to = "dormcomn@dorm.com.ng";
$subject = " Dorm Feedback form - User feedback";
$body= "userid:".$useri."Is this app usefull to you (Yes/No) : ".$usefull." <br> Rate your experience using this app(1-10): ".$experience." <br>If you could suggest a new feauture what will it be and why?:".$newfeauture." <br> What part of the app do you find most valueable: ".$mostvalue." <br> Which app feauture do you use most?: ".$mostused." <br>  Narrate a terible expereince with the app (if any) : ".$tetibleexp." <br>   Suggest a solution to improve this app: ".$improve."  ";

$headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
$smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' =>'25'));$mail = $smtp->send($to, $headers, $body); // sending the email

if (PEAR::isError($mail)){
echo("<p>" . $mail->getMessage() . "</p>");
}
else {
echo("<p>Message successfully sent!</p>");
echo'<script>window.history.go(-2); </script>';
// header("Location: http://www.example.com/"); // you can redirect page on successful submission.
}
}
?>
<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Give feedback</title>                               
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

<div class="wrapper"style="display:block" >
    
    
    <form action="" method="post">
        <div id="wizard" style="display:block">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="form-row"> <input type="text" name="usefull" class="form-control" placeholder="Is this app usefull to you (Yes/No) "> </div>
                <div class="form-row"> <input type="text" name="experience" class="form-control" placeholder="Rate your experience using this app(1-10)"> </div>
                         
    <div class="form-row">
        <label for="">
          If you could suggest a new feauture what will it be and why?
            </label>
    </div>
    <div class="md-form">
  <textarea id="form7" name="newfeauture" class="md-textarea form-control" rows="4"></textarea>
  
</div>

            </section>
            
            
            
            <!-- SECTION 2 -->
            <h4></h4>
            <section>
               <div class="form-row"> <input type="text" name="mostvalue" class="form-control" placeholder="What part of the app do you find most valueable"> </div>
                <div class="form-row"> <input type="text" name="mostused" class="form-control" placeholder="Which app feauture do you use most?"> </div>
       
 <div class="form-row">
        <label for="">
         Narrate a terible expereince with the app (if any) 
            </label>
    </div>
    <div class="md-form">
  <textarea id="form7"name="teribleexp" class="md-textarea form-control" rows="4"></textarea>
  
</div>

 <div class="form-row">
        <label for="">
          Suggest a solution to improve this app
            </label>
    </div>
    <div class="md-form">
  <textarea id="form7" name="improve" class="md-textarea form-control" rows="4"></textarea>
  
</div>


</section>
           
            <!-- SECTION 3 -->
            <h4></h4>
            <section> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                    <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                    <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " /> </svg>
                <p class="success">This feed has successfully been forwarded to the <span style="font-weight: bolder; color: blue;">Dorm team</span>.</p>
            </section>

            <!-- SECTION 4 -->
            <h4></h4>
            <section>
                <div class="form-row  form-control n-close" onclick="back()"> 
                    <button type="submit" name="submit" class="btn btn-primary"aria-label="Close"> Go Back To Dorm</button> </div>
            </section>
        </div>
    </form>
</div>



<script>
    function back(){
    window.location.href = "https://dorm.com.ng/v2/dm/html/studytools.php";
    }
</script>

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
finish: "Try again",
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