<?php
    include("conexion.php");

    class Crud extends Conexion {

        public function guardar($nombre){
            $conexion = parent::conectar();
            $sql ="INSERT INTO t_nombres (nombre) VALUES ('$nombre')";
            return mysqli_query($conexion, $sql);
        }

        public function mostrar (){
            $conexion = parent::conectar();
            $sql ="SELECT * FROM t_nombres";
            $respuesta = mysqli_query($conexion, $sql);
            return mysqli_fetch_all($respuesta, MYSQLI_ASSOC);
        }

        public function eliminar ($id){
            $conexion = parent::conectar();
            $sql ="DELETE FROM t_nombres WHERE id = $id";
            return mysqli_query($conexion, $sql);
        }

        public function editar ($id, $nombre){
            $conexion = parent::conectar();
            $sql = "UPDATE t_nombres SET nombre = '$nombre' WHERE id = $id";
            return mysqli_query($conexion, $sql);
        }
    }
?>