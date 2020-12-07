<?php

require __DIR__ . '/../conn.php';
    
$cancion = $_GET['tema'];
  $query = $db->prepare("SELECT * FROM canciones WHERE tema LIKE '%$cancion%'"); 
  $query->execute();
  $canciones = $query->fetchAll(PDO::FETCH_OBJ);

// Generos
$query=$db->prepare('SELECT * FROM generos');
$query->execute();
$generos=$query->fetchAll(PDO::FETCH_OBJ);


