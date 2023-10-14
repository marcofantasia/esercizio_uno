<?php
// Includi il file di connessione al database
include 'database.php';

// Crea una tabella chiamata "dati" nel database "users"
$sql = "CREATE TABLE IF NOT EXISTS users.dati (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    cognome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    messaggio TEXT NOT NULL,
    privacy TINYINT(1) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "La tabella 'dati' è stata creata con successo.";
} else {
    echo "Errore durante la creazione della tabella: " . $conn->error;
}

// Chiudi la connessione al database
$conn->close();
?>

