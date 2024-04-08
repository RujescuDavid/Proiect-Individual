<?php
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

// Interogare pentru a selecta toate produsele din tabelul StocMagazin
$sql = "SELECT id_produs, denumire, descriere, pret, imagine FROM StocMagazin";
$result = $conn->query($sql);

// Verifică dacă există rezultate
if ($result->num_rows > 0) {
    // Afișează datele într-un mod dorit
    while ($row = $result->fetch_assoc()) {
        echo '<div class="row layout_padding2-top layout_padding-bottom">';
        echo '<div class="col-md-8">';
        echo '<div class="fruit_detail-box">';
        echo '<h3>' . $row['denumire'] . '</h3>';
        echo '<p class="mt-4 mb-5">' . $row['descriere'] . '</p>';
        echo '<div>';
        echo '<a href="" class="custom_dark-btn">Cumpără</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="col-md-4 d-flex justify-content-center align-items-center">';
        echo '<div class="fruit_img-box d-flex justify-content-center align-items-center">';
        echo '<img src="' . $row['imagine'] . '" alt="" class="" width="250px" />';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Nu există produse în baza de date.";
}

// Închide conexiunea la baza de date
$conn->close();
?>
