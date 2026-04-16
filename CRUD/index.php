<?php
    include("crud.php");
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD</title>
    </head>
    <body>
        <div class="contenedor">
            <div class="titulo">Ingresa tus datos</div>

            <form action="guardar.php" method="post">
                <input class="input" type="text" name="nombre" placeholder="Ej: Jessica" required>
                <button class="boton">ENVIAR</button>
            </form>

            <table style="text-align: center;">
                <tr>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>

                <?php
                    $crud = new Crud();
                    $datos= $crud->mostrar();

                    foreach ($datos as $dato):
                        $id = $dato['id'];
                ?>
                <tr>
                    <td><?php echo $dato['nombre'];?></td>
                    <td>
                        <a href="editar.php?id=<?php echo $id; ?>">Editar</a>
                    </td>
                    <td>
                        <a href="eliminar.php?id=<?php echo $id; ?>">Eliminar</a>
                    </td>
                </tr>
                <?php 
                    endforeach; 
                ?> 
            </table>
        </div>
    </body>
    </html>