<?php
    include("crud.php");

    $crud = new Crud();
    $nombre = $_POST['nombre'];

    if ($crud->guardar($nombre)){
        header("location:index.php");
    }else{
        echo "No se guardó";
    }
?>