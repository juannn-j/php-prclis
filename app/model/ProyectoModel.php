<?php
require_once "../config/DB.php";
require_once "../model/Proyecto.php";

class ProyectoModel
{
    private $db;
    public function __construct()
    {
        $this->db = DB::conectar();
    }

    public function guardar(Proyecto $proyecto)
    {
        $sql =
            "insert into proyecto (nombre, descripcion, fechainicio, fechafinal) values (:nom, :dec, :finit, :fend)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":nom", $proyecto->getNombre());
        $ps->bindParam(":tel", $proyecto->getDescripcion());
        $ps->bindParam(":finit", $proyecto->getFechainicio());
        $ps->bindParam(":fend", $proyecto->getFechafinal());
        $ps->execute();
    }
    public function cargar()
    {
        $sql = "select * from proyecto";
        $ps = $this->db->prepare($sql);
        $ps->execute();
        $filas = $ps->fetchall();
        $proyectos = [];
        foreach ($filas as $f) {
            $pro = new Proyecto();
            $pro->setNombre($f[0]);
            $pro->setDescripcion($f[1]);
            $pro->setFechainicio($f[2]);
            $pro->setFechafinal($f[3]);
            array_push($proyectos, $pro);
        }
        return $proyectos;
    }

    // TODO: borrar, modificar y cargar por id
}
?>
