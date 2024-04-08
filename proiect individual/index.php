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
<!-- FRONT-END -->

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

  <title>FructeLaÎndemână</title>

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
  <div class="hero_area">
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
            <div class="quote_btn-container ml-1 ml-lg-4 d-flex justify-content-center">
              <a href="EasterEgg.php">
                ------
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">

                <div class="container">
                  
                  <div class="row">
                    <div class="col-md-6">
                      <div class="slider_item-detail">
                        <div>
                          <h1>
                            Bine ați venit <br />
                            în paradisul fructelor
                          </h1>
                          <p>
                            Fructele sunt unele din alimentele naturale care ajută la trăirea unei vieți sănătoase și longevive. 
                          </p>
                          <div class="d-flex">
                            <a href="fruit.php" class="text-uppercase custom_orange-btn mr-3">
                              Produse
                            </a>
                            <a href="contact.php" class="text-uppercase custom_dark-btn">
                              Contact
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="slider_img-box">
                        <div>
                          <img src="images/slide-img.png" alt="" class="" />
                        </div>
                      </div>
                    </div>
                  
          
    </section>

    <!-- end slider section -->
  </div>

  <!-- service section -->

  <section class="service_section layout_padding ">
    <div class="container">
      <h2 class="custom_heading">Printre produsele noastre, se pot găsi...</h2>
      <div class=" layout_padding2">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="images/card-item-1.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Portocalele</h5>
              <p class="card-text">
                care sunt o sursă naturală de Vitamina C
              </p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/card-item-2.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Strugurii</h5>
              <p class="card-text">
                care ajuta la reducerea tensiunii arteriale  
              </p>
            </div>
          </div>
          
          <div class="card">
            <img class="card-img-top" src="images/card-item-3.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Merele</h5>
              <p class="card-text">
                care ajută la reglarea glicemiei și controlul diabetului
              </p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/card-item-4.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Perele</h5>
              <p class="card-text">
                care sunt un remediu împotriva reumatismului
              </p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="images/card-item-5.png" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Lămâile</h5>
              <p class="card-text">
                care ajută la creșterea imunității în organism
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- fruits section -->

  <section class="fruit_section">
    <div class="container">
      <h2 class="custom_heading">Fructe Proaspete</h2>
      <p class="custom_heading-text">
        Alege prospețimea, alege fructele noastre!
      </p>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
              Cele mai proaspete portocale!
            </h3>
            <p class="mt-4 mb-5">
              Bucurați-vă de savoarea și prospețimea autentică a soarelui spaniol cu acest lot de portocale proaspete, 
              aduse direct din livezile însorite din inima Spaniei. Fiecare portocală strălucește în culorile vibrante 
              ale unei recolte mândre, gata să vă ofere o explozie de gust și nutriție.
            </p>



            <div>
              <a href="fruit.php" class="custom_dark-btn">
                Cumpără
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="images/orange.png" alt="" class="" width="250px" />
          </div>
        </div>
      </div>
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
              Cei mai fresh struguri!
            </h3>
            <p class="mt-4 mb-5">
              Descoperiți rafinamentul și aroma inconfundabilă a strugurilor românești prin acest lot select de fructe proaspete, 
              provenite din peisajele încântătoare și soarele generos al Romaniei. Fiecare bob de strugure strălucește într-o paletă 
              cromatică ce aduce aminte de peisajele pline de viață din livezile Romanesti.
            </p>
            <div>
              <a href="fruit.php" class="custom_dark-btn">
                Cumpără
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center ">
            <img src="images/grapes1.png" alt="" class="" width="300px" />
          </div>
        </div>
      </div>
      <div class="row layout_padding2-top layout_padding-bottom">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <h3>
              Mere "ca la mama-casă"!
            </h3>
            <p class="mt-4 mb-5">
              Experimentați autenticitatea și prospețimea naturii românești prin acest lot special de mere proaspete, 
              provenite din livezile pline de tradiție și frumusețe ale României. Fiecare măr strălucește în culori vii 
              și arome naturale, reflectând munca harnică și peisajele idilice ale regiunilor agricole românești.
            </p>
            <div>
              <a href="fruit.php" class="custom_dark-btn">
                Cumpără
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="images/apple.png" alt="" class="" width="250px" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end fruits section -->

  <!-- tasty section -->
  <section class="tasty_section">
    <div class="container_fluid">
      <h2>
        Fructe Gustoase
      </h2>
    </div>
  </section>

  <!-- end tasty section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <h2 class="custom_heading">Recenzii</h2>
      <p class="custom_heading-text">
        Iată câteva recenzii de la clienții noștrii fideli!
      </p>
      <div>
        <div id="carouselExampleControls-2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                  <img src="images/client1.png" alt="" />
                </div>
                <div class="client_detail">
                  <h3>
                    Bogdan
                  </h3>
                  <p class="custom_heading-text">
                    Serviciu excelent! Am fost uimită de calitatea fructelor pe care le-am primit. 
                    Au fost perfect coapte și au adus un plus de culoare și gust mesei mele zilnice. Recomand cu încredere acest magazin!
                  </p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                  <img src="images/client2.png" alt="" class="" width="10px"/>
                </div>
                <div class="client_detail">
                  <h3>
                    Maria
                  </h3>
                  <p class="custom_heading-text">
                    Serviciu excelent! Am fost uimită de calitatea fructelor pe care le-am primit. 
                    Au fost perfect coapte și au adus un plus de culoare și gust mesei mele zilnice. Recomand cu încredere acest magazin
                  </p>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="client_container layout_padding2">
                <div class="client_img-box">
                  <img src="images/client3.png" alt="" />
                </div>
                <div class="client_detail">
                  <h3>
                    Ana
                  </h3>
                  <p class="custom_heading-text">
                    Experiență minunată! Am comandat un coș de fructe ca dar pentru ocazia aniversării și a fost un succes total!
                     Fructele erau atât de proaspete și apetisante. Mulțumesc pentru livrarea promptă și fructele delicioase!
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="custom_carousel-control">
            <a class="carousel-control-prev" href="#carouselExampleControls-2" role="button" data-slide="prev">
              <span class="" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls-2" role="button" data-slide="next">
              <span class="" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->


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