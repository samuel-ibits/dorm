<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Signup page</title>
</head>
<body class="signup_body">
    <img class="di" src="../images/dorm_icon.png" alt="">
    <div class="login_box">
        <img class="dlogo2" src="../images/dorm_no_bg.png" alt="">
        <div id="form_one" class="phase1">
            <div class="user_form">
                <!-- <img class="user_info_img" src="../images/dp_grey.png" alt=""> -->
                <input type="text" value="First Name">
            </div>
            <div class="user_form">
                <!-- <img class="user_info_img" src="../images/key_black.svg" alt=""> -->
                <input type="text" value="Middle Name">
            </div>
            <div class="user_form">
                <!-- <img class="user_info_img" src="../images/key_black.svg" alt=""> -->
                <input type="text" value="Sur Name">
            </div>
            <div class="user_form">
                <!-- <img class="user_info_img" src="../images/key_black.svg" alt=""> -->
                <input type="text" value="Email">
            </div>
            <div class="user_form">
                <!-- <img class="user_info_img" src="../images/key_black.svg" alt=""> -->
                <input type="text" value="Phone number">
            </div>
            <div class="ctrl_btn">
                <!-- <button class="ctrl_btn02" id="back_btn">back</button> -->
                <button class="ctrl_btn01" id="next_btn"  type="button" return false;>next</button>
            </div>
        </div>

        <div id="form_two" class="phase2">
            <img class="dlogo" src="../images/dorm_no_bg.png" alt="">
            <div class="user_form">
                <input type="text" value="password">
            </div>
            <div class="user_form">
                <input type="text" value="Re-type password">
            </div>
            <div class="user_form">
                <input type="text" value="password">
            </div>
            <div class="ctrl_btn">
                <button class="ctrl_btn01" id="back_btn">back</button>
                <!-- <button class="ctrl_btn01" id="next_btn">next</button> -->
                <a href="../html/signin.html">
                    <button class="signup">Sign up</button>
                </a>
            </div>
        </div>

    </div>
</body>
<script>
    var next = document.getElementById("next_btn")
    var back = document.getElementById("back_btn")
 
    var next_form = document.getElementById("form_two")
    var back_form = document.getElementById("form_one")

    next.onclick = function(){
        next_form.style.display = "block";
    }

    back.onclick = function(){
        next_form.style.display = "none";
        back_form.style.display = "block";
    }
</script>
</html>  