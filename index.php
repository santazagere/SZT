

<!DOCTYPE html>
<html <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="HTML, replit, tagi, kods, kursi, web">
<meta name="description" content="Lapas apraksts">
<meta name="author" content="Santa Zāģere-Tihova">
<title>SZT Website</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
<script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
	<div class="scroll-up-btn">
		<i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">

        <div class="max-width">
            <div id="weather" class="weather"></div>
            <div class="logo"><a href="#">WEB<span>Kursi.</span></a></div>

<div class="popup" onclick="myFunction()">Nomainīt valodu!
  <span class="popuptext" id="myPopup">Valoda nomainīta!</span>
</div>
</span>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Galvenā</a></li>
                <li><a href="#about" class="menu-btn">Par</a></li>
                <li><a href="#services" class="menu-btn">Pakalpojumi</a></li>
                <li><a href="#skills" class="menu-btn">Prasmes</a></li>
                <li><a href="#teams" class="menu-btn">Komanda</a></li>
                <li><a href="#contact" class="menu-btn">Kontakti</a></li>
              </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
    <!-- galvenā-māja -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Sveiki, mani sauc</div>
                <div class="text-2">Santa Zāģere-Tihova</div>
                <div class="text-3">Es esmu <span class="typing"></span></div>
		            
            </div>
        </div>
    </section>
    <!-- PAR sadaļa -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Par mani</h2>
            <div class="about-content">
                <div class="column left">
                   <img src="images/profileme-1.jpg" alt=""> 
</head>
<body>
    <div class="card"></div>
                </div>
                <div class="column right">
                    <div class="text">Esmu <span class="typing-2"></span></div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..</p>
                    <script>
    var colors = ["grey", "yellow", "green", "white"];
    var colorIndex = 0;
    function changeColor() {
        var col = document.getElementById("body");
        if( colorIndex >= colors.length ) {
            colorIndex = 0;
        }
        col.style.backgroundColor = colors[colorIndex];
        colorIndex++;
    }
</script>
    <body id='body'>
    <a onclick="changeColor();">Mainām lapai krāsas</a>
    </body>
                </div>
            </div>
        </div>
    </section>
    <!-- pieredzes-pakalpojumu sadaļa -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Pakalpojumi</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-grin-alt"></i>
                        <div class="text">HR speciālists</div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Projektu vadība</div>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-lightbulb"></i>
                        <div class="text">Konsultācijas</div>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged..</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>
    <!-- Prasmes -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Prasmes</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Prasmes un pieredze.</div>
                    <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <a href="game.html">Ja Jums garlaicīgi te var uzspēlēt spēli: Flappy Cat</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>80%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>80%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>70%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>40%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>20%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Komandas sadaļa -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Mana komanda</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpg" alt="">
                        <div class="text">Muris</div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpg" alt="">
                        <div class="text">Barsiks</div>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. .</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpg" alt="">
                        <div class="text">Zuze</div>
                        <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)..</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpg" alt="">
                        <div class="text">Šerloks</div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
        </div>
    </section>
    <!-- kontaktinformācija -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Sazinies ar mani</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Mans info</div>
                    <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Vārds</div>
                                <div class="sub-title">Santa Zāģere-Tihova</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adrese</div>
                                <div class="sub-title">Latvia, Riga</div>



                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">E-pasts</div>
                                <div class="sub-title">szt@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Raksti ziņu</div>
                    <form method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" id="txtName" name="txtName" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" id="txtEmail" name="txtEmail" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" id="txtSubject" name="txtSubject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" id="msg" name="msg" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <!-- <button type="submit" id="bt"onclick="saveFile()" >Sūtīt</button> -->
                            <button type="submit" name="submit" value="SAVE" >Sūtīt</button>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['submit'])){
                    //$Name = "Username:".$_POST['username']."
                    //";
                    //$Pass = "Password:".$_POST['password']."
                    //";
                    $Devider = "=====================================
                    ";
                    $Name = "Name:".$_POST['txtName']."
                    ";
                    $Email  = "Email: ".$_POST['txtEmail']."
                    ";
                    $Subject = "Subject: ".$_POST['txtSubject']."
                    ";
                    $Message = "Message: ".$_POST['msg']."
                    ";


                    $file=fopen("submitedforms.txt", "a");
                    fwrite($file, $Devider);
                    fwrite($file, $Name);
                    fwrite($file, $Email);
                    fwrite($file, $Subject);
                    fwrite($file, $Message);
                    fwrite($file, $Devider);
                    fclose($file);
                    }
                    ?>
                </div>

            </div>
        </div>
    </section>
    <!-- kājene -->
    <footer>
        <div class="footer__logo">
            <a href="/" id="footer__logo">SZT</a>
          </div>
          <p class="website__rights">© Santa Zāģere-Tihova 2021. All rights reserved</p>
          <div class="social__icons">
            <a href="/" class="social__icon--link" target="_blank"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-instagram"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-youtube"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-linkedin"></i
            ></a>
            <a href="/" class="social__icon--link"
              ><i class="fab fa-twitter"></i
            ></a>
          </div>
        </div>
      </section>
    </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>