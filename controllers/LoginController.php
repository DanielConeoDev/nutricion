<?php
require_once __DIR__ . '/../models/Usuario.php';

class LoginController
{
    private $db;
    private $usuario;

    public function __construct()
    {
        $database = new Database(); // Supongo que aquí estás instanciando tu clase Database
        $this->db = $database->getConnection();
        $this->usuario = new Usuario($this->db);
    }

    public function auth($email, $password)
    {
        // Llama al método login del modelo Usuario
        $result = $this->usuario->login($email, $password);

        if ($result) {
            session_start();
            $_SESSION['user'] = $result; // Almacena todos los datos del usuario en la sesión
            header("Location: ../../public/index.php");
            exit(); // Asegura que la redirección se realice correctamente
        } else {
            header("Location: ../login/index.php?msg=error");
            exit(); // Asegura que la redirección se realice correctamente
        }
    }
}
