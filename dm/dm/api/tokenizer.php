<?php include '../connect.php';
header("Content-Type:application/json");


function validatetoken($token){
$rselr="SELECT * FROM tokenizer WHERE Id='".$token."'";
$result= $conn19->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
    echo '<script> alert("token validated")</script>';

}}
}

function generatetoken($userid){
    $time= date("Y-m-d h:i:sa");

$token=substr(md5(time()), 0, 20);
$sqll = "INSERT INTO tokenizer (id, userid, timestampp)VALUES ('$token', '$userid', '$time')";

if ($conn19->query($sqll) == TRUE) {
  echo '<script> alert("token generated sucessfully")</script>';
} 

}



?>