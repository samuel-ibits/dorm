<?php include '../connect.php';
$time=date("h:i:s A");
$date=date("l jS \of F Y");

$u=$_REQUEST['u'];
 $userid=$_REQUEST['a'];


$rselr="SELECT * FROM c".$u;
$result= $conn5->query($rselr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
  $lcomment=$row["comment"];
  $luname=$row["username"];
  $lsound=$row["sound"];
 if($row["sound"]=="media/" or $row["sound"]==""){$aud="none";}else{$aud="block";}
  $ltime=$row["time"];
  echo'
            
           
            <div class="comment-text">
                <p> <b>'.$luname.'</b></p><br>
            '.$lcomment.'</div>       
        
        <div class="options">  <img class="user" src="../images/image.jpg" alt=""><span><b>'.$ltime.'</b></span> 
        <span style="font-weight: bolder; color: blue;">Like</span> 
        <span style="font-weight: bolder; color: rgb(233, 97, 18);">Reply</span></div>
    
<br><div class="space"></div>';
}}
  
  
?>