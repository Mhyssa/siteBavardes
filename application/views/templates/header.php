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
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/equipe.css">

  <!-- icone de l'onglet -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo_bavardes.ico" />

  <!-- polices 'Quicksand' et 'Concert One' -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />


    <?php if($ma_pages == 'index_accueil'){ ?>
      <title>Accueil | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_about') {    ?>
      <title>Qui sommes nous? | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_team') {    ?>
      <title>L'Equipe | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_action') {    ?>
      <title>Nos Actions | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_event') {    ?>
      <title>Nos Évènements | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_collaboration') {    ?>
      <title>Nos Collaborations | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_people') {    ?>
      <title>Artistes et Intervenantes | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_presse') {    ?>
      <title>La Presse | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_podcasts') {    ?>
      <title>Nos Podcasts | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_mentions') {    ?>
      <title>Mentions Légales | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_politique') {    ?>
      <title>RGPD | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'account') {    ?>
      <title>Compte Utilisateur | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'login') {    ?>
      <title>Se Connecter | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'registration') {    ?>
      <title>S'Inscrire | Les Bavardes Amiens</title>
  <?php  } else {?>
      <title>Les Bavardes Amiens</title>
  <?php  } ?>


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
                <a class="navbar-brand pl-3 pr-5" href="<?php echo base_url();?>">
                  <img src="<?php echo base_url(); ?>assets/img/logo.png" width="" height="80" class="d-inline-block align-top" alt="icon">
                </a>
                <ul class="navbar-nav">


                  <!-- Actif index ou non -->
                  <?php if($ma_pages == 'index_accueil'){ ?>

                  <li class="nav-item active pr-4 pl-4 ">
                    <a class="nav-link text-center" href="<?php echo base_url()?>">Accueil <span class="sr-only">(current)</span></a>
                  </li>
                  <?php  }else{    ?>

                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url()?>">Accueil <span class="sr-only">(current)</span></a>
                  </li>
                  <?php  }  ?>



                  <!-- Actif about ou non -->
                  <?php if($ma_pages == 'index_about'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'About'?>">Qui Sommes Nous ?</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'About'?>">Qui Sommes Nous ?</a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif equipe ou non -->
                  <?php 
                  if($ma_pages == 'index_team'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Team'?>">L'équipe</a>
                  </li>
                  <?php 
                  }else{    ?>
                  <li class="nav-ite pr-4  pl-4 ">
                    <a class="nav-link text-center" href="<?php echo base_url().'Team'?>">L'équipe</a>
                  </li>
                  <?php  }                 
                  ?>

                  <!-- Actif action ou non -->
                  <?php if($ma_pages == 'index_action'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Action'?>">Nos actions</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Action'?>">Nos actions</a>
                  </li>
                  <?php  }  ?>

                  
                  <!-- Actif évènements ou non -->
                  <?php if($ma_pages == 'index_event'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Event'?>">Nos Évènements</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Event'?>">Nos Évènements</a>
                  </li>
                  <?php  }  ?>


                  <!-- Actif collaboration ou non -->
                  <?php if($ma_pages == 'index_collaboration'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Collaboration'?>">Nos Collaborations</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Collaboration'?>">Nos Collaborations</a>
                  </li>
                  <?php  }  ?>


                  <!-- Actif artistes ou non -->
                  <?php if($ma_pages == 'index_people'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'People'?>">Artistes & intervenant.es</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'People'?>">Artistes & intervenant.es</a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif presse ou non -->
                  <?php if($ma_pages == 'index_presse'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Presse'?>">La Presse</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Presse'?>">La Presse</a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif Nos podcasts ou non -->
                  <?php if($ma_pages == 'index_podcasts'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Podcast'?>">Nos podcasts</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Podcast'?>">Nos podcasts</a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif Nos podcasts ou non -->
                  <?php if($ma_pages == 'login' || $ma_pages == 'registration'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Users/login'?>">Espace Membre</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Users/login'?>">Espace Membre</a>
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
  