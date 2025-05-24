<?php
require_once __DIR__ . '/../models/Beneficiario.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registrar'])) {
  $apellidos = $_POST['apellidos'] ?? '';
  $nombres = $_POST['nombres'] ?? '';
  $dni = $_POST['dni'] ?? '';
  $telefono = $_POST['telefono'] ?? '';
  $direccion = $_POST['direccion'] ?? '';

  Beneficiario::registrar($apellidos, $nombres, $dni, $telefono, $direccion);

  header('Location: ../../public/views/index.php');
  exit;
}

$beneficiarios = Beneficiario::obtenerTodos();
