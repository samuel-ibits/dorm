<?php
//get username and password
$u=$_GET['phone'];
$p=$_GET['pass'];

//create a token
$toid='token'.$u.$p;

//proper login in with token created
$sel= "SELECT * FROM users WHERE id='".$toid."'";
$result= $conn->query($sel);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){

//fecth all you need for the app
    $userid=$row["userid"];
}}

?>