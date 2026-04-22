<?php
/**
 * contactos/editar.php — Editar un contacto
 *
 * TODO 20: Valida el id (GET o POST). Si inválido, redirige a index.php.
 *
 * TODO 21: Carga el contacto desde la BD con SELECT ... WHERE id = ?
 *           Si no existe, redirige a index.php.
 *
 * TODO 22: Si es POST:
 *           a) Recoge y valida los datos igual que en crear.php
 *           b) Ejecuta el UPDATE:
 *                UPDATE contactos
 *                SET nombre=:nombre, email=:email, telefono=:telefono,
 *                    categoria=:categoria, notas=:notas
 *                WHERE id=:id
 *           c) Redirige a ver.php?id={id}&ok=edit
 */

require_once __DIR__ . '/../config/db.php';

// TODO 20: Valida $id
$id = '???';

$titulo        = 'Editar Contacto';
$nivel         = 2;
$archivoActual = 'practica_app/contactos/editar.php';

$categorias = ['Amigo', 'Familiar', 'Trabajo', 'Otro'];
$errores    = [];
$contacto   = null;

// TODO 21 y 22:
try {
    $pdo = DB::conectar();
    // ???
} catch (PDOException $e) {
    $errores[] = 'Error de base de datos.';
}

require_once __DIR__ . '/../includes/header.php';
?>

<!-- TODO 23: Igual que crear.php pero:
     - El título dice "Editar Contacto"
     - El action del form apunta a editar.php?id={$id}
     - Hay un input hidden name="id" con el valor de $id
     - Los campos se pre-llenan con los valores actuales del $contacto
     - El botón dice "Guardar cambios" -->
<!-- ??? -->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
