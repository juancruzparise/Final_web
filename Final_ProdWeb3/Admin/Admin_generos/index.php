<?php
require __DIR__ . '/../php/conn.php';

$sql = 'SELECT * FROM generos';
$query = $db->prepare($sql); 
$query->execute();
$generos = $query->fetchAll(PDO::FETCH_OBJ);

?>