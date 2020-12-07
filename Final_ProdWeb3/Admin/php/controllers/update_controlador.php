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
else{ 
    $query = $db->prepare('SELECT * from canciones  WHERE id = :id');
    
    $query->execute([
    ':id' => $_POST["id"]   
    ]); 
    $cancion = $query->fetch(PDO::FETCH_OBJ);
    $portada = $cancion->portada; 
}
$query = $db->prepare('UPDATE canciones SET tema=:tema,duracion=:duracion,portada=:portada,lanzamiento=:lanzamiento,generos_id=:generos_id WHERE id = :id');
$query->execute([
    ':id' => $_POST["id"],
    ':tema' => $_POST["tema"],
    ':duracion' => $_POST["duracion"],
    ':portada' => $_FILES['portada']['name'],
    ':lanzamiento' => $_POST["lanzamiento"],
    ':generos_id' => $_POST["generos_id"]
]);
$_SESSION['alert']=[
    'message'=> "La cancion se edito con exito",
    'type' => 'success'
];
header('location: ../../Admin_songs/index.php');
// if (isset($_FILES['portada']) && $_FILES['portada']['tmp_name']) {
//     $destino = __DIR__ . '../../portadas/';
//     $nombre = uniqid();
//     $ext = pathinfo($_FILES['portada']['name'], PATHINFO_EXTENSION);
//     $portada = "$nombre.$ext";
//     move_uploaded_file($_FILES['portada']['tmp_name'], "$destino$portada");
// }
// else{ 
//     $query = $db->prepare('SELECT * from canciones  WHERE id = :id');
    
//     $query->execute([
//     ':id' => $_POST["id"]   
//     ]); 
//     $cancion = $query->fetch(PDO::FETCH_OBJ);
//     $portada = $cancion->portada; 
// }