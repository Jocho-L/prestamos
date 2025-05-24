<?php

require_once __DIR__ . "/Server.php"; // Usa "/" en lugar de "\" para rutas

const METHOD = "AES-256-CBC";
const SECRET_KEY = "_H0T3L@DB."; // Ofuscando la clave
const SECRET_IV = "037970";

class Conexion {
    private static $instancia = null;
    private $conexion;

    // Constructor privado para el patrón Singleton
    private function __construct() {
        try {
            $this->conexion = new PDO(SGBD, USER, PASS);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion->exec("SET NAMES 'utf8'");
        } catch (PDOException $e) {
            error_log("Error de conexión: " . $e->getMessage());
            die("Error al conectar a la base de datos.");
        }
    }

    // Devuelve la instancia completa (si se necesita la clase)
    public static function getInstancia() {
        if (self::$instancia === null) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    // Devuelve directamente la conexión PDO
    public static function getConexion() {
        return self::getInstancia()->conexion;
    }
}
