<?php
/**
 * contactos/eliminar.php — Eliminar un contacto
 *
 * TODO 24: Valida el id (GET o POST). Si inválido, redirige a index.php.
 *
 * TODO 25: Carga el contacto para mostrar su nombre en la confirmación.
 *
 * TODO 26: Si es POST y existe $_POST['confirmar']:
 *           a) Ejecuta: DELETE FROM contactos WHERE id = ?
 *           b) Verifica con rowCount() que realmente se eliminó
 *           c) Redirige a index.php?ok=delete
 */

require_once __DIR__ . '/../config/db.php';

// TODO 24: Valida $id
$id = '???';

$titulo        = 'Eliminar Contacto';
$nivel         = 2;
$archivoActual = 'practica_app/contactos/eliminar.php';
$error         = null;
$contacto      = null;

// TODO 25 y 26:
try {
    $pdo = DB::conectar();
    // ???
} catch (PDOException $e) {
    $error = 'Error de base de datos.';
}

require_once __DIR__ . '/../includes/header.php';
?>

<!-- TODO 27: Crea la pantalla de confirmación:
     - Muestra el nombre del contacto que se va a eliminar
     - Un aviso de que la acción no se puede deshacer
     - Botón "Sí, eliminar" (submit de un form POST con hidden id y confirmar=1)
     - Botón "Cancelar" que lleve de vuelta a ver.php?id={$id} -->
<!-- ??? -->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
