<?php
require __DIR__ . '/../conn.php';

// preparar
if (isset( $_GET['id'])) {
    $sql = 'SELECT * FROM canciones where id = ' . $_GET['id'];
} else {
    $sql = 'SELECT * FROM canciones';
}

$query = $db->prepare($sql); //PDOStatement
$query->execute([
    ':id' => $_GET["id"] ]);
$canciones = $query->fetchAll(PDO::FETCH_OBJ);

$sql = 'SELECT * FROM generos';
$query = $db->prepare($sql); 
$query->execute();
$generos = $query->fetchAll(PDO::FETCH_OBJ);
