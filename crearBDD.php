<?php
try {
    // Ruta de la base de datos
    $dbPath = __DIR__ . '/data/asistencias.db';

    // Conectar a la base de datos SQLite
    $conn = new PDO('sqlite:' . $dbPath);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Crear la tabla si no existe
    $sql = "CREATE TABLE IF NOT EXISTS Asistencias (
        id_invitacion INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT NOT NULL,
        telefono INTEGER NOT NULL,
        asistencia TEXT NOT NULL
    )";
    $conn->exec($sql);

    echo "Base de datos y tabla 'Asistencias' creadas correctamente.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>