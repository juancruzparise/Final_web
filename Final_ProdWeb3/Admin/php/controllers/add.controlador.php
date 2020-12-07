<?php
session_start();
require __DIR__ . '/../conn.php';

if (isset($_FILES['portada']) && $_FILES['portada']['name']) {
    $nombre=uniqid() .'.'. pathinfo($_FILES["image"] ["name"],PATHINFO_EXTENSION);
    $destino = '../../../Portadas/';
    $ext = pathinfo($_FILES['portada']['name'], PATHINFO_EXTENSION);
    $portada = $_FILES['portada']['name'];
    move_uploaded_file($_FILES['portada']['tmp_name'], "$destino$portada");
}
else
{
    $portada = "";
}
$sql='INSERT INTO canciones (id,tema,duracion,lanzamiento,generos_id,portada) VALUES (:id,:tema,:duracion,:lanzamiento,:generos_id,:portada)';
$query= $db->prepare($sql);
$query->execute([
    ':id' => $_POST["id"],
    ':tema' => $_POST["tema"],
    ':duracion' => $_POST["duracion"],
    ':portada' => $_FILES['portada']['name'],
    ':lanzamiento' => $_POST["lanzamiento"],
    ':generos_id' => $_POST["generos_id"]
]);
$_SESSION['alert']=[
    'message'=> "La cancion se Agregó con exito",
    'type' => 'success'
];
header('location: ../../Admin_songs/index.php');