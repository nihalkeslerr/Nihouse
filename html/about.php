<!DOCTYPE html>
  <?php
include"config.php";
   //session_start();

    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon">
</head>
<body>
    <!--header-->
     <?php include 'header.php';?>
        
        
        
        
        
        
         <div class="aboutimg w-container">
            <div class="aboutimgyazi">
        <?php echo $lang['hakkında'] ?>
            
            </div>
            <!--<img class="mainimage" src="../images/Dekorasyonnew.jpg">
            <!--<p class="mainyazi"><i>Hosgeldiniz <br> </i></p>-->

        </div>
        
        <div class="about">
            <div class="hakk"><?php echo $lang['who'] ?></div>
            <div class="hakkyazi"><p class="pp">  
            <?php echo $lang['about2'] ?>

      
          </p></div>
            
        <br>
             <div class="hakk"><?php echo $lang['project'] ?> </div>
            <div class="hakkyazi"><p class="pp">  <?php echo $lang['about3'] ?>
            </p></div>
               
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
        <a href="about.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="about.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    </div>
    </section>
</body>
</html>