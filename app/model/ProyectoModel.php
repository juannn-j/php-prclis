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
        $sql = "insert into proyecto (nombre, descripcion) values (:nom, :dec)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":nom", $proyecto->getNombre());
        $ps->bindParam(":dec", $proyecto->getDescripcion());
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
            $pro->setIdproyecto($f[0]);
            $pro->setNombre($f[1]);
            $pro->setDescripcion($f[2]);
            array_push($proyectos, $pro);
        }
        return $proyectos;
    }
    public function modificar(Proyecto $proyecto)
    {
        $sql =
            "update proyecto set nombre=:nom, descripcion=:dec where idproyecto=:idp";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":nom", $proyecto->getNombre());
        $ps->bindParam(":dec", $proyecto->getDescripcion());
        $ps->bindParam(":idp", $proyecto->getIdproyecto());
        $ps->execute();
    }
    public function borrar(Proyecto $proyecto)
    {
        $sql1 = "delete from asignacion where idproyecto=:idp";
        $ps1 = $this->db->prepare($sql1);
        $ps1->bindParam(":idp", $proyecto->getIdproyecto());
        $ps1->execute();

        $sql2 = "delete from proyecto where idproyecto=:idp";
        $ps2 = $this->db->prepare($sql2);
        $ps2->bindParam(":idp", $proyecto->getIdproyecto());
        $ps2->execute();
    }
}
?>
