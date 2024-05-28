<?php
    class Database{
        private $conexion = null;
        private $nombre   = "estudiantes(1)";
        private $servidor = "localhost";
        private $usuario  = "root";
        private $clave    = "#Promo2024";

        //Conectar la base de datos
        public function __construct(){
            $this->conexion= new mysqli($this->servidor, $this->usuario, $this->clave, $this->nombre);
            if($this->conexion->connnect_error){
                print "Fallo la conexion:".$this->conexion->connect_error;
            }
        }

        //Ejecuta la consulta a la base de datos (query)
        public function query($sql){
            return $this->conexion->query($sql);
        }

        //Cerrar base de datos
        public function closeDB(){

        }
    }
?>