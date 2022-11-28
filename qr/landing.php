<?php
echo '
<imput type="hidden" id="demo" name="device"/>
<script>
let agent = navigator.userAgent;
document.getElementById("demo").value = agent;
</script>';

function pagetrack(){
    include("../connect.php");
        $device= $_GET['device'];
           $date= date("Y-m-d h:i:sa");
     $iiin = "INSERT INTO qr (id, device, date, page) VALUES ( '', '$device', '$date', 'landingpage')";
    if ($conn17->query($iiin)==true) {
        echo '<script> window.location.replace("https://www.dorm.com.ng/landing") </script>';
    }else{echo $conn17->error;}
    }
    
    pagetrack();
    
    



?>