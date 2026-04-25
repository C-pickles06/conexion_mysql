<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= isset($titulo) ? htmlspecialchars($titulo) . ' — ' : '' ?>Agenda · Práctica MySQL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    /* TODO 29a: Define la variable de color principal de tu app */
    :root { --color: #00758f; }  /* Sugerencia: #00758f o tu color favorito */
    /* TODO 29b: Estilos básicos */
    body { background: #f0f2f5; }
    .navbar { background: var(--color) !important; }
  </style>
</head>
<body>

<!-- TODO 29c: Crea la barra de navegación con Bootstrap.
     Debe incluir:
       - Nombre de la app ("Mi Agenda") con ícono fa-address-book
       - Links: Inicio (index.php), Contactos (contactos/index.php), Agregar (contactos/crear.php)
       - Un badge pequeño indicando "Demo MySQL" o el nombre de tu BD
-->
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
    <!-- ??? -->
     <h1>Mi Agenda</h1>
     <ul>
        <li>
          <a href="/practica_app/index.php">Inicio</a>
        </li>
        <li>
          <a href="/practica_app/contactos/index.php">Contactos</a>
        </li>
        <li>
          <a href="/practica_app/contactos/crear.php">Agregar</a>
        </li>
        
     </ul>
     
  </div>
</nav>

<main class="container my-4">
