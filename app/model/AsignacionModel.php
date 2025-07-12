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
            "insert into asignacion (fechainicio, fechafinal, estado, idproyecto, idcliente) values (:finit, :fend, :est, :idp, :id)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":finit", $asignacion->getFechainicio());
        $ps->bindParam(":fend", $asignacion->getFechafinal());
        $ps->bindParam(":est", $asignacion->getEstado());
        $ps->bindParam(":idp", $asignacion->getIdproyecto());
        $ps->bindParam(":idc", $asignacion->getIdcliente());
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
            $asig->setFechainicio($f[1]);
            $asig->setFechafinal($f[2]);
            $asig->setEstado($f[3]);
            $asig->setIdproyecto($f[4]);
            $asig->setIdcliente($f[5]);
            array_push($asignaciones, $asig);
        }
        return $asignaciones;
    }
    public function modificar(Asignacion $asignacion)
    {
        $sql =
            "update asignacion set fechainicio=:finit, fechafinal=:fend, estado=:est, idproyecto=:idp, idcliente=:idc where idasignacion=:ida";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":finit", $asignacion->getFechainicio());
        $ps->bindParam(":fend", $asignacion->getFechafinal());
        $ps->bindParam(":est", $asignacion->getEstado());
        $ps->bindParam(":idp", $asignacion->getIdproyecto());
        $ps->bindParam(":idc", $asignacion->getIdcliente());
        $ps->bindParam(":ida", $asignacion->getIdasignacion());
        $ps->execute();
    }
    public function cargarPorProyecto($idp)
    {
        $sql = "select * from asignacion where idproducto=:idp";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":idp", $idp);
        $ps->execute();
        $filas = $ps->fetchall();
        $asignaciones = [];
        foreach ($filas as $f) {
            $asig = new Asignacion();
            $asig->setIdasignacion($f[0]);
            $asig->setFechainicio($f[1]);
            $asig->setFechafinal($f[2]);
            $asig->setEstado($f[3]);
            $asig->setIdproyecto($f[4]);
            $asig->setIdcliente($f[5]);
            array_push($asignaciones, $asig);
        }
        return $asignaciones;
    }
    public function cargarPorCliente($idc)
    {
        $sql = "select * from asignacion where idcliente=:idc";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":idc", $idc);
        $ps->execute();
        $filas = $ps->fetchall();
        $asignaciones = [];
        foreach ($filas as $f) {
            $asig = new Asignacion();
            $asig->setIdasignacion($f[0]);
            $asig->setFechainicio($f[1]);
            $asig->setFechafinal($f[2]);
            $asig->setEstado($f[3]);
            $asig->setIdproyecto($f[4]);
            $asig->setIdcliente($f[5]);
            array_push($asignaciones, $asig);
        }
        return $asignaciones;
    }
}
?>
