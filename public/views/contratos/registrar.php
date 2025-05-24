<?php
require_once __DIR__ . '\..\..\..\app\controllers\Contrato.Controller.php';
include '../../partials/header.php';

$controller = new ContratoController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $exito = $controller->registrarContrato($_POST);
    if ($exito) {
        echo "<div class='alert alert-success'>Contrato registrado correctamente.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error al registrar contrato.</div>";
    }
}

$beneficiarios = $controller->listarBeneficiarios();
?>

<!-- CSS Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

<div class="container col-md-8">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Registrar Contrato</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="">
                <div class="mb-3">
                    <label for="idbeneficiario" class="form-label">Beneficiario</label>
                    <select class="form-select" id="idbeneficiario" name="idbeneficiario" required style="width:100%">
                        <option value="">Seleccione un beneficiario</option>
                        <?php foreach ($beneficiarios as $b): ?>
                            <option value="<?= $b['idbeneficiario'] ?>"><?= htmlspecialchars($b['nombre']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="montos" class="form-label">Monto del préstamo (S/)</label>
                    <input type="number" step="0.01" class="form-control" id="montos" name="montos" required>
                </div>

                <div class="mb-3">
                    <label for="interes" class="form-label">Interés (%)</label>
                    <input type="number" step="0.01" class="form-control" id="interes" name="interes" required>
                </div>

                <div class="mb-3">
                    <label for="fechainicio" class="form-label">Fecha de inicio</label>
                    <input type="date" class="form-control" id="fechainicio" name="fechainicio" required>
                </div>

                <div class="mb-3">
                    <label for="diapago" class="form-label">Día de pago (1-31)</label>
                    <input type="number" class="form-control" id="diapago" name="diapago" min="1" max="31" required>
                </div>

                <div class="mb-3">
                    <label for="numcuotas" class="form-label">Número de cuotas (meses)</label>
                    <input type="number" class="form-control" id="numcuotas" name="numcuotas" min="1" required>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado</label>
                    <select class="form-select" id="estado" name="estado" required>
                        <option value="ACT" selected>Activo</option>
                        <option value="FIN">Finalizado</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Registrar Contrato</button>
            </form>
        </div>
    </div>
</div>

<!-- JS Select2 y Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    $('#idbeneficiario').select2({
        placeholder: "Seleccione un beneficiario",
        allowClear: true
    });
});
</script>