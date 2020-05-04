<!doctype html>
<html lang="fr">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="author" content="Marion JOLY, Noémie CLAUDE, Jade GUEHOUN" />
  <meta name="copyright" content="Les Bavardes Amiens" />
  <meta name="description"
    content="Les Bavardes Amiens collectif lesbien et féministe engagées pour la visibilité de toutes les femmes et dans les luttes lgbtqi+" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- styles CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/equipe.css">

  <!-- icone de l'onglet -->
  <link rel="icon" href="assets/img/logo_bavardes.ico" />

  <!-- polices 'Quicksand' et 'Concert One' -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

  <?php if($ma_pages == 'index'){ ?>
      <title>Accueil | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'about') {    ?>
      <title>Qui sommes nous? | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'equipe') {    ?>
      <title>L'Equipe | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'event') {    ?>
      <title>Nos événements | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'collaboration') {    ?>
      <title>Nos Collaborations | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'artistes') {    ?>
      <title>Artistes et Intervenantes | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'podcasts') {    ?>
      <title>Nous Ecouter | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'mentions') {    ?>
      <title>Mentions Légales | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'politique') {    ?>
      <title>RGPD | Les Bavardes Amiens</title>
  <?php  } else {?>
      <title>Les Bavardes Amiens</title>
  <?php  } ?>


  <title>Les Bavardes à Amiens</title>
</head>

<body>

  <div class="container-fluid">
    <header>
    
      <!-- ------------------------------------------------------------------------------------------------------------------------ -->
      <!-- Navbar -->
      <!-- ------------------------------------------------------------------------------------------------------------------------ -->
      <!-- Accueil -->


      <div class="row">

        <div class="col-sm-12 col-lg-12">

          <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4" id="navBar">
            <div class="col-lg-12 col-md-12">

              <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand pl-3 pr-5" href="index.php">
                  <img src="assets/img/logo.png" width="" height="80" class="d-inline-block align-top" alt="icon">
                </a>
                <ul class="navbar-nav">


                  <!-- Actif index ou non -->
                  <!-- <?php if($ma_pages == 'index'){ ?>

                  <li class="nav-item active pr-4 pl-4 ">
                    <a class="nav-link text-center" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                  </li>
                  <?php  }else{    ?>

                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                  </li>
                  <?php  }  ?> -->



                  <!-- Actif about ou non -->
                  <?php if($ma_pages == 'about'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="About.php">Qui Sommes Nous ?</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="About.php">Qui Sommes Nous ?</a>
                  </li>
                  <?php  }  ?>
                
                  <!-- Actif equipe ou non -->
                  <?php 
                  if($ma_pages == 'equipe'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="equipe.php">L'équipe</a>
                  </li>
                  <?php 
                  }else{    ?>
                  <li class="nav-ite pr-4  pl-4 ">
                    <a class="nav-link text-center" href="equipe.php">L'équipe</a>
                  </li>
                  <?php  }                 
                  ?>

                     <!-- Actif évenements ou non -->
                     <?php 
                  if($ma_pages == 'event'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="event.php">Nos événements</a>
                  </li>
                  <?php 
                  }else{    ?>
                  <li class="nav-ite pr-4  pl-4 ">
                    <a class="nav-link text-center" href="event.php">Nos événements</a>
                  </li>
                  <?php  }                 
                  ?>

                  <!-- Actif Nos podcasts ou non -->
                  <?php if($ma_pages == 'podcasts'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="podcasts.php">Nous écouter</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="podcasts.php">Nous écouter</a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif artistes ou non -->
                  <?php if($ma_pages == 'artistes'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="artistes.php">Artistes & intervenantes</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="artistes.php">Artistes & intervenantes</a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif collaboration ou non -->
                  <?php if($ma_pages == 'collaboration'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="collaboration.php">Nos Collaborations</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="collaboration.php">Nos Collaborations</a>
                  </li>
                  <?php  }  ?>


                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>

      <div class="row marge">
        <div class="col-md-12 col-lg-12 mb-2 mt-2">
          <h1 id="titre">Les Bavardes Collectif Féministe & Lesbien <br> à Amiens depuis 2017</h1>
        </div>
      </div>
    </header>
  