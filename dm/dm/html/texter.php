<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="javascript.js"></script>
    <title>texter</title>
</head>
<body>
    <?php include '../connect.php';
    include 'texterapi.php';
error_reporting(0);
session_start();
$useri=$_SESSION['dormuserid'];
IF($useri==""){$userid="user1783240023";}else{$userid=$_SESSION['dormuserid'];}



$selry="SELECT * FROM profile WHERE Id='".$userid."'";
$result= $conn6->query($selry);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$nam=$row["name"];
$name = substr($nam, 0, 7);
$balance=$row["mcred"];



   $name=$row["name"];
  $pic=$row["ppic"];
  $userschool=$row["school"];
  
  $usercourse=$row["course"];
  
  $username=$row["username"];
  
  
  
  $ppic=$row["ppic"];
  if($ppic=="media/"){$ppic="media/ppic/pro.png";
  }else{ $ppic=$row["ppic"];}
  }}
  
  
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
            <div class="navi_icons">
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
            <div class="navi_icons"  style="background-color: var(--dormorange);">
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
    
            
            <!--<div class="topbar_lv2">
                <div class="srcbar_box">
                    <span class="src_clk">Search</span>
                    <input class="search_bar" type="text">
                </div>
            </div>
            <input type="text"> -->
            
            
            
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
        

<div class="blo"></div>
        <div class="flex_main">
         <form action="" method="post" class="texter">
                <p class="texter_text_one">send text messages to your friends without airtime </p>
    
                   <br><span id="balance">
You have '.$balance.' message credits.<br></span>
<br>
                
                <div class="text_details_box">
                  <!-- <p>type your messages here</p> -->
                  <textarea name="message" class="text_details"  placeholder="type your messages here" id="" cols="10" rows="10"></textarea>
                </div>
                <div class="text_details_box">
                  <!-- <p>recievers number</p> -->
                  <textarea name="phone" class="text_details" placeholder="recievers number" id="" cols="10" rows="10"></textarea>
                </div>
                <div class="switch">
                    <input type="radio"  name="sender" class="username" id="username" value="'.$username.'" onclick="chunamex()">
            <label for="usermane">Username</label>
            <input type="radio"  name="sender" class="profilename" id="profilename" value="'.$name.'" onclick="chpnamex()"  >
            <label for="profilename">Profilename</label>
              
           <script>function chunamex(){document.getElementById("unamex").style.display="block";document.getElementById("pnamex").style.display="none";}</script>   
<script>function chpnamex(){document.getElementById("pnamex").style.display="block";document.getElementById("unamex").style.display="none";}</script>   

                </div>
                <p class="texter_text_two">Sets the name that appers as the sender</p><span id="unamex">'.$username.' </span><span id="pnamex">'.$name.'</span><br>
                 <button name="send" class="send_btn"> Send</button>
            <p class="texter_text_three">get message credit by increasing your engagement on dorm.com.ng</p>
                <span class="iconify" data-icon="ic:baseline-self-improvement" data-inline="false"></span>
                
              </form>
        </div>
        <div class="all_flex">
            <div class="flex">
                <h4>TEXTER</h4>
            </div>
      </div>
    </div>';
    
if(isset($_POST['send'])) { 

$topic=$_POST['sender'];
if(empty($topic)){$topic="dorm";}
$message=$_POST['message'];
$phone=$_POST['phone'];
$time= date("h:i:sa");
$date=date("Y/m/d");

$n=11;
$chart=strlen($phone);
if($chart > $n){
    $integer=(int)($chart/$n);
    if($integer>$n){
        $whole=$integer - 1;
        $nwhole=$chart - $whole;
        $msgn=$nwhole/$n;
    }else{$msgn=$integer;}
    }else{$msgn=1;}
if($balance >= $msgn){    
texterapi($topic, $phone, $message);
    
$in = "INSERT INTO texter VALUES ('', '$topic', '$message', '$phone', '$date', '$time', '$name', '$userid')";
}else{$ale2 = "Message Credit Not Sufficient. Please Recharge";
echo "<script type='text/javascript'>alert('$ale2'); </script>";
}

if ($conn10->query($in) === TRUE) {
    $ale1 = "Message Sent Successfuly";
echo " <script type='text/javascript'>alert('$ale1'); </script>";
$nbalance=$balance - $msgn; 
echo"$nbalance";
    $upd="UPDATE profile SET mcred = $nbalance where Id='".$userid."'";
    mysqli_query($conn6,$upd);
        if ($conn6->query($upd) === TRUE) {$ale2 = "Your message credit remains". $nbalance;
echo "<script type='text/javascript'>alert('$ale2'); </script>";
} 
} else {
$ale2 = "Message Not Sent";
echo "<script type='text/javascript'>alert('$ale2'); </script>";

echo "Error: " . $sql . "<br>" . $conn6->error;
}

 
   
} 


    
    ?>
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
    </script>
</body>
</html>                             