<?php 
require "../modelo/conexion.php";
//capture the data from the form
 $email = $_POST['email'];
$contrasena = $_POST['contrasena'];
 
// Rest of the code...

$sql = "SELECT nombre, telefono, email, contrasena FROM usuarios where email = '$email' ";

echo $result = $conn->query($sql);

// if ($result->num_rows > 0) {
   
//     while ($row = $result->fetch_assoc()) {
//         echo "Nombre: " . $row["nombre"] . "<br>";
//         echo "Teléfono: " . $row["telefono"] . "<br>";
//         echo "Email: " . $row["email"] . "<br>";
//         echo "Contraseña: " . $row["contrasena"] . "<br>";
//         echo "<br>";
//     }
// } else {
//     echo "No se encontraron resultados.";
// }


?>