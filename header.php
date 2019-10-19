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
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Long+Cang&display=swap" rel="stylesheet">
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
            <div class="col-lg-12 col-md-12">

              <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <a class="navbar-brand pl-3 pr-5" href="index.php">
                  <img src="assets/img/logo.png" width="" height="80" class="d-inline-block align-top"
                    alt="icon">
                </a>
                <ul class="navbar-nav">


                     <!-- Actif index ou non -->
                    <?php if($ma_pages == 'index'){ ?> 
                           
                        <li class="nav-item active pr-4 pl-4 ">
                            <a class="nav-link text-center" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                    <?php  }else{    ?>
                          
                        <li class="nav-item pr-4  pl-4">
                            <a class="nav-link text-center" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                    <?php  }  ?>    
               


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
                    

                            <!-- Actif action ou non -->
                    <?php if($ma_pages == 'action'){ ?> 
                        <li class="nav-item active pr-4  pl-4">
                            <a class="nav-link text-center" href="action.php">Nos actions</a>
                        </li>
                    <?php  }else{    ?>
                        <li class="nav-item pr-4  pl-4">
                             <a class="nav-link text-center" href="action.php">Nos actions</a>
                        </li>
                    <?php  }  ?>                

                     <!-- Actif collaboration ou non -->
                    <?php if($ma_pages == 'collaboration'){ ?> 
                        <li class="nav-item active pr-4  pl-4">
                            <a class="nav-link text-center" href="collaboration.php">Collaboration</a>
                        </li>
                        <?php  }else{    ?>
                        <li class="nav-item pr-4  pl-4">
                             <a class="nav-link text-center" href="collaboration.php">Collaboration</a>
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
                 
                    <!-- Actif presse ou non -->
                  <?php if($ma_pages == 'presse'){ ?> 
                    <li class="nav-item active pr-4  pl-4">
                         <a class="nav-link text-center" href="presse.php">La Presse</a>
                     </li>
                  <?php  }else{    ?>
                     <li class="nav-item pr-4  pl-4">
                         <a class="nav-link text-center" href="presse.php">La Presse</a>
                     </li>
                  <?php  }  ?>        
                 
                  <!-- Actif contact ou non -->
                  <?php 
                  if($ma_pages == 'contact'){ ?>                 
                    <li class="nav-item active pr-4  pl-4">
                        <a class="nav-link text-center" href="contact.php">Contact</a>
                    </li>
                  <?php 
                  }else{    ?>
                    <li class="nav-ite pr-4  pl-4 ">
                      <a class="nav-link text-center" href="contact.php">Contact</a>
                    </li>                 
                <?php  }
                 
                  ?>


                </ul>
              </div>
              
            </div>

          

          </nav>

        </div>
      
      </div>

      <div class="row">
        <div class="col-md-12 mb-4 mt-3">
          <h1 id="titre">Les Bavardes <br>Collectif Féministe & Lesbien à Amiens depuis 2017</h1>
        </div>
      </div>
    </header>
  </div>




<!-- <div class="black float-left col-lg-2"><a href="mailto:lesbavardesamiens@gmail.com" ><img src="assets/img/navbar/youtube.png"></a></div> -->
  
 

