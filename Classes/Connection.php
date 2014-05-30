<?php

/*
 *  Pattern singleton
 */

class Connection {

    protected static $dbPDO = NULL;
    protected static $host = "localhost";
    protected static $username = "francesco";
    protected static $password = "ottobre95";
    protected static $dbname = "ristorante";

    public static function getConnection() {
        if (!isset(Connection::$dbPDO)) {
            $nomeDb = "mysql:dbname=" . Connection::$dbname . ";";
            Connection::$dbPDO = new PDO($nomeDb . "host=" . Connection::$host, Connection::$username, Connection::$password);
            Connection::$dbPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return Connection::$dbPDO;
    }

    public static function closeConnection() {
        Connection::$dbPDO = NULL;
    }

}

?>
