<?php
$stat=null;

if(!empty($POST['nom']) AND !empty($POST['mail']) AND !empty($POST['message'])) {
    $stat="Votre message a bien été envoyé !";
}
else{
    $stat= "Veuilliez completer tous les champs !";
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylecontact.css">
    <title>Théo Hervé</title>
    <link rel="icon" type="image/png" href="img/logo.png" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>

<body>
    <div class="maincontainer">
        <!-- creation d'un header -->
        <header class="headercontainer">
          
                <a href="index.html"><img src="img/logo.png" alt="logo"></a>
                <div class="menu_big">
                    <ul class="nav">
                        <li><a class="son1" href="index.html">Accueil</a>
                            <audio id="beep1" preload="auto">
                                <source src="audio/son1.wav">
                                </source>
                            </audio>
                        </li>

                        <li><a class="son2" href="apropos.html"> À Propos</a>
                            <audio id="beep2" preload="auto">
                                <source src="audio/son2.wav">
                                </source>
                            </audio>
                        </li>

                        <li><a class="son3" href="portfolio.html">Portfolio</a>
                            <audio id="beep3" preload="auto">
                                <source src="audio/son3.wav">
                                </source>
                            </audio>
                        </li>

                        <li><a class="son4" href="contact.php">Contact</a>
                            <audio id="beep4" preload="auto">
                                <source src="audio/son4.wav">
                                </source>
                            </audio>
                        </li>
                    </ul>
                </div>
                <div class="menu">
                    <input type="checkbox" id="menu-toggle" />
                    <label id="trigger" for="menu-toggle"></label>
                    <label id="burger" for="menu-toggle"></label>
                    <ul id="menu">
                        <li><a class="son1" href="index.html">Accueil</a></li>
                        <li><a class="son2" href="apropos.html"> À Propos</a></li>
                        <li><a class="son3" href="portfolio.html">Portfolio</a></li>
                        <li><a class="son4" href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <!--Menu Burger qui s'affiche en petite résolution-->
                
                <script>

                    var beepOne = $("#beep1")[0];
                    $(".son1")
                        .mouseenter(function () {
                            beepOne.play();
                        });

                    var beepTwo = $("#beep2")[0];
                    $(".son2")
                        .mouseenter(function () {
                            beepTwo.play();
                        });

                    var beepThree = $("#beep3")[0];
                    $(".son3")
                        .mouseenter(function () {
                            beepThree.play();
                        });

                    var beepFour = $("#beep4")[0];
                    $(".son4")
                        .mouseenter(function () {
                            beepFour.play();
                        });

                </script>


        </header>
        <main>
            <div class="maincontainer">
                <div class="gtitre">
                    <h2>Me Contacter</h2>
                </div>
                <div class="formulaire">
                    <form action="https://api.web3forms.com/submit" method="post">
                        <input type="hidden" name="access_key" value="86710b1a-263f-4d7b-ab83-f85e5f37f9d4">
                        <div class="e1">
                            <div class="nom input">
                                <label for="nom">Nom</label>
                                <input type="text" id="nom" name="nom" placeholder="nom">
                            </div>
                            <div class="mail input">
                                <label for="mail">Email</label>
                                <input type="email" id="main" name="mail" placeholder="exempledemail@mail.xx">
                            </div>
                        </div>
                        <div class="e2 input">
                            <label for="message">Message</label>
                            <input type="text" id="message" name="message" placeholder="Votre message ...">
                        </div>
                        <input type="hidden" name="redirect" value="https://web3forms.com/success">
                        <div class="submit">
                            <input type="submit">
                        </div>
                    </form>
                    <div class="error">
                    <?php
                
                    if(isset($stat)){
                        echo '<p>'.$stat.'</p>';
                    }

                    ?>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div>
                <p>Théo Hervé</p>
            </div>
            <div class="iconsdiv">

                <a href="https://www.youtube.com/@TheoHerve"><img src="img/Youtube.svg" alt="Youtube"></a>
                <a href="https://www.linkedin.com/in/th%C3%A9o-herv%C3%A9-112436257"><img src="img/Linkedin.svg" alt=""></a>
                <a href="https://www.instagram.com/hoori_music/"><img src="img/Instagram.svg" alt="Instagram"></a>
                <a href="https://www.behance.net/thoherv"><img src="img/Behance.svg" alt="behance"></a>

            </div>
        </footer>
    </div>
</body>

</html>