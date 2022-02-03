<?php include'../connect.php';
 Echo'STATUS:';
 $time=date("h:i:s A");
$date=date("l jS \of F Y");

$u=$_REQUEST['u'];
 
 $aa=$_REQUEST['a'];
 $a=substr($aa,3);
 
$selr="SELECT * FROM review WHERE id=".$a;
$result= $conn2->query($selr);
  If ($result->num_rows>0){
	  
While ($row=$result->fetch_assoc()){
		$userid=$row["userid"];
		if($u==$userid){
	$updc=	"DELETE FROM `review` WHERE `review`.`id` = ".$a;
	
if ($conn2->query($updc)===true) {echo'deleted...';}

 }else{echo'you cannot delete this review';}
}
}else{echo'connection problem';}

 
?>
