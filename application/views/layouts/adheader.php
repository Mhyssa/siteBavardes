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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"></head>

  <!-- icone de l'onglet -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo_bavardes.ico" />

  <!-- polices 'Quicksand' et 'Concert One' -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />



<!--PARTIE ADMIN-->
    <!--PAGES EVENEMENTES-->
  <?php if($ma_pages == 'ad_index_event'){ ?>
    <title>Evènements ADMIN | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'ad_view_event') {    ?>
    <title>Detail Evènement | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'add_event') {    ?>
    <title>Ajout Evènement | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'edit_event') {    ?>
    <title>Modification Evènement | Les Bavardes Amiens</title>



    <!--PAGES ARTISTES ET INTERVENANT.ES-->
  <?php  }elseif($ma_pages == 'ad_index_people') {    ?>
    <title>Artistes/Intervenant.es ADMIN | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'ad_view_people') {    ?>
    <title>Detail Artiste/Intervenant.e | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'add_people') {    ?>
    <title>Ajout Artiste/Intervenant.e | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'edit_people') {    ?>
    <title>Modification Artiste/Intervenant.e | Les Bavardes Amiens</title>



    <!--PAGES EQUIPE-->
  <?php  }elseif($ma_pages == 'ad_index_team') {    ?>
    <title>Equipe ADMIN | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'ad_view_team') {    ?>
    <title>Detail Equipe | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'add_team') {    ?>
    <title>Ajout Equipe | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'edit_team') {    ?>
    <title>Modification Equipe | Les Bavardes Amiens</title>
  


    <!--PAGES PRESSE-->
   <?php  }elseif($ma_pages == 'ad_index_presse') {    ?>
    <title>Presse ADMIN | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'ad_view_presse') {    ?>
    <title>Detail Presse | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'add_presse') {    ?>
    <title>Ajout Presse | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'edit_presse') {    ?>
    <title>Modification Presse | Les Bavardes Amiens</title>


    <!--PAGES PODCAST-->
  <?php  }elseif($ma_pages == 'ad_index_podcast') {    ?>
    <title>Podcast ADMIN | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'ad_view_podcast') {    ?>
    <title>Detail Podcast | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'add_podcast') {    ?>
    <title>Ajout Podcast | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'edit_podcast') {    ?>
    <title>Modification Podcast | Les Bavardes Amiens</title>
  


    <!--PAGES COLLAB-->
  <?php  }elseif($ma_pages == 'ad_index_collab') {    ?>
    <title>Collaborations ADMIN | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'ad_view_collab') {    ?>
    <title>Detail Collaboration | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'add_collab') {    ?>
    <title>Ajout Collaboration | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'edit_collab') {    ?>
    <title>Modification Collaboration | Les Bavardes Amiens</title>


        <!--PAGES ADMIN-->
  <?php  }elseif($ma_pages == 'ad_index_admin') {    ?>
    <title>Utilisateurs Admin ADMIN | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'ad_view_admin') {    ?>
    <title>Detail Admin | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'add_admin') {    ?>
    <title>Ajout Admin | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'edit_admin') {    ?>
    <title>Modification Admin | Les Bavardes Amiens</title>


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
                <a class="navbar-brand pl-3 pr-5" href="<?php echo base_url().'users/ad_index';?>">
                  <img src="<?php echo base_url(); ?>assets/img/logo.png" width="" height="80" class="d-inline-block align-top" alt="icon">
                </a>
                <ul class="navbar-nav">


                  <!-- Actif index ou non -->
                  <?php if($ma_pages == 'ad_index_event'){ ?>

                  <li class="nav-item active pr-4 pl-4 ">
                    <a class="nav-link text-center" href="<?php echo base_url().'event/ad_index'?>">Evenements<span class="sr-only">(current)</span></a>
                  </li>
                  <?php  }else{    ?>

                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'event/ad_index'?>">Evenements<span class="sr-only">(current)</span></a>
                  </li>
                  <?php  }  ?>



                  <!-- Actif about ou non -->
                  <?php if($ma_pages == 'ad_index_people'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'people/ad_index'?>">Artistes/Intervenant.es</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'people/ad_index'?>">Artistes/Intervenant.es</a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif equipe ou non -->
                  <?php 
                  if($ma_pages == 'ad_index_team'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'team/ad_index'?>">Equipe</a>
                  </li>
                  <?php 
                  }else{    ?>
                  <li class="nav-ite pr-4  pl-4 ">
                    <a class="nav-link text-center" href="<?php echo base_url().'team/ad_index'?>">Equipe</a>
                  </li>
                  <?php  }                 
                  ?>

                  <!-- Actif action ou non -->
                  <?php if($ma_pages == 'ad_index_presse'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'about/ad_index'?>">Presse</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'about/ad_index'?>">Presse</a>
                  </li>
                  <?php  }  ?>

                  
                  <!-- Actif collaboration ou non -->
                  <?php if($ma_pages == 'ad_index_collab'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'collab/ad_index'?>">Collaborations</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'collab/ad_index'?>">Collaborations</a>
                  </li>
                  <?php  }  ?>



                  <!-- Actif Nos podcasts ou non -->
                  <?php if($ma_pages == 'ad_index_podcast'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'podcast/ad_index'?>">podcasts</a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'podcast/ad_index'?>">podcasts</a>
                  </li>
                  <?php  }  ?>


                  <?php if($ma_pages == 'ad_index_admin'){ ?>

                  <li class="nav-item active pr-4 pl-4 ">
                    <a class="nav-link text-center" href="<?php echo base_url().'users/ad_index'?>">Utilisateurs</a>
                  </li>
                  <?php  }else{    ?>

                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'users/ad_index'?>">Utilisateurs</a>
                  </li>
                  <?php  }  ?>
                  
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url('users/logout'); ?>">Déconnexion</a>
                  </li>

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
  