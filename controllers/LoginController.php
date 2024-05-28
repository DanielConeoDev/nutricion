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
        // Si el usuario está activo
        if ($result['estado'] == 'ACTIVO') {
            session_start();
            $_SESSION['user'] = $result; // Almacena todos los datos del usuario en la sesión
            header("Location: ../../public/index.php");
            exit(); // Asegura que la redirección se realice correctamente
        } else {
            // Si el usuario no está activo
            header("Location: ../login/index.php?msg=no_activo");
            exit(); // Asegura que la redirección se realice correctamente
        }
    } else {
        // Si el email y/o contraseña son incorrectos
        header("Location: ../login/index.php?msg=incorrecto");
        exit(); // Asegura que la redirección se realice correctamente
    }
}

}
