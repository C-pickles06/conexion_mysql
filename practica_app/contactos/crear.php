<?php
/**
 * contactos/crear.php — Formulario de creación e INSERT
 *
 * TODO 16: Recoge los datos del formulario (solo si es POST):
 *           nombre, email, telefono, categoria, notas
 *           Usa trim() para limpiar espacios.
 *
 * TODO 17: Valida los datos:
 *           - nombre: obligatorio, máx 100 caracteres
 *           - email: obligatorio, debe ser email válido (filter_var + FILTER_VALIDATE_EMAIL)
 *           - categoria: debe ser uno de los valores válidos del ENUM
 *           Guarda errores en el array $errores.
 *
 * TODO 18: Si no hay errores, ejecuta el INSERT:
 *           INSERT INTO contactos (nombre, email, telefono, categoria, notas)
 *           VALUES (:nombre, :email, :telefono, :categoria, :notas)
 *           Usa prepare() y execute() con parámetros nombrados.
 *           Después del INSERT exitoso, redirige a ver.php?id={lastInsertId()}&ok=1
 */

require_once __DIR__ . '/../config/db.php';

$titulo        = 'Agregar Contacto';
$nivel         = 2;
$archivoActual = 'practica_app/contactos/crear.php';

$categorias = ['Amigo', 'Familiar', 'Trabajo', 'Otro'];
$errores    = [];
$valores    = ['nombre'=>'', 'email'=>'', 'telefono'=>'', 'categoria'=>'', 'notas'=>''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // TODO 16: Recoger datos
    // ???

    // TODO 17: Validar
    // ???

    if (empty($errores)) {
        try {
            // TODO 18: INSERT con prepared statement
            // ???
        } catch (PDOException $e) {
            $errores[] = 'Error al guardar en la base de datos.';
        }
    }
}

require_once __DIR__ . '/../includes/header.php';
?>

<!-- TODO 19: Crea un formulario Bootstrap con:
     - Campo de texto para nombre
     - Campo email para email
     - Campo de texto para telefono (no obligatorio)
     - Select para categoria (con las opciones de $categorias)
     - Textarea para notas
     - Botón "Guardar contacto" (type="submit") y botón "Cancelar" (link a index.php)
     Si hay $errores, muéstralos en un alert-danger antes del formulario.
     Los campos deben repoblarse con los $valores en caso de error.
     Usa htmlspecialchars() en los values. -->
<!-- ??? -->

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
