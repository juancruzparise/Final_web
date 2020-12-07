<?php
require __DIR__ . '../../conn.php';
 
$query = $db->prepare('SELECT * FROM canciones WHERE id = :id');
$query->execute([
    ':id' => $_GET["id"] ]);
$cancion = $query->fetch(PDO::FETCH_OBJ);

$query=$query ->fetch(PDO::FETCH_OBJ);

$query= $db->prepare ('SELECT * FROM generos');
$query->execute([
    ':id' => $_GET["id"] ]);
$generos=$query ->fetchAll(PDO::FETCH_OBJ);