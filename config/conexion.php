<?php
    session_start();

        class  conectar{
            protected $dbh;

            protected function Conexion(){
                try{
                    $conectar=$this->dbh= new PDO("mysql:local=localhost;dbname=andercode_helpdesk", "root", "");
                    return $conectar;

                }catch(Exception $e){
                    print "error de conexion".$e->getMessage()."</br>";
                    die();

                }
            }

            public function set_names(){
                return $this->dbh->query("SET NAMES 'utf8'");
            }
            public function ruta(){
                return "http://localhost:8080/PERSONAL/";

            }
        }

?>