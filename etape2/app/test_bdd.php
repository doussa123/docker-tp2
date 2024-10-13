<?php
$servername = "data";
$username = "root";
$password = "example";
$dbname = "testdb";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Écriture dans la base de données
$sql = "INSERT INTO test_table (name) VALUES ('John Doe')";
$conn->query($sql);

// Lecture de la base de données
$sql = "SELECT id, name FROM test_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Afficher les résultats
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
