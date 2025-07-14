<?php
require_once "config/DB.php";
require_once "model/Cliente.php";

class ClienteModel
{
    private $db;
    public function __construct()
    {
        $this->db = DB::conectar();
    }

    public function guardar(Cliente $cliente)
    {
        $sql =
            "insert into cliente (nombres, apellidos, telefono) values (:nom, :apl, :tel)";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":nom", $cliente->getNombres());
        $ps->bindParam(":apl", $cliente->getApellidos());
        $ps->bindParam(":tel", $cliente->getTelefono());
        $ps->execute();
    }
    public function cargar()
    {
        $sql = "select * from cliente";
        $ps = $this->db->prepare($sql);
        $ps->execute();
        $filas = $ps->fetchall();
        $clientes = [];
        foreach ($filas as $f) {
            $cli = new Cliente();
            $cli->setIdcliente($f[0]);
            $cli->setNombres($f[1]);
            $cli->setApellidos($f[2]);
            $cli->setTelefono($f[3]);
            array_push($clientes, $cli);
        }
        return $clientes;
    }
    public function modificar(Cliente $cliente)
    {
        $sql =
            "update cliente set nombres=:nom, apellidos=:apl, telefono=:tel where idcliente=:idc";
        $ps = $this->db->prepare($sql);
        $ps->bindParam(":nom", $cliente->getNombres());
        $ps->bindParam(":apl", $cliente->getApellidos());
        $ps->bindParam(":tel", $cliente->getTelefono());
        $ps->bindParam(":idc", $cliente->getIdcliente());
        $ps->execute();
    }
    public function borrar($idc)
    {
        $sql1 = "delete from asignacion where idcliente=:idc";
        $ps1 = $this->db->prepare($sql1);
        $ps1->bindParam(":idc", $idc);
        $ps1->execute();

        $sql2 = "delete from cliente where idcliente=:idc";
        $ps2 = $this->db->prepare($sql2);
        $ps2->bindParam(":idc", $idc);
        $ps2->execute();
    }
}
?>
