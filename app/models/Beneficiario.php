<?php
require_once __DIR__ . '/../config/Conexion.php';

class Beneficiario {
  public static function obtenerTodos() {
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
}
