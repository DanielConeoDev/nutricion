<?php
require_once __DIR__ . '/../config/Database.php';

class Usuario
{
    private $conn;
    private $table_name = "usaurio";

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
        $query = "INSERT INTO " . $this->table_name . " (nit, nombre, estado, telefono, email, prefijo) VALUES (:nit, :nombre, :estado, :telefono, :email, :prefijo)";
        $stmt = $this->conn->prepare($query);

        // Convertir a mayúsculas y sanitizar los valores
        $this->id = strtoupper(htmlspecialchars(strip_tags($this->id)));
        $this->nombre = strtoupper(htmlspecialchars(strip_tags($this->nombre)));
        $this->email = strtoupper(htmlspecialchars(strip_tags($this->email)));
        $this->password = strtoupper(htmlspecialchars(strip_tags($this->password)));
        $this->email = strtoupper(htmlspecialchars(strip_tags($this->email)));
        $this->rol = strtoupper(htmlspecialchars(strip_tags($this->rol)));
        $this->estado = strtoupper(htmlspecialchars(strip_tags($this->estado)));
        $this->imagen = strtoupper(htmlspecialchars(strip_tags($this->imagen)));
        $this->fecha_creacion = strtoupper(htmlspecialchars(strip_tags($this->fecha_creacion)));
        $this->fecha_ultima_modificacion = strtoupper(htmlspecialchars(strip_tags($this->fecha_ultima_modificacion)));
        $this->empresa_id = strtoupper(htmlspecialchars(strip_tags($this->empresa_id)));

        $stmt->bindParam(':id', $this->id);
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
        $query = "SELECT nit, nombre, estado, telefono, email, prefijo, fecha_creacion, fecha_ultima_modificacion FROM " . $this->table_name . " ORDER BY fecha_creacion DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    public function readOne()
    {
        $query = "SELECT nit, nombre, estado, telefono, email, prefijo, fecha_creacion, fecha_ultima_modificacion FROM " . $this->table_name . " WHERE nit = ? LIMIT 0,1";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->nit);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->nit = $row['nit'];
        $this->nombre = $row['nombre'];
        $this->estado = $row['estado'];
        $this->telefono = $row['telefono'];
        $this->email = $row['email'];
        $this->prefijo = $row['prefijo'];
        $this->fecha_creacion = $row['fecha_creacion'];
        $this->fecha_ultima_modificacion = $row['fecha_ultima_modificacion'];
    }

    public function update()
    {
        $query = "UPDATE " . $this->table_name . " SET nombre = :nombre, estado = :estado, telefono = :telefono, email = :email, prefijo = :prefijo WHERE nit = :nit";
        $stmt = $this->conn->prepare($query);

        // Convertir a mayúsculas y sanitizar los valores
        $this->nombre = strtoupper(htmlspecialchars(strip_tags($this->nombre)));
        $this->estado = strtoupper(htmlspecialchars(strip_tags($this->estado)));
        $this->telefono = strtoupper(htmlspecialchars(strip_tags($this->telefono)));
        $this->email = strtoupper(htmlspecialchars(strip_tags($this->email)));
        $this->prefijo = strtoupper(htmlspecialchars(strip_tags($this->prefijo)));
        $this->nit = strtoupper(htmlspecialchars(strip_tags($this->nit)));

        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':estado', $this->estado);
        $stmt->bindParam(':telefono', $this->telefono);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':prefijo', $this->prefijo);
        $stmt->bindParam(':nit', $this->nit);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }

    public function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE nit = ?";
        $stmt = $this->conn->prepare($query);

        $this->nit = htmlspecialchars(strip_tags($this->nit));

        $stmt->bindParam(1, $this->nit);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
