<header class="hea">

                <div class="inner">

                    <div><a href="index.php" class="logo"><img src="../logolar/logodenemeee.png" width="210px" height="90px"></a></div>


                    <div class="menu">

                        <?php if(isset($_GET['basari'])):  ?>

                        <li>
                            <div class="m"><a class="bar" href="index.php?basari=1"><?php echo $lang['anasayfa'] ?></a></div>
                        </li>
                        <li>
                            <div id="mim" class="m"><a class="bar" href="alldecor.php?basari=1?success=1"><?php echo $lang['dekorasyon'] ?></a>
                                <ul class="altbar">
                                    <li><a class="bar" href="wall.php?basari=1"><?php echo $lang['duvar'] ?></a></li>
                                    <li><a class="bar" href="lighting.php?basari=1"><?php echo $lang['aydinlatma'] ?></a></li>

                                    <li><a class="bar" href="candels.php?basari=1"><?php echo $lang['mumluk'] ?></a></li>
                                    <li><a class="bar" href="plants.php?basari=1"><?php echo $lang['saksi'] ?></a>
                                    </li>


                                </ul>

                            </div>
                        </li>

                        <li>
                            <div class="m"><a class="bar" href="about.php?basari=1"><?php echo $lang['hakkında'] ?></a></div>
                        </li>
                        <li>
                            <div class="m"><a class="bar" href="blog.php?basari=1"><?php echo $lang['blog'] ?></a></div>
                        </li>


                        <li>
                            <div id="mim" class="ma">
                                <img class="login" src="../logolar/log.png" width="25px">
                                
                                <a class="bar">
                                <?php echo $_SESSION['username'] ?>
                                </a>

                                <ul id="les" class="altbar">

                                    <li><img class="setting" src="../logolar/ayarlar.png" width="20px"><a id="newba" class="bar" href="../html/update.php?basari=1"><?php echo $lang['düzenle'] ?></a></li>

                                    <li><img class="logout" src="../logolar/logout.png" width="20px"><a id="newba" class="bar" href="index.php"><?php echo $lang['out'] ?></a>


                                    </li>


                                </ul>

                            </div>
                        </li>

                        <!-- else kısmı (giriş yapılmamış)-->


                        <?php else :  ?>
                        <li>
                            <div class="m"><a class="bar" href="index.php"><?php echo $lang['anasayfa'] ?></a></div>
                        </li>
                        <li>
                            <div id="mim" class="m"><a class="bar" href="alldecor.php"><?php echo $lang['dekorasyon'] ?></a>
                                <ul class="altbar">
                                    <li><a class="bar" href="wall.php"><?php echo $lang['duvar'] ?></a></li>
                                    <li><a class="bar" href="lighting.php"><?php echo $lang['aydinlatma'] ?></a></li>

                                    <li><a class="bar" href="candels.php"><?php echo $lang['mumluk'] ?></a></li>
                                    <li><a class="bar" href="plants.php"><?php echo $lang['saksi'] ?></a>
                                    </li>


                                </ul>

                            </div>
                        </li>

                        <li>
                            <div class="m"><a class="bar" href="about.php"><?php echo $lang['hakkında'] ?></a></div>
                        </li>
                        <li>
                            <div class="m"><a class="bar" href="blog.php"><?php echo $lang['blog'] ?></a></div>
                        </li>
                        <li>
                            <div class="m"><a class="bar" href="sepet.php">SEPETİM</a></div>
                        </li>
                        <li>
                            <div class="m"><a class="bar" href="Login.php"><?php echo $lang['giris'] ?></a></div>

                        </li>

                        <?php endif ?>


                    </div>

                    <!-- ESKİSİ---
                        <li>
                            <div class="m"><a class="bar" href="index.php">ANASAYFA</a></div>
                        </li>
                        <li>
                            <div id="mim" class="m"><a class="bar" href="alldecor.php">DEKORASYON</a>
                                <ul class="altbar">
                                    <li><a class="bar" href="wall.html">Duvar Saatleri</a></li>
                                    <li><a class="bar" href="lighting.html">Aydinlatma</a></li>

                                    <li><a class="bar" href="candels.html">Mumluk</a></li>
                                    <li><a class="bar" href="plants.html">Saksi</a>
                                    </li>


                                </ul>

                            </div>
                        </li>

                        <li>
                            <div class="m"><a class="bar" href="favoriler.html">FAVORILER</a></div>
                        </li>
                        <li>
                            <div class="m"><a class="bar" href="blog.html">BLOG</a></div>
                        </li>

                       <li>
                    <div class="m"><a class="bar" href="Login.php">GIRIS YAP</a></div>
                </li> -->


                </div>

</header>
