<?php

class Cancion
{
    private $db;

    public function __construct()
    {
        require __DIR__ . '/../php/conn.php';
    }

    public function all()
    {
        $query = $this->db->prepare('SELECT * from canciones');

        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
                
    public function paginate($cuantos = 9)
    {
        $pagina = $_GET['pagina'] ?? 1;

        $desde = ($pagina -1) * $cuantos;

        $query = $this->db->prepare("SELECT * from canciones limit $cuantos offset $desde");

        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function count()
    {
        $query = $this->db->prepare('SELECT count(id) as total from canciones');

        $query->execute();

        $resultado = $query->fetch(PDO::FETCH_OBJ);

        return $resultado->total;
    }
}
