<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"> 
    <link rel="stylesheet" href="../css/effect.css">

    <title>Edit profile</title>
</head>
<body>
<?php include '../connect.php';
 
error_reporting(0);
session_start();
 $useri=$_SESSION['dormuserid'];
IF($useri==""){$userid="user1783240023";}else{$userid=$_SESSION['dormuserid'];}

  
if(isset($_POST['save'])) {
echo'<script>alert("saved");</script>';

	$stmt =$conn6->prepare("Update profile SET Id=?, ppic=?, name=?, username=?, phone=?, sta=?, mcred=?, course=?, school=?, email=?, descyour=?, year=?, pocketid=?, howsch=?, descou=?, dessch=?, dob=?, bescou=?, besstudtm=?, rescrush=?, irep=?, enjdoing=?, favfood=?, ihate=?, icherish=? WHERE Id=?") ;
$stmt->bind_param("ssssssssssssssssssssssssss", $id, $uploaddest1, $name, $username, $phonee, $sta, $mcred, $course, $school, $email, $descyour, $year, $pocketid, $howsch, $descou, $dessch, $dob, $bescou, $besstudtm, $rescrush, $irep, $enjdoing, $favfood, $ihate, $icherish, $id);
$id=$userid;
$ppi=$_FILES["ppi"];
 


		$file="ppi";
		
$medianame1=basename( $_FILES["$file"]["name"]);
$mediatemp1=$_FILES["$file"]['tmp_name'];
$loc="../../../";
  $uploaddir="media/profiles/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$loc.$uploaddest1);
 if($uploaddest1=="media/profiles/" or $uploaddest1=="" ){$uploaddest1="media/";}
 


$name=$_POST['name'];
$username=$_POST['username'];
$phonee=$_POST['phone'];
$sta="1";
$mcred=5;
$course=$_POST['course'];
$school=$_POST['school'];
$email=$_POST['email'];
$descyour=$_POST['descyour'];
$year=$_POST['year'];
$pocketid=$_POST['pockid'];
$howsch=$_POST['howsch'];
$descou=$_POST['descou'];
$dessch=$_POST['dessch'];
$dob=$_POST['dob'];
$bescou=$_POST['bescou'];
$besstudtm=$_POST['besstudtm'];
$rescrush=$_POST['rescrush'];
$irep=$_POST['irep'];
$enjdoing=$_POST['enjdoing'];
$favfood=$_POST['favfood'];
$ihate=$_POST['ihate'];
$icherish=$_POST['icherish'];
	
if ( $stmt->execute()=== TRUE) {

    echo "Profile Account Updated<br>Please Wait...";
$ale1 = "Profile update success";
echo " <script type='text/javascript'>alert('$ale1'); </script>".$ale1;
 Echo '<script type="text/Javascript">window.location.href ="https://dorm.com.ng/v2/dm/html/profile.php";</script>';

}else{echo "An error occured please try again <br>";
echo($stmt->error);
}
} 

// $status = $stmt->execute();
// if ($status === false) {
//   trigger_error($stmt->error, E_USER_ERROR);
// }
// printf("%d Row inserted.\n", $stmt->affected_rows);


// }

$rselr="SELECT * FROM profile WHERE Id='".$userid."'";
$result= $conn6->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
    
  $pic=$row["ppic"];
 
$name=$row["name"];
$username=$row["username"];
$phone=$row["phone"];
$sta=$row["sta"];
$mcred=$row["mcred"];
$course=$row["course"];
$school=$row["school"];
$email=$row["email"];
$descyour=$row["descyour"];
$year=$row["year"];
$pocketid=$row["pockid"];
$howsch=$row["howsch"];
$descou=$row["descou"];
$dessch=$row["dessch"];
$dob=$row["dob"];
$bescou=$row["bescou"];
$besstudtm=$row["besstudtm"];
$rescrush=$row["rescrush"];
$irep=$row["irep"];
$enjdoing=$row["enjdoing"];
$favfood=$row["favfood"];
$ihate=$row["ihate"];
$icherish=$row["icherish"];
	
  
  
  
  $ppic=$row["ppic"];
  if($ppic=="media/"){$ppic="media/ppic/pro.png";$ppid="images/image.jpg";
  }else{ $ppic=$row["ppic"];$ppid=$row["ppic"];}
 
 }
  }
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

 <form method="post" action=""><button type="submit"  name="save" class="add_hus">
        <svg class = "add" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path><path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"></path>
        </svg>
        <p>Save Changes</p>
    </button></form>
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
           
<form method="post" action="" enctype="multipart/form-data">
        <label for="ppic"><img class="profile_image" src="https://dorm.com.ng/'.$ppid.'" alt=""></label>
<input type="file" name="ppi" id="ppic" value="'.$pic.'" style="display:none;"/>



        <div class="dept">



            <div class="profile_box"> 
                <span class="profile-label">Name</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$name.'" name="name" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">Username</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$username.'" name="username" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">Phone number</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$phone.'" name="phone" />
                </div>
            </div>





            <div class="profile_box"> 
                <span class="profile-label">Course</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$course.'" name="course" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">Year</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$year.'" name="year" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">School</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$school.'" name="school" />
                </div>
            </div>



            <div class="profile_box"> 
                <span class="profile-label">Bio</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$descyour.'" name="descyour" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">Date of birth</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$dob.'" name="dob" />
                </div>
            </div>



            <div class="profile_box"> 
                <span class="profile-label">How has school been</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$howsch.'" name="howsch" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">Best course so far</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$bescou.'" name="bescou" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">Best study time</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$besstudtim.'" name="besstudtim" />
                </div>
            </div>



            <div class="profile_box"> 
                <span class="profile-label">Recent crush</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$recrush.'" name="recrush" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">What i represent</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$irep.'" name="irep" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">What i enjoy doing most</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$enjdoing.'" name="enjdoing" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label"> My favorite food</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$favfood.'" name="favfood" />
                </div>
            </div>


            <div class="profile_box"> 
                <span class="profile-label">What i hate most</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$ihate.'" name="ihate" />
                </div>
            </div>
            
            
            <div class="profile_box"> 
                <span class="profile-label">What i love</span>
                <div class="profile_con">
                    <!--<svg class="edit" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 14 16" xmlns="http://www.w3.org/2000/svg">-->
                    <!--    <path fill-rule="evenodd" d="M0 12v3h3l8-8-3-3-8 8zm3 2H1v-2h1v1h1v1zm10.3-9.3L12 6 9 3l1.3-1.3a.996.996 0 0 1 1.41 0l1.59 1.59c.39.39.39 1.02 0 1.41z"></path>-->
                    <!--</svg>-->
                    <input type="text" value="'.$icherish.'" name="icherish" />
                </div>
            </div>




            <!-- <div class="faculty"><span class="profile-label">Time table</span>
                <p class="timeTable"> </p>
            </div> -->
        </div>
    </div>
    
     <button type="submit"  id="edittt" name="save" style="display:none;"></button>
<button type="submit"  id="editttt" name="save" style="display:none;"/></button>

    
    </form>
      ';

?>    
    
    <div class="all_flex profile">
        <div class="flex">
            <h4>PROFILE</h4>
        </div>
    
       
     <div class="space"></div>
            <label for="edittt"> <a><div class="flex_in">
                <h4>Save changes</h4>
            </div></a></label>
    </div>


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
</body>

</html>                             




