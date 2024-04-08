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

// Procesare formular
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])) {
  // Obține datele din formular
  $email = $_POST["email"];

  // Inserare date în baza de date
  $sql = "INSERT INTO abonari (Email) VALUES ('$email')";

  if ($conn->query($sql) === TRUE) {
  } else {
      echo "Eroare la adăugarea datelor: " . $conn->error;
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fructe Citrice</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area sub_pages">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" alt="" /><span>
              FructeLaÎndemână
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item">
                  <a class="nav-link" href="fruit.php"> Fructe</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php"> Servicii </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="cart.php">Coș </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="login.php">Logare </a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ml-0 ml-lg-4 d-flex justify-content-center">
              <a href="EasterEgg.php">
                ------
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

  </div>


  <!-- fruits section -->

  <section class="fruit_section layout_padding-top">
    <div class="container">
      <h2 class="custom_heading">Fructe Citrice</h2>
      <p class="custom_heading-text">
        O Explorare a Prospețimii Soarelui   
      </p>


    <br>
    </br>

    <section class="service_section layout_padding ">
      <div class="container">
        <div class=" layout_padding2">
          <div class="card-deck">
            <a href="citrice.php">
            <div class="card">
              <img class="card-img-top" src="images/card-item-1.png" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Fructe Citrice</h5>
                <p class="card-text">
                  Fructele citrice sunt o categorie vibrantă și revigorantă de fructe recunoscute pentru gustul lor proaspăt și acidul caracteristic.
                </p>
              </div>
              </a>
            </div>

            <a href="sezoniere.php">
            <div class="card">
              <img class="card-img-top" src="images/card-item-2.png" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">Fructe sezoniere</h5>
                <p class="card-text">
                  Recoltate în timpul anumitor perioade ale anului, în funcție de climă și condiții de creștere.
                </p>
              </div>
              </a>
            </div>

            <a href="romanesti.php">
              <div class="card">
                <img class="card-img-top" src="images/romania.png" alt="Card image cap" />
                <div class="card-body align-items-center ">
                 <h5 class="card-title">Fructe Românești</h5>
                <p class="card-text">
                  Fructele românești sunt o colecție diversă și bogată de produse naturale cultivate în diverse regiuni ale României.
                </p>
              </div>
             </a>
            </div>
            

            </div>

            <br>
            </br>
            <br>
            </br>
            <div class="container">
              <h2 class="custom_heading">Fructele noastre</h2>
          

  
    <!-- end service section -->

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
$sql = "SELECT id_produs, denumire, descriere, pret, imagine FROM StocCitrice";
$result = $conn->query($sql);

// Verifică dacă există rezultate
if ($result->num_rows > 0) {
    // Afișează datele într-un mod dorit
    while ($row = $result->fetch_assoc()) {
        echo '<div class="row layout_padding2-top layout_padding-bottom">';
        echo '<div class="col-md-8">';
        echo '<div class="fruit_detail-box">';
        echo '<h3>' . $row['denumire'] . " - " .  $row['pret'] . " lei"  .'</h3>';
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

  <!-- end fruits section -->


  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h5>
            Fructe
          </h5>
          <ul>
            <li>
              Portocale
            </li>
            <li>
              
            </li>
            <li>
              Mere
            </li>
            <li>
              Pere
            </li>
            <li>
              Lămâi
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            Servicii
          </h5>
          <ul>
            <li class="">
              <a class="" href="contact.php">Contacteaza-ne</a>
            </li>
            <li>
              <a class="" href="fruit.php">Cumpără</a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h5>
            
          </h5>
          <ul>
            <li>
             
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <div class="social_container">
            <h5>
            Urmărește-ne
            </h5>
            <div class="social-box">
              <a href="https://www.facebook.com/rujescu.david">
                <img src="images/fb.png" alt="">
              </a>

              
              <a href="https://www.instagram.com/davidrujescu/">
                <img src="images/instagram.png" alt="">
              </a>
              

            </div>
          </div>
          <div class="subscribe_container">
            <h5>
            Abonează-te acum!
            </h5>
            <form method="post" action="">
            <div class="form_container">
                 <input type="email" name="email"  autocomplete="off" required placeholder="john.doe@e-uvt.ro">
                <button type="submit" name="send">
                  Trimite!
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end footer-->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>