<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// CONFIGURACION DE LA BASE DE DATOS
include 'db_config.php';

// CONSULTA DE HISTORIAL DE RESERVACIONES DE CLIENTE
$id_usuario = mysqli_real_escape_string($conn, $_SESSION['id_usuario']);

$sql = "SELECT r.ID_Reservacion, r.Fecha_Reserva, r.Tipo_Reserva, r.Hora_Inicio, r.Hora_Finalizado, r.Total, r.TotalCambiado
        FROM Usuario u 
        INNER JOIN Cliente c ON u.ID_Usuario = c.ID_Usuario 
        INNER JOIN Reservacion r ON c.ID_Cliente = r.ID_Cliente 
        WHERE u.ID_Usuario = '$id_usuario'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>
          <tr>
            <th>Numero de reservación</th>
            <th>Fecha de la reservacion</th>
            <th>Tipo de reservacion</th>
            <th>Hora de inicio de evento</th>
            <th>Hora de conclusion de evento</th>
            <th>Costo del evento</th>
            <th>Total que falta a pagar</th>
          </tr>";
          
  // Salida de cada fila
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["ID_Reservacion"].
          "</td><td>".$row["Fecha_Reserva"].
          "</td><td>".$row["Tipo_Reserva"].
          "</td><td>".$row["Hora_Inicio"].
          "</td><td>".$row["Hora_Finalizado"].
          "</td><td>".$row["Total"].
          "</td><td>".$row["TotalCambiado"].
        "</td></tr>";
  }
  echo "</table>";
} else {
  echo "No haz realizado ninguna reservacion, te invitamos a que realices una reservacion.";
}

// CERRAR CONEXION
$conn->close();
?>