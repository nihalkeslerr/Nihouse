<!DOCTYPE html>
  <?php
include"config.php";
   //session_start();

    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon">
</head>

<body>

    <!--header-->
    <?php include 'header.php';?>

    <a name="derf"></a>
    <div class="mai"></div>




    <section class="başlık">
        <ul align="center">
            <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
            <li>
                <p id="bas"><?php echo $lang['uyeol'] ?></p>
            </li>
        </ul>
    </section>
    <nav class="cizg">
        <hr width="190px">
    </nav>
    <form method="post" id="register" class="rap">
        <div class="input">

            <div class="a">

                <input id="Name" type="text" name="name" placeholder="<?php echo $lang['name'] ?>" required>

            </div>

            <div class="a">
                <input id="Email" type="email" name="email" placeholder="ornek@example.com" required>
            </div>
            <div class="a">
                <input id="username" type="text" name="username" placeholder="<?php echo $lang['kullanıcı'] ?>" required>
            </div>
            <div class="a">
                <input id="number" type="text" name="number" placeholder="<?php echo $lang['number'] ?>" required>
            </div>
            <div class="a">

                <input id="Password" type="password" name="password" placeholder="<?php echo $lang['sifre'] ?>" required>
            </div>



            <div class="k">
                <button class="create" type="submit" name="submit"><?php echo $lang['create'] ?></button>
            </div>

            <div class="yazii"><?php echo $lang['hesapvar'] ?><a class="alt" href="Login.php"><?php echo $lang['giris'] ?></a></div>


        </div>



    </form>

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
        <a href="register.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="register.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    </div>
    </section>








</body>


<?php
//include_once 'db.php';

$link=mysqli_connect('localhost','root','');
mysqli_select_db($link, 'database');
    


    
    
if(isset($_POST["submit"]))
{
   

$name= $_POST['name'];
    

    
$email= $_POST['email'];

$username= $_POST['username'];

$password= $_POST['password'];
   

 $number= $_POST['number'];
    


$res= mysqli_query($link, "SELECT * FROM user WHERE name='$name'");

$res1=mysqli_num_rows($res);
    

    
if ($res1==1)
{
    
	?>

echo'<script>
    window.onload = function() {
        alert("Name Already Exist! Please chhose another username");

    }

</script>';

<?php
}

else
{

	$insert= mysqli_query($link, "INSERT INTO user VALUES('$name','$email', '$username', '$password','$number')");
	
	?>
echo'<script>
    window.onload = function() {
        //var R=(confirm("User succesfuly registred, Please Login"));

        //if (R== true)
        //{
        location.href = 'Login.php?success=1';

        //}
        //else
        //{}





    }

</script>
<?php

}

}

?>





</html>
