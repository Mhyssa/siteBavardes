<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- styles CSS -->
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="icon" href="assets/img/logo_bavardes.ico" />
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Les Bavardes</title>
</head>

<body>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v4.0">
  </script>
 <div class="container-fluid">
    <header>
      <!-- ------------------------------------------------------------------------------------------------------------------------ -->
      <!-- Navbar -->
      <!-- ------------------------------------------------------------------------------------------------------------------------ -->
      <!-- Accueil -->


      <div class="row">
        
        <div class="col-sm-12">

          <nav class="navbar navbar-expand-lg navbar-light bg-white mb-4" id="navBar">
            <div class="col-lg-9 col-md-12">

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand" href="index.php">
                  <img src="assets/img/logo.png" width="" height="80" class="d-inline-block align-top"
                    alt="icon">
                </a>
                <ul class="navbar-nav">


                     <!-- Actif index ou non -->
                    <?php if($ma_pages == 'index'){ ?> 
                           
                        <li class="nav-item active">
                            <a class="nav-link " href="index.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                    <?php  }else{    ?>
                          
                        <li class="nav-item ">
                            <a class="nav-link " href="index.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                    <?php  }  ?>    
               


                        <!-- Actif about ou non -->
                    <?php if($ma_pages == 'about'){ ?> 
                        <li class="nav-item active">
                            <a class="nav-link " href="About.php">Qui Sommes Nous ?</a>
                    </li>
                    <?php  }else{    ?>
                        <li class="nav-item">
                            <a class="nav-link " href="About.php">Qui Sommes Nous ?</a>
                    </li>
                    <?php  }  ?>    
                    

                            <!-- Actif action ou non -->
                    <?php if($ma_pages == 'action'){ ?> 
                        <li class="nav-item active">
                            <a class="nav-link " href="action.php">Nos actions</a>
                        </li>
                    <?php  }else{    ?>
                        <li class="nav-item">
                            <a class="nav-link " href="action.php">Nos actions</a>
                        </li>
                    <?php  }  ?>                

                     <!-- Actif collaboration ou non -->
                    <?php if($ma_pages == 'collaboration'){ ?> 
                        <li class="nav-item active">
                            <a class="nav-link " href="collaboration.php">Collaboration</a>
                        </li>
                        <?php  }else{    ?>
                        <li class="nav-item">
                            <a class="nav-link " href="collaboration.php">Collaboration</a>
                        </li>
                    <?php  }  ?>        
                    
                
                       <!-- Actif artistes ou non -->
                  <?php if($ma_pages == 'artistes'){ ?> 
                     <li class="nav-item active">
                         <a class="nav-link " href="artistes.php">Artistes</a>
                     </li>
                  <?php  }else{    ?>
                     <li class="nav-item">
                         <a class="nav-link " href="artistes.php">Artistes</a>
                     </li>
                  <?php  }  ?>        
                 
                    <!-- Actif presse ou non -->
                  <?php if($ma_pages == 'presse'){ ?> 
                    <li class="nav-item active">
                         <a class="nav-link " href="presse.php">La Presse</a>
                     </li>
                  <?php  }else{    ?>
                     <li class="nav-item">
                         <a class="nav-link " href="presse.php">La Presse</a>
                     </li>
                  <?php  }  ?>        
                 
                  <!-- Actif contact ou non -->
                  <?php 
                  if($ma_pages == 'contact'){ ?>                 
                    <li class="nav-item active">
                        <a class="nav-link " href="contact.php">Contact</a>
                    </li>
                  <?php 
                  }else{    ?>
                    <li class="nav-item">
                      <a class="nav-link " href="contact.php">Contact</a>
                    </li>                 
                <?php  }
                 
                  ?>


                </ul>
              </div>
              
            </div>
            <div class="col-lg-3 col-md-12">

              <aside>
                <a href="https://www.instagram.com/les.bavardes/" class="fa fa-instagram"></a>
                <a href="https://fr-fr.facebook.com/bavardes/" class="fa fa-facebook"></a>
                <a href="https://twitter.com/lesbavardes_" class="fa fa-twitter"></a>
                <a href="mailto:lesbavardesamiens@gmail.com" class="fa fa-google"></a>
                <a href="https://www.youtube.com/channel/UCqYtRC_VtIqcB9snDMf78Dw" class="fa fa-youtube"></a>
              </aside>
            </div>
          </nav>

        </div>
      
      </div>

      <div class="row">
        <div class="col-md-12 mb-4">
          <h1 id="titre">Les Bavardes <br>Collectif Féministe & Lesbien à Amiens depuis 2017</h1>
        </div>
      </div>
    </header>
  </div>
 <div class="row">
<div class="test float-left"></div>
<div class="test2 float-left"></div>
<div class="test float-left"></div>
<div class="test2 float-left"></div>
<div class="test float-left"></div>
</div>