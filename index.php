
<?php
require_once 'Classes\Prodotto.php';
require_once 'Classes\Connection.php';
require_once 'Operazioni\Operazioni.php';
require_once 'Classes\Cameriere.php';
session_start();
if (!isset($_SESSION['cameriere'])) {
    header('Location:Account/Login.php');
    exit();
}
?>

<html>

    <head>
        <title>BrodeHouse Camerieri</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/jquery.mobile-1.4.2.css">
        <link rel="stylesheet" href="Css/bgrTheme.css">
        <script src="js\jquery-1.10.2.min.js"></script>
        <script src="js\jquery.mobile-1.4.2.min.js"></script>
    </head>
    <body onload="ctrlNotifiche()">
        <div data-role="page" id="pageone" data-theme="c">
            <div data-role="panel" id="panelNotifiche" data-theme="c"> 
                <h2>Notifiche</h2>
                <div id="divNotifiche">
                    <script>
                        function ctrlNotifiche() {
                            var str = "n";
                            var xmlhttp;
                            if (window.XMLHttpRequest)
                            {// code for IE7+, Firefox, Chrome, Opera, Safari
                                xmlhttp = new XMLHttpRequest();
                            }
                            else
                            {// code for IE6, IE5
                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                            }
                            xmlhttp.onreadystatechange = function()
                            {
                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                                {
                                    document.getElementById("divNotifiche").innerHTML = xmlhttp.responseText;
                                }
                            }
                            xmlhttp.open("GET", "../Classes/Notifica.php?n=" + str, true);
                            xmlhttp.send();
                            setTimeout('ctrlNotifiche()', 10000);
                        }
                    </script>   
                </div>
            </div> 


            <div data-role="header" data-position="fixed" >
                <a href="#panelNotifiche" class="ui-btn ui-btn-inline ui-corner-all ui-shadow" onclick="ctrlNotifiche()">Notifiche</a>
                <a href="tabellaTavoli.php" data-rel="dialog" data-transition="pop">Tavoli</a> 
                <div id="barra" align="center"><h2>BrodeHouse</h2></div>
            </div>
            <div data-role="main" class="ui-content" data-theme="c">
                <div data-role="main" class="ui-content" data-theme="c">
                    <div data-role="collapsible-set">
                        <!-- contenuto accordion -->
                        <form id="pasti" name="form" method="get" action="Operazioni\EseguiOrdini.php">
                            <div data-role="collapsible" >
                                <h3>Primi piatti</h3>

                                <div class="entry">
                                    <?php
                                    $lst = array();
                                    //effettuerà le interrogazioni
                                    foreach (Operazioni::getProdotti() as $row) {
                                        $app = new Prodotto($row['descrizione'], $row['codPortata'], $row['prezzo'], $row['disponibile'], $row['idProdotto']);
                                        $lst[] = $app;
                                    }
                                    foreach ($lst as $row) {
                                        if ($row->getCodicePortata() == 1 && $row->getDisponibile() == 1) {
                                            $idP = $row->getIdProdotto();
                                            $ingredienti = Operazioni::getIngredientiProdotto($idP);
                                            $str = "";
                                            foreach ($ingredienti as $i) {
                                                $app = $i;
                                                $str = "" . $str . $app . "   ";
                                            }
                                            echo("<h1 class = \"titolo\">");
                                            echo($row->getDescrizione());
                                            echo("</h1>");
                                            echo("<p class = \"descrizione\"><small>" . $str . "</small></p>");
                                            echo("<input class=\"txtBox\" id=\"" . $idP . "\" type=\"text\" name= \"" . $idP . "\" maxlength=\"2\"></input>");
                                            echo("<hr width=\"100%\" size=\"1\" color=\"B8B8B8\">");
                                        }
                                    }
                                    ?>     

                                </div>

                            </div>

                            <!-- contenuto accodion -->
                            <div data-role="collapsible">

                                <h3>Secondi piatti</h3>
                                <ul id="Primi" class="hide">
                                    <div id="content">
                                        <div class="post">

                                            <div class="entry">
                                                <?php
                                                foreach ($lst as $row) {
                                                    if ($row->getCodicePortata() == 2 && $row->getDisponibile() == 1) {
                                                        $idP = $row->getIdProdotto();
                                                        $ingredienti = Operazioni::getIngredientiProdotto($idP);
                                                        $str = "";
                                                        foreach ($ingredienti as $i => $value) {
                                                            $str = $str . $value . "   ";
                                                        }
                                                        echo("<h1 class = \"titolo\">");
                                                        echo($row->getDescrizione());
                                                        echo("</h1>");
                                                        echo("<p class = \"descrizione\"><small>" . $str . "</small></p>");
                                                        echo("<input class=\"txtBox\" id=\"" . $idP . "\" type=\"text\" name= \"" . $idP . "\" maxlength=\"2\"></input>");
                                                        echo("<hr width=\"100%\" size=\"1\" color=\"B8B8B8\">");
                                                    }
                                                }
                                                ?>   
                                            </div>

                                        </div>   
                                    </div>
                                </ul>
                            </div>

                            <div data-role="collapsible">

                                <h3>Contorni </h3>
                                <ul  class="hide">
                                    <div id="content">
                                        <div class="post">

                                            <div class="entry">
                                                <?php
                                                foreach ($lst as $row) {
                                                    if ($row->getCodicePortata() == 3 && $row->getDisponibile() == 1) {
                                                        $idP = $row->getIdProdotto();
                                                        $ingredienti = Operazioni::getIngredientiProdotto($idP);
                                                        $str = "";
                                                        foreach ($ingredienti as $i => $value) {
                                                            $str = $str . $value . "   ";
                                                        }
                                                        echo("<h1 class = \"titolo\">");
                                                        echo($row->getDescrizione());
                                                        echo("</h1>");
                                                        echo("<p class = \"descrizione\"><small>" . $str . "</small></p>");
                                                        echo("<input class=\"txtBox\" id=\"" . $idP . "\" type=\"text\" name= \"" . $idP . "\" maxlength=\"2\"></input>");
                                                        echo("<hr width=\"100%\" size=\"1\" color=\"B8B8B8\">");
                                                    }
                                                }
                                                ?>     
                                            </div>
                                        </div>   
                                    </div>
                                </ul>
                            </div>
                            <input class="invia" type="submit"  value="Invia"  >
                        </form>	
                    </div>				
                </div>
            </div> 
            <div data-role="footer" data-theme="c">
                <div align="center">
                    <?php
                    echo "" . $_SESSION['cameriere']->getNome() . " " . $_SESSION['cameriere']->getCognome();
                    ?>
                </div>
                <button onclick="location.href = 'Account/Logout.php'">Logout</button>
            </div>

        </div>
    </body>
</html>

