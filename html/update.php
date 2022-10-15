<!DOCTYPE html>
  <?php
include"config.php";
   //session_start();

    ?>
<? ob_start(); ?>

<?PHP
//include_once 'db.php';
$link=mysqli_connect('localhost','root','');
mysqli_select_db($link, 'database');
$name="";
$email="";
$password="";
$username="";
$number="";
$oldpassword="";

function getpost()
{
    $posts=array();
    
    $posts[0]=$_POST['name'];
    $posts[1]=$_POST['email'];
    $posts[2]=$_POST['username'];
    
    $posts[4]=$_POST['number'];
    
    return $posts;

}

//update
/*
if (isset($_POST['kaydet'])){
    
  
    
    $data=getpost();
    
    $update_Query="UPDATE user SET name='$data[0]',email='$data[1]',username='$data[2]',number='$data[4]' WHERE email='$data[1]'";
    
    $update_result =mysqli_query($link, $update_Query);
    
    
}*/




if (isset($_POST['kaydet'])){
    
       
             $data=getpost();

    $email= $_POST["email"];
    
    
 $res= mysqli_query($link, "SELECT * FROM user WHERE email='$email'");
    
    

    
    
$res1=mysqli_num_rows($res);
    
    if($res1==1){
     

        
        $update_Query="UPDATE user SET name='$data[0]',email='$data[1]',username='$data[2]',number='$data[4]' WHERE email='$data[1]'";
    
    $update_result =mysqli_query($link, $update_Query);
        
     

  ?>
	<script> window.onload = function()
	{
		var R=(confirm("Hesap Bilgileriniz Başarıyla Güncellendi"));

		if (R== true)
		{
		  location.href="update.php?basari=1";
            
		}
		else
		{}

	}</script>
<?php
	
        
     
      /*  echo'<script> window.onload = function()
	{
        alert("Hesap Bilgileriniz Başarıyla Güncellendi");
  

	}</script>';*/

    
    }
    else
    {

           
?>
	echo'<script> window.onload = function()
	{
		var R=(confirm("Geçersiz Email Adresi"));

		if (R== true)
		{
		  location.href="update.php?basari=1";
            
		}
		else
		{}

	}</script>
<?php
    
        
        
    /*  ?> <script> window.onload = function()
	{
		//var R=(confirm("User succesfuly registred, Please Login"));

		//if (R== true)
		//{
             location.href="update.php?basari=1";
          
		 document.getElementById('hata').innerHTML="Geçersiz Email Adresi";
            
                  //  
		//}
		//else
		//{}

	}</script>
<?php */
     //   header("location: update.php?basari=1");

   // header("location: update.php?error=1");
    }
    
    
}
function getpostt()
{
    $pos=array();
    
    $pos[0]=$_POST['username'];
     $pos[1]=$_POST['password'];
    
    return $pos;

}

 if (isset($_POST['güncelle'])){
    
       
             $data=getpostt();

    $username= $_POST["username"];
     $oldpassword= $_POST["oldpassword"];
    
 //   $res= mysqli_query($link, "SELECT * FROM user WHERE username='$username'");
     
     $res= mysqli_query($link, "SELECT * FROM user WHERE username='$username' && password='$oldpassword'");

$res1=mysqli_num_rows($res);
    
   if($res1==1){
       
       
        
       $update_Query="UPDATE user SET password='$data[1]' WHERE username='$data[0]'";
    
 $update_result =mysqli_query($link, $update_Query);
        

        
   ?>
	echo'<script> window.onload = function()
	{
		var R=(confirm("Şifreniz Başarıyla Gncellendi!"));

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
		var R=(confirm("Email Adresiniz Veya Şifreniz Hatalı!"));

		if (R== true)
		{
             location.href="update.php?basari=1";
		
            
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
    <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon">


</head>

<body>
    <script type="text/javascript" src="../js/java.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!--header-->
    <?php include 'header.php';?>


    <a name="derf"></a>
    <div class="mai"></div>

    <div class="bigdiv">
        <div class="üyegunc">
            <section class="başlık">

                <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
                <li>
                    <p id="bas"><?php echo $lang['bilgi'] ?></p>
                </li>

            </section>
            <nav class="cizgo">
                <hr width="250px">
            </nav>


            <form action="update.php" method="post" id="register" class="rap">
                <div class="input">
                    <div class="gunc"><?php echo $lang['bilgimes'] ?></div>
                    <div class="a">
                        <input id="Email" type="email" name="email" placeholder="ornek@example.com" required>
                    </div>
                    <div class="a">

                        <input id="Name" type="text" name="name" placeholder="<?php echo $lang['name'] ?>" required>

                    </div>

                    <div class="a">
                        <input id="username" type="text" name="username" placeholder="<?php echo $lang['kullanıcı'] ?>" required>
                    </div>
                    <div class="a">
                        <input id="number" type="text" name="number" placeholder="<?php echo $lang['number'] ?>" required>
                    </div>


                    <!--<?php if(isset($_GET['basari'])):  ?>
                    <div class="kayit">Hesap Bilgileriniz Başarıyla Güncellendi</div>

                    <?php endif ?> -->


             
                 

  

                    <div class="k">
                        <button class="create" type="submit" name="kaydet"><?php echo $lang['kaydet'] ?></button>
                    </div>




                </div>



            </form>



        </div>
        <div class="dikeyciz"></div>

        <div class="sifgun">

            <section class="başlık">

                <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
                <li>
                    <p id="bas"><?php echo $lang['sifgünc'] ?></p>
                </li>

            </section>
            <nav class="cizgo">
                <hr width="280px">
            </nav>
            <form action="update.php" method="post" id="register" class="rap">
                <div class="input">
                   
                    <div class="gun"><?php echo $lang['sifgüncmes'] ?></div>
                    
                    <div class="a">
                        <input id="username" type="text" name="username" placeholder="<?php echo $lang['kullanıcı'] ?>" required>
                    </div>

                    <div class="a">

                        <input id="Password" type="password" name="oldpassword" placeholder="<?php echo $lang['mevsif'] ?>" required>
                    </div>
                    <div class="a">

                        <input id="oldPassword" type="password" name="password" placeholder="<?php echo $lang['newsif'] ?> " required>
                    </div>

                    <!--  <?php if(isset($_GET['basari'])):  ?>
                    <div class="kayit">Şifreniz Güncellenmiştir</div>

                    <?php endif ?> 


                    <?php if(isset($_GET['hata'])):  ?>
                    <div class="hata">Geçersiz Şifre</div>

                    <?php endif ?>-->


                    <div class="k">
                        <button id="cre" class="create" type="submit" name="güncelle"><?php echo $lang['güncelle'] ?></button>
                    </div>



                </div>



            </form>
        </div>

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
        <a href="update.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="update.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    </div>
    </section>



</body>

</html>
<? ob_flush(); ?>
