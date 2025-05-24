<?php
require_once __DIR__ . '\..\..\..\app\controllers\Beneficiario.Controller.php';
include '../../partials/header.php';
?>

<div class="container col-md-9">
    <h1 class="mb-4">Registrar Beneficiario</h1>
    <form action="../../../app/controllers/Beneficiario.Controller.php" method="POST">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos" required>
            </div>
            <div class="mb-3 col-md-6">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres" id="nombres" required>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-4">
                <label for="dni" class="form-label">DNI</label>
                <input type="number" class="form-control" name="dni" id="dni" maxlength="8" required>
            </div>
            <div class="mb-3 col-md-4">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="number" class="form-control" name="telefono" id="telefono" maxlength="9" required>
            </div>
            <div class="mb-3 col-md-4">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion">
            </div>
        </div>

        <button type="submit" class="btn btn-primary" name="registrar">Guardar</button>
    </form>
</div>
