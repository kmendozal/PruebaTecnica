<?php
require '../vendor/autoload.php';
require 'data/conexion.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Auth {
    private $db;
    private $key = "clave_super_secreta"; 

    public function __construct() {
        $this->db = new Database();
    }

    public function login($email, $contrasena) {

        $stmt = $this->db->query("SELECT id, email, contrasena FROM usuarios WHERE email = ?", [$email]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC); // Convertir el resultado en un array asociativo

        if (!$usuario) {
            return json_encode(["error" => "Usuario no encontrado"]);
        }

        // Verificar la contraseña (suponiendo que está hasheada con password_hash)
        if (!password_verify($contrasena, $usuario['contrasena'])) {
            return json_encode(["error" => "Contraseña incorrecta"]);
        }

        // Generar el JWT
        $payload = [
            "iat" => time(),                
            "exp" => time() + 3600,       
            "sub" => $usuario['id'],      
            "nombre" => $usuario['email'],
            "contrasena" => $usuario['contrasena']
        ];

        $jwt = JWT::encode($payload, $this->key, 'HS256');

        return json_encode(["token" => $jwt]);
    }
}
?>
