<?php
require 'models/Database.php';

//Obtener lista de usuarios
try {
    $stmt = $pdo->query('SELECT * FROM users ORDER BY id ASC');

} catch(PDOException $e)
{

}
?>

<h1>Lista de Usuarios</h1>
<a href="create.php"><button>Agregar Usuarios</button></a>

<div class="table-container">
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Acciones</th>
        </tr>
        <?php
        ?>
    </table>
</div>