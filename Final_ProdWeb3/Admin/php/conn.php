<?php
try {
    $db = new PDO('mysql:dbname=songlist;chartset=UTF-8;host=localhost', 'root', '');
    // echo("todo bien");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    // echo 'La conexion no se pudo realizar';
}
?>