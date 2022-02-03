<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/effect.css">

    <title>Study tools</title>
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
                <a href="../html/profile.html" title="see your profile">
                    <img class="nav_icons_dp"src="https://dorm.com.ng/'.$ppic.'" alt="'.$username.'">
                    <!-- <hr> -->
                    <!-- <p class="label">study tools</p> -->
                </a>
            </div>
            <div class="navi_icons" style="background-color: var(--dormorange);">
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
            <div class="navi_icons">
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
                        <a href="../html/profile.html">
                            <div class="list">
                                <!-- <img class="mobileham_icn" src="../images/dp_grey.png" alt=""> -->
                                <p class="ham_textmob">Profile</p>
                            </div>
                        </a>
                        <a href="../html/setting.html">
                            <div class="list">
                                <!-- <img class="mobileham_icn" src="../images/settings_black.png" alt=""> -->
                                <p class="ham_textmob">Settings</p>
                            </div> 
                        </a>
                        <a href="../html/">
                            <div class="list">
                                <!-- <img class="mobileham_icn" src="../images/help_black.png" alt=""> -->
                                <p class="ham_textmob">Help</p>
                            </div> 
                        </a>
                        <a href="../html/about.html">
                            <div class="list">
                                <!-- <img class="mobileham_icn" src="../images/about.png" alt=""> -->
                                <p class="ham_textmob">About</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- mobile view ham ends here --> 
                
            </div>
    
            
            <div class="topbar_lv2">
                <div class="srcbar_box">
                    <span class="src_clk">Search</span>
                    <input class="search_bar" type="text">
                </div>
            </div>
            <!-- <input type="text"> -->
            
            
            
      <div class="rightH">
                <a class="user_top" href="../html/profile.html">
                    <p>'.$username.'</p>
                    <img class="top_dp" src="https://dorm.com.ng/'.$ppic.'" alt="'.$username.'">
                </a>
                <div class="ham">
                    <img id="drop_down" class="drop_down" src="../images/down_arrow.svg" alt=""  onclick="myFun()">
                    <div id="myhambugger" class="hambugger-content">
                        <div id="close_ham" class="close_box">
                            <span class="close_ham">&times;</span>
                        </div>
                        <a href="../html/setting.html">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/settings_grey.svg" alt="">
                                <p class="ham_text">Settings</p>
                            </div> 
                        </a>
                        <!-- <a href="#">
                            <div class="list">
                                <img class="myhambugger_icn" src="../images/help_black.svg" alt="">
                                <p class="ham_text">Help</p>
                            </div>
                        </a> -->
                        <a href="../html/about.html">
                            <div class="list">
                                <img class="myhambugger_icon" src="../images/dormicon_black.svg" alt="">
                                <p class="ham_text">About</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        ';
}
  }
?>   
        <div class="blo"></div>

<?php include'../connect.php';

session_start();
$useri=$_SESSION['dormuserid'];
IF($useri==""){$userid="user1783240023";}else{$userid=$_SESSION['dormuserid'];}
echo'

        <div class="flex_main">
            <div class="notediv"> <section class="background">
        <div class="tools_header">
          <h2><a href="studytools.php" style ="cursor :pointer;">&#8249; </a> NOTEWEB </h2>
        </div>
<div id="headcontainer"></div>
  <script type="text/Javascript">function cont(){
		  var login= document.getElementById("home");		  
		  var contactus= document.getElementById("contactus");		  
		  login.style.display="none";contactus.style.display="block";}
</script>

 <script type="text/Javascript">function info(){
		  var login= document.getElementById("home");		  
		  var contactus= document.getElementById("contactus");		  
		var info= document.getElementById("aboutus");		  
		   login.style.display="none";contactus.style.display="none";info.style.display="block";}
</script>


<widjet id="home" >';
if(isset($_POST['go'])) {
	$search=$_POST['search'];
	$rel1=substr($search,0,2);
	
$ser="block";$dis="none";
echo'<div style="display:'.$ser.'
"><form method="post" action="noteweb.php"><br><span>Note web</span><input type="search" name="search" placeholder="Search for a note :pdf,txt,word,ppt,etc" ><input style="border-radius:50%;"type="submit" value="GO"name="go"/></form></div><br>
<center> <a href="#"><span id="contyp">ALL </span></a><a href="#"><span id="contyp"> SCHOOL </span></a><a href="#"><spanid="contyp"> LOCATION </span><a></center>';

$selr="SELECT * FROM notedetails WHERE url like '%{$search}%' OR name like '%{$search}%' OR preamble like '%{$search}%'";
$result= $conn12->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	$noid=$row["noteid"];	
	 
echo'
<div style="box-shadow: 15px 0 35px rgba(0, 0, 0, 0.1), 0 -15px 35px rgba(0, 0, 0, 0.1),0 15px 35px rgba(0, 0, 0, 0.1);"><div style="margin:1%;">';
	echo $row["name"]."<br>";
	echo $row["preamble"].'<br>
	';
$selre="SELECT * FROM note WHERE id ='".$noid."'";
$result= $conn12->query($selre);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
	$typ=$row["type"];
	$url=$row["filename"];
	$renm=$row["rename"];
	
	echo'<div id="example" style="display:none"><button style="float:right;background-color:red;color:white;" onclick="myFunctionddnot()">CLOSE</button><object data="'.$url.'"type="application/pdf"width="100%" height="100%"><iframe src="'.$url.'"width="100%" height="100%" style="border:none;"><br>This browser does not support this file type. Please download file to view it<a href="'.$url.'"download>Download File</a></iframe></object></div>
	
	<script>
function myFunctiondd() {
	document.getElementById("example").style.display="block";
	
	
	}</script>
	<script>
function myFunctionddnot() {
	document.getElementById("example").style.display="none";
	}</script>';
 echo$typ."   " ;
 echo'<fieldset style="">';

echo $row["rename"].' . '.$row["type"].'<a onclick="myFunctiondd()" style="text-decoration:none;color:blue;cursor:pointer;">         open</a> 
<a href="'.$row["filename"].'" style="text-decoration:none;color:blue;cursor:pointer;" download>download</a> 
<a onclick="myFunction()" style="text-decoration:none;color:blue;cursor:pointer;">copy link</a>';
	echo'</fieldset></div><br>';

 echo'<input style="visibility:none;padding:0%;margin:0px;height:0px;width:0px;" type="text" value="https://www.dorm.com.ng/'.$row["filename"].'" id="myInput">


<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
copyText.select();
copyText.setSelectionRange(0, 99999);
document.execCommand("copy");
alert("copied");
}
</script></div>';

  }}
 	

}}


echo'related searches';
$selr="SELECT * FROM notedetails";
$result= $conn12->query($selr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
  echo'
<div style="box-shadow: 15px 0 35px rgba(0, 0, 0, 0.1), 0 -15px 35px rgba(0, 0, 0, 0.1),0 15px 35px rgba(0, 0, 0, 0.1);"><div style="margin:1%;">';
	echo $row["name"]."<br>";
	echo $row["preamble"]."<br>";
	echo'<fieldset style="">';
echo $row["name"].'<a href=""style="text-decoration:none;color:blue;cursor:pointer;">open</a>
 <a href=""style="text-decoration:none;color:blue;cursor:pointer;" download>download</a>
 <a href=""style="text-decoration:none;color:blue;cursor:pointer;">copy link</a>';
	echo'</fieldset></div><br></div>';
  }}

}else{$dis="block"; $ser="none";}
echo'<center><br><br><br><br><br><br>
<div style="display:'. $dis .'">

<h1>Note Web.</h1><br><br>
<form method="post" action="noteweb.php">
<input type="text" name="search" placeholder="Search for a note :pdf,txt,word,ppt,etc" style="text-align:center;border:none;background-color:whitesmoke;border-radius:25px;width:70%;height:60px;font-size:20px;margin-top:-50px;"/><br><br><br>
<input type="submit" name="go"value="GO" Style="background-color:green;color:white;border-radius:20px;width:30%;font-size:20px;"/><p></form>

<div><br><br>
<a href="createnote.php"style="text-decoration:none;color:blue;cursor:pointer;">Create A Note</a><br><br>
<a href="#">My Domain Name</a><br><br>
<a href="#">Report A Problem</a><br><br>
<a style="color:blue;cursor:pointer;"onclick="info()">More Information</a><br><br>
<a  style="color:blue;cursor:pointer;"onclick="cont()">Contact Us</a><br><br>
</center>
</div></div>
</widjet>



<center>
<widjet id="contactus"style="display:none;">
<div class="card"> <div class="contactus" ><a href="" style="float:left;margin:10px;">back</a><h1 style="color:#186da9; ">CONTACT US</h1><h3 style="color:#ccc;">Office Address</h3>
 Fedral university lokoja, Kogi state.
 <h3 style="color:#ccc;">Email Address</h3>
 dormcomn@gmail.com
  <h3 style="color:#ccc;">Phone-Number</h3>
  +2348151519625
   <h3 style="color:#ccc;">Facebook</h3>
   www.facebook/dorm<p>
   We look forward to hearing from you.<p>
   
 
  </div></div></widjet>
  <widjet id="aboutus" style="display:none;">
  <div class="card"> <div class="aboutus" ><a href="" style="float:left;margin:10px;">back</a><h1 style="color:#186da9; ">ABOUT US</h1><h3 style="color:#ccc;">Whats dorm all about?</h3>
   Dorm is an internet frame work that solves problems in the evolving world of technology. Dorm is currently centered around students, dorm focuses on improving the learning aspect of life. 
   <h4 style="color:#ccc;">Quotes</h4>
   "EVERYBODY IS A STUDENT, AS WE ALL LEARN EVERYDAY."
   <h4 style="color:#ccc;">Vission</h4>
   To evolve learning as we know it, with aid of AI and other related machine assistants, To cater for the needs and welbeing of students bringing all their desires to fufillment and meeting their needs. 
<h4 style="color:#cccccc;">Open Invitation</h4>  
 dorm is open and is inviting every one who wishes to be part of this movement to join us, from developers to marketers to those who have a good idea or to those who just have a good heart and wants to help out. If you desire to be part of the team please do contact us. Thanks!!<p>
 </div></div>
  </widjet>
</center></section>
  </div>

  <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myhambugger").classList.toggle("show");
    }
    
    // Close the dropdown if the user clicks outside of it
    
    
    window.onclick = function(event) {
      if (!event.target.matches(".ham")) {
        var hambuggers = document.getElementsByClassName("hambugger-content");
        var i;
        for (i = 0; i < hambuggers.length; i++) {
          var openhambugger = hambuggers[i];
          if (openhambugger.classList.contains("show")) {
            openhambugger.classList.remove("show");
          }
        }
      }
    }
    </script>
';
?>
</div>
        </div>

        <div class="all_flex">
            <div class="flex">
                <h4>STUDY TOOLS</h4>
            </div>
            <div class="space"></div>
            <a href="../html/course_info.php">
                <div class="flex_in">
                    <h4>COURSE INFO</h4>
                </div>
            </a>
            <div class="space"></div>
            <a href="../html/notweb.php">
                <div class="flex_in">
                    <h4>NOTE WEB</h4>
                </div>
            </a>  
            <div class="space"></div>
            <a href="../html/cgpa_calc.php">
                <div class="flex_in">
                    <h4>CGPA CALC</h4>
                </div>
            </a>    
            <div class="space"></div>
            <a href="../html/notebook.php">
                <div class="flex_in">
                    <h4>NOTEBOOK</h4>
                </div>
            </a>  
            <div class="space"></div>
            <a href="../html/library.php">
                <div class="flex_in">
                    <h4>LIBRARY</h4>
                </div>
            </a>  
            <div class="space"></div>
            <!-- <div class="flex_in">
                <h4>QUESTIONIA</h4>
            </div> -->
        </div>
    </div>
        <script src="../js/script.js"></script>
        <script src="../js/javascript.js"></script>
        
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
</body>
</html>                             