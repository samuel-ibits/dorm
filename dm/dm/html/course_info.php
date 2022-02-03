<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/effect.css">

    <title>Study tools - course info </title>
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
        <div class="flex_main">
            <div class="dept2">
 <?php include'../connect.php';
                 if(isset($_POST['submit'])) {  
                   $q= $_POST['submit'];
                    echo'<script type="text/Javascript" > 
	  function amore100(){
	  var id=document.getElementById("course").value;
	  document.getElementById("amore100").style.display="block";
document.getElementById("amore200").style.display="none";
document.getElementById("amore300").style.display="none";
document.getElementById("amore400").style.display="none";
document.getElementById("amore500").style.display="none";
	 }</script>
	 <script type="text/Javascript" > 
	  function amore200(){
	  var id=document.getElementById("course").value;
	  document.getElementById("amore100").style.display="none";
document.getElementById("amore200").style.display="block";
document.getElementById("amore300").style.display="none";
document.getElementById("amore400").style.display="none";
document.getElementById("amore500").style.display="none";
	 }</script>
	 <script type="text/Javascript" > 
	  function amore300(){
	  var id=document.getElementById("course").value;
	  document.getElementById("amore100").style.display="none";
document.getElementById("amore200").style.display="none";
document.getElementById("amore300").style.display="block";
document.getElementById("amore400").style.display="none";
document.getElementById("amore500").style.display="none";
	 }</script>
	 <script type="text/Javascript" > 
	  function amore400(){
	  var id=document.getElementById("course").value;
	  document.getElementById("amore100").style.display="none";
document.getElementById("amore200").style.display="none";
document.getElementById("amore300").style.display="none";
document.getElementById("amore400").style.display="block";
document.getElementById("amore500").style.display="none";
	 }</script>
	 <script type="text/Javascript" > 
	  function amore500(){
	  var id=document.getElementById("course").value;
	  document.getElementById("amore100").style.display="none";
document.getElementById("amore200").style.display="none";
document.getElementById("amore300").style.display="none";
document.getElementById("amore400").style.display="none";
document.getElementById("amore500").style.display="block";
	 }</script>
	 
	 ';
	 
	 
                      $sul = "SELECT * FROM courses WHERE department='".$q."' AND level='100' AND sem='1'"; 
$result= $sta = $conn16->query($sul);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$abc=$row["department"];
echo'
	    <!--data-->.
	  <div id="amore" class="amore">
	      <button onclick="back()">back</button>
		     <div id="moremenu" class="moremenu">
			    <button id="100" onclick="amore100()">100 Level</button><button id="200" onclick="amore200()">200 Level</button><button id="300" onclick="amore300()" >300 Level</button><button id="400" onclick="amore400()" >400 Level</button><button id="500" onclick="amore500()" >500 Level</button></div><br><p><br><br>
			<div id="amore100">
				<div id="biology100" ><table>
				<tr><th>First semester</th>		<th>credit units </th>			<th>pericousities</th></tr>
				<tr><td>'.$row["cc"].'		</td>					<td>'.$row["cu"].'		</td>					<td>'.$row["peri"].'<br></td></tr><br>
				';}}
		$sul = "SELECT * FROM courses WHERE department='".$q."' AND level='100' AND sem='2'"; 
$result= $sta = $conn16->query($sul);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$abc=$row["department"];
echo'  
				<tr><th>Second semester</th>		<th>credit units </th>			<th>pericousities</th></tr>
				<tr><td>'.$row["cc"].'		</td>					<td>'.$row["cu"].'		</td>					<td>'.$row["peri"].'<br></td></tr><br>
				
				</table><br><br>
		     </div> </div>';
                    
    
}}
                }  
?>
            
                <div class="faculty">SCIENCE
  <?php include'../connect.php';               
          $sul = "SELECT * FROM departments WHERE faculty='SCIENCE';"; 
$result= $sta = $conn16->query($sul);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$abc=$row["departments"];
echo'
                  
                   <form action="" method="post"><label for="'.$abc.'"> <p>'.$abc.'</p></label>
                    <input id="'.$abc.'" type="submit" name="submit" value="'.$abc.'"/>
                    </form>';
                    
}}
?>
                </div>
   <div class="faculty">ARTS
                <?php include'../connect.php';
                
               
          $sul = "SELECT * FROM departments WHERE faculty='ARTS';"; 
$result= $sta = $conn16->query($sul);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$abc=$row["departments"];
echo'
                   <form action="" method="post"><label for="'.$abc.'"> <p>'.$abc.'</p></label>
                    <input id="'.$abc.'" type="submit" name="submit" value="'.$abc.'"/>
                    </form>';
                    
    
}}
?>
                </div> 
  <div class="faculty"> SOCIAL SCIENCE
                <?php include'../connect.php';     
          $sul = "SELECT * FROM departments WHERE faculty='SOCIAL SCIENCE';"; 
$result= $sta = $conn16->query($sul);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$abc=$row["departments"];
echo'
                    
                   <form action="" method="post"><label for="'.$abc.'"> <p>'.$abc.'</p></label>
                    <input id="'.$abc.'" type="submit" name="submit" value="'.$abc.'"/>
                    </form>';
                    
}}
?>
                </div>
                 <div class="faculty">MANAGEMENT SCIENCE 
                <?php include'../connect.php';     
          $sul = "SELECT * FROM departments WHERE faculty='MANAGEMENT SCIENCE ';"; 
$result= $sta = $conn16->query($sul);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$abc=$row["departments"];
echo'
                  
                   <form action="" method="post"><label for="'.$abc.'"> <p>'.$abc.'</p></label>
                    <input id="'.$abc.'" type="submit" name="submit" value="'.$abc.'"/>
                    </form>';
                    
}}
?>
                </div>            
                
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