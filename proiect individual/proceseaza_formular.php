<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proiect";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexiune esuata: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    $sql = "INSERT INTO abonari (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        header("location: index.php");
    } else {
        echo "Eroare la inserare: " . $conn->error;
    }
}
header("location: index.php");

$conn->close();
?>