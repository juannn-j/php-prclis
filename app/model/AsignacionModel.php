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
            "insert into asignacion (fechainicio, fechafinal, idproyecto, idcliente) values (:finit, fend, :idpro, :idcli)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":finit", $asignacion->getFechainicio());
        $ps->bindParam(":fend", $asignacion->getFechafinal());
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
            $asig->setFechainicio($f[1]);
            $asig->setFechafinal($f[2]);
            $asig->setIdproyecto($f[3]);
            $asig->setIdcliente($f[4]);
            array_push($asignaciones, $asig);
        }
        return $asignaciones;
    }
    public function cargarPorProducto($idp)
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
            $asig->setIdproyecto($f[3]);
            $asig->setIdcliente($f[4]);
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
            $asig->setIdproyecto($f[3]);
            $asig->setIdcliente($f[4]);
            array_push($asignaciones, $asig);
        }
        return $asignaciones;
    }
}
?>
