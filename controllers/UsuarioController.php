<?php
require_once __DIR__ . '/../models/Usuario.php';

class UsuarioController {
    private $db;
    private $usuario;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->usuario = new Usuario($this->db);
    }

    public function index()
    {
        $result = $this->usuario->read();
        return $result;
    }

    public function read($id)
    {
        $this->usuario->id = $id;
        $this->usuario->readOne();

        return $this->usuario;
    }

    public function create($nombre, $email, $password, $rol, $estado, $imagen, $empresa_id) {
        $this->usuario->nombre = $nombre;
        $this->usuario->email = $email;
        $this->usuario->password = $password;
        $this->usuario->rol = $rol;
        $this->usuario->estado = $estado;
        $this->usuario->imagen = $imagen;
        $this->usuario->empresa_id = $empresa_id;

        if ($this->usuario->create()) {
            return true;
        }

        return false;
    }

    public function update($id, $nombre, $email, $password, $rol, $estado, $imagen, $empresa_id)
    {
        $this->usuario->id = $id;
        $this->usuario->nombre = $nombre;
        $this->usuario->email = $email;
        $this->usuario->password = $password;
        $this->usuario->rol = $rol;
        $this->usuario->estado = $estado;
        $this->usuario->imagen = $imagen;
        $this->usuario->empresa_id = $empresa_id;

        if ($this->usuario->update()) {
            return true;
        }

        return false;
    }

    public function delete($id)
    {
        $this->usuario->id = $id;

        if ($this->usuario->delete()) {
            return true;
        }

        return false;
    }
}
