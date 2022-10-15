<!DOCTYPE html>
  <?php
include"config.php";
   //session_start();

    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NİHOUSE</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
     <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon" >
</head>

<body>
<script type="text/javascript" src="../js/java.js"></script>
       <?php include 'header.php';?>


    <!--header-->



    <div>
        <div class="mainpage w-container">
            <div class="heading-container">
                <p><?php echo $lang['decoline'] ?></p>
            </div>
            <!--<img class="mainimage" src="../images/Dekorasyonnew.jpg">
            <!--<p class="mainyazi"><i>Hosgeldiniz <br> </i></p>-->

        </div>
        <section class="başlık">
            <ul align="center">
                <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
                <li>
                    <p id="bas"><?php echo $lang['öneriler'] ?></p>
                </li>
            </ul>
        </section>

        <div class="c">
            <hr width="1020px">
        </div>
    </div>



<!--
    <nav>
        <div class="idea">
            <a href="blog.html#1"  ><div class="d">Aydınlatma</div></a>
           <a  href="blog.html#2" > <div class="d">Bitki</div></a>
           <a href="blog.html#3"> <div class="d">Zemin Ve Duvarlar</div></a>
           <a href="blog.html#4" ><div class="d">Aksesuarlar</div></a>
        
        </div>

</nav> -->

    <a name="1"></a>

<div>


   
    <div class="bigDiv">


        <div class="frs">

            <div id="flower" class="b">
                <img class="flowerImg"src="../logolar/flower2.png" width="60px"><span id="yaz"><?php echo $lang['aydinlatma'] ?></span> 
            </div>

            <div class="po">
                    <p id="parag" class="c"><?php echo $lang['ayexp'] ?>
                    </p>
            </div>
        </div>
        
        <div class="imggg"> <img id="image" src="../images/blogimage/ayd%C4%B1nlatma.png" width="310px"> 
         <a name="2"></a>
        </div>

    </div>





 
<div class="bigDiv">

<div class="imggg"> <img id="image" src="../images/blogimage/bitki-beste.png" width="500px" > </div>
        <div class="frs">

            <div id="flower" class="b">
                <img class="flowerImg"src="../logolar/flower2.png" width="60px"><span id="yaz"><?php echo $lang['bitki'] ?></span> 
            </div>

            <div class="po">
                    <p id="parag" class="c"><?php echo $lang['biexp'] ?>
                    </p>
            </div>
                 <a name="3"></a>
        </div>
        
        

    </div>
    
    
    
    
    

    <div class="bigDiv">


        <div class="frs">

            <div id="flower" class="b">
                <img class="flowerImg"src="../logolar/flower2.png" width="60px"><span id="yaz"><?php echo $lang['zemin'] ?></span> 
            </div>

            <div class="po">
                    <p id="parag" class="c"><?php echo $lang['zaexp'] ?>
                    </p>
            </div>
        </div>
        
        <div class="imggg"> <img id="image" src="../images/blogimage/zemin-ve-duvarlar.png" width="500px"> 
                 <a name="4"></a>
        </div>

    </div>
    

    
    

    <div class="bigDiv">

<div class="imggg"> <img id="image" src="../images/blogimage/aksesuarlar-beste.png" width="500px"> </div>
        <div class="frs">

            <div id="flower" class="b">
                <img class="flowerImg"src="../logolar/flower2.png" width="60px"><span id="yaz"><?php echo $lang['akse'] ?></span> 
            </div>

            <div class="po">
                    <p id="parag" class="c"><?php echo $lang['akexp'] ?>
                    </p>
            </div>
        </div>
        
        

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
        <a href="blog.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="blog.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    </div>
</section>
</body>

</html>
