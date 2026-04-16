<?php

    class Conexion{
        public function conectar(){
            return mysqli_connect(

                $servidor = "localhost",
                $usuario = "edwin",
                $password = "edwin151205",
                $bd = "crud"
            );
        }
    }

?>