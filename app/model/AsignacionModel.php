<?php
require_once "../config/DB.php";
require_once "../model/Asignacion.php";

class ProyectoModel
{
    private $db;
    public function __construct()
    {
        $this->db = DB::conectar();
    }

    public function guardar(Asignacion $asignacion)
    {
        $sql =
            "insert into asignacion (idproyecto, idcliente) values (:idpro, :idcli)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":idpro", $asignacion->getIdproyecto());
        $ps->bindParam(":idcli", $asignacion->getIdcliente());
        $ps->execute();
    }
    public function cargar()
    {
        $sql = "select * from asignacion";
        $ps = $this->db->prepare($sql);
        $ps->execute();
        $filas = $ps->fetchall();
        $asignaciones = [];
        foreach ($filas as $f) {
            $asig = new Asignacion();
            $asig->setIdasignacion($f[0]);
            $asig->setIdproyecto($f[1]);
            $asig->setIdcliente($f[2]);
            array_push($asignaciones, $asig);
        }
        return $asignaciones;
    }

    // TODO: cargar por id
}
?>
