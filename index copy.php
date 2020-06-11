<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Librería</title>
</head>
<body>
    <p>
<?php
if (isset($_COOKIE['username'])) {
    echo "Eres " . $_COOKIE['username'];
} else {
    echo "No estas autenticado.";
}
?>
</p>
<?php
if (isset($_GET['titulo']) && isset($_GET['autor'])) {
?>
    <p>El libro que buscas es:</p>
    <ul>
        <li><b>Titulo</b>: <?php echo $_GET['titulo']; ?></li>
        <li><b>Autor</b>: <?php echo $_GET['autor']; ?></li>
    </ul>
<?php
} else {
?>
    <p>No estas buscando un libro?</p>
<?php
}
?>
</body>
</html>