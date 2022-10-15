<!DOCTYPE html>
  <?php
include"config.php";
   //session_start();

    ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> NİHOUSE </title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon">
</head>

<body>
    <script type="text/javascript" src="../js/java.js"></script>

    <!--header-->
       <div id="thebigone">
     <?php include 'header.php';?>
        
    <div class="maiii"></div>


     
      
           
           
      
    <section class="başlık">
        <ul align="center">
            <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
            <li>
                <p><?php echo $lang['tümdeco'] ?></p>
            </li>
        </ul>
    </section>

    <div class="c">
        <hr width="520px">
    </div>


   
    <div>
         

        <div class="secondline">
            <a >
                <div>
                    <img class="first" src="../images/mumluk/kus.png" width="370px" height="280px">
                     <div class="favo"><button onclick="kus()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['kus'] ?></h4>
                </div>
                <div class="price">155₺</div>
            </a>
        </div>
        
<div class="secondline" id="pot">
            <a id="ak" >
                <div>
                    <img class="first" id="si" src="../images/saatler/digital.png" width="250px" height="276px">
                     <div class="favo"><button onclick="digi()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['diji'] ?></h4>
                </div>
                <div class="price" id="d">230₺</div>
            </a>
        </div>
        <div class="secondline">
            <a >
                <div>
                    <img id="fif2" class="first" src="../images/avize/walkie.png" width="370px" height="280px">
                     <div class="favo"><button onclick="walkie()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['walkie'] ?></h4>
                </div>
                <div class="price">230₺</div>
            </a>
        </div>

        <div class="secondline">
            <a >
                <div>
                    <img class="first" src="../images/saatler/tual.png" width="370px" height="280px">
                     <div class="favo"><button onclick="tual()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['tual'] ?></h4>
                </div>
                <div class="price">412₺</div>
            </a>
        </div>
<div class="secondline" id="pot">
            <a >
                <div>
                    <img class="first" id="thir" src="../images/saatler/saat.png" width="270px" height="276px">
                     <div class="favo"><button onclick="odun()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['odun'] ?></h4>
                </div>
                <div class="price" id="d">250₺</div>
            </a>
        </div>
      
        <div class="secondline">
            <a>
                <div>
                    <img class="first" src="../images/plants/liv-saksi.png" width="370px" height="280px">
                    <div class="favo"><button  onclick="liv()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['liv'] ?></h4>
                </div>
                <div class="price">430₺</div>
            </a>
        </div>

        <div class="secondline">
            <a>
                <div>
                    <img class="first" src="../images/mumluk/AdeleMumluk.png" width="370px" height="280px">
                     <div class="favo"><button  onclick="adele()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['adele'] ?></h4>
                </div>
                <div class="price">465₺</div>
            </a>
        </div>
  <div class="secondline" id="pot">
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
        <div class="secondline">
            <a >
                <div>
                    <img class="first" src="../images/avize/avize.png" width="370px" height="280px">
                    <div class="favo"><button onclick="Salkim()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['salkım'] ?></h4>
                </div>
                <div class="price">465₺</div>
            </a>
        </div>
<div class="secondline" id="pot">
                <a id="ak" >
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

        <div class="secondline">
            <a >
                <div>
                    <img class="first" src="../images/saatler/ParizyenDuvarSaati.png" width="370px" height="280px">
                     <div class="favo"><button onclick="pari()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['parizyen'] ?></h4>
                </div>
                <div class="price">155₺</div>
            </a>
        </div>
        <div class="secondline" id="pot">
                <a id="ak"  >
                    <div>
                        <img class="ilk" id="si" src="../images/mumluk/renkli.png" width="250px" height="276px">
                         <div class="favo"><button onclick="renk()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['renkli'] ?></h4>
                    </div>
                    <div class="price" id="d">230₺</div>
                </a>
            </div>
<div class="secondline" id="pot">
                <a id="ak">
                    <div>
                        <img class="ilk" id="thir" src="../images/plants/saksi.png" width="250px" height="276px">
                         <div class="favo"><button onclick="strel()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['strel'] ?></h4>
                    </div>
                    <div class="price" id="d">240₺</div>
                </a>
            </div>
        <div class="secondline">
            <a >
                <div>
                    <img class="first" src="../images/plants/geranium.png" width="370px" height="280px">
                    <div class="favo"><button onclick="geran()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['geran'] ?></h4>
                </div>
                <div class="price">365₺</div>
            </a>
        </div>
 <div class="secondline" id="pot">
                <a id="ak" >
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
           
        <div class="secondline">
            <a >
                <div>
                    <img class="first" src="../images/mumluk/Led fener .png" width="370px" height="280px">
                    <div class="favo"><button onclick="led()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['led'] ?></h4>
                </div>
                <div class="price">412₺</div>
            </a>
        </div>
<div class="secondline" id="pot">
                <a id="ak"  >
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
        <div class="secondline">
            <a >
                <div>
                    <img class="first" src="../images/avize/bisiklet.png" width="370px" height="280px">
                    <div class="favo"><button onclick="bisik()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['bisiklet'] ?></h4>
                </div>
                <div class="price">412₺</div>
            </a>
        </div>

        <div class="secondline">
            <a >
                <div>
                    <img class="first" src="../images/saatler/papillon.png" width="370px" height="280px">
                    <div class="favo"><button onclick="papi()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div>
                    <h4 id="f"><?php echo $lang['papillon'] ?></h4>
                </div>
                <div class="price">120₺</div>
            </a>
        </div>
         <div class="secondline" id="pot">
                <a id="ak" >
                    <div>
                        <img class="ilk" id="si" src="../images/avize/abajur.png" width="240px" height="276px">
                         <div class="favo"><button onclick="abaj()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['abajur'] ?></h4>
                    </div>
                    <div class="price" id="d">250₺</div>
                </a>
            </div>
            
            
        <div class="secondline">
            <a  id="pot">
                <div>
                    <img id="fif" class="first" src="../images/plants/Maranta-saksi.png" width="280px" height="280px">
                     <div class="favo"><button onclick="mara()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                </div>
                <div >
                    <h4 id="f" ><?php echo $lang['maranta'] ?></h4>
                </div>
                <div  class="price">550₺</div>
            </a>
        </div>
        
         <div class="secondline" id="top">
                <a id="ak"  >
                    <div>
                        <img class="ilk" id="si" src="../images/mumluk/resimli.png" width="250px" height="276px">
                         <div class="favo"><button onclick="resim()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['resimli'] ?></h4>
                    </div>
                    <div class="price" id="d">520₺</div>
                </a>
            </div>
            
            <div class="secondline">
                <a  >
                    <div>
                        <img class="ilk"  id="ilk" src="../images/avize/piramit.png" width="370px" height="276px">
                          <div class="favo"><button onclick="piramit()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['piramit'] ?></h4>
                    </div>
                    <div class="price" id="b">155₺</div>
                </a>
            </div>
            
            <div class="secondline" id="top">
                <a id="ak"  >
                    <div>
                        <img class="ilk" id="thir" src="../images/plants/Seramik%20Vazo%20181.png" width="270px" height="276px">
                         <div class="favo"><button onclick="sera()" id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['seramik'] ?></h4>
                    </div>
                    <div class="price" id="d">160₺</div>
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
        <a href="alldecor.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="alldecor.php?lang=en"><?php echo $lang['lang_en'] ?></a>
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
