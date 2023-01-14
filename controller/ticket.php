<?php
    require_once("../config/conexion.php");
    require_once("../models/Ticket.php");
    $ticket = new Ticket();
$HOLA = $_POST["tick_usu_id"];
var_dump($HOLA);
    switch($_GET["op"]){
        case "insert":
            $ticket->insert_ticket($_POST["tick_usu_id"],$_POST["tick_cat_id"],$_POST["tick_titulo"],$_POST["tick_descrip"]);
            
            break;
    }

?>