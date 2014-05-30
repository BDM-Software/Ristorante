<?php
require_once '../Classes/Connection.php';
require_once '../Operazioni/Operazioni.php';
$q = $_REQUEST["n"];
$hint = "-";
foreach (Operazioni::getNotifiche() as $row){
    $hint= $hint."     ".$row[];
}
echo $hint === "" ? "no suggestion" : $hint;
?>