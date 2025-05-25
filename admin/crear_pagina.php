<?php
    include('../includes/db.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST['titulo'];
        $slug = $_POST['slug'];
        $contenido = $_POST['contenido'];

        $sql = "INSERT INTO pages (title, slug, content) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $titulo, $slug, $contenido);
        $stmt->execute();

        echo "Página creada con éxito. <a href='../ver.php?slug=$slug'>Ver página</a>";
    }
    ?>

    <form method="POST">
        <input type="text" name="titulo" placeholder="Título" required><br>
        <input type="text" name="slug" placeholder="Slug (ej: acerca-de)" required><br>
        <textarea name="contenido" placeholder="Contenido HTML" rows="10" cols="50"></textarea><br>
        <button type="submit">Crear Página</button>
    </form>
