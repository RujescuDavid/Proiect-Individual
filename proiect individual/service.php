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

  <title>Servicii</title>

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

  <!-- service section -->

  <section class="service_section layout_padding ">
    <div class="container">
      <h2 class="custom_heading">Serviciile noastre</h2>
      <p class="custom_heading-text">
        Bănuiesc că ai venit aici pentru a vedea cu ce ne ocupăm, </br>
        așa că iată procesul prin care fructele tale ajung din magazin, direct la ușa casei tale!
      </p>

      <div class=" layout_padding2">
        <div class="card-body">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Alegerea distrubuitorului potrivit!</h5>
              <p class="card-text">
                Alegerea distribuitorului potrivit reprezintă un pas crucial în asigurarea calității și prospețimii produselor noastre.
              </br> Noi investim în relații solide și parteneriate de încredere pentru a selecta distribuitorii care împărtășesc aceeași
               viziune și standarde înalte ca și noi.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Prospețimea chiar din magazin!</h5>
              <p class="card-text">
                La noi, prospețimea nu este doar un cuvânt, ci o realitate. 
              </br>Fie că sunt mere crocante,
                 portocale suculente sau struguri fermi, fiecare fruct își păstrează gustul și textura 
                 pline de vitalitate. 
                 </br>Alegem cu grijă fiecare produs pentru a ne asigura că vă oferim ce e mai bun, aducând prospetimea direct la ușa dvs.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Întreținerea produselor în cea mai bună stare!</h5>
              <p class="card-text">
                Păstrăm fiecare produs în condiții optime, respectând toate necesitățile pentru a-și menține prospețimea și atributele nutritive. 
                Fiecare pas este făcut cu grijă, pentru ca tu, client drag, să primești nu doar un produs, 
              </br>ci o experiență autentică și o gustare plină de savoare.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Alegerea cu grijă a produselor selectate de tine!</h5>
              <p class="card-text">
                La temelia alegerii noastre se află grijă și atenția pentru fiecare detaliu, 
              </br>pentru ca tu, client drag, să primești doar produse de cea mai înaltă calitate. 
            </br>Ne străduim să aducem la tine acasă doar ceea ce am alege 
                și pentru noi înșine – produse proaspete, delicioase și sănătoase.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Împachetarea produselor cu grijă și dragoste!</h5>
              <p class="card-text">
                La noi, fiecare produs este împachetat cu grijă și dedicare,
              </br> gata să-ți ofere o experiență plină de prospețime și frumusețe. 
              </br>Fiecare pas în procesul de împachetare reflectă atenția noastră pentru detalii și dragostea noastră pentru fiecare client.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Alegerea curierului! </h5>
              <p class="card-text">
                Alegerea curierului este un pas esențial în asigurarea că produsele noastre ajung la tine în cea mai proaspătă și sigură stare. 
              </br>Ne străduim să selectăm curieri cu grijă și atenție, cu același nivel de pasiune și angajament pentru prospețime și calitate ca și noi.
              </p>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Bucuria unui client fericit!</h5>
              <p class="card-text">
                Bucuria unui client fericit este sursa noastră de inspirație și motivație. 
              </br>Fiecare zâmbet pe care îl aducem pe fața clienților noștri reprezintă confirmarea că munca noastră și 
              produsele noastre fac o diferență reală în viețile oamenilor.
              </p>
            </div>
          </div>

        </div>
      </div>
      
    </div>
  </section>

  <!-- end service section -->


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



  

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>