<?php include'../connect.php';

 $id=$_REQUEST['u'];
echo'<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/bootstrap-5.1.3-dist/css/bootstrap-utilities.css"> -->
    <title>Accomodia</title>

</head>';
$selr="SELECT * FROM product where id='".$id."'";
$result= $conn14->query($selr);
  If ($result->num_rows>0){
While ($row=$result->fetch_assoc()){
$id=$row["id"]; $name=$row["name"]; $price=$row["price"]; $about=$row["about"];
$pic1=$row["pic1"]; $pic2=$row["pic2"]; $pic3=$row["pic3"]; $pic4=$row["pic4"]; 
$pic5=$row["pic5"]; $pic6=$row["pic6"]; $vid1=$row["vid1"]; $vid2=$row["vid2"]; $vid3=$row["vid3"]; $vid4=$row["vid4"];
$vid5=$row["vid5"]; $vid6=$row["vid6"]; $messageid=$row["messageid"];
$status=$row["status"]; $views=$row["views"]; $contact=$row["contact"]; $link=$row["link"];
                    
 echo'                  <div class="inspect-content">  
                            <div class="in_content">
                                <div id="work_space" class="work_space">
                                    <div id="img_space" class="img_space">
                                        <div class="container">
                                            <div class="mySlides">
                                              <div class="numbertext">1 / 6</div>
                                              <img src="'.$pic1.'" style="width:100%">
                                            </div>
                                          
                                            <div class="mySlides">
                                              <div class="numbertext">2 / 6</div>
                                              <img src="'.$pic2.'" style="width:100%">
                                            </div>
                                          
                                            <div class="mySlides">
                                              <div class="numbertext">3 / 6</div>
                                              <img src="'.$pic3.'" style="width:100%">
                                            </div>
                                              
                                            <div class="mySlides">
                                              <div class="numbertext">4 / 6</div>
                                              <img src="'.$pic4.'" style="width:100%">
                                            </div>
                                          
                                            <div class="mySlides">
                                              <div class="numbertext">5 / 6</div>
                                              <img src="'.$pic5.'" style="width:100%">
                                            </div>
                                              
                                            <div class="mySlides">
                                              <div class="numbertext">6 / 6</div>
                                              <img src="'.$pic6.'" style="width:100%">
                                            </div>
                                              
                                            <a class="prev" onclick="plusSlides(-1)">❮</a>
                                            <a class="next" onclick="plusSlides(1)">❯</a>
                                          
                                            <div class="caption-container">
                                              <p id="caption"></p>
                                            </div>
                                          
                                            <div class="row">
                                              <div class="column">
                                                <img class="demo cursor" src="'.$pic1.'" style="width:100%" onclick="currentSlide(1)" alt="'.$name.'">
                                              </div>
                                              <div class="column">
                                                <img class="demo cursor" src="'.$pic2.'" style="width:100%" onclick="currentSlide(2)" alt="'.$name.'">
                                              </div>
                                              <div class="column">
                                                <img class="demo cursor" src="'.$pic3.'" style="width:100%" onclick="currentSlide(3)" alt="'.$name.'">
                                              </div>
                                              <div class="column">
                                                <img class="demo cursor" src="'.$pic4.'" style="width:100%" onclick="currentSlide(4)" alt="'.$name.'">
                                              </div>
                                              <div class="column">
                                                <img class="demo cursor" src="'.$pic5.'" style="width:100%" onclick="currentSlide(5)" alt="'.$name.'">
                                              </div>    
                                              <div class="column">
                                                <img class="demo cursor" src="'.$pic6.'" style="width:100%" onclick="currentSlide(6)" alt="'.$name.'">
                                              </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div id="video_space" class="video_space">
                                    <div class="container">
                                        <div class="mySlidesv">
                                          <div class="numbertext">1 / 6</div>
                                          <video controls src="'.$vid1.'" style="width:100%"></video>
                                        </div>
                                      
                                        <div class="mySlidesv">
                                          <div class="numbertext">2 / 6</div>
                                          <video controls src="'.$vid2.'" style="width:100%"></video>
                                        </div>
                                      
                                        <div class="mySlidesv">
                                          <div class="numbertext">3 / 6</div>
                                          <video controls src="'.$vid3.'" style="width:100%"></video>
                                        </div>
                                          
                                        <div class="mySlidesv">
                                          <div class="numbertext">4 / 6</div>
                                          <video controls src="'.$vid4.'" style="width:100%"></video>
                                        </div>
                                      
                                        <div class="mySlidesv">
                                          <div class="numbertext">5 / 6</div>
                                          <video controls src="'.$vid5.'" style="width:100%"></video>
                                        </div>
                                          
                                        <div class="mySlidesv">
                                          <div class="numbertext">6 / 6</div>
                                          <video controls src="'.$vid6.'" style="width:100%"></video>
                                        </div>
                                          
                                        <a class="prevv" onclick="plusSlidesv(-1)">❮</a>
                                        <a class="nextv" onclick="plusSlidesv(1)">❯</a>
                                      
                                        <div class="captionv-container">
                                          <p id="captionv"></p>
                                        </div>
                                      
                                        <!-- <div class="rowv">
                                          <div class="columnv">
                                            <video controls class="demov cursov" src="'.$vid1.'" style="width:100%" onclick="currentSlidev(1)" alt="The Woods"></video>
                                          </div>
                                          <div class="columnv">
                                            <video controls class="demov cursov" src="'.$vid2.'" style="width:100%" onclick="currentSlidev(2)" alt="The Woods"></video>
                                          </div>
                                          <div class="columnv">
                                            <video controls class="demov cursov" src="'.$vid3.'" style="width:100%" onclick="currentSlidev(3)" alt="The Woods"></video>
                                          </div>
                                          <div class="columnv"> 
                                            <video controls class="demov cursov" src="'.$vid4.'" style="width:100%" onclick="currentSlidev(4)" alt="The Woods"></video>
                                          </div>
                                          <div class="columnv">
                                            <video controls class="demov cursov" src="'.$vid5.'" style="width:100%" onclick="currentSlidev(5)" alt="The Woods"></video>
                                          </div>    
                                          <div class="columnv">
                                            <video controls class="demov cursorv" src="'.$vid6.'" style="width:100%" onclick="currentSlidev(6)" alt="The Woods"></video>
                                          </div>
                                        </div> -->
                                      </div>
                                </div> 
                            </div>
                            <hr>
                            <div class="view_choice">
                                <div onclick="displayimg()"class="vi_choice" style="border-right: solid 3px var(--ash);">image</div>
                                <div onclick="display()" class="vi_choice" id="videoid">video</div>
                            </div>
                            <div class="contact">
                                <button href="'.$link.'">Chat With Agent</button>
                                <div class="call">
                                    <h3>contact</h3>
                                    <p>'.$contact.'</p>
                                </div></div>';
}}
?>