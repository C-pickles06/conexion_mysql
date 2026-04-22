<?php
/**
 * contactos/ver.php — Ver un contacto
 *
 * TODO 13: Valida el parámetro id de la URL con filter_input().
 *           Si es inválido (no es entero o < 1), redirige a index.php.
 * TODO 14: En un bloque try/catch:
 *           a) Conecta con DB::conectar()
 *           b) Prepara y ejecuta: SELECT * FROM contactos WHERE id = :id LIMIT 1
 *           c) Usa fetch() para traer la fila a $contacto
 *           d) Si $contacto es false (no existe), redirige a index.php
 *           e) Captura PDOException → $error
 */

require_once __DIR__ . '/../config/db.php';

// TODO 13: Valida $id
$id = '???';

$titulo        = 'Ver Contacto';
$nivel         = 2;
$archivoActual = 'practica_app/contactos/ver.php';
$error         = null;
$contacto      = null;

// TODO 14: Consulta y fetch()
// ???

require_once __DIR__ . '/../includes/header.php';
?>

<?php if ($error): ?>
  <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
<?php elseif ($contacto): ?>

<!-- TODO 15: Muestra los datos completos del contacto:
     - Nombre como h2
     - Email con enlace mailto:
     - Teléfono (o "No registrado" si es null)
     - Categoría como badge
     - Notas
     - Fecha de creación
     - Botones: Editar (editar.php?id=...) y Eliminar (eliminar.php?id=...)
       más un botón "← Volver" a index.php
     Usa htmlspecialchars() en todos los valores -->
<!-- ??? -->

<?php endif; ?>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
