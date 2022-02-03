

    <?php include'../connect.php';

echo'
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/effect.css">
    <title>review_comment</title>
</head>
<body>
   <div class="flex_side">
        <div class="navi_main">
            <div class="navi_icons_dp">
                <a href="../html/profile.html" title="see your profile">
                    <img class="nav_icons_dp" src="../images/image.jpg"  alt="">
                    <!-- <hr> -->
                    <!-- <p class="label">study tools</p> -->
                </a>
            </div>
            <div class="navi_icons">
                <a href="../html/study_tools.html" title="Access tools that gives you information about your school">
                    <img class="nav_icons" src="../images/studytools_white.svg"  alt="">
                    <p class="label">study tools</p>
                </a>
            </div>
            <div class="navi_icons" style="background-color: var(--dormorange);">
                <a href="../html/course_review.html" title="Get reviews about different courses">
                    <img class="nav_icons" src="../images/course_review_white.svg" onmouseover= "slide()" alt="">
                    <p class="label">course review</p>
                </a>
            </div>
            <div class="navi_icons">
                <a href="../html/texter.html" title="Send text massages using mobile data">
                    <img class="nav_icons" src="../images/texter_white.svg" onmouseover= "slide()" alt="">
                </a>
                <p class="label">texter</p>
            </div>
            <div class="navi_icons">
                <a href="#" title="get accomodation easily">
                    <img class="nav_icons" src="../images/house.svg" onclick = "slide()" alt="">
                    <p class="label">accomodia</p>
                </a>
            </div>
        </div>
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
                <img class="search_icon" src="../images/search.svg" alt="">
                <div class="search_clk">
                    <input id="search" placeholder="search" class="searchclk_box" type="search">
                </div>
                <div id="myBtn" class="post_bar"> create a review </div>
            </div>
            <!-- <input type="text"> -->

             <!-- The Modal -->
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div>
                        <textarea class="write_space" row="4" cols="90"></textarea>
                        <hr>
                        <div class="review_items">
                            <img src="../images/image_blue.svg">
                            <img class="mic" src="../images/microphone_blue.svg" alt="">
                            <button class="submit">submit</button>
                        </div>
                    </div>
                </div>
            </div>
            
            
            

            <div class="rightH">
                <a class="user_top" href="../html/profile.html">
                    <p>Pst Shellman</p>
                    <img class="top_dp" src="../images/image.jpg" alt="">
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
        </div>';
?>     