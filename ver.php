<?php
    include('includes/db.php');

    if (isset($_GET['slug'])) {
        $slug = $_GET['slug'];

        $stmt = $conn->prepare("SELECT * FROM pages WHERE slug = ?");
        $stmt->bind_param("s", $slug);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado->num_rows > 0) {
            $pagina = $resultado->fetch_assoc();
            echo "<h1>{$pagina['title']}</h1>";
            echo $pagina['content'];
        } else {
            echo "Página no encontrada.";
        }
    } else {
        echo "No se especificó una página.";
    }
?>
