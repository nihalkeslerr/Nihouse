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
                    <p id="bas"><?php echo $lang['saksi2'] ?></p>
                </li>
            </ul>
             <nav class="cizgi">
            <hr width="230px">
        </nav>
        </section>

       




        <div class="table">
           
            <div class="plant">
                <a>
                    <div>
                        <img class="ilk"  id="ilk" src="../images/plants/geranium.png" width="370px" >
                       <div class="favo"><button onclick="geran()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['geran'] ?></h4>
                    </div>
                    <div class="price" id="b">365₺</div>
                </a>
            </div>

            <div class="plant">
                <a>
                    <div>
                       <img class="ilk" id="sec" src="../images/plants/liv-saksi.png" width="370px" >
                       <div class="favo"><button onclick="liv()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                       
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['liv'] ?></h4>
                    </div>
                    <div class="price" id="c">430₺</div>
                </a>
            </div>

            <div class="plant" id="top">
                <a id="ak">
                    <div>
                        <img class="ilk" id="thir" src="../images/plants/Maranta-saksi.png" width="270px" height="276px">
                        <div class="favo"><button onclick="mara()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['maranta'] ?></h4>
                    </div>
                    <div class="price" id="d">550₺</div>
                </a>
            </div>

            <div class="plant" id="top">
                <a id="ak">
                    <div>
                        <img class="ilk" id="thir" src="../images/plants/saksi.png" width="250px" height="276px">
                        <div class="favo"><button onclick="strel()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['strel'] ?> </h4>
                    </div>
                    <div class="price" id="d">240₺</div>
                </a>
            </div>
            
            <div class="plant" id="top">
                <a id="ak" >
                    <div>
                        <img class="ilk" id="thir" src="../images/plants/Seramik%20Vazo%20181.png" width="270px" height="276px">
                        <div class="favo"><button onclick="sera()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['seramik'] ?></h4>
                    </div>
                    <div class="price" id="d">160₺</div>
                </a>
            </div>
            
            
            <div class="plant" id="top">
                <a id="ak">
                    <div>
                        <img class="ilk" id="thir" src="../images/plants/sark%C4%B1m.png" width="250px" height="276px">
                        <div class="favo"><button onclick="sarkim()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['sakim'] ?></h4>
                    </div>
                    <div class="price" id="d">430₺</div>
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
        <a href="plants.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="plants.php?lang=en"><?php echo $lang['lang_en'] ?></a>
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