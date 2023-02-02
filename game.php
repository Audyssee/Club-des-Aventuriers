<!DOCTYPE html>
<html>
    <head>
    <title>Club des Aventuriers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="assets/logo.jpg" type="image/icon type" />
    <link rel="stylesheet" media="screen" type="text/css" charset="utf8" href="css/style.css" />
    <script type="text/javascript" src="js/game.js"></script>
    </head>
    <body>
        <nav class="menu">
            <ul>
                <li><img class="banniere" src="assets/banniere.jpg" /></li>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="rules.php">Règles</a></li>
                <li style="float:right"><a href="profile.php">Profil</a></li>
                <li style="float:right"><a href="inscription.php">Inscription</a></li>
                <li style="float:right"><a href="connexion.php">Connexion</a></li>
            </ul>
        </nav>
        <div class="content">
            <div class="aventure" id="aventure">
                <h2 id="aventureT"></h2>
                <audio id="audio" controls
                type="audio/mp3">
                </audio>
                <p id="p1"></p>
            </div>
            <button id="next">Valider</button>
            <div class="bord">
                <div class="jeu">
                    <canvas id="table" width="800" height="250">
                    </canvas>
                    <div>
                        <ul class="objets" id="objets">
                            <li><img id="obj1" draggable="true" /></li>
                            <li><img id="obj2" draggable="true" /></li>
                            <li><img id="obj3" draggable="true" /></li>
                            <li><img id="obj4" draggable="true" /></li>
                        </ul>
                    </div>  
                </div>
                <canvas id="plateau"></canvas>
            </div>
        </div>
    </body>
</html>