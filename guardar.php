<?php
try {
    // Ruta de la base de datos
    $dbPath = __DIR__ . '/data/asistencias.db';

    // Conectar a la base de datos SQLite
    $conn = new PDO('sqlite:' . $dbPath);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Obtener el dato del formulario
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $respuesta = $_POST['respuesta'];

    // Insertar el dato en la tabla 'prueba'
    $sql = "INSERT INTO Asistencias (nombre,telefono,asistencia) VALUES (?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name,$tel,$respuesta]);

    echo "Dato guardado exitosamente en la tabla 'prueba'.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>