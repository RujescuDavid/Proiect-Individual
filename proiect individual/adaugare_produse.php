<?php
// Verifică dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectare la baza de date (actualizează cu detaliile tale)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proiect";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifică dacă conectarea a fost realizată cu succes
    if ($conn->connect_error) {
        die("Conexiunea la baza de date a eșuat: " . $conn->connect_error);
    }

    // Colectare date din formular
    $denumire = $_POST["denumire"];
    $descriere = $_POST["descriere"];
    $pret = $_POST["pret"];
    $imagine = $_POST["imagine"];

    // SQL pentru inserare în baza de date
    $sql = "INSERT INTO StocRomanesti (denumire, descriere, pret, imagine) VALUES ('$denumire', '$descriere', $pret, '$imagine')";

    if ($conn->query($sql) === TRUE) {
        echo "Produs adăugat cu succes!";
    } else {
        echo "Eroare la adăugarea produsului: " . $conn->error;
    }

    // Închide conexiunea la baza de date
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă Produs</title>
</head>
<body>
    <h2>Adaugă un nou produs</h2>

    <form action="insert_product.php" method="post">
        <label for="denumire">Denumire:</label>
        <input type="text" id="denumire" name="denumire" required>

        <label for="descriere">Descriere:</label>
        <textarea id="descriere" name="descriere" required></textarea>

        <label for="pret">Preț:</label>
        <input type="text" id="pret" name="pret" required>

        <label for="imagine">Imagine (Calea către imagine):</label>
        <input type="text" id="imagine" name="imagine" required>

        <button type="submit">Adaugă Produs</button>
    </form>
</body>
</html>
