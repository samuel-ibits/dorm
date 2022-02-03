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
                <a href="../html/profile.php" title="see your profile">
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
           <div class="all_books">
                
              
                   <div class="box_content">
                       <h2>My notes</h2>
        ';

    
//fetch notes
    $table1="personaljotternote".$userid;
    $table="personalfiles".$userid;
    
//uploaded
$selry="SELECT * FROM ".$table;
$result= $conn15->query($selry);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
echo'   <a href="'.$row["url"].'#toolbar=0"  width="100%" ><div class="book">
                  <p class="p">'.$row["name"].'</p>
                  <div class="format_box">
                    <div>
                    <div class="format">
                      <h2>PDF</h2>
                    </div>
                   </div>
                 </div>
                </div>';
}}

    
    //jotting
$selry="SELECT * FROM ".$table1;
$result= $conn15->query($selry);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){

echo'  <a href="#" id="downloadLink" onclick="downloadInnerHtml("'.$row["name"].'.txt","main","text/html")"> <div class="book">
                  <p class="p">'.$row["name"].'</p>
                  <div class="format_box">
                    <div>
                    <div class="format">
                      <h2>TXT</h2>
                    </div>
                   </div>
                 </div>
                </div></a>
                <div style="display:none;">
                  <div id="main">
   <span>'.$row["message"].'</span>
</div></div>';
}}

}
}
  
?>     
        

     


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
                       
<div class="notediv">
<a href="notebook.php"name="mynotes">Notebook</a><br><p></p>
<a href="https://dorm.com.ng/v2/dm/html/notweb.php"> Note web</a>
</div>
                </div>
            </div>

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
    
    <script src="../js/top_bar.js"></script>
    <script>
        // Get the notebox
        var box = document.getElementById("notebox");

        // Get the button that opens the modal
        var btn = document.getElementById("notebtn");

        // When the user clicks the button, open the notebox 
        btn.onclick = function() {
            box.style.display = "block";
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
</body>
</html>                             