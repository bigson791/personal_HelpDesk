<?php 
    class Ticket extends Conectar
    {
        public function insert_ticket( $tick_usu_id, $tick_cat_id, $tick_titulo, $tick_descrip){
            $conectar=parent::Conexion();
            $sql = "INSERT INTO tm_ticket(tick_usu_id, tick_cat_id, tick_titulo, tick_descrip) VALUES (?,?,?,?)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $tick_usu_id);
            $sql->bindValue(2, $tick_cat_id);
            $sql->bindValue(3, $tick_titulo);
            $sql->bindValue(4, $tick_descrip);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }

?>