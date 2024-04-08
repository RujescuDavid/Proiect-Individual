<?php
// Conectare la baza de date
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proiect";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificare conexiune
if ($conn->connect_error) {
    die("Conexiune esuata: " . $conn->connect_error);
}

// Procesare formular de înregistrare
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $nume = mysqli_real_escape_string($conn, $_POST["nume"]);
    $prenume = mysqli_real_escape_string($conn, $_POST["prenume"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $parola = password_hash(mysqli_real_escape_string($conn, $_POST["parola"]), PASSWORD_DEFAULT);

    // Inserare utilizator în baza de date folosind prepared statements
    $stmt = $conn->prepare("INSERT INTO utilizatori (Nume, Prenume, Email, Parola) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nume, $prenume, $email, $parola);

    if ($stmt->execute()) {
        echo "Utilizator înregistrat cu succes!";
    } else {
        echo "Eroare la înregistrare: " . $stmt->error;
    }
    $stmt->close();
}

// Procesare formular de login
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $parola = mysqli_real_escape_string($conn, $_POST["parola"]);

    // Verificare credențiale în baza de date folosind prepared statements
    $stmt = $conn->prepare("SELECT * FROM Utilizatori WHERE Email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($parola, $row["Parola"])) {
            echo "Autentificare reușită!";
        } else {
            echo "Parolă incorectă!";
        }
    } else {
        echo "Utilizatorul nu există!";
    }
    $stmt->close();
}

$conn->close();
?>
