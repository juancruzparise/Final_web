<?php
require __DIR__ . '../../conn.php';

// Canciones
$query = $db->prepare('SELECT * FROM canciones');
$query->execute();
$canciones = $query->fetchAll(PDO::FETCH_OBJ);

// Generos
$query=$db->prepare('SELECT * FROM generos');
$query->execute();
$genero=$query->fetchAll(PDO::FETCH_OBJ);

 