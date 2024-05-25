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

    public function create($id, $nombre, $email, $password, $rol, $estado, $imagen, $empresa_id) {
        $this->usuario->id = $id;
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
}
