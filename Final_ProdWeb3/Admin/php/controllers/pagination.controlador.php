<?php

require __DIR__ . '../../conn.php';

require __DIR__ . '/../../models/canciones.model.php';
require __DIR__ . '/../paginador.php';

$cuantos = 5;

$cancion = new Cancion;

$canciones = $cancion->paginate($cuantos);

$total = $cancion->count();

$botones = ceil($total / $cuantos);

require __DIR__ . '../../Canciones.php';


