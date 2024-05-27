<?php
require_once __DIR__ . '/../config/Database.php';

class Usuario
{
    private $conn;
    private $table_name = "usuario";

    public $id;
    public $nombre;
    public $email;
    public $password;
    public $rol;
    public $estado;
    public $imagen;
    public $fecha_creacion;
    public $fecha_ultima_modificacion;
    public $empresa_id;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function create()
    {
        $query = "INSERT INTO " . $this->table_name . " (nombre, email, password, rol, estado, imagen, empresa_id) VALUES (:nombre, :email, :password, :rol, :estado, :imagen, :empresa_id)";
        $stmt = $this->conn->prepare($query);


        $this->nombre = strtoupper(htmlspecialchars(strip_tags($this->nombre)));
        $this->email = strtoupper(htmlspecialchars(strip_tags($this->email)));
        $this->password = strtoupper(htmlspecialchars(strip_tags($this->password)));
        $this->rol = strtoupper(htmlspecialchars(strip_tags($this->rol)));
        $this->estado = strtoupper(htmlspecialchars(strip_tags($this->estado)));
        $this->imagen = strtoupper(htmlspecialchars(strip_tags($this->imagen)));
        $this->empresa_id = strtoupper(htmlspecialchars(strip_tags($this->empresa_id)));


        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $this->password);
        $stmt->bindParam(':rol', $this->rol);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':imagen', $this->imagen);
        $stmt->bindParam(':empresa_id', $this->empresa_id);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function read()
    {
        $query = "SELECT id, nombre, email, password, rol, estado, imagen, fecha_creacion, fecha_ultima_modificacion, empresa_id FROM " . $this->table_name . " ORDER BY fecha_creacion DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function login($email, $password)
    {
        $query = "SELECT * FROM usuario WHERE email=:email AND password=:password";
        $statement = $this->conn->prepare($query);
        $statement->execute(array(':email' => $email, ':password' => $password));
        $user = $statement->fetch(PDO::FETCH_ASSOC);

        return $user;
    }
}
