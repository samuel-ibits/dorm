<?php include '../connect.php';
session_start();
$useri=$_SESSION['dormuserid'];
IF($useri==""){$userid="user1783240023";}else{$userid=$_SESSION['dormuserid'];}

if(isset($_POST['upload'])) {
    
    	
	echo'<!DOCTYPE html>
<html>
<head>';

echo'




<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body>

<center><p><p><p>Please wait....<br>Dorm is Connecting....

<div class="loader"></div></center>
<div id="snackbar"></div>
';

    
    
	$date=date("h:i:s A"). date("F j, Y");
$id=$userid."acl".rand();
	$price=$_POST['price'];
		$about=$_POST['about'];
			$title=$_POST['title'];
				$wphone=$_POST['wphone'];
				$status=$_POST['status'];
				$link="https://wa.me/".$wphone."?text=Hi,+I+am+intrested+in+your+Accomodia+house+Title:+".$title." ";
				$null="";
$views="0";
 
 
	
		$file="uploadfile1";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl11= $uploaddest1;
 
 
 
		$file="uploadfile2";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl12= $uploaddest1;
	
 
 
		$file="uploadfile3";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl13= $uploaddest1;
 
		$file="uploadfile4";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl14= $uploaddest1;
 
 
 
		$file="uploadfile5";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl15= $uploaddest1;
 
 
		$file="uploadfile6";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl16= $uploaddest1;
 
 
 
		$file="uploadfile7";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
  $uploaddir="../../../media/accomodia/img/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);
 $upl17= $uploaddest1;
	
 
	
 
	
 
	
 
	
 
 
 
	
	$oop="select * from product";
$conn14->query($oop);
	$sqd="INSERT INTO `product` (`id`, `name`, `price`, `about`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`, `pic6`, `vid1`, `vid2`, `vid3`, `vid4`, `vid5`, `vid6`, `messageid`, `status`, `views`, `contact`, `link`) VALUES ('$id', '$title', '$price', '$about', '$upl11', '$upl12', '$upl13', '$upl14', '$upl15', '$upl16', '$upl17', '$null', '$null', '$null', '$null', '$null', '$id', '$status', '$views', '$wphone', '$link')";
	 if ($conn14->query($sqd)==false) {echo "Error: not uploaded ";
	  }else{echo'Uploaded Successfully';
	      
$ale1 = "Uploaded successfully";
echo "<script type='text/javascript'>alert('Logged in successfully');</script>";

 Echo '<script type="text/Javascript">window.location.href ="https://dorm.com.ng/v2/dm/html/studytools.php";</script>';

	  }


}
echo'
<!doctype html>
                        <html>
                            <head>
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <title>accomodia popup</title>                               
                                 <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
                                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
                                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
                                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
                                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <link rel="stylesheet" href="../css/apopup.css">
                            
                                </head>
<body oncontextmenu="return false" class="snippet-body">
                                <!-- JQUERY STEP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>

<div class="overlay">

</div>

<div class="wrapper">
    
    <a href="accomodia.php"> <button type="button" class="btn-close btn-adjust" aria-label="Close"></button></a>
    <form action="" method="post"  enctype="multipart/form-data">
        <div id="wizard" style="display:block;">
            <!-- SECTION 1 -->
            <h4></h4>
            <section>
                <div class="form-row"> <input type="text" name="price" class="form-control" placeholder="Price (Naira)"> </div>
                <div class="form-row"> <input type="text" name="address" class="form-control" placeholder="Address"> </div>
                <div class="form-row"> <input type="text" name="title" class="form-control" placeholder="Title"> </div>
                <div class="form-row"> <input type="text" name="status" class="form-control" placeholder="status:Rent,Roommate,Sale"> </div>
                <div class="form-row"> <input type="text" name="wphone" class="form-control" placeholder="Whatsapp Phone Number"> </div>
            </section>
            
            
            
            <!-- SECTION 2 -->
            <h4></h4>
            <section>
               
    <div class="form-row">
        <label for="front">
          Frontage
            </label>
            <input id="front" type="file" name="uploadfile1" class="form-control hidde" style="display:initial ;"> 
    </div>

    <div class="form-row">
        <label for="Room1">
          Room image-1 
            </label>
            <input id="Room" type="file" name="uploadfile2" class="form-control hidde" style="display:initial ;"> 
    </div> 
    <div class="form-row">
        <label for="Room">
          Room image-2
            </label>
            <input id="Room2" type="file" name="uploadfile3" class="form-control hidde" style="display:initial ;"> 
    </div>

    <div class="form-row">
        <label for="kitchen">
            Kitchen image 
            </label>
            <input id="kitchen" type="file" name="uploadfile4" class="form-control hidde" style="display:initial ;"> 
    </div>

    <div class="form-row">
        <label for="toilet">
            Toilet image
            </label>
            <input id="toilet" type="file" name="uploadfile5" class="form-control hidde" style="display:initial ;"> 
    </div>

    <div class="form-row">
        <label for="backyard">
          Backyard 
            </label>
            <input id="backyard" type="file" name="uploadfile6" class="form-control hidde" style="display:initial ;"> 
    </div> 
</section>
           
            <!-- SECTION 3 -->
            <h4></h4>
            <section>
            <div class="form-row">
        <label for="backyard">
          Full Video
            </label>
            <input id="backyard" type="file" name="uploadfile7" class="form-control hidde" style="display:initial ;"> 
    </div> 
</section>

            <!-- SECTION 4 -->
            <h4></h4>
             <section> <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                    <circle class="path circle" fill="none" stroke="#73AF55" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                    <polyline class="path check" fill="none" stroke="#73AF55" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " /> </svg>
                <p class="success">This house will be validated against fraud<br><button type="submit"  name="upload" style="font-weight: bolder; color: blue;">Proceed with Upload</button></button></p>
            
                <a href="accomodia.php"> <div class="form-row  form-control " > 
                   Home </div></a>
            </section>
        </div>
    </form>
</div>
<center>
<button type="button" class="btn btn-primary btn-lg">Upload house details</button></center>
';


?>


<script  type='text/javascript'>
$(document).ready(function(){
  $("p").click(function(){
    alert("The paragraph was clicked.");
  });
});
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
finish: "Upload again",
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
$("#wizard").steps('finish');

})

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