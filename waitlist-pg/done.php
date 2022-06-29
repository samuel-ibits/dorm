if(isset($_POST['done'])) {
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $fname=$_POST['fname'];
    $date=date("F j, Y").date("h:i:s A");

    $ins="INSERT INTO anticipate (id, email, phone, fname, date) VALUES ('', '$email', '$phone', '$fname', '$date')";
 if ($conn->query($ins)==true) {
     echo'<br><div class="alert success">
  <span class="closebtn">&times;</span>  
  <strong> Success</strong> we have recieved your contact details, we will send you a notification when the upgrade is ready  
</div>';
 }

}
echo'<Style>.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

</style>
';

.closebtn:hover {
  color: black;
}
</style>