<?php

require_once 'Classes\Connection.php';

class Operazioni {
    
    
    public static function getIngredientiProdotto($idP){
        $ret=array();
        foreach (Connection::getConnection()->query("SELECT descrizione"
                . " FROM prodottoingrediente INNER JOIN ingrediente ON prodottoingrediente.idIngrediente=ingrediente.idIngrediente"
                . " WHERE idProdotto=\"".$idP."\";") as $element){
        $ret[]=$element;
        }
        Connection::closeConnection();
        return $ret;
    }
    
    
    public static function getProdotti(){
        $ret=array();
        foreach (Connection::getConnection()->query("SELECT *"
                . " FROM prodotto;") as $element){
        $ret[]=$element;
        }
        Connection::closeConnection();
        return $ret;
    }
    
    public static function getNotifiche(){
        $ret=array();
        foreach (Connection::getConnection()->query("SELECT *"
                . " FROM notifica;") as $element){
        $ret[]=$element;
        }
        Connection::closeConnection();
        return $ret;
    }
    
    
    //        $stm = Connection::getConnection()->prepare ("SELECT descrizione"
//                . " FROM prodottoingrediente INNER JOIN ingrediente ON prodottoingrediente.idIngrediente=ingrediente.idIngrediente"
//                . " WHERE idProdotto=:id");
//        $stm->bindParam(':id', $idP, PDO::PARAM_STR);
    
}

?>

