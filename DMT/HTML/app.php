<?php include '../connect.php';


if(!isset($_COOKIE['dormloginid'])) {
    $toid=$_GET['id'];
} else {
    $toid=$_COOKIE['dormloginid'];
}



if(isset($_POST['upload'])) { 



for($i=1; $i<=5; $i++){

$name='name'.$i;
$author='author'.$i;
$info='info'.$i;
$group='group'.$i;
$source='source'.$i;
$med1='media1'.$i;
$med2='media2'.$i;

$media1=$_FILES[$med1];
$media2=$_FILES[$med2];

$medianame1=basename( $_FILES[$med1]["name"]);
$mediatemp1=$_FILES[$med1]['tmp_name'];
$medianame2=basename( $_FILES[$med2]["name"]);


$mediatemp2=$_FILES[$med2]['tmp_name'];
  $uploaddir2="library/cover/";
  $uploaddir="library/books/";
 $uploaddest1=$uploaddir.$medianame1;
 move_uploaded_file($mediatemp1,$uploaddest1);



$uploaddest2=$uploaddir2.$medianame2;
 move_uploaded_file($mediatemp2,$uploaddest2);

 
$filename = $medianame1;

if (file_exists($filename)) {
    $message = "The file $filename exists";
    echo $message;
} else {

$b=$_POST[$name];
if(empty($b)){$b='';} else{
 
$a=$uploaddest1;
if(empty($a)){$a='';}

$c=$_POST[$author];
if(empty($c)){$c='';}
$d=$_POST[$info];
if(empty($d)){$d='';}
$e=$uploaddest2;
if(empty($e)){$e='';}
$f="";
if(empty($f)){$f='';}
$g=$_POST[$name];
if(empty($g)){$g='';}
$h=$_POST[$group];
if(empty($h)){$h='';}
$k=$_POST[$source];
if(empty($k)){$k='';}
  
 $iink = "INSERT INTO books(id, refid, name, author, info, preview, view, url, groups, source) VALUES ('', '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$k')";
if ($conn12->query($iink)==false) {echo"not successful. contact the support team  ";
}else {}
    echo '<script>alert("upload successful for book '.$i.'"); </script>';

}
}


}

}




ECHO'<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#0688d3">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Varela+Round&display=swap"
        rel="stylesheet">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../CSS/style-2.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body>
    <div class="page-content-holder">
        <div class="top-div">
           <div>
            <p class="big-bold">CURRENT STATS</p>
            <p class="date" id="dateId"></p>

           </div>
            <a href="../index.php" class="marger"><button class="log-out"><ion-icon name="log-out"></ion-icon> LOG OUT</button></a>
        </div>
        <section class="section-1">
            <div class="section-1-child">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="stat-1">
                                <p class="total-books">
                                    <ion-icon name="book"></ion-icon> <span class="books-number">400</span> Books
                                </p>
                                <p class="sub-text">Target number of books</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="stat-1">
                                <p class="total-books">
                                    <ion-icon name="document"></ion-icon> <span class="passed-question-number">9</span>
                                    Passed questions
                                </p>
                                <p class="sub-text">Total number of pass questions Available</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="card-1 blue-bottom">';
        

  $suql = "SELECT * FROM books"; 
 $connStatus = $conn12->query($suql); 
 $numberOfRowsa= mysqli_num_rows($connStatus); 
  echo' 

            <p class="title-text-1"> <span class="number-of-books-uploaded-total">'.$numberOfRowsa.'/300</span> TEXTBOOKS</p>
            <p class="sub-text-2">TARGET NUMBER OF TEXTBOOK </p>
        </div>';
        
        
echo'
      <section class="section-2">
            <div class="card-1">
                <p class="title-text-1"> <span class="number-of-books-uploaded-total">125</span> TEXTBOOKS</p>
                <p class="sub-text-2">TOTAL TEXTBOOKS UPLOADED</p>
            </div>';
            
            
  $suql = "SELECT * FROM questions"; 
 $connStatus = $conn12->query($suql); 
 $numberOfRowsb= mysqli_num_rows($connStatus); 
  
  
            echo'
            <div class="card-1">
                <p class="title-text-1"> <span class="number-of-books-uploaded-total">'.$numberOfRowsb.'/10</span> PASSED QUESTIONS</p>
                <p class="sub-text-2">WEEKLY OBJECTIVE TRACKER</p>
            </div>';
            
   $suql = "SELECT * FROM questions"; 
 $connStatus = $conn12->query($suql); 
 $numberOfRowsbb= mysqli_num_rows($connStatus); 
            
            ECHO'
            <div class="card-1">
                <p class="title-text-1"> <span class="number-of-books-uploaded-total">'.$numberOfRowsbb.'</span> PASSED QUESTIONS</p>
                <p class="sub-text-2">TOTAL PASSED QUESTIONS UPLOADED</p>
            </div>
            <div class="card-1">
                <p class="title-text-1"> <span class="number-of-books-uploaded-total">10</span>/<span
                        class="number-of-books-uploaded-total">15</span> TEXTBOOKS</p>
                <p class="sub-text-2">WEEKLY OBJECTIVE TRACKER</p>
            </div>
        </section>
 
            <form action="" method="Post"  enctype="multipart/form-data" >
        <section class="section-3">
            <p class="section-title">UPLOADER</p>
            <div class="uploader-div-holder">
                <p class="book-title">TEXTBOOK 1</p>
                <div class="uploader-container">
                    <div class="custom-file-upload">
                        <input type="file" id="file" name="media11" />
                    </div>

                    <input type="text" name="name1" id="" placeholder="BOOK TITLE">
                    <div class="additional">
                        <button type="button" id="additonal-1"  return false;>ADDTIONAL INFORMATION</button>
                        <div class="toggler" id="toggler-1">
                            <input type="text" name="author1" id="" placeholder="AUTHOR NAME">
                            <input type="text" name="info1" id="" placeholder="ABOUT THE BOOK">
                            <input type="text" name="source1" id="" placeholder="SOURCE">
                            
                            <div class="file-uploader">
                                
                                <div>
                                    <ion-icon name="image"></ion-icon>
                                    <div class="file-upload-holder"><input type="file" name="media21" id="" class="file-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" placeholder="DEPARMENT" name="department">
                </div>
            </div>

            <div class="uploader-div-holder">
                <p class="book-title">TEXTBOOK 2</p>
                <div class="uploader-container">
                    <div class="custom-file-upload">
                        <input type="file" id="file" name="myfiles[]" />
                    </div>

                    <input type="text" name="booktitle" id="" placeholder="BOOK TITLE">
                    <div class="additional">
                        <button id="additonal-2">ADDTIONAL INFORMATION</button>
                        <div class="toggler" id="toggler-2">
                            <input type="text" name="authorname" id="" placeholder="AUTHOR NAME">
                            <input type="text" name="aboutbook" id="" placeholder="ABOUT THE BOOK">
                            <input type="text" name="source" id="" placeholder="SOURCE">
                            <div class="file-uploader">
                                <input type="text" name="pagepicture" id="" placeholder="SCREENSHOT OF COVER PAGE"
                                    disabled>
                                <div>
                                    <ion-icon name="image"></ion-icon>
                                    <div class="file-upload-holder"><input type="file" name="" id="" class="file-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" placeholder="DEPARMENT" name="department">
                </div>
            </div>

            <div class="uploader-div-holder">
                <p class="book-title">TEXTBOOK 3</p>
                <div class="uploader-container">
                    <div class="custom-file-upload">
                        <input type="file" id="file" name="myfiles[]" />
                    </div>

                    <input type="text" name="booktitle" id="" placeholder="BOOK TITLE">
                    <div class="additional">
                        <button id="additonal-3">ADDTIONAL INFORMATION</button>
                        <div class="toggler" id="toggler-3">
                            <input type="text" name="authorname" id="" placeholder="AUTHOR NAME">
                            <input type="text" name="aboutbook" id="" placeholder="ABOUT THE BOOK">
                            <input type="text" name="source" id="" placeholder="SOURCE">
                            <div class="file-uploader">
                                <input type="text" name="pagepicture" id="" placeholder="SCREENSHOT OF COVER PAGE"
                                    disabled>
                                <div>
                                    <ion-icon name="image"></ion-icon>
                                    <div class="file-upload-holder"><input type="file" name="" id="" class="file-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="text" placeholder="DEPARMENT" name="department">
                </div>
            </div>

            <button  type="submit" class="submit-btn" name="upload">SUBMIT</button>
        </section>
</form>
        <section class="section-3">
            <p class="section-title">LIBRARY</p>

            <div class="long-card">
                <ul>
                    <li>
                        <ion-icon name="library"></ion-icon>
                    </li>
                    <li>LIBRARY</li>
                    <li> <a href="https://dorm.com.ng/v2/dm/html/library.php">OPEN</a></li>
                </ul>
            </div>
        </section>


        <section class="section-3">
            <p class="section-title">RESOUCE LINKS</p>

            <div class="long-card">
                LINK 1: <a href="https://www.pdfdrive.com" target="_blank">RESOUCE LINK 1</a>
            </div>
            <div class="long-card">
                LINK 2: <a href="https://open.umn.edu/opentextbooks" target="_blank">RESOUCE LINK 2</a>
            </div>
        </section>
        <a href="../index.html" class="big-screen-hide"><button class="log-out">LOG OUT</button></a>
    </div>
    <script >
    
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        $("#additonal-1").click(function () {
            $("#toggler-1").fadeToggle("fast");
        });

        $("#additonal-2").click(function () {
            $("#toggler-2").fadeToggle("fast");
        });

        $("#additonal-3").click(function () {
            $("#toggler-3").fadeToggle("fast");
        });</script>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="JS/NEW.JS"></script>
        

    
</body>

</html>
';
?>
