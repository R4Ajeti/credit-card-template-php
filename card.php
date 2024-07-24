<?php
$ccnum = $_GET['ccnum'];
include 'phpcreditcard.php';
$logotype = [
    "American Express" => "images/logo/american-express.png",
    "Diners Club Carte Blanche" => "images/logo/diners-club.png",
    "Diners Club" => "images/logo/diners-club.png",
    "Discover" => "images/logo/discover.png",
    "Diners Club Enroute" => "images/logo/diners-club.png",
    "JCB" => "images/logo/jcb.png",
    "Maestro" => "images/logo/maestro.png",
    "MasterCard" => "images/logo/mastercard.png",
    "Solo" => "images/logo/solo.png",
    "Switch" => "images/logo/switch.png",
    "VISA" => "images/logo/visa-logo.png",
    "VISA Electron" => "images/logo/visa-electron.png",
    "LaserCard" => "images/logo/laser.png",
]
?>

<head>
    <link href='cc-style.css' rel='stylesheet' type='text/css'>
    <style>
    .ccNum:nth-letter(4n4){
        display:inline-block;
        margin-right:15px;
        transition:all .4s;
    }
    .card__number:nth-letter(1n1){
        margin: 0 2px;
        transition:all .4s;
        font-weight: bold;
        color:#DCDCDC;
        text-shadow: 4px 3px 4px #000;
    }
    .glow {
    
    /* animation: glow 1s ease-in-out infinite alternate; */
    }

    
    
    </style>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width">
    <title>Card Test</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
    <header class="header">
    <h1 class="header__title">Credit Card</h1>
    </header>

    <div class="cardImages">
        <div class="panel">
            <div class="card card--front">
                <div class="card__number ccNum"><?=$ccnum ?></div>
                <div class="card__owner">Filan Fisteku</div>
                <img class=<?="\"card__logo".(($cctype == "American Express") ? " a_exps" : "")."\"" ?>  src=<?="\"".$logotype[$cctype]."\"" ?>>   
                   
            </div>
            <div class="card card--back">
                <div class="card__strip"></div>
                <div class="card__signature"></div>
            </div>
        </div>
    </div>

    <footer class="footer">
    <p>Copyright &copy; 2021 <a href="https://phpcreditcard.r4ajeti.repl.co" target="_blank">r1n0</a></p>
    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <script  src="pseudo-css.js"></script>
</body>