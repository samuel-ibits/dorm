<?php include '../connect.php';
header("Content-Type:application/json");


if (isset($_GET['order_id']) && $_GET['order_id']!="") {

session_start();
 $useri=$_SESSION['dormuserid'];
IF($useri==""){$userid="user1783240023";}else{$userid=$_SESSION['dormuserid'];}


if(isset($_GET['check'])) { 
$proid= $_GET['proid'];
}
  if($proid==""){$useridr=$userid;}else{$useridr=$proid;}
  
 
$rselr="SELECT * FROM profile WHERE Id='".$useridr."'";
$result= $conn6->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
    
  $pic=$row["ppic"];
 if($pic=="" or $pic=="../../../media/profiles/" or $pic=="/media/profiles"  or $pic=="/media/ppic/pro.png"or $pic=="media/"){$ppic="media/ppic/pro.png";$ppid="images/image.jpg";
  }else{ $ppic=$row["ppic"];$ppid=$row["ppic"];}
$name=$row["name"];
$username=$row["username"];
$phone=$row["phone"];
$sta=$row["sta"];
$mcred=$row["mcred"];
$course=$row["course"];
$school=$row["school"];
$email=$row["email"];
$descyour=$row["descyour"];
$year=$row["year"];
$pocketid=$row["pockid"];
$howsch=$row["howsch"];
$descou=$row["descou"];
$dessch=$row["dessch"];
$dob=$row["dob"];
$bescou=$row["bescou"];
$besstudtm=$row["besstudtm"];
$rescrush=$row["rescrush"];
$irep=$row["irep"];
$enjdoing=$row["enjdoing"];
$favfood=$row["favfood"];
$ihate=$row["ihate"];
$icherish=$row["icherish"];
	
response($name,$username,$phone,$sta,$mcred,$course,$school,$email,$descyour,$year,$pocketid,$howsch,$descou,$dessch,$dob,$bescou,$besstudtm,$rescrush,$irep,$enjdoing,$favfood,$ihate,$icherish,$order_id,$amount,$response_code,$response_desc); 

}else{
  close(200,"No Record Found");
     }
}else{
  close(400,"Invalid Request");
      }
  
  
  
  mysqli_close($conn6);
  



  function response($order_id,$amount,$response_code,$response_desc){
    $response["name"];
    $response["username"];
    $response["phone"];
    $response["sta"];
    $response["mcred"];
    $response["course"];
    $response["school"];
    $response["email"];
    $response["descyour"];
    $response["year"];
    $response["pockid"];
    $response["howsch"];
    $response["descou"];
    $response["dessch"];
    $response["dob"];
    $response["bescou"];
    $response["besstudtm"];
    $response["rescrush"];
    $response["irep"];
    $response["enjdoing"];
    $response["favfood"];
    $response["ihate"];
    $response["icherish"];
     
    $json_response = json_encode($response);
    echo $json_response;
  }

  function close($response_code,$response_desc){
    
    $response['response_code'] = $response_code;
    $response['response_desc'] = $response_desc;
    
    $json_response = json_encode($response);
    echo $json_response;
  }

}
  ?>