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

// Procesare formular
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
  // Obține datele din formular
  $nume = $_POST["nume"];
  $numarTelefon = $_POST["numar_telefon"];
  $email = $_POST["email"];
  $mesaj = $_POST["mesaj"];

  // Inserare date în baza de date
  $sql = "INSERT INTO Contacte (Nume, NumarTelefon, Email, Mesaj) VALUES ('$nume', '$numarTelefon', '$email', '$mesaj')";

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

  <title>Contact</title>

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



  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="container">
    <br>
      </br>
      <h2 class="font-weight-bold">
        Contactează-ne
      </h2>
      <br>
      </br>
      <div class="row">
        <div class="col-md-8 mr-auto">
          <form method="post"  action="">
            <div class="contact_form-container">
              <div>

                <div>
                  <input type="nume" name="nume"  autocomplete="off" required placeholder="Nume">
                </div>
                <div>
                  <input type="numar" name="numar_telefon"  autocomplete="off" required placeholder="Numar de telefon">
                </div>
                <div>
                  <input type="email" name="email"  autocomplete="off" required placeholder="Email">
                </div>
                <div>
                  <input type="mesaj" name="mesaj"  autocomplete="off" required placeholder="Mesaj">
                </div>
               
                <div class="mt-5">
                 <br>
                 </br>
                  <button type="submit" name="register">
                    Trimite!
                  </button>
                </div>
              </div>

            </div>

          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


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
              <a class="" href="contact.php">Contactează-ne</a>
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



  <!-- footer section -->
  <section class="container-fluid footer_section">
  
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>