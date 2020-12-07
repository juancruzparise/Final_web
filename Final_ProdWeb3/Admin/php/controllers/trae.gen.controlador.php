<?php
require __DIR__ . '/../conn.php';

// preparar
if (isset( $_GET['generos_id'])) {
    $sql = 'SELECT * FROM canciones where generos_id = ' . $_GET['generos_id'];
}
 else {
    $sql = 'SELECT * FROM canciones';
    // $sql = 'SELECT * FROM canciones LIMIT 12 OFFSET 13';

}

$query = $db->prepare($sql); //PDOStatement

$query->execute();

$canciones = $query->fetchAll(PDO::FETCH_OBJ);


$sql = 'SELECT * FROM generos';
$query = $db->prepare($sql); 
$query->execute();
$generos = $query->fetchAll(PDO::FETCH_OBJ);