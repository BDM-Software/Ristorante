<?php

require_once ('Classes\Connection.php');
    $dbPDO = Connection::getConnection();
    foreach ($_GET as $id => $value){
        if ($value!=""){
            $dbPDO->query("UPDATE ingrediente inner join prodottoingrediente "
                    . " on ingrediente.idIngrediente = prodottoingrediente.idIngrediente"
                    . " SET ingrediente.quantita = ingrediente.quantita - prodottoingrediente.quantita"
                    . "WHERE prodottoingrediente.idProdotto = \"".$id."\");");
        }
    }
    Connection::closeConnection();
    header("Location:index.php");
    ?>

