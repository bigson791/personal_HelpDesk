<?php 

    class Categoria extends Conectar
    {
        public function get_categoria(){
            $conectar=parent::Conexion();
            $sql = "SELECT * FROM tm_categoria WHERE cat_est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }
    }

?>