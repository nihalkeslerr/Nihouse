    <!DOCTYPE HTML>

    <?php
include"config.php";
   //session_start();

    ?>

  
    <html lang="en">

    <head>

        <title> NIHOUSE </title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon">
      <!-- <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.min.css"> -->
    </head>

    <body>

        <script type="text/javascript" src="../js/java.js"></script>
        <div id="thebigone">     
            <!--header-->
            
            <!--
        <ul class="wert">
            <div class="menu">

                <li>
                    <div class="m"><a href="index.html">ANASAYFA</a></div>
                </li>
                <li>
                    <div id="mim" class="m"><a href="alldecor.html">DEKORASYON</a>
                        <ul class="altbar">
                            <li><a href="index.html#qq" onclick="pr()">Duvar Saatleri</a></li>
                            <li><a href="index.html#qq" onclick="pm()">Aydınlatma</a></li>

                            <li><a href="index.html#qq" onclick="ps()">Mumluk</a></li>
                            <li><a href="index.html#qq" onclick="pg()">Saksı</a>
                            </li>


                        </ul>

                    </div>
                </li>



                <li>
                    <div class="m"><a href="blog.html">BLOG</a></div>
                </li>
            </div>

        </ul>
->>


        <!--header-->

<?php include 'header.php';?>





            <div class="mainpage w-container">
                <div class="heading-container">
                    <p><?php echo $lang['welcome'] ?></p>
                    <div class="shop"><a href="alldecor.php?basari=1?success=1"><input type="button" value="<?php echo $lang['shop'] ?>"></a></div>
                </div>
                <!--<img class="mainimage" src="../images/Dekorasyonnew.jpg">
            <!--<p class="mainyazi"><i>Hosgeldiniz <br> </i></p>-->

            </div>

            <!--<div class="mainsentence">
            <p><i>Evinizi Güzelleştirecek Her Şey Nihouse'da.. </i></p>
        </div>-->

            <div class="mainab">

                <div class="hakkyazi" id="mainline">
                    <p class="pp"><i><?php echo $lang['mainline'] ?></i></p>
                </div>




            </div>




            <div class="buttons">
                <a href="wall.php">

                    <div class="btnn">

                        <div class="flower"><img src="../logolar/flower2.png" width="60px"></div>
                        <div class="yazi"><?php echo $lang['duvar'] ?></div>

                    </div>

                </a>

                <a href="lighting.php">
                    <div class="btnn">

                        <div class="flower"><img src="../logolar/flower2.png" width="60px"></div>
                        <div class="yazi"><?php echo $lang['aydinlatma'] ?></div>

                    </div>
                </a>

                <a href="candels.php">

                    <div class="btnn">

                        <div class="flower"><img src="../logolar/flower2.png" width="60px"></div>
                        <div class="yazi"><?php echo $lang['mumluk'] ?></div>

                    </div>
                </a>

                <a href="plants.php">

                    <div class="btnn">

                        <div class="flower"><img src="../logolar/flower2.png" width="60px"></div>
                        <div class="yazi"><?php echo $lang['saksi'] ?></div>

                    </div>
                </a>
            </div>
            <a name="qq"></a>

            <section class="başlık">
                <ul align="center">
                    <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
                    <li>
                        <p id="bas"><?php echo $lang['one'] ?></p>
                    </li>
                </ul>
                <nav class="cizgi">
                    <hr width="310px">
                </nav>
            </section>






            <div class="table">
                <div class="plant">

                    <a>
                        <div>

                            <div> <img class="ilk" id="ilk" src="../images/mumluk/Led%20fener%20.png" width="370px" height="276px"></div>
                            <div class="favo"><button onclick="led()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                        </div>

                        <div>
                            <h4 id="f"><?php echo $lang['led'] ?></h4>
                        </div>
                        <div class="price" id="b">412₺</div>
                    </a>
                </div>
                <div class="plant" id="top">
                    <a>
                        <div>
                            <img class="ilk" id="si" src="../images/saatler/saat2.png" width="250px" height="276px">
                            <div class="favo"><button onclick="portt()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                        </div>
                        <div>
                            <h4 id="f"><?php echo $lang['portland'] ?></h4>
                        </div>
                        <div class="price" id="d">520₺</div>
                    </a>
                </div>

                <div class="plant" id="top">
                    <a id="ak">
                        <div>
                            <img class="ilk" id="si" src="../images/avize/walkie.png" width="250px" height="276px">
                            <div class="favo"><button onclick="walkie()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                        </div>
                        <div>
                            <h4 id="f"><?php echo $lang['walkie'] ?></h4>
                        </div>
                        <div class="price" id="d">230₺</div>
                    </a>
                </div>



                <div class="plant" id="top">

                    <a id="ak">
                        <div>
                            <img class="ilk" id="thir" src="../images/plants/sark%C4%B1m.png" width="250px" height="276px">
                            <div class="favo"><button onclick="sarkim()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                        </div>
                        <div>
                            <h4 id="f"><?php echo $lang['sakim'] ?></h4>
                        </div>
                        <div class="price" id="d">430₺</div>

                    </a>
                </div>
                <div class="plant">
                    <a onclick="geran()">
                        <div>
                            <img class="ilk" id="ilk" src="../images/plants/geranium.png" width="370px">
                            <div class="favo"><button onclick="geran()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                        </div>
                        <div>
                            <h4 id="f"><?php echo $lang['geran'] ?></h4>
                        </div>
                        <div class="price" id="b">365₺</div>
                    </a>
                </div>
                <div class="plant" id="top">
                    <a onclick="odun()">
                        <div>
                            <img class="ilk" id="thir" src="../images/saatler/saat.png" width="270px" height="276px">
                            <div class="favo"><button onclick="odun()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                        </div>
                        <div>
                            <h4 id="f"><?php echo $lang['odun'] ?></h4>
                        </div>
                        <div class="price" id="d">250₺</div>
                    </a>

                </div>


                <div class="plant" id="top">
                    <a id="ak" onclick="soji()">
                        <div>
                            <img class="ilk" id="si" src="../images/avize/balon.png" width="250px" height="276px">
                            <div class="favo"><button onclick="soji()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                        </div>
                        <div>
                            <h4 id="f"><?php echo $lang['soji'] ?></h4>
                        </div>
                        <div class="price" id="d">520₺</div>
                    </a>
                </div>
                <div class="plant" id="top">
                    <a id="ak" onclick="yazi()">
                        <div>
                            <img class="ilk" id="thir" src="../images/mumluk/yaz%C4%B1l%C4%B1.png" width="270px" height="276px">
                            <div class="favo"><button onclick="yazi()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                        </div>
                        <div>
                            <h4 id="f"><?php echo $lang['yazi'] ?></h4>
                        </div>
                        <div class="price" id="d">250₺</div>
                    </a>
                </div>
            </div>



            <div class="about">
                <div class="hakk"><?php echo $lang['hakkında'] ?></div>
                <div class="hakkyazi">
                    <p class="pp"><?php echo $lang['about1'] ?>

                    </p>
                </div>



                <div class="more"><a href="about.php"><button class="btnmore"><?php echo $lang['fazla'] ?></button></a></div>

            </div>




            <hr>


            <section class="alttt">
                <div class="fo">

                    <div class="footer">
                        <div class="contact">
                            <div>
                                <h3><?php echo $lang['contact'] ?>
</h3>
                            </div>
                            <div class="m"><img class="phone" src="../logolar/phone.png" width="15px" style="padding: 5px">0 212 456 78 91</div>
                            <div class="co"><img class="gmail" src="../logolar/apple-mail.png" width="25px" style="padding: 2px"><a class="mail" href="#">nihose@gmail.com</a></div>
                        </div>
                    </div>

                    <div class="footer">
                        <div class="Socialmedia">
                            <div>
                                <h3><?php echo $lang['media'] ?></h3>
                            </div>
                            <a href="https://www.instagram.com/nihalkesler/">
                                <div class="social"><img src="../logolar/instagram-new--v1.png" width="35px"></div>
                            </a>
                            <a href="https://www.facebook.com/">
                                <div class="social"><img src="../logolar/facebook-new.png" width="35px"></div>
                            </a>
                            <a href="https://twitter.com/home">
                                <div class="social"><img src="../logolar/twitter--v1.png" width="35px"></div>
                            </a>
                        </div>
                    </div>

                    <div class="footer">
                        <div class="Socialmedia">
                            <div>
                                <h3><?php echo $lang['satis'] ?>
</h3><img src="../logolar/worldwide-location.png" width="40px" style="padding: 0px">
                            </div>
                            <div><?php echo $lang['place'] ?></div>

                        </div>
                    </div>
                </div>
                
                 <div class="language">
        <a href="index.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    </div>

            </section>

 </div>
  

        <div id="co" class="content">
            <div><button id="close" class="close" onclick="close()"><img src="../logolar/closee.png" width="30px"></button></div>
            <div><img src="" alt=""></div>
            <div class="contentimg">
                <img id="conim" src="">
            </div>
            <div class="wordpart">
                <div class="explain">
                    <p id="namecon">
                        Parizyen Duvar Saati
                        <br>
                        Fiyat= 120₺
                    </p>

                    <p id="explainp">
                        TEKNİK ÖZELLİKLER
                        <br>
                        Ürün Tipi: MDF Üzerine UV Baskı
                        <br>
                        Ölçü: 44 cm
                        <br>
                        Üretim Yeri:: Türkiye
                        <br>
                        ÜRÜN AÇIKLAMASI
                        <br>
                        Zamanın dijital dünyada aktığı bir günlerde parizyen bir şıklık isteyenler için, birçok mobilya ve dekorla kullanabileceğiniz rakamlı bir saattir.
                    </p>
                </div>

                <!--   <div class="favori">
                    <button class="btncontent"><img class="kalpcon" src="../logolar/kalp.png" width="25px">Favorilere Ekle</button>

                </div> -->
            </div>



        </div>





    </body>




    </html>
