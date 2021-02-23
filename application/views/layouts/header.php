<!doctype html>
<html lang="fr">

<head>

  <!-- Required meta tags -->
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta name="author" content="Marion JOLY, Noémie CLAUDE, Jade GUEHOUN, Megane DONNIO" />
  <meta name="copyright" content="Les Bavardes Amiens" />
  <meta name="description"
        content="Les Bavardes Amiens, collectif lesbien et féministe engagées pour la visibilité de toutes les femmes et dans les luttes lbtqi+ /
                Association lesbienne et féministe à Amiens depuis 2017 ( loi 1901 )" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- styles CSS -->
  <?php if($controller == 'event'){ ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/event.css">
  <?php } elseif($controller == 'team'){ ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/equipe.css">
  <?php } elseif($controller == 'users'){ ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/espacemembre.css">
  <?php } else { ?>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <?php } ?>

  <!-- Librairie Font awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">



  <!-- icone de l'onglet -->
  <link rel="icon" href="<?php echo base_url(); ?>assets/img/logo_bavardes.ico" />

  <!-- polices 'Quicksand' et 'Concert One' -->
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />

  <!-- pour le référencement -->

    <!--header-->
<?php if(isset($header_title)){ ?>
  <title><?php echo $header_title; ?> | Les Bavardes Amiens</title>

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
                <a class="navbar-brand pl-3 pr-5" href="<?php echo base_url().'index.php/accueil/index/'.$lang; ?>">
                  <img src="<?php echo base_url(); ?>assets/img/logo.png" width="" height="80" class="d-inline-block align-top" alt="icon">
                </a>
                <ul class="navbar-nav">



                  <!-- Actif about ou non -->
                  <?php if($ma_pages == 'index_about_presse'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/about/index/'.$lang; ?>"><?php echo $header_about; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/about/index/'.$lang; ?>"><?php echo $header_about; ?></a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif equipe ou non -->
                  <?php 
                  if($ma_pages == 'index_team'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/team/index/'.$lang; ?>"><?php echo $header_team; ?></a>
                  </li>
                  <?php 
                  }else{    ?>
                  <li class="nav-ite pr-4  pl-4 ">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/team/index/'.$lang; ?>"><?php echo $header_team; ?></a>
                  </li>
                  <?php  }                 
                  ?>

                                    
                  <!-- Actif évènements ou non -->
                  <?php if($ma_pages == 'index_event'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/event/index/'.$lang; ?>"><?php echo $header_event; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/event/index/'.$lang; ?>"><?php echo $header_event; ?></a>
                  </li>
                  <?php  }  ?>

                  <!-- NOUS ECOUTER -->
                  
                  <!-- Actif Nos podcasts ou non -->
                  <?php if($ma_pages == 'index_podcast'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/podcast/index/'.$lang; ?>"><?php echo $header_pod; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/podcast/index/'.$lang; ?>"><?php echo $header_pod; ?></a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif artistes ou non -->
                  <?php if($ma_pages == 'index_people'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/people/index/'.$lang; ?>"><?php echo $header_ppl; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/people/index/'.$lang; ?>"><?php echo $header_ppl; ?></a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif collaboration ou non -->
                  <?php if($ma_pages == 'index_collab'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/collab/index/'.$lang; ?>"><?php echo $header_col; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/collab/index/'.$lang; ?>"><?php echo $header_col; ?></a>
                  </li>
                  <?php  }  ?>

                  <!-- Actif contact ou non -->
                  <?php if($ma_pages == 'index_form'){ ?>
                  <li class="nav-item active pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/form/index/'.$lang; ?>"><?php echo $header_cont; ?></a>
                  </li>
                  <?php  }else{    ?>
                  <li class="nav-item pr-4  pl-4">
                    <a class="nav-link text-center" href="<?php echo base_url().'index.php/form/index/'.$lang; ?>"><?php echo $header_cont; ?></a>
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
  
