<?php
/**
 * contactos/index.php — Lista todos los contactos
 *
 * TODO 6: Carga config/db.php con require_once (ruta correcta: __DIR__ . '/../config/db.php')
 * TODO 7: Obtén el filtro de categoría desde $_GET['cat'] (usa '' si no existe)
 * TODO 8: En un bloque try/catch:
 *           a) Conecta con DB::conectar()
 *           b) Obtén la lista de categorías únicas:
 *                SELECT DISTINCT categoria FROM contactos ORDER BY categoria
 *                Usa fetchAll(PDO::FETCH_COLUMN) para tener un array simple
 *           c) Si hay filtro de categoría:
 *                SELECT * FROM contactos WHERE categoria = ? ORDER BY nombre
 *                Usa prepare() y execute([$categoriaFiltro])
 *              Si no hay filtro:
 *                SELECT * FROM contactos ORDER BY nombre
 *                Puedes usar query()
 *           d) Usa fetchAll() para traer todos los contactos a $contactos
 *           e) Si hay PDOException, guarda en $error
 */

// TODO 6: ???
$titulo        = 'Mis Contactos';
$nivel         = 2;
$archivoActual = 'practica_app/contactos/index.php';

// TODO 7: ???
$categoriaFiltro = $_GET['cat'] ?? '';
$error           = null;
$contactos       = [];
$categorias      = [];

// TODO 8: ???

try {
  $pdo = DB::conectar();
  $categorias = $pdo
    ->query('SELECT DISTINCT categoria from contactos ORDER BY categoria')
    ->fetchAll(PDO::FETCH_COLUMN);
  
  if ($categoriaFiltro) {
    $stmtCount = $pdo -> prepare('SELECT COUNT(*) FROM contactos WHERE categoria = ?');
    $stmtCount->execute([$categoriaFiltro]);
  }else {
    $stmtCount = $pdo->query('SELECT COUNT(*) FROM productos');
  }
  $total = $stmtCount->fetchColumn();
  $paginas = (int)ceil($total / $porPagina);
} catch (\Throwable $th) {
  //throw $th;
}
?>

<!-- TODO 9: Muestra el título "Mis Contactos" y un botón "Agregar contacto"
     que apunte a crear.php -->
<!-- ??? -->

<!-- TODO 10: Muestra botones de filtro por categoría:
     - Botón "Todos" → apunta a index.php (activo si $categoriaFiltro está vacío)
     - Un botón por cada $categoria en $categorias → apunta a ?cat=CATEGORIA
       (activo si $categoriaFiltro === $categoria)
     Tip: urlencode($cat) en el href, htmlspecialchars($cat) en el texto -->
<!-- ??? -->

<?php if ($error): ?>
  <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
<?php elseif (empty($contactos)): ?>
  <!-- TODO 11: Muestra un mensaje de alerta si no hay contactos -->
  <!-- ??? -->
<?php else: ?>

<!-- TODO 12: Muestra una cuadrícula de tarjetas (row g-4, col-sm-6 col-lg-4).
     Cada tarjeta debe mostrar:
       - La categoría como badge de color
       - El nombre del contacto (escapado con htmlspecialchars)
       - El email con ícono fa-envelope
       - El teléfono si existe, o "Sin teléfono" en gris si es null
       - Un botón "Ver" → ver.php?id={id}
       - Un botón ícono de editar → editar.php?id={id}
       - Un botón ícono de eliminar → eliminar.php?id={id}
     REGLA: usa htmlspecialchars() en TODOS los valores del usuario -->
<!-- ??? -->

<?php endif; ?>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
