<?php
require_once __DIR__ . '\..\..\app\controllers\Beneficiario.Controller.php';
include  '../partials/header.php';
?>

<div class="col-md-9"> <!-- Contenido principal -->
  <main class="container mt-4"> <!-- Tabla Beneficiarios -->
    <h1 class="text-center mb-4">Beneficiarios</h1>

    <?php if (empty($beneficiarios)): ?>
      <p>No se encontraron beneficiarios.</p>
    <?php else: ?>
      <table id="TblBeneficiarios" class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Apellidos</th>
            <th>Nombres</th>
            <th>DNI</th>
            <th>Teléfono</th>
            <th>Dirección</th>
            <th>Creado</th>
            <th>Modificado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($beneficiarios as $b): ?>
            <tr>
              <td><?= $b['idbeneficiario'] ?></td>
              <td><?= htmlspecialchars($b['apellidos']) ?></td>
              <td><?= htmlspecialchars($b['nombres']) ?></td>
              <td><?= htmlspecialchars($b['dni']) ?></td>
              <td><?= htmlspecialchars($b['telefono']) ?></td>
              <td><?= htmlspecialchars($b['direccion']) ?></td>
              <td><?= $b['creado'] ?></td>
              <td><?= $b['modificado'] ?? '' ?></td>
              <td>
                <a href="detalle.html?id=<?= $b['idbeneficiario'] ?>" class="btn btn-primary btn-sm">Ver</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </main>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $('#TblBeneficiarios').DataTable({
      language: {
        url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json'
      }
    });
  });
</script>

<?php
include  '../partials/footer.php';
?>

</body>

</html>