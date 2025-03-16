<?php
require 'backend/data/conexion.php'; // Asegúrate de que el archivo esté en la ruta correcta
header('Content-Type: application/json');

$db = new Database();
$pdo = $db->getConnection();

if (!isset($_GET["email"]) || !isset($_GET["contrasena"])) {
    echo json_encode(["error" => "Faltan parámetros (email y contrasena)"]);
    exit;
}

$email = trim($_GET["email"]);
$contrasena = $_GET["contrasena"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["error" => "Formato de email inválido"]);
    exit;
}

// Hashear la contraseña
$password_hash = password_hash($contrasena, PASSWORD_DEFAULT);

try {
    $stmt = $pdo->prepare("INSERT INTO usuarios (EMAIL, CONTRASENA) VALUES (:email, :contrasena)");
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":contrasena", $password_hash);
    $stmt->execute();

    echo json_encode(["mensaje" => "Usuario registrado correctamente"]);
} catch (PDOException $e) {
    echo json_encode(["error" => "Error en la base de datos: " . $e->getMessage()]);
}
?>
