<!DOCTYPE html>
<? ob_start(); ?> 
  <?php
include"config.php";
   //session_start();

    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
     <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon" >
     
     <script>
        $(document).ready(function () {
            setTimeout(function () {
                $("div.kayıt").fadeOut("slow", function () {
                    $("div.kayıt").remove();
                });
            }, 5000);
        });
    </script>
    
</head>

<body>
   <script type="text/javascript" src="../js/java.js"></script>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--header-->
      <?php include 'header.php';?>
        
        
      <a name="derf"></a>
    <div class="mai"></div>

    

 
    

    <form method="post" id="login" class="rap">
       <section class="başlık" >
        <ul align="center">
            <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
            <li>
                <p id="bas"><?php echo $lang['giris'] ?></p>
            </li>
        </ul>
         <div class="cizg">
            <hr width="190px">
        </div>
    </section>
      
        <div class="input">
            <div class="a">
                <input id="usernamee" type="text" name="username" placeholder="<?php echo $lang['kullanıcı'] ?>" required>
            </div>
            <div class="a">
                <input id="password" type="password" name="password" placeholder="<?php echo $lang['sifre'] ?>" required>
            </div>
            <div class="k">
               <a > <button class="create" type="submit" name="submit"  ><?php echo $lang['giris'] ?></button></a>
            </div>
<div class="sifre"><a class="sifre" href="sifre.php"><?php echo $lang['sifunut'] ?></a></div> 
            <div class="yazii"><?php echo $lang['hesapyok'] ?><a class="alt" href="register.php"><?php echo $lang['uyeol'] ?></a></div>
            
            
         <?php if(isset($_GET['success'])):  ?>
   <div class="kayit">Başarıyla kayıt olundu!</div>
       
         <?php endif ?>
         
         
          <?php if(isset($_GET['error'])):  ?>
   <div class="hata">kullanıcı adı veya şifre hatalı</div>
       
         <?php endif ?>
         
        </div>

    </form>
    
    
    
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
        <a href="Login.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="Login.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    </div>
</section>



</body>

<?php
//include_once 'db.php';
       // session_start();

$link=mysqli_connect('localhost','root','');
mysqli_select_db($link, 'database');
    

if (isset($_POST["submit"]))
{

$username= $_POST["username"];
$password= $_POST["password"];


$res= mysqli_query($link, "SELECT * FROM user WHERE username='$username' && password='$password'");

$res1=mysqli_num_rows($res);

    
    
   
if ($res1==1)
{

    $_SESSION['username']=$username;

	echo'<script> window.onload = function()
	{
        alert("Successfully Logged In!");
  

	}</script>';
   
	header("location: index.php?basari=1");

}
    

else
{

?>
	echo'<script> window.onload = function()
	{
		//var R=(confirm("User succesfuly registred, Please Login"));

		//if (R== true)
		//{
			location.href='Login.php?error=1';
            
		//}
		//else
		//{}





	}</script>
<?php
    
	/*echo'<script> window.onload = function()
	{
		alert("LOGIN ERROR!");

	}</script>';*/

	
}

    
    
    
    

}
?>















</html>
<? ob_flush(); ?> 