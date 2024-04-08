<?php
// Configurare conexiune la baza de date
$servername = "localhost"; // poți să schimbi asta în funcție de serverul tău MySQL
$username = "root"; // username-ul pentru baza de date
$password = ""; // parola pentru baza de date
$dbname = "proiect"; // numele bazei de date

// Crează conexiunea
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifică conexiunea
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

// Verifică dacă s-au primit date prin POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Preia datele din formular
    $product_name = $_POST["product_name"];
    $price = $_POST["price"];

    // Preparează și execută instrucțiunea SQL pentru a adăuga produsul în baza de date
    $sql = "INSERT INTO cos (product_name, price) VALUES ('$product_name', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Produsul a fost adăugat cu succes!";
    } else {
        echo "Eroare la adăugarea produsului: " . $conn->error;
    }
}

// Închide conexiunea
$conn->close();
?>
