<?php
require __DIR__ . '../../conn.php';
$query = $db->prepare('DELETE FROM canciones WHERE id=:id');
$query->execute([ ':id'=> $_GET["id"]]);


$_SESSION['message'] = "Cancion eliminada";
$_SESSION['msg_type'] = "success";
header('location: ../../Admin/Admin_songs/index.php');
?>
