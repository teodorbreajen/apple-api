<?php
// Interfaz HTML bonita para tu API
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>API Apple Scraped</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f5f5f7;
        margin: 0;
        padding: 40px;
        color: #333;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .container {
        max-width: 700px;
        margin: auto;
        background: white;
        padding: 25px;
        border-radius: 14px;
        box-shadow: 0 4px 14px rgba(0,0,0,0.1);
    }

    .endpoint {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid #ddd;
        border-radius: 10px;
        background: #fafafa;
    }

    .endpoint a {
        display: inline-block;
        margin-top: 10px;
        background: #0071e3;
        padding: 10px 16px;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: 0.2s;
    }

    .endpoint a:hover {
        background: #005bb5;
    }

    footer {
        margin-top: 20px;
        text-align: center;
        font-size: 12px;
        color: #666;
    }

</style>
</head>
<body>

<div class="container">
    <h1> API Apple Scraped</h1>
    <p>Selecciona un endpoint para ver los datos:</p>

    <div class="endpoint">
        <h3>/api/sections.php</h3>
        <p>Lista de secciones/categorías (Tienda, Mac, iPad…)</p>
        <a href="sections.php" target="_blank">Probar endpoint</a>
    </div>

    <div class="endpoint">
        <h3>/api/products.php</h3>
        <p>Lista de productos scrapeados (iPhone 17 Pro, MacBook, Watch…)</p>
        <a href="products.php" target="_blank">Probar endpoint</a>
    </div>

    <div class="endpoint">
        <h3>/api/products.php?id=1</h3>
        <p>Obtener un solo producto por ID</p>
        <a href="products.php?id=1" target="_blank">Probar endpoint</a>
    </div>

    <div class="endpoint">
        <h3>/api/images.php</h3>
        <p>Lista de todas las imágenes encontradas</p>
        <a href="images.php" target="_blank">Probar endpoint</a>
    </div>

    <div class="endpoint">
        <h3>/api/links.php</h3>
        <p>Lista de todos los enlaces externos</p>
        <a href="links.php" target="_blank">Probar endpoint</a>
    </div>

</div>

<footer>
    API creada para aprendizaje – Hostinger + PHP + MySQL
</footer>

</body>
</html>
