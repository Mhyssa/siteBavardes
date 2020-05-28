<!doctype html>
<html lang="fr">

<head>

  <!-- Required meta tags -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <?php if($controller == 'event'){ ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/event.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <?php } elseif($controller == 'team'){ ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/equipe.css">
  <?php } else { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <?php } ?>


  <!-- icone de l'onglet -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo_bavardes.ico" />

  <!-- polices 'Quicksand' et 'Concert One' -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />


    <?php if($ma_pages == 'index_accueil'){ ?>
      <title><?php echo $header_acc; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_about_presse') {    ?>
      <title><?php echo $header_about; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_team') {    ?>
      <title><?php echo $header_team; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_action') {    ?>
      <title><?php echo $header_act; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_event') {    ?>
      <title><?php echo $header_event; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_collab') {    ?>
      <title><?php echo $header_col; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_people') {    ?>
      <title><?php echo $header_ppl; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_presse') {    ?>
      <title><?php echo $header_presse; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_podcast') {    ?>
      <title><?php echo $header_pod; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_mentions') {    ?>
      <title><?php echo $footer_mentions; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_politique') {    ?>
      <title><?php echo $footer_rgpd; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'account') {    ?>
      <title><?php echo $footer_user_acc; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'login') {    ?>
      <title><?php echo $footer_login; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'registration') {    ?>
      <title><?php echo $footer_reg; ?> | Les Bavardes Amiens</title>
  <?php  }elseif($ma_pages == 'index_error404') {    ?>
      <title><?php echo $error404; ?> | Les Bavardes Amiens</title>
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
                <a class="navbar-brand pl-3 pr-5" href="<?php echo base_url().'Accueil/index/'.$lang; ?>">
                  <img src="<?php echo base_url(); ?>assets/img/logo.png" width="" height="80" class="d-inline-block align-top" alt="icon">
                </a>
                <ul class="navbar-nav">



                  <!-- Actif about ou non -->
                  <?php if($ma_pages == 'index_about_presse'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'About/index/'.$lang; ?>"><?php echo $header_about; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'About/index/'.$lang; ?>"><?php echo $header_about; ?></a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif equipe ou non -->
                  <?php 
                  if($ma_pages == 'index_team'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Team/index/'.$lang; ?>"><?php echo $header_team; ?></a>
                  </li>
                  <?php 
                  }else{    ?>
                  <li class="nav-ite pr-4  pl-4 ">
                    <a class="nav-link text-center" href="<?php echo base_url().'Team/index/'.$lang; ?>"><?php echo $header_team; ?></a>
                  </li>
                  <?php  }                 
                  ?>

                                    
                  <!-- Actif évènements ou non -->
                  <?php if($ma_pages == 'index_event'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Event/index/'.$lang; ?>"><?php echo $header_event; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Event/index/'.$lang; ?>"><?php echo $header_event; ?></a>
                  </li>
                  <?php  }  ?>

                  <!-- NOUS ECOUTER -->
                  
                  <!-- Actif Nos podcasts ou non -->
                  <?php if($ma_pages == 'index_podcast'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Podcast/index/'.$lang; ?>"><?php echo $header_pod; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Podcast/index/'.$lang; ?>"><?php echo $header_pod; ?></a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif artistes ou non -->
                  <?php if($ma_pages == 'index_people'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'People/index/'.$lang; ?>"><?php echo $header_ppl; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'People/index/'.$lang; ?>"><?php echo $header_ppl; ?></a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif collaboration ou non -->
                  <?php if($ma_pages == 'index_collab'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Collab/index/'.$lang; ?>"><?php echo $header_col; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'Collab/index/'.$lang; ?>"><?php echo $header_col; ?></a>
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
          <h1 id="titre"><?php echo $header_titre; ?></h1>
        </div>
      </div>

      <div class="float-right">
        <a href="<?php echo base_url().'index.php/'.$controller.'/'.$function.'/fr'; ?>"><img src="<?php echo base_url(); ?>assets/img/lang/fr.png" width="25"></a>
        <a href="<?php echo base_url().'index.php/'.$controller.'/'.$function.'/en'; ?>"><img src="<?php echo base_url(); ?>assets/img/lang/en.png" width="25"></a>
      </div>
    </header>
  