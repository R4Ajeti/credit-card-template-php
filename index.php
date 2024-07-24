<html>
  <head>
    <link rel="stylesheet" href="getoari.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta&family=Playfair+Display&family=Roboto:wght@300;400&family=Saira+Condensed&display=swap" rel="stylesheet">
 <!--<link rel="stylesheet" href="nesti.css">-->
    <title>PHP Test</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  </head>
  
  <body>
    <style>
    /* Crazy text animation */
    .flipLet:nth-letter(2n1){
    font-size: 15px;
    font-weight: normal;
    display:inline-block;
    /* transition:all .4s; */
    transition:all .6s linear;
    }
    .flipLet:nth-letter(2n1):hover{
        transform:rotateZ(360deg);
        font-size:30px;
        color:rgb(97,181,228);
    }
    </style>
    <?php
        $ccnum = $_GET['ccnum'];
          echo 
          "<div class=\"container\" >
            <div class=\"wrapper\">

              <div class=\"header\">
                <h1  >
                  <span class=\"title\" >THIS IS A PHP SCRIPT THAT VALIDATES CC!</span>
                </h1>
              </div>

              <div class=\"props\">
                <!--<p>
                  <span >Use with:</span>
                  class=\"ccstatus\" \"cctype\" \"ccstatuscode\" \"ccmessage\"
                </p>-->

                <div class=\"form\">
                  <form action=\"/card.php\" method=\"get\">
                    <label for=\"number\">Enter Card Number: </label>
                    <input type=\"number\" id=\"ccnum\" name=\"ccnum\">
                    <input class=\"submit\" type=\"submit\" value=\"Submit\">
                  </form>
                </div>  
              </div>";
              
          include 'phpcreditcard.php';

          echo
           
              "<div class=\"main\">
                <p> 
                  Credit Card Type:<a href=\"card.php?ccnum=".$ccnum."\"> <span class=\"cctype\">".$cctype."</span></a>
                </p>

                <p> 
                  Status: <span class=\"ccstatus\">".$ccstatus."</span>
                </p> 

                <p>
                  Error Status: <span class=\"ccstatuscode\">".$ccstatuscode."</span>
                </p>   
                
                <p> 
                  Message: <span class=\"ccmessage\">".$ccmessage."</span> 
                </p>
              </div>

              <div class=\"footer\">
                  <p class=\"creator flipLet\">Created by:&nbsp;R1n0</p>
                  <p class=\"creator flipLet\">Special thanks&nbsp;to:&nbsp;Nasty &nbsp and &nbsp Getthename</p> 
              </div>

            </div>
          </div>";

    ?>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js'></script>
    <script  src="pseudo-css.js"></script>   
  
  </body>
</html>