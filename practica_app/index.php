<?php
/**
 * index.php — Página de bienvenida con estadísticas
 *
 * TODO 2: Carga el archivo config/db.php con require_once.
 * TODO 3: Usando un bloque try/catch:
 *           a) Llama a DB::conectar() para obtener $pdo
 *           b) Usa $pdo->query(...)->fetchColumn() para contar el total de contactos
 *           c) Usa otro query para contar cuántos tienen teléfono (WHERE telefono IS NOT NULL)
 *           d) Si hay PDOException, guarda el mensaje en $error
 */

// TODO 2: ???
require_once __DIR__ . '/../practica_app/config/db.php';

$titulo = 'Inicio';
$nivel  = 1;

$error   = null;
$total   = 0;
$conTel  = 0;

// TODO 3: ???

try {
    $pdo  = DB::conectar();
    $total  = $pdo->query('SELECT COUNT(*) FROM contactos')->fetchColumn();
    $conTel = $pdo->query('SELECT COUNT(*) FROM contactos WHERE telefono IS NOT NULL')->fetchColumn();
} catch (PDOException $e) {
    $error = 'No se pudo conectar a la base de datos.';
}

$archivoActual = 'practica_app/index.php';
require_once __DIR__ . '/includes/header.php';
?>

<?php if ($error): ?>
<div class="alert alert-danger">
  <strong>Error de conexión:</strong> <?= htmlspecialchars($error) ?>
  <hr>
  <p class="mb-0 small">Verifica que MySQL esté activo y que hayas ejecutado <code>sql/setup.sql</code>.</p>
</div>
<?php else: ?>

<!-- TODO 4: Muestra el título "Mi Agenda de Contactos" con un ícono y subtítulo -->
<h1> Mi Agenda de Contactos</h1>
<!-- ??? -->

<!-- TODO 5: Muestra tarjetas con las estadísticas:
     - Total de contactos ($total)
     - Contactos con teléfono ($conTel)
     - Un botón "Ver todos los contactos" que apunte a contactos/index.php
-->
<p>total de contactos <?= $total ?></p>
<p>Contactos con telefono <?= $conTel ?></p>
<a href="contactos/index.php">
    <button type="button">ver contactos</button>
</a>
<!-- ??? -->


<?php endif; ?>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
