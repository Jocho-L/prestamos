<?php
require_once __DIR__ . '/../config/Conexion.php';
class Contrato {
    private $db;

    public function __construct() {
        $this->db = Conexion::getConexion();
    }

    public function create($data) {
        $sql = "INSERT INTO contratos 
            (idbeneficiario, montos, interes, fechainicio, diapago, numcuotas, estado, creado) 
            VALUES (:idbeneficiario, :montos, :interes, :fechainicio, :diapago, :numcuotas, :estado, NOW())";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            ':idbeneficiario' => $data['idbeneficiario'],
            ':montos' => $data['montos'],
            ':interes' => $data['interes'],
            ':fechainicio' => $data['fechainicio'],
            ':diapago' => $data['diapago'],
            ':numcuotas' => $data['numcuotas'],
            ':estado' => $data['estado']
        ]);
    }
}
