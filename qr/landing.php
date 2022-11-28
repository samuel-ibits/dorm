<?php


function pagetrack(){
    include("../connect.php");
        $device= echo"<script> navigator.userAgent;</script>";
           $date= date("Y-m-d h:i:sa");
     $iiin = "INSERT INTO qr(id, device, date, page) VALUES ( '', '$device', '$date', 'landingpage')";
    if ($conn17->query($iiin)==true) {
        echo '<script> window.location.replace("https://www.dorm.com.ng/landing") </script>';
    }else{echo $conn17->error;}
    }
    
    pagetrack();
    
    



?>