<html>
    <title>
        dorm 2.5 qr code
    </title>
<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=https://dorm.com.ng/landing/&choe=UTF-8
"/>
<br>
clicks: <?php 

$suql = "SELECT * FROM qr"; 
 $connStatus = $conn17->query($suql); 
 $numberOfRowsa= mysqli_num_rows($connStatus); 
  echo "<br><br><center>".$numberOfRowsa." clicks<br><br></center>";

?>
</html>