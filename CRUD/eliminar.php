<?php
    include("crud.php");

    $crud = new Crud();
    $id = $_GET['id'];

    if ($crud->eliminar($id)){
        header("location:index.php");
    }else{
        echo "No se pudo eliminar";
    }
?>