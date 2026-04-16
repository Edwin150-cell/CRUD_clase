<?php
    include("crud.php");

    $crud = new Crud();

    if (isset($_POST['nombre'])) {

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

        if ($crud->editar($id, $nombre)){
            header("location:index.php");
        }else{
            echo "no se puede editar";
        }
    } else {
        $id = $_GET['id'];
    }
    ?>

    <form method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="text" name="nombre" placeholder="Nuevo nombre" required>
        <button type="submit">Actualizar</button>
    </form>