<?php 
    class Ticket extends Conectar
    {
        public function insert_ticket( $tick_usu_id, $tick_cat_id, $tick_titulo, $tick_descrip, $tick_est){
            $conectar=parent::Conexion();
            $sql = "INSERT INTO tm_ticket(tick_usu_id, tick_cat_id, tick_titulo, tick_descrip) VALUES (?,?,?,?)";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            $sql->bindValue(1, $tick_usu_id);
            $sql->bindValue(1, $tick_cat_id);
            $sql->bindValue(1, $tick_titulo);
            $sql->bindValue(1, $tick_descrip);
            return $resultado=$sql->fetchAll();
        }
    }

?>