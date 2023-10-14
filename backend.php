<?php

include 'database.php';

// Verifica se i dati sono stati inviati tramite POST
if ($_POST) {
    // Recupera i dati dal form
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $messaggio = $_POST["messaggio"];
    $privacy = isset($_POST["privacy"]) ? 1 : 0; // Converte la checkbox in un valore booleano

    
    

    // Inserimento dei dati nella tabella "dati"
    $sql = "INSERT INTO dati (nome, cognome, email, messaggio, privacy) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nome, $cognome, $email, $messaggio, $privacy);

    if ($stmt->execute()) {
        echo "Dati inseriti con successo nel database.";
    } else {
        echo "Errore durante l'inserimento dei dati nel database: " . $conn->error;
    }

    
    $stmt->close();
    
}
?>
