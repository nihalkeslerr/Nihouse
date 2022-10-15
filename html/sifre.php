<!DOCTYPE html>
<? ob_start(); ?> 

      <?php
include"config.php";
   //session_start();

    ?>

<?PHP
//include_once 'db.php';
$link=mysqli_connect('localhost','root','');
mysqli_select_db($link, 'database');

$email="";
$password="";


function getpost()
{
    $posts=array();
    
    $posts[0]=$_POST['password'];
    $posts[1]=$_POST['email'];
  
    
    return $posts;

}

if (isset($_POST['güncelle'])){
    
       
             $data=getpost();

    $email= $_POST["email"];
    
    
 $res= mysqli_query($link, "SELECT * FROM user WHERE email='$email'");
    
 
$res1=mysqli_num_rows($res);
    
    if($res1==1){

        $update_Query="UPDATE user SET password='$data[0]' WHERE email='$data[1]'";
    
    $update_result =mysqli_query($link, $update_Query);

  ?>
	<script> window.onload = function()
	{
		var R=(confirm("Şifreniz Başarıyla Güncellendi"));

		if (R== true)
		{
		  location.href="Login.php";
            
		}
		else
		{}

	}</script>
<?php  
    }
    else
    {         
?>
	echo'<script> window.onload = function()
	{
		var R=(confirm("Geçersiz Email Adresi"));

		if (R== true)
		{
		  location.href="sifre.php";
            
		}
		else
		{}

	}</script>
<?php
    
        
        
 
    }
 
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
     <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon" >
    
    
</head>

<body>
   <script type="text/javascript" src="../js/java.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--header-->
      <?php include 'header.php';?>
        
        
      <a name="derf"></a>
    <div class="mai"></div>

    

 
    

    <div class="sifgun">

            <section class="başlık">

                <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
                <li>
                    <p id="bas">Şifremi Unuttum</p>
                </li>

            </section>
            <nav class="cizg">
                <hr width="280px">
            </nav>
            <form action="sifre.php" method="post" id="register" class="rap">
                <div class="input">
                   
                    <div class="gun">Şİfrenizi Yenilemek İçin Email Adınızı Girin.</div>
                    
                   <div class="a">
                        <input id="Email" type="email" name="email" placeholder="ornek@example.com" required>
                    </div>

                  
                    <div class="a">

                        <input id="oldPassword" type="password" name="password" placeholder="Yeni Şifre " required>
                    </div>

                    <!--  <?php if(isset($_GET['basari'])):  ?>
                    <div class="kayit">Şifreniz Güncellenmiştir</div>

                    <?php endif ?> 


                    <?php if(isset($_GET['hata'])):  ?>
                    <div class="hata">Geçersiz Şifre</div>

                    <?php endif ?>-->


                    <div class="k">
                        <button id="cre" class="create" type="submit" name="güncelle">Güncelle</button>
                    </div>



                </div>



            </form>
        </div>
    
    
    <!--
    <form id="register" class="rap active">
       <section class="başlık" style="margin-right: 47%">
        <ul align="center">
            <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
            <li>
                <p id="bas">Üye Ol</p>
            </li>
        </ul>
    </section>
        <div class="input">
            <div class="a">

                <input id="Name" type="text" name="name" placeholder="Name">

            </div>
            <div class="a">

                <input id="Password" type="password" name="password" placeholder="Password">
            </div>
            <div class="a">
                <input id="Email" type="email" name="email id" placeholder="Username">
            </div>


            <div class="k">
                <input class="create" type="button" name="name" Value="CREATE" onclick="register()" >
            </div>

            <div class="yazi">Already exist?<a onclick="login()">Log in</a></div>

        </div>

    </form>
    
    
    <div id="page" class="rap">
        <div><p>BAŞARIYLA GİRİŞ YAPTINIZ!</p></div>
    </div>
    -->
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
        <a href="sifre.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="sifre.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    </div>
</section>



</body>




</html>
<? ob_flush(); ?> 