<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h3>Cronograma de pagos</h3>
  <hr>
  <div>
    <table id="tabla-pagos">
      <thead>
        <tr>
          <th>Item</th>
          <th>Fecha pago</th>
          <th>Interés</th>
          <th>Abono capital</th>
          <th>Valor cuota</th>
          <th>Saldo capital</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", async () => {

      async function obtenerCronograma() {

        const params = new URLSearchParams()
        params.append("operation", "creaCronograma")
        params.append("fechaRecibida", "2023-10-10")
        params.append("monto", 3000)
        params.append("tasa", 5)
        params.append("numeroCuotas", 12)

        const response = await fetch(`../../../app/controllers/Pago.Controller.php?${params}`, {
          method: 'GET'
        })
        return await response.text()
      }

      async function renderCronograma() {
        const tabla = document.querySelector("#tabla-pagos tbody")
        tabla.innerHTML = await obtenerCronograma()
      }

      await renderCronograma()
      console.log(await obtenerCronograma());
    })
  </script>

</body>

</html>