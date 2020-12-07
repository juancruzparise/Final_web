<?php
require __DIR__ . '../../conn.php';
//  Canciones
$query = $db->prepare('SELECT * FROM canciones order by tema');
$query->execute();
$canciones = $query->fetchAll(PDO::FETCH_OBJ);

//  header('location: ../../Canciones.php');