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
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Portfolio de Justin Gestiere </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/footer.css" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              PORTFOLIO
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
            <?php
              $currentPage = basename($_SERVER['PHP_SELF']); // Obtenez le nom de la page actuelle
            ?>
              <li class="nav-item <?php if ($currentPage == 'index.php') echo 'active'; ?>"><a class="nav-link" href="index.php">ACCUEIL</a></li>
              <li class="nav-item <?php if ($currentPage == 'synthèse.php') echo 'active'; ?>"><a class="nav-link" href="synthèse.php">Fiche de synthèse</a></li>
              <li class="nav-item <?php if ($currentPage == 'entreprise.php') echo 'active'; ?>"><a class="nav-link" href="entreprise.php">ENTREPRISE</a></li>
              <li class="nav-item <?php if ($currentPage == 'veille.php') echo 'active'; ?>"><a class="nav-link" href="veille.php">VEILLE</a></li>
              <li class="nav-item <?php if ($currentPage == 'réalisations.php') echo 'active'; ?>"><a class="nav-link" href="réalisations.php">RÉALISATIONS</a></li>
              <!-- <li class="nav-item <?php if ($currentPage == 'competences.php') echo 'active'; ?>"><a class="nav-link" href="competences.php">COMPETENCES</a></li> -->
              <li class="nav-item <?php if ($currentPage == 'missions.php') echo 'active'; ?>"><a class="nav-link" href="missions.php">EXERCICES</a></li>
              <!-- <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form> -->
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
</div>
