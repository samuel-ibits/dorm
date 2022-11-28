<?php


// function pagetrack(){
    include("../connect.php");

//     echo '
// <form method="get"><imput type="hidden" id="demo" name="device"/>
// <button type="submit" id="submit" name="submit" />
// </form>
// <script>
// let agent = navigator.userAgent;

// </script>';
        $device= "no info";
           $date= date("Y-m-d h:i:sa");
     $iiin = "INSERT INTO qr (id, device, date, page) VALUES ( '', '$device', '$date', 'landingpage')";
    if ($conn17->query($iiin)==true) {
        echo '<script> window.location.replace("https://www.dorm.com.ng/landing") </script>';
    }else{echo $conn17->error;}
    // }
    
    // pagetrack();
    
    



?>