<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap-utilities.css"> -->
    <title>Accomodia</title>

</head>
<body>
    
      <?php include'../connect.php';

session_start();
$useri=$_SESSION['dormuserid'];
IF($useri==""){$userid="user1783240023";}else{$userid=$_SESSION['dormuserid'];}

$rselr="SELECT * FROM profile WHERE Id='".$userid."'";
$result= $conn6->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
    $name=$row["name"];
  $pic=$row["ppic"];
  $userschool=$row["school"];
  
  $usercourse=$row["course"];
  
  $username=$row["username"];
  
  
  
  $ppic=$row["ppic"];
  if($ppic=="media/"){$ppic="media/ppic/pro.png";
  }else{ $ppic=$row["ppic"];}
 
echo'
   <div class="flex_side">
        <div class="navi_main">
            <div class="navi_icons_dp">
                <a href="../html/profile.php" title="see your profile">
                    <img class="nav_icons_dp"src="https://dorm.com.ng/'.$ppic.'" alt="'.$username.'">
                    <!-- <hr> -->
                    <!-- <p class="label">study tools</p> -->
                </a>
            </div>
            <div class="navi_icons" >
                <a href="../html/studytools.php" title="Access tools that gives you information about your school">
                    <img class="nav_icons" src="../images/studytools_white.svg"  alt="">
                    <p class="label">study tools</p>
                </a>
            </div>
            <div class="navi_icons" >
                <a href="../html/coursereview.php" title="Get reviews about different courses">
                    <img class="nav_icons" src="../images/course_review_white.svg" onmouseover= "slide()" alt="">
                    <p class="label">course review</p>
                </a>
            </div>
            <div class="navi_icons">
                <a href="../html/texter.php" title="Send text massages using mobile data">
                    <img class="nav_icons" src="../images/texter_white.svg" onmouseover= "slide()" alt="">
                </a>
                <p class="label">texter</p>
            </div>
            <div class="navi_icons" style="background-color: var(--dormorange);">
                <a href="../html/accomodia.php" title="get accomodation easily">
                    <img class="nav_icons" src="../images/house.svg" onclick = "slide()" alt="">
                    <p class="label">accomodia</p>
                </a>
            </div>
        </div>
        <!-- <div class="nav_icons_footer">
            <hr>
            <img class="nav_footer_icons" onclick="more()" id="morebtn" src="../images/plus-circle-fill.svg" alt="" title="------- ------ more info">
        </div> -->
    </div>     

<!-- second menu -->


 <a href="popupaccomodia.php"><div class="add_hus">
        <svg class = "add" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"></path>
        </svg>
        <p>Add houses</p>
    </div></a>
    
    
    <!-- <div id="menu2" class="flex_side-2">
        <div class="nav_bar">
             <div class="nav_bar">
                <div class="navi_main">
                    <a href="#" title="------- ------ more info">
                        <img class="nav_icons" src="../images/cart3.svg" onmouseover= "slide()" alt="">
                        <p class="label">shopper</p>
                    </a>

                     <a href="#" title="------- ------ more info">
                        <img class="nav_icons" src="../images/settings_white.svg" onmouseover= "slide()" alt="">
                        <p class="label">settings</p>
                    </a>
                </div>
                <div class="nav_icons_footer">
                    <hr>
                    <img class="nav_footer_icon-2" onclick="closemore()" id="closebtn" src="../images/plus-circle-fill.svg" alt="" title="------- ------ more info">
                </div>
             </div>
        </div>
    </div> -->
<!----->        

     <div class="flex_wrap">
        <div class="top_bar">
            <div class="topbar_lv1">
                <img class="dorm_logo" src="../images/dorm_no_bg.png" alt="">
                
                <!-- for mobile view only -->
                <div id="mobile_menu" class="mobile_menu">
                    <div id="mobileham" class="mobileham" onclick="openNav()">
                        <div class="mobileham_box"></div>
                        <div class="mobileham_box"></div>
                        <div class="mobileham_box"></div>
                    </div>
                    <div id="mobileham_cont" class="mobileham_cont">
                        <span href="" id="closebutt" class="closebutt" onclick="closeNav()">&times;</span>
                       <a href="../html/profile.php">
                            <div class="list">
                                <p class="ham_textmob">Profile</p>
                            </div> 
                        </a>
                        <!----<a href="../html/setting.php">
                            <div class="list">
                                <p class="ham_textmob">Settings</p>
                            </div> 
                        </a>---->
                        <!-- <a href="../html/support.php">
                            <div class="list">
                                <p class="ham_textmob">Help and Suport</p>
                            </div> 
                        </a>-->
                         <a href="../html/feedback.php">
                            <div class="list">
                                <p class="ham_textmob">Give Feedback</p>
                            </div> 
                        </a>
                        <button id="shareButton" style="display:none;"></button>
                         <label for="shareButton">
                            <a><div class="list">
                            
                                <p class="ham_textmob">Invite a friend </p>
                            </div> </a>
                        </label>
                       
                      
                        <a href="../html/logout.php">
                            <div class="list">
                                   <p class="ham_textmob">Logout</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- mobile view ham ends here --> 
                
            </div>
             
            <div class="topbar_lv2">
                <form class="srcbar_box" method="post" action="">
                    <button class="src_clk" name="searchs">Search</button>
                    <input class="search_bar" placeholder="search keywords" type="search" name="search">
                </form>
            </div>
            <!-- <input type="text"> -->
            
            
            
      <div class="rightH">
                <a class="user_top" href="../html/profile.php">
                    <p>'.$username.'</p>
                    <img class="top_dp" src="https://dorm.com.ng/'.$ppic.'" alt="'.$username.'">
                </a>
                
                <div class="ham">
                    <img id="drop_down" class="drop_down" src="../images/down_arrow.svg" alt=""  onclick="myFun()">
                    <div id="myhambugger" class="hambugger-content">
                        <div id="close_ham" class="close_box">
                            <span class="close_ham">&times;</span>
                        </div>
                         <a href="../html/profile.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/profile.svg" alt="">
                                <p class="ham_text">Profile</p>
                            </div> 
                        </a>
                       <!-- <a href="../html/setting.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/settings_grey.svg" alt="">
                                <p class="ham_text">Settings</p>
                            </div> 
                        </a>-->
                        <!-- <a href="../html/support.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/support.svg" alt="">
                                <p class="ham_text">Help and Suport</p>
                            </div> 
                        </a>-->
                         <a href="../html/feedback.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/feedback.svg" alt="">
                                <p class="ham_text">Give Feedback</p>
                            </div> 
                        </a>
                        <button id="shareButton" style="display:none;"></button>
                         <label for="shareButton">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/share.svg" alt="">
                                <p class="ham_text">Invite a friend </p>
                            </div> 
                        </label>
                       
                      
                        <a href="../html/logout.php">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/logout.svg" alt="">
                                <p class="ham_text">Logout</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ';
}
  }
    
      
     echo'   <div class="flex_main">
     <div class="house_box">';
              

  
if(isset($_POST['searchs'])) {$search=$_POST['search'];
  echo'
                   <div class="house">
                        ' ;
	$selr="SELECT * FROM product WHERE id like '%{$search}%' OR name like '%{$search}%' OR price like '%{$search}%' OR about like '%{$search}%' OR status like '%{$search}%'";
$result= $conn14->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){

  $id=$row["id"]; $name=$row["name"]; $price=$row["price"]; $about=$row["about"];
$pic1=$row["pic1"]; $pic2=$row["pic2"]; $pic3=$row["pic3"]; $pic4=$row["pic4"]; 
$pic5=$row["pic5"]; $pic6=$row["pic6"]; $vid1=$row["vid1"]; $vid2=$row["vid2"]; $vid3=$row["vid3"]; $vid4=$row["vid4"];
$vid5=$row["vid5"]; $vid6=$row["vid6"]; $messageid=$row["messageid"];
$status=$row["status"]; $views=$row["views"]; $contact=$row["contact"]; $link=$row["link"];
echo' 
                        <div class="hus">
                            <div class="state">
                                <p>'.$row["status"].'</p>
                            </div>
                            <div class="portrait">
                            <img class="himg" style="max-width: 100%; max-height: 100%;" src="'.$row["pic1"].'" alt=""></div>
                            <p class="hus_label">'.$row["about"].'</p>
                            <p class="hus_label">Price: '.$row["price"].'</p>
                            <div id="'.$id.'" value="'.$id.'" class="hus_but" onclick="iinspect(this)" >
                                <h2>inspect</h2>
                            </div>
                        </div>';
}
    
}
echo' </div>';
}
  
  echo'   
                   <div class="house">
                        ' ;
$selr="SELECT * FROM product";
$result= $conn14->query($selr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$id=$row["id"]; $name=$row["name"]; $price=$row["price"]; $about=$row["about"];
$pic1=$row["pic1"]; $pic2=$row["pic2"]; $pic3=$row["pic3"]; $pic4=$row["pic4"]; 
$pic5=$row["pic5"]; $pic6=$row["pic6"]; $vid1=$row["vid1"]; $vid2=$row["vid2"]; $vid3=$row["vid3"]; $vid4=$row["vid4"];
$vid5=$row["vid5"]; $vid6=$row["vid6"]; $messageid=$row["messageid"];
$status=$row["status"]; $views=$row["views"]; $contact=$row["contact"]; $link=$row["link"];
echo' 
                        <div class="hus">
                            <div class="state">
                                <p>'.$row["status"].'</p>
                            </div>
                            <div class="portrait">
                            <img class="himg" style="max-width: 100%; max-height: 100%;" src="'.$row["pic1"].'" alt=""></div>
                            <p class="hus_label">'.$row["about"].'</p>
                            <p class="hus_label">Price: '.$row["price"].'</p>
                            <div id="'.$id.'" value="'.$id.'" class="hus_but" onclick="iinspect(this)" >
                                <h2>inspect</h2>
                            </div>
                        </div>
                        
                    
                    ';
}
      
    echo'   </div>
                    <div id="inspect" class="modal">                    
                    <div class="inspect-content">
loading...                            </div>
                        </div>';
  }

?>
                        
                        
                        
                    </div>
                </div>
        </div>

        <div class="all_flex">

            <div class="flex">
                <h4>ACCOMODIA</h4>
            </div>
            
            <div class="space"></div>
            <a href="popupaccomodia.php">
                <div class="flex_in">
                <h4>Add House</h4>
            </div>
            </a>
            
            <div class="space"></div>
             <a href="accomodia.php">
                 <div class="flex_in">
                <h4>My Houses</h4>
            </div></a>
        </div>
    </div>
    
    
    <style>
   
    .portrait{
        height: 150px;
    width: 350px;
    }
    
@media(max-width:700px){
    .portrait{
        height: 80px;
    width: 130px;
    }
    
    ]
    </style>
    <!-- <script src="../js/top_bar.js"></script> -->
 <script src="../js/top_bar.js"></script>
      <script>
        let dropdown_btn= document.getElementById('drop_down')
        let hamcontent = document.getElementById('myhambugger')
        let clo = document.getElementById('close_ham')

            function myFun() {
                if (hamcontent.style.display === "none") {
                    hamcontent.style.display = "block";
                } else {
                    hamcontent.style.display = "none";
                }
            }

        clo.onclick = function (){
            hamcontent.style.display = "none";            
        }
    </script>
    
    
    
    <script type='text/javascript'>

        let work = document.getElementById('work_space')
        let inspect = document.getElementById('inspect')
        let vid_btn = document.getElementById('videoid');
        let show = document.getElementById('img_space');
        let play = document.getElementById('video_space');
        
        function display(){
            work.style.display = "none";      
            play.style.display = "block";      
        }


        function displayimg(){
            work.style.display = "block";      
            play.style.display = "none";      
        }

        // function display(){
        //     inspect.style.display = "none";      
        //     play.style.display = "block";      
        // }

        // function display() {
        //     if (inspect.style.display = "block") {
        //         inspect.style.display = "none";
        //     } 
        //     play.style.display = "block";  
        // }


        // function displayimg(){
        //     play.style.display = "none";
        //     show.style.display = "block";            
        // }

        // function display() {
        //     if (play.style.display === "none") {
        //         play.style.display = "block";
        //     } 
        //     else {
        //         play.style.display = "none";
        //     }
        // }

        // vid_btn.onclick = function (){
        //     play.style.display = "block";            
        // }
        
    </script>

  

    <script>
        // Get the modal
        var ic = document.getElementById("inspect");

        // Get the button that opens the modal
        var btn = document.getElementById("inspect_btn");
        
        // Get the <span> element that closes the modal
        // var span = document.getElementsByClassName("close")[0];
        
        // When the user clicks the button, open the modal 
        function iinspect(can) {
            ic.style.display = "block";
            
var ndel= can.id;
var xhttps= new XMLHttpRequest();
xhttps.onreadystatechange= function(){
	if(xhttps.readyState == 4 && xhttps.status == 200){
document.getElementById("inspect").innerHTML=xhttps.responseText;

}
};

xhttps.open("GET", "inspect.php?u="+ndel, true);
xhttps.send();


        }
        
        // When the user clicks on <span> (x), close the modal
        // span.onclick = function() {
        // modal.style.display = "none";
        // }
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == ic) {
                ic.style.display = "none";
        }
        }
    </script>


    <script>
        let dropdown_btn= document.getElementById('drop_down')
        let hamcontent = document.getElementById('myhambugger')
        let clo = document.getElementById('close_ham')

        function myFun() {
            if (hamcontent.style.display === "none") {
                hamcontent.style.display = "block";
            } else {
                hamcontent.style.display = "none";
            }
        }

        clo.onclick = function (){
            hamcontent.style.display = "none";            
        }
    </script>

    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
        showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
        showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");

        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>

    <script>
        var slideIndex = 1;
        showSlidesv(slideIndex);
        
        function plusSlidesv(n) {
        showSlidesv(slideIndex += n);
        }
        
        function currentSlidev(n) {
        showSlidesv(slideIndex = n);
        }
        
        function showSlidesv(n) {
        var i;
        var slides = document.getElementsByClassName("mySlidesv");
        var dots = document.getElementsByClassName("demov");
        var captionText = document.getElementById("captionv");

        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>
</body>
</html>                             