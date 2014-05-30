<?php
require_once 'Operazioni/Operazioni.php';
$vet = array();
$vet = Operazioni::getProdotti();
?>

<html>
    <head>
        <title>Menù BrodeHouse</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Css/jquery.mobile-1.4.2.css">
        <link rel="stylesheet" href="Css/bgrTheme.css">
        <script src="js\jquery-1.10.2.min.js"></script>
        <script src="js\jquery.mobile-1.4.2.min.js"></script>
    </head>
    <body>

        <div data-role="page" id="contorni" data-theme="a">
            <div data-role="panel" id="panelNotifiche" data-theme="a"> 
                <h2>Portate</h2>    
                <ul data-role="listview">
                    <li><a href="#antipasti">Antipasti</a></li>
                    <li><a href="#primi">Primi</a></li>
                    <li><a href="#">Secondi</a></li>
                    <li><a href="#">Dolci e frutta</a></li>
                    <li><a href="#">Aperitivi</a></li>
                    <li><a href="#">Bibite</a></li>
                </ul>
            </div> 

            <div data-role="header" data-position="fixed" id="testa" >
                <a href="#panelNotifiche" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Portate</a>
                <div id="barra" align="center"><h2>Antipasti</h2></div>
            </div>

            <div data-role="main" class="ui-content" data-theme="a">
                <ul data-role="listview">
                    <?php
                    foreach ($vet as $element){
                        if ($element->getCodicePortata()==5 && $element->getDisponibile()){
                        echo "<li><a href=\"piatto.php?id=".$element->getIdProdotto().""
                                . "&descrizione=".$element->getDescrizione().""
                                . "&prezzo=".$element->getPrezzo()."\" "
                                . "data-rel=\"dialog\" data-transition=\"slidedown\">".$element->getDescrizione()."</a></li>";
                        }
                    }
                ?>
                            </ul>
                <br>
                <div data-role="footer" data-theme="a">
                    <h1>BrodeHouse</h1>
                </div> 
            </div> 
        </div>
        <!--piatto-->
        <div data-role="page" id="piatto" data-theme="a">

        </div>
        <!-- Primi -->
        <div data-role="page" id="primi" data-theme="a">
            <div data-role="panel" id="panelNotifiche_p" data-theme="a"> 
                <h2>Portate</h2>    
                <ul data-role="listview">
                    <li><a href="#contorni">Contorni</a></li>
                    <li><a href="#antipasti">Antipasti</a></li>
                    <li><a href="#secondi">Secondi</a></li>
                    <li><a href="#">Dolci e frutta</a></li>
                    <li><a href="#">Aperitivi</a></li>
                    <li><a href="#">Bibite</a></li>
                </ul>
            </div> 

            <div data-role="header" data-position="fixed" id="testa_p" >
                <a href="#panelNotifiche_p" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Portate</a>
                <div id="barra_a" align="center"><h2>Primi</h2></div>
            </div>

            <div data-role="main" class="ui-content" data-theme="a">

                <div data-role="footer" data-theme="a">
                    <h1>BrodeHouse</h1>
                </div> 
            </div>
        </div>

        <!-- Antipasti -->
        <div data-role="page" id="antipasti" data-theme="a">
            <div data-role="panel" id="panelNotifiche_a" data-theme="a"> 
                <h2>Portate</h2>    
                <ul data-role="listview">
                    <li><a href="#primi">Primi</a></li>
                    <li><a href="#secondi">Secondi</a></li>
                    <li><a href="#">Dolci e frutta</a></li>
                    <li><a href="#">Aperitivi</a></li>
                    <li><a href="#">Bibite</a></li>
                </ul>
            </div> 

            <div data-role="header" data-position="fixed" id="testa_a" >
                <a href="#panelNotifiche_a" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Portate</a>
                <div id="barra_a" align="center"><h2>Antipasti</h2></div>
            </div>

            <div data-role="main" class="ui-content" data-theme="a">

                <div data-role="footer" data-theme="a">
                    <h1>BrodeHouse</h1>
                </div> 
            </div>
        </div>

        <!-- Secondi -->
        <div data-role="page" id="secondi" data-theme="a">
            <div data-role="panel" id="panelNotifiche_s" data-theme="a"> 
                <h2>Portate</h2>    
                <ul data-role="listview">
                    <li><a href="#antipasti">Antipasti</a></li>
                    <li><a href="#primi">Primi</a></li>
                    <li><a href="#">Dolci e frutta</a></li>
                    <li><a href="#">Aperitivi</a></li>
                    <li><a href="#">Bibite</a></li>
                </ul>
            </div> 

            <div data-role="header" data-position="fixed" id="testa_s" >
                <a href="#panelNotifiche_s" class="ui-btn ui-btn-inline ui-corner-all ui-shadow">Portate</a>
                <div id="barra_a" align="center"><h2>Secondi</h2></div>
            </div>

            <div data-role="main" class="ui-content" data-theme="a">

                <div data-role="footer" data-theme="a">
                    <h1>BrodeHouse</h1>
                </div> 
            </div>
        </div>
    </body>
</html>