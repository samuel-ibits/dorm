<?php
$DB_NAME='dormcomn_users';
$DB_USER='dormcomn_Ful';
$DB_PASSWORD='iFO8RKK;bUO%';
$DB_HOST='localhost:3306';
$conn= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME");
If ($conn){
}

$DB_NAME2='dormcomn_review';
$conn2= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME2");
If ($conn){
}
$DB_NAME3='dormcomn_friends';
$conn3= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME3");
If ($conn){
}

$DB_NAME4='dormcomn_messages';
$conn4= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME4");
If ($conn){
}
$DB_NAME5='dormcomn_rate';
$conn5= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME5");
If ($conn){
}
$DB_NAME6='dormcomn_profile';
$conn6= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME6");
If ($conn){
}

$DB_NAME7='dormcomn_reserve';
$conn7= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME7");
If ($conn){
}

$DB_NAME8='dormcomn_private review';
$conn8= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME8");
If ($conn){
}

$DB_NAME9='dormcomn_reveiwsel';
$conn9= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME9");
If ($conn){
}

$DB_NAME10='dormcomn_texter';
$conn10= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME10");
If ($conn){
}

$DB_NAME11='dormcomn_suggest';
$conn11= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME11");
If ($conn){
}

$DB_NAME12='dormcomn_library';
$conn12= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME12");
If ($conn){
}


$DB_NAME13='dormcomn_questionia';
$conn13= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME13");
If ($conn){
}

$DB_NAME14='dormcomn_accomodia';
$conn14= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME14");
If ($conn){
}


$DB_NAME15='dormcomn_notebook';
$conn15= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME15");
If ($conn15){
}


$DB_NAME16='dormcomn_courseinfo';
$conn16= mysqli_connect("$DB_HOST","$DB_USER","$DB_PASSWORD","$DB_NAME16");
If ($conn16){
}

// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
session_set_cookie_params(3600);
session_start();
        $_SESSION['auth'] = true;
        $_SESSION['start'] = time();
        $_SESSION['expire'] = $_SESSION['start'] + (40 * 60);
        

?>