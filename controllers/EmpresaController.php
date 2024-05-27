<?php
require_once __DIR__ . '/../models/Empresa.php';


class EmpresaController
{
    private $db;
    private $empresa;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->empresa = new Empresa($this->db);
    }

    public function index()
    {
        $result = $this->empresa->read();
        return $result;
    }

    public function indexSelectActive()
    {
        $result = $this->empresa->readSelectActive();
        return $result;
    }

    public function create($nit, $nombre, $estado, $telefono, $email, $prefijo)
    {
        $this->empresa->nit = $nit;
        $this->empresa->nombre = $nombre;
        $this->empresa->estado = $estado;
        $this->empresa->telefono = $telefono;
        $this->empresa->email = $email;
        $this->empresa->prefijo = $prefijo;

        if ($this->empresa->create()) {
            return true;
        }

        return false;
    }

    public function readNit($nit)
    {
        $empresaData = $this->empresa->readOne($nit);

        if ($empresaData) {
            return $empresaData; // Devuelve los datos de la empresa si se encontraron
        } else {
            return null; // Devuelve null si no se encontraron empresas
        }
    }

    public function update($nit, $nombre, $estado, $telefono, $email, $prefijo)
    {
        $this->empresa->nit = $nit;
        $this->empresa->nombre = $nombre;
        $this->empresa->estado = $estado;
        $this->empresa->telefono = $telefono;
        $this->empresa->email = $email;
        $this->empresa->prefijo = $prefijo;

        if ($this->empresa->update()) {
            return true;
        }

        return false;
    }

    public function delete($nit)
    {
        $this->empresa->nit = $nit;

        if ($this->empresa->delete()) {
            return true;
        }

        return false;
    }
}
