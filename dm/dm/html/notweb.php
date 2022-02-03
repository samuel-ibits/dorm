<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/effect.css">

    <title>Note web</title>
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
}}
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
       <div class="all_cards">';
   
echo'
<center>


<h1>Note Web.</h1><br><br>
<form method="post" action="">
<input type="text" name="search" placeholder="Search for a note :pdf,txt,word,ppt,etc" style="text-align:center;border:none;background-color:whitesmoke;border-radius:25px;width:70%;height:60px;font-size:20px;margin-top:-50px;"/><br><br><br>
<input type="submit" name="go"value="GO" Style="background-color:green;color:white;border-radius:20px;width:30%;font-size:20px;"/><p></form>

<br><br>
<a href="notebook.php"style="text-decoration:none;color:blue;cursor:pointer;">Publish A Note</a><br><br>
</center>

        

';


if(isset($_POST['go'])) {
	$search=$_POST['search'];
	
	
	$selry="SELECT * FROM noteweb where id=".$search;
$result= $conn15->query($selry);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){

$usernw=$row["userid"];
$refidnw=$row["refid"];
$idnw=$row["id"];
$urlnw=$row["url"];
$namenw=$row["name"];
}}
	
	
    $table1="personaljotternote".$usernw;
    $table="personalfiles".$usernw;
	
	$selry="SELECT * FROM ".$table." where id=".$refid;
$result= $conn15->query($selry);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$url=$row["url"];
$name=$row["name"];

echo'<br>'.$name.'    <a  href="../../../'.$url.'#toolbar=0 width="100%" style="margin:10px;"> open</a>  <a href="'.$url.'" style="margin:10px;" download> download</a>';



}}else{
    	$selry="SELECT * FROM ".$table." where id=".$refid;
$result= $conn15->query($selry);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$message=$row["message"];
$title=$row["title"];

$name=$row["name"];

echo'<br>'.$name.'   <a href="#" id="downloadLink" onclick="downloadInnerHtml("new.txt","main","text/html")" style="margin:10px;" > download</a>';
echo'<br><div id="main">
<h3>'.$title.'</h3>
   <span>'.$message.'</span>
</div>';



}}else{echo'Incorect note id, Try again';}
}
}


echo'
  </div>

<style>
.card {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 40px;
}


h1{color:#186da9; 
font-weight:bold;
font-family:Arial Rounded MT Bold;
font-size:60px;

}




</style>

';
?>

        </div>
 <div class="all_flex">
            <div class="flex">
                <h4>STUDY TOOLS</h4>
            </div>
            <div class="space"></div>

            <a href="../html/notebook.php">
                <div class="flex_in">
                    <h4>NOTEBOOK</h4>
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
            <a href="../html/library.php">
                <div class="flex_in">
                    <h4>LIBRARY</h4>
                </div>
            </a>  
             <div class="space"></div>
            <a href="../html/cbttest.php">
                <div class="flex_in">
                    <h4>CBT Test</h4>
                </div>
            </a> 
            <div class="space"></div>
            <a href="#">
                <div class="flex_in">
                    <h4>Resources team</h4>
                </div>
            </a> 
            
           
        </div>
    </div>
    
    <script>function downloadInnerHtml(filename, elId, mimeType) {
   var elHtml = document.getElementById(elId).innerHTML;
   var link = document.createElement('a');
   mimeType = mimeType || 'text/plain';

   link.setAttribute('download', filename);
   link.setAttribute('href', 'data:' + mimeType + ';charset=utf-8,' + encodeURIComponent(elHtml));
   link.click();
}

var fileName = 'tags.html'; // You can use the .txt extension if you want   
   </script>   
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