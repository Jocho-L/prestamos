<?php
require_once __DIR__ . '/../config/Conexion.php';

class Beneficiario
{

  private $db;

  public function __construct()
  {
    $this->db = Conexion::getConexion();
  }
  public static function obtenerTodos()
  {
    $conexion = Conexion::getConexion();

    $sql = "SELECT
              idbeneficiario,
              apellidos,
              nombres,
              dni,
              telefono,
              direccion,
              creado,
              modificado
            FROM beneficiarios";

    try {
      $stmt = $conexion->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
      // Log o manejo de errores centralizado
      return [];
    }
  }
  public static function registrar($apellidos, $nombres, $dni, $telefono, $direccion)
  {
    $conexion = Conexion::getConexion();

    $sql = "INSERT INTO beneficiarios (apellidos, nombres, dni, telefono, direccion, creado)
          VALUES (?, ?, ?, ?, ?, NOW())";

    try {
      $stmt = $conexion->prepare($sql);
      return $stmt->execute([$apellidos, $nombres, $dni, $telefono, $direccion]);
    } catch (Exception $e) {
      return false;
    }
  }

  public function getAll()
  {
    $sql = "SELECT idbeneficiario, CONCAT(apellidos, ', ', nombres) AS nombre FROM beneficiarios ORDER BY apellidos";
    $stmt = $this->db->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
