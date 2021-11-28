<?php 
    session_start(); //sesion del usuario para que se puedan acceder a los datos

    class Conectar{

        protected dbh;

        protected function Conexion(){
            //bloque try catch para la conexion
            try{
                $conectar = $this->dbh = new PDO("mysqli:local=localhost;dbname=ayf_helpdesk","root","");
                return $conectar;
            }catch(Exception $e){
                print "¡Error en la base de datos".$e->getMessage()."</br>";
                die();  
            }
        }
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public function ruta(){
            return "http://localhost:80/personal_helpdesk/";
        }
    }

?>