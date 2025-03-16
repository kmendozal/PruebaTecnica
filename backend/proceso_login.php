<?php
require 'login.php';

$datosRecibidos = json_decode(file_get_contents("php://input"), true);

if (!isset($datosRecibidos['email']) || !isset($datosRecibidos['contrasena'])) {
    echo json_encode(["error" => "Faltan datos"]);
    exit;
}

if (!filter_var($datosRecibidos['email'], FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["error" => "El correo electrónico no es válido"]);
    exit;
}

// Validar que la contraseña tenga al menos 6 caracteres
if (strlen($datosRecibidos['contrasena']) < 6) {
    echo json_encode(["error" => "La contraseña debe tener al menos 6 caracteres"]);
    exit;
}

$auth = new Auth();
echo $auth->login($datosRecibidos['email'], $datosRecibidos['contrasena']);
?>
