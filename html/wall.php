<!DOCTYPE html>
  <?php
include"config.php";
   //session_start();

    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>plants</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon">
</head>

<body>
       <script type="text/javascript" src="../js/java.js"></script>
   <div id="thebigone">
    <?php include 'header.php';?>





    <hr class="line">

    <section class="başlık">
        <ul align="center">
            <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
            <li>
                <p id="bas"><?php echo $lang['duvar2'] ?></p>
            </li>
        </ul>
        <nav class="cizgi">
            <hr width="270px">
        </nav>
    </section>






    <div class="table">

        <div class="plant">
            <a>
                <div>
                    <img class="ilk" id="ilk" src="../images/saatler/papillon.png" width="370px">
                    <div class="favo"><button onclick="papi()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['papillon'] ?></h4>
                </div>
                <div class="price" id="b">465₺</div>
            </a>
        </div>

        <div class="plant" id="top">
            <a id="ak">
                <div>
                    <img class="ilk" id="si" src="../images/saatler/digital.png" width="250px" height="276px">
                    <div class="favo"><button onclick="digi()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['diji'] ?></h4>
                </div>
                <div class="price" id="d">230₺</div>
            </a>
        </div>

        <div class="plant">
            <a>
                <div>
                    <img class="ilk" id="ilk" src="../images/saatler/ParizyenDuvarSaati.png" width="370px">
                    <div class="favo"><button onclick="pari()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['parizyen'] ?></h4>
                </div>
                <div class="price" id="b">155₺</div>
            </a>
        </div>
        
        <div class="plant">
            <a>
                <div>
                    <img class="ilk" id="ilk" src="../images/saatler/tual.png" width="370px" height="276px">
                    <div class="favo"><button onclick="tual()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['tual'] ?></h4>
                </div>
                <div class="price" id="b">412₺</div>
            </a>
        </div>

        <div class="plant" id="top">
            <a>
                <div>
                    <img class="ilk" id="thir" src="../images/saatler/saat.png" width="270px" height="276px">
                    <div class="favo"><button onclick="odun()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['odun'] ?> </h4>
                </div>
                <div class="price" id="d">250₺</div>
            </a>
        </div>
        <div class="plant" id="top">
            <a>
                <div>
                    <img class="ilk" id="si" src="../images/saatler/saat2.png" width="250px" height="276px">
                     <div class="favo"><button onclick="portt()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['portland'] ?></h4>
                </div>
                <div class="price" id="d">520₺</div>
            </a>
        </div>

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
                            <a href="https://www.instagram.com/nihalkeslerr/">
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
        <a href="wall.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="wall.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    </div>
    </section>
    
    </div>
    
    
 <div id="co" class="content">
 <div><button id="close" class="close" onclick="close()"><img src="../logolar/closee.png"  width="30px"></button></div>
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

         
        </div>



    </div>
</body>

</html>
