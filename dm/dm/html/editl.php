<?php include'../connect.php';
$u=$_REQUEST['u'];
 
$aa=$_REQUEST['a'];
$a=substr($aa,3);
 
echo $a;

$selr="SELECT * FROM review WHERE id='".$a."'";
$result= $conn2->query($selr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){


$tagd=$row["tag"];
$commentd=$row["message"];

echo'<form method="post" action=""  enctype="multipart/form-data">
<input type="text" name="tag" value="'.$tagd.'"/><br>
<input type="text" name="comment" value="'.$commentd.'"/></br>
<input type="submit" name="submit" value="save"/></form>';
if(isset($_POST['submit'])) {
	$tagd=$_POST['tag'];
	$commentd=$_POST['comment'];
	 $upd="UPDATE review SET tag=$tag, message=$comment WHERE id='".$a."'";
    mysqli_query($conn2,$upd);
        if ($conn2->query($upd) === TRUE) {Echo'saved succesfully';}else {echo $conn2->error.'f1';}
  
}
  }}else{echo $conn2->error.'f2';}
?>