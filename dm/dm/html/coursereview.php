<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    
    <link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/effect.css">
<link rel="stylesheet" href="../css/stylecomment.css">

    <title>Course review</title>



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
  
 //some important script
 echo'
 
  <script>
        function showcomment(call)
        {
var id=call.id;

var imgid="g"+id;
var coll=call.value;
var com="cc"+id;

            document.getElementById("ccca").style.display = "block";
           document.getElementById("ovv").style.display = "block";

             
var xhttps= new XMLHttpRequest();
xhttps.onreadystatechange= function(){
	if(xhttps.readyState == 4 && xhttps.status == 200){
document.getElementById("comeo").innerHTML=xhttps.responseText;

}
};

xhttps.open("GET", "lcomnt.php?u="+coll+"&a='.$userid.'&b='.$rateeid.'", true);
xhttps.send();

 }
</script>
 
 
  <script type="text/Javascript">
function trash(can){

var ndel= can.id;
var xhttps= new XMLHttpRequest();
xhttps.onreadystatechange= function(){
	if(xhttps.readyState == 4 && xhttps.status == 200){
document.getElementById("deletemess").innerHTML=xhttps.responseText;

}
};

xhttps.open("GET", "del.php?a="+ndel+"&u='.$userid.'", true);
xhttps.send();

}
</script>



<script type="text/Javascript">
function edit(can){

var ndel= can.id;
var ndell = ndel.slice(3);

var xhttps= new XMLHttpRequest();
xhttps.onreadystatechange= function(){
	if(xhttps.readyState == 4 && xhttps.status == 200){
document.getElementById("editl"+ndell).innerHTML=xhttps.responseText;

}
};

xhttps.open("GET", "editl.php?a="+ndel+"&u='.$userid.'", true);
xhttps.send();


}
</script>


<script type="text/Javascript">
function lblckq(call){
var id=call.id;
var coll=call.value;

var imgid="g"+id;

var numr="numr"+id;
var bnumr="bnumr"+id;
    

var xhttps= new XMLHttpRequest();
xhttps.onreadystatechange= function(){
	if(xhttps.readyState == 4 && xhttps.status == 200){
document.getElementById(numr).innerHTML=xhttps.responseText;

}
};

xhttps.open("GET", "lblckg.php?u="+coll+"&a='.$userid.'&b='.$username.'", true);
xhttps.send();


}
</script>


    
</head>
<body>
    ';
//end of script

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
            <div class="navi_icons">
                <a href="../html/studytools.php" title="Access tools that gives you information about your school">
                    <img class="nav_icons" src="../images/studytools_white.svg"  alt="">
                    <p class="label">study tools</p>
                </a>
            </div>
            <div class="navi_icons" style="background-color: var(--dormorange);">
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
            <img class="nav_footer_icons" onclick="more()" id="morebtn" src="../images/plus-circle-fill.svg" alt="" title=" more">
        </div> -->
    </div>     

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
                <img class="search_icon" src="../images/search.svg" alt="">
                <div class="search_clk"><form action="" method="post">
                    <input id="search" placeholder="search" class="searchclk_box" type="search" name="search">
                    <button type="submit" name="searchs">GO</button>
                    </form>
                </div>
                <div id="myBtn" class="post_bar"> create a review </div>
            </div>
            <!-- <input type="text"> -->

             <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
               
                 <div class="modal-content">
            <span onclick="creecls()"class="close">&times;</span>
            <div>
            <form method="POST" action="" enctype="multipart/form-data" STYLE=""> 
<input type="text" name="tag" placeholder="#newtag" class="post_bar"/><br>
	
                <textarea class="write_space" row="4" cols="90"name="comment" placeholder="say something..."></textarea>
                <hr>
                <div class="review_items">
        <label for="media223"style="cursor:pointer;outline:1px;">Take a picture 
		<img src="../images/image_blue.svg" alt=""></label><BR>
		<input type="file" name="media2" id="media223" onchange="openFile(event)" style="display:none;visibility:1.5;" accept="image/*" multiple /><img id="output" style="width:30px;height:40px;">
		
		<input type="file" style="display:none;"  name="media1" id="media11" accept="audio/*" capture /><label for="media11" style="cursor:pointer;outline:1px;"> Record a sound
                    <img class="mic" src="../images/micro_phone.svg" alt=""></label><br><input type="file" style="display:none;" onchange="openFile(events)"  name="media1" id="media1" accept="audio/*" capture/><label for="media1" style="cursor:pointer;outline:1px;"></label><br>
	
                    <button type="submit" name="ypos" class="submit">submit</button></form>
                </div>
            </div>
            </div>
        
            </div>
            
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
  
     echo'   <div class="blo"></div>
        <div class="flex_main">
            <div class="gap"></div>
            <!-- create a post-->';
  
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
}
  }

if(isset($_POST['ypos'])) {  
$counter=$_POST['counter'];
 $tag=$_POST['tag'];
if(empty($tag)){$tag=$_POST['tag1'];}
if(empty($tag)){$tag=$_POST['tag2'];}
 if(empty($tag)){$tag="inside life";}
 $selr="SELECT * FROM reserve WHERE id='".$tag."'";
$result= $conn7->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	$user1=$row["user1"];
	$user2=$row["user2"];
	$user3=$row["user3"];
	$user4=$row["user4"];
	$user5=$row["user5"];

	if($user1==$username OR $user2==$username OR $user3==$username OR $user4==$username OR $user4==$username ){
$comment=$_POST['comment'];
if(empty($comment)){$comment=$_POST['comment1'];}
if(empty($comment)){$comment="nocomment";}
$rateid="a".rand();
$comid="c".$rateid;
$time=date("h:i:s A");
$date=date("F j, Y");
$title="";
$school=$userschool;
$id="";
$course=$usercourse;


$pic=$ppic;


$media1=$_FILES["media1"];

$medianame1=basename( $_FILES["$media1"]["name"]);
$mediatemp1=$_FILES['$media1']['tmp_name'];

   $uploaddir1="media/audio/";
   $root="../../../";
 $uploaddest1=$root.$uploaddir1.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);


$media2=$_FILES["media2"];
$medianame2=basename( $_FILES["media2"]["name"]);
$mediatemp2=$_FILES['media2']['tmp_name'];

  $uploaddir2="media/image/";
  $root="../../../";
 $uploaddest2=$root.$uploaddir2.$medianame2;
 move_uploaded_file($mediatemp2,$uploaddest2);

$type1="";
$type2="";

$sql="CREATE TABLE ".$comid." (id CHAR(30) NOT NULL PRIMARY KEY, tagname TEXT NOT NULL, date TEXT NOT NULL, time TEXT NOT NULL, username TEXT NOT NULL, userid TEXT NOT NULL, comment TEXT NOT NULL, sound TEXT NOT NULL, title TEXT NOT NULL)";
if ($conn5->query($sql)===TRUE) {
}
$sql="CREATE TABLE ".$rateid." (id CHAR(30) NOT NULL PRIMARY KEY, color TEXT NOT NULL, tagname TEXT NOT NULL, date TEXT NOT NULL, time TEXT NOT NULL, username TEXT NOT NULL, userid TEXT NOT NULL, comment TEXT NOT NULL, title TEXT NOT NULL)";
if ($conn5->query($sql)===TRUE) {

 $stmt =$conn2->prepare("INSERT INTO review (id, tag, message, date, time, username, userid, rateid, school, course, pic, title, mediatype1, mediaurl1, mediatype2, mediaurl2) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)");
 $stmt->bind_param("isssssssssssssss",$id, $tag, $comment, $date, $time, $username, $userid, $rateid, $school, $course, $pic, $title, $type1, $uploaddest1, $type2, $uploaddest2);

 
if ( $stmt->execute()=== TRUE)  {
$ale1 = "comment posted";
echo " <script type='text/javascript'>alert('$ale1'); </script>";
 
} else {
$ale2 = "comment not posted";
echo "<script type='text/javascript'>alert('$ale2'); </script>";

    echo "Error: " . $in . "<br>" . $conn2->error;
}
} else {
$ale2 = "comment not posted";
echo "<script type='text/javascript'>alert('$ale2'); </script>";
echo "Error: " . $sql . "<br>" . $conn2->error;
}
$stmt->close();

		
	}else{
	$ale1 = "This tag has been reserved choose another tag please";
echo "<script type='text/javascript'>alert('$ale1');</script>";
}
}}else{
	
$comment=$_POST['comment'];
if(empty($comment)){$comment=$_POST['comment1'];}
if(empty($comment)){$comment="nocomment";}
$rateid="a".rand();
$comid="c".$rateid;
$time=date("h:i:s A");
$date=date("F j, Y");
$title="";
$school=$userschool;
$id="";
$course=$usercourse;



$pic=$ppic;

 

$media1=$_FILES["media1"];

$medianame1=basename( $_FILES["$media1"]["name"]);
$mediatemp1=$_FILES['$media1']['tmp_name'];

   $uploaddir1="media/audio/";
   $root="../../../";
 $uploaddest1=$root.$uploaddir1.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);


$media2=$_FILES["media2"];
$medianame2=basename( $_FILES["media2"]["name"]);
$mediatemp2=$_FILES['media2']['tmp_name'];

  $uploaddir2="media/image/";
  $root="../../../";
 $uploaddest2=$root.$uploaddir2.$medianame2;
 move_uploaded_file($mediatemp2,$uploaddest2);

$type1="";
$type2="";



$sql="CREATE TABLE ".$comid." (id CHAR(30) NOT NULL PRIMARY KEY, tagname TEXT NOT NULL, date TEXT NOT NULL, time TEXT NOT NULL, username TEXT NOT NULL, userid TEXT NOT NULL, comment TEXT NOT NULL, sound TEXT NOT NULL, title TEXT NOT NULL, pic TEXT NOT NULL)";
if ($conn5->query($sql)===TRUE) {
}
$sql="CREATE TABLE ".$rateid." (id CHAR(30) NOT NULL PRIMARY KEY, color TEXT NOT NULL, tagname TEXT NOT NULL, date TEXT NOT NULL, time TEXT NOT NULL, username TEXT NOT NULL, userid TEXT NOT NULL, comment TEXT NOT NULL, title TEXT NOT NULL)";
if ($conn5->query($sql)===TRUE) {

 $stmt =$conn2->prepare("INSERT INTO review (id, tag, message, date, time, username, userid, rateid, school, course, pic, title, mediatype1, mediaurl1, mediatype2, mediaurl2) VALUES (? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)");
 $stmt->bind_param("isssssssssssssss",$id, $tag, $comment, $date, $time, $username, $userid, $rateid, $school, $course, $pic, $title, $type1, $uploaddest1, $type2, $uploaddest2);

 
if ( $stmt->execute()=== TRUE)  {
$ale1 = "comment posted";
echo " <script type='text/javascript'>alert('$ale1'); </script>";
 
} else {
$ale2 = "comment not posted";
echo "<script type='text/javascript'>alert('$ale2'); </script>";

    echo "Error: " . $in . "<br>" . $conn2->error;
}
} else {
$ale2 = "comment not posted";
echo "<script type='text/javascript'>alert('$ale2'); </script>";
echo "Error: " . $sql . "<br>" . $conn2->error;
}
$stmt->close();

}
}
?>


    <!-- search-->
            <?php include'../connect.php'; 
if(isset($_POST['searchs'])) {$search=$_POST['search'];

	$selr="SELECT * FROM review WHERE tag like '%{$search}%' OR message like '%{$search}%'";
	
$result= $conn2->query($selr);
If ($result->num_rows>0){  
While ($row=$result->fetch_assoc()){
	$rop=$row["id"];$abc=$row["id"];
if(($row["message"]=="nocomment" or $row["message"]=="") and ($row["mediaurl1"]=="media/" or $row["mediaurl1"]==""or $row["mediaurl2"]=="https://dorm.com.ng/media/ppic/")and ($row["mediaurl2"]=="media/" or $row["mediaurl2"]=="")){$posty="none";}else{$posty="block";}
if($row["pic"]=="" or $row["pic"]=="pro.png"){$pic="https://dorm.com.ng/media/ppic/pro.png";}else{
    $pic="https://dorm.com.ng/media/ppic/pro.png".$row["pic"];}



echo'  <div class="post_box" id="p'.$abc.'"style ="display:'.$posty.';">
<form action="coursereview.php" method="post">
                <div class="post_img_box">
                    <img class="image" src="'.$pic.'" alt="profile pic"/>
                </div>
                <div class="text">
                    <div class="top_post">
                        <p class="tag">'.$row["tag"].'</p>
                                       <div id="mcm'.$row["id"].'"style="display:none;" class="more">
                            <ul>
                               <li>
                                     <a onclick="edit(this)" id="edt'.$row["id"].'"><i class="fa fa-edit"></i>Edit</a> 
                                 </li>
                                 <li>
                                   <a onclick="trash(this)" id="tra'.$row["id"].'"><i class="fa fa-trash"></i>Delete</a> 
                                 </li>
                            </ul> 
                        </div>
                        <p class="more_icnn" id="cm'.$row["id"].'" onclick="myFunctionmm(this)">&#8230;</p>
                    </div>
                    <p  class="post_text">'.$row["message"].'
                    </p>';
                    
                    if($row["mediaurl1"]=="media/" or $row["mediaurl1"]=="" or $row["mediaurl2"]=="https://dorm.com.ng/media/audio/"){$audy="none";}else{$audy="block";}
echo'<CENTER style="display:'.$audy.';text-align:center;border-radius:20px;margin-left:5%;width:90%;background-color:whitesmoke;color:black;font-family:"Comic Sans MS", cursive, sans-serif;"><audio style="width:70%;background-color:#0066cc;"controls="controls" preload="auto" ><source src="'.$row["mediaurl1"].'" type="audio/mp3"><source src="'.$row["mediaurl1"].'" type="audio/ogg"><source src="'.$row["mediaurl1"].'" type="audio/m4a"></audio></center>';
if($row["mediaurl2"]=="media/" or $row["mediaurl2"]=="https://dorm.com.ng/media/image/" or $row["mediaurl2"]==""){$iaey="none";}else{$iaey="block";}

echo'
                    <img class="post_img" src="'.$row["mediaurl2"].'" style="display:'.$iaey.'">
                    <div class="post_bottom">
                        <div class="uname">
                            <p>'.$row["username"].'</p>
                        </div>
                        <div class="valid_icons">
                            <div class="msgg">
                                <img class="valid_img" src="../images/msg_blue.svg" alt="">
                                <p>15</p>
                            </div>
                            <div class="bad">
                                <img class="valid_img" src="../images/bad.png" alt="">
                                <p>30</p>
                            </div>
                            <div class="good">
                                <p>55</p>
                                <img class="valid_img" src="../images/good.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="comment" class="comment">
                <!-- <img class="image" src="../images/image.jpg" alt=""> -->
                <div class="text">
                    <p class="post_text">
                        ipsum dolor sit amet consectetur, adipisicing elit. 
                        Officiis eveniet fugit quam facere, temporibus tempora est 
                        dolore nostrum accusamus dolorum adipisci deleniti cumque 
                        aliquid libero autem sequi earum nihil iusto?...
                    </p>
                    <div class="post_bottom">
                        <div class="uname">
                            <img class="image" src="../images/image.jpg" alt="">
                            <p>Pst Shellman Ibitoye</p>
                        </div>
                        <!-- <div class="block"></div> -->
                        <div class="valid_icons">
                            <div class="msgg">
                                <img class="valid_img" src="../images/msg_blue.svg" alt="">
                                <p>15</p>
                            </div>
                            <div class="bad">
                                <img class="valid_img" src="../images/bad.png" alt="">
                                <p>30</p>
                            </div>
                            <div class="good">
                                <p>55</p>
                                <img class="valid_img" src="../images/good.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div></form>';
            

}}
}

     echo' <div id="demo"> </div>
            <!-- display reviews-->';
     
          $sul = "SELECT * FROM review";
$result= $sta = $conn2->query($sul);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$abc=$row["id"];$rop=$row["id"];
	$rateeid=$row["rateid"];
	
	
$suql = "SELECT * FROM c".$rateeid; 
 $connStatus = $conn5->query($suql); 
 $numberOfcoments= mysqli_num_rows($connStatus); 
 if($numberOfcoments==""){$numberOfcoments="0";}
  $numberOfcoment='<span style="color:red">'.$numberOfcoments.' </span>';
  
		$l="steelblue";$m="liked";$n="";
$suql = "SELECT * FROM ".$rateeid." WHERE color like '%{$l}%' OR color like '%{$m}%' OR color like '%{$n}%'"; 
 $connStatus = $conn5->query($suql); 
 $numberOfRows= mysqli_num_rows($connStatus); 
 if($numberOfRows==""){$numberOfRows="0";}
  $numberOfRow='<span style="color:red">'.$numberOfRows.' </span>';
  
		$r="red";$s="like";
$suql = "SELECT * FROM ".$rateeid." WHERE color like '%{$r}%' OR color like '%{$s}%'"; 
 $connStatus = $conn5->query($suql); 
 $bnumberOfRows= mysqli_num_rows($connStatus); 
 if($bnumberOfRows==""){$bnumberOfRows="0";}
  $bnumberOfRow='<span style="color:red">'.$bnumberOfRows.' </span>';
  

	
	
if(($row["message"]=="nocomment" or $row["message"]=="") and ($row["mediaurl1"]=="media/" or $row["mediaurl1"]==""or $row["mediaurl2"]=="https://dorm.com.ng/media/ppic/")and ($row["mediaurl2"]=="media/" or $row["mediaurl2"]=="")){$posty="none";}else{$posty="block";}
if($row["pic"]=="" or $row["pic"]=="pro.png"){$pic="../../../media/ppic/pro.png";}else{$pic="../../../".$row["pic"];}



echo'  <div class="post_box" id="p'.$abc.'"style ="display:'.$posty.';">
<form action="coursereview.php" method="post">
                <div class="post_img_box">
                    <img class="image" src="'.$pic.'" alt="profile pic"/>
                </div>
                <div class="text">
                    <div class="top_post">
                        <p class="tag">'.$row["tag"].'</p>
                                      <div id="mcm'.$row["id"].'"style="display:none;" class="more">
                            <ul>
                           
                               <li>
                                     <a onclick="edit(this)" id="edt'.$row["id"].'"><i class="fa fa-edit"></i>Edit</a> 
                                 </li>
                                 <li>
                                   <a onclick="trash(this)" id="tra'.$row["id"].'"><i class="fa fa-trash"></i>Delete</a> 
                                 </li>
                            </ul> 
                        </div>
                        <p class="more_icnn" id="cm'.$row["id"].'" onclick="myFunctionmm(this)">&#8230;</p>
                    </div>
                    <p  class="post_text">'.$row["message"].'
                    </p>';
                    
                    if($row["mediaurl1"]=="media/" or $row["mediaurl1"]=="" or $row["mediaurl1"]=="media/audio/" or $row["mediaurl1"]=="../../../media/audio/"){$row["mediaurl1"]="";$audy="none";}else{$audy="block";}
echo'<CENTER style="display:'.$audy.';text-align:center;border-radius:20px;margin-left:5%;width:90%;background-color:whitesmoke;color:black;font-family:"Comic Sans MS", cursive, sans-serif;"><audio style="width:70%;background-color:#0066cc;"controls="controls" preload="auto" ><source src="../../../'.$row["mediaurl1"].'" type="audio/mp3"><source src="../../../'.$row["mediaurl1"].'" type="audio/ogg"><source src="../../../'.$row["mediaurl1"].'" type="audio/m4a"></audio></center>';
if($row["mediaurl2"]=="media/" or $row["mediaurl2"]=="media/image/"or $row["mediaurl2"]=="../../../media/image/" or $row["mediaurl2"]==""){$row["mediaurl1"]="";$iaey="none";}else{$iaey="block";}

echo'
                    <img class="post_img" src="../../../'.$row["mediaurl2"].'" style="display:'.$iaey.'">
                    <div class="post_bottom">
                        <div class="uname">
                            <p>'.$row["username"].'</p>
                        </div>
                        <div class="valid_icons">
                            <div class="msgg">
                            <input type ="button"  onclick="showcomment(this)"  id="ca'.$rop.'" value="'.$rateeid.'"  name="ca'.$rop.'" style="display:none;" return false;/>
                                <label for="ca'.$rop.'">
                                <img id="cga'.$rop.'"  class="valid_img" src="../images/msg_blue.svg" alt="">
                                </label>
                    
                                <p>'.$numberOfcoments.'</p>
                            
                                
                                
                            </div>
                            <div class="bad">
                                <input type ="button"  onclick="blblckq(this)"  id="ba'.$rop.'" value="'.$rateeid.'"  name="a'.$rop.'" style="display:none;" return false;/>
                                <label for="ba'.$rop.'">
                                <img id="bga'.$rop.'"  class="valid_img" src="../images/bad.png" alt="">
                                </label>
                    
                                <p id="bnumra'.$rop.'">'.$bnumberOfRows.'</p>
                            </div>
                            <div class="good">
                                <p id="numra'.$rop.'">'.$numberOfRows.'</p>
                                <input type ="button"  onclick="lblckq(this)"  id="a'.$rop.'" value="'.$rateeid.'"  name="a'.$rop.'" style="display:none;" return false;/>
                                <label for="a'.$rop.'">
                                <img id="ga'.$rop.'"  class="valid_img" src="../images/good.png" alt="">
                                </label>
                    
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        


      ';       
            
}}
    
   echo' <div class="commentsec" id="ccca" >
        <div class="top"> 
            <div style="background: red; width: 30px;height: 30px; border-radius: 50%;position: absolute;top: 2vh; left: 3vw;">
                <img src="../images/bad.svg" class="reaction" alt="">
               </div>
               <div style="background: blue; width: 30px;height: 30px; border-radius: 50%;top: 2vh; position: absolute; left: 1.3vw;">
                <img src="../images/good.svg" class="reaction" alt="">
               </div>
               <span style="top: 3vh; position: absolute;left: 6vw; font-weight: 900;">Comments
                 </span>
        <div class="react" class="react" title="Close" style="background: white;border: none; width: 40px;height: 40px;right: 5vw;border-radius: 50%;top: 1vh; position: absolute;">
                                 <input type ="button"  onclick="removecomment(this)"  id="cca'.$rop.'" value="'.$rateeid.'"  name="cca'.$rop.'" style="display:none;" return false;/>
                                <label for="cca'.$rop.'">
                               <img id="comg'.$rop.'"  style="width: 30px;height: 30px;" class="react2" alt="" src="../images/x.svg" alt="">
                               </label>
                    
                                
                              
                            </div>
            </div>


<div class="comments" >
  <div class="comment1" id="comeo">
  
  
    
    
            
 no comment
 </div></div>
';

 echo'
           
            <div class="bottom">
<input placeholder="Write a comment..." style="top: -14px;" class="comment-box" type="text" name="" id="">
<button style="top: -11px;border-radius:10px;" class="bbtn">Send</button>
<button style="top: -11px;border-radius:10px;" class="bbtn"> <img src="../images/mic.svg" style="width: 30px;height: 30px;" alt=""></button>
               </div>
      
              
    </div>
    <div class="overlayy" id="ovv" >
    
    </div>



        </form>';
        
         

  ?>
  
  <div id="comntf"></div>
        <!-- end of display reviews-->
        </div>


















        <div class="all_flex">
            <a href="../html/coursereview.php">
                <div class="flex">
                    <h4>COURSE REVIEW</h4>
                </div>  
            </a>
          
        </div>
    </div>
    
    
    
    
   <!---usefull java script--->
   
   <script>
function myFunctionmm(x) {
x.classList.toggle("change");

  var id= x.id;
  var mid= "m"+id;
  if(document.getElementById(mid).style.display=="none"){document.getElementById(mid).style.display="block";document.getElementById(id).style.display="block";}else{document.getElementById(mid).style.display="none";document.getElementById(id).style.display="block";}
}
</script>



    <script src="../js/flex_main.js"></script>
    <script src="../js/top_bar.js"></script>
    
      
   
<script>
        function removecomment(call)
           {
               
var id=call.id;

var imgid="g"+id;
var coll=call.value;
var com="c"+id;

            document.getElementById("ccca").style.display = 'none';
           document.getElementById("ovv").style.display = 'none';
           
           

           
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
            hamcontent.style.display = "none"; ew           
        }
    </script>

    <!-- <script src="../js/script.js"></script> -->
    <!-- <script src="../js/javascript.js"></script> -->
</body>
</html>                             