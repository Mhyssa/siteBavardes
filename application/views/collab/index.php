<div class="col-lg-12 ombre pt-5 ">


  <div class="container">

    <!-- debut banniere collaboration -->
    <div class="row">
    <?php// if($lang == 'fr'){ ?>
      <img src="<?php echo base_url(); ?>assets\img\banniere\collab.png" alt="banniere collaboration" class="img-fluid pb-3">
    <?php/* } else { 
      echo 'our collaborations?';
    }*/
    ?>
    </div>
    <!-- fin banniere collaboration -->



    <!-- debut row alpha -->
    <div class="row mx-0 mt-3">
      <!-- debut row beta 1 -->
      <div class="row">
        <!-- debut div col 1 -->

        <div class="card-group">
          <div class="card">
            <img src="<?php echo base_url(); ?>assets\img\collaborateurs\ob.jpg" class="card-img-top" alt="Radios campus amiens">
            <div class="card-body">
              <h5 class="card-title">Radios campus amiens</h5>
              <p class="card-text">
                <?php echo $collab_body_text1_pt1; ?>
                <br> 
                <?php echo $collab_body_text1_pt2; ?>
              </p>

              <a class="card-text link" href="http://www.radiocampusamiens.fr/emissions/ovairesbookees/"><strong
                  class="text-muted">&#x2192; Ovaires Bookées</strong> <br>
                <button type="button" class="btn btn-outline-success btn-block mt-4">Replay</button></a>
            </div>
          </div>
          <div class="card">
            <img src="<?php echo base_url(); ?>assets\img\collaborateurs\pride.jpg" class="card-img-top" alt="Collectif Idahot">
            <div class="card-body">
              <h5 class="card-title">Collectif Idahot</h5>
              <p class="card-text">
                <?php echo $collab_body_text2; ?>
              </p>
              <a class="card-text link" href="https://www.facebook.com/festivalidahot/"><strong
                  class="text-muted">&#x2192; <?php echo $collab_body_button_text2; ?></strong></a>
            </div>
          </div>
          <div class="card">
            <img src="<?php echo base_url(); ?>assets\img\collaborateurs\michelis.jpg" class="card-img-top"
              alt="Lycée Michelis intervention enn milieu scolaire">
            <div class="card-body">
              <h5 class="card-title">Lycée Michelis</h5>
              <p class="card-text">
                <?php echo $collab_body_text3; ?>
              </p>
              <a class="card-text link" href="https://www.facebook.com/bavardes/posts/693606484480112"><strong
                  class="text-muted">&#x2192; <?php echo $collab_body_button_text3; ?></strong></a>
            </div>
          </div>

          <!-- fin div col 1 -->
        </div>
        <!-- fin row beta 1 -->
      </div>
      <!-- debut row beta 2 -->
      <div class="row">
        <!-- debut div col 2 -->

        <div class="card-group">
          <div class="card">
            <img src="<?php echo base_url(); ?>assets\img\collaborateurs\oh_les_filles.jpg" class="card-img-top" alt="La lune des pirates">
            <div class="card-body">
              <h5 class="card-title">La lune des pirates</h5>
              <p class="card-text">
                <?php echo $collab_body_text4; ?>
              </p>
              <a class="card-text link"
                href="http://www.lalune.net/concert-amiens/programme/expoconcert-bavardes/"><strong
                  class="text-muted">&#x2192; <?php echo $collab_body_button_text4; ?></strong></a>
            </div>
          </div>
          <div class="card">
            <img src="<?php echo base_url(); ?>assets\img\collaborateurs\alimentation.jpg" class="card-img-top" alt="L'alimentation Générale">
            <div class="card-body">
              <h5 class="card-title">L'alimentation Générale</h5>
              <p class="card-text"><?php echo $collab_body_p_text5; ?> :<br>
                <cite>
                  <?php echo $collab_body_text5; ?>
                </cite>
              </p>
              <a class="card-text link" href="https://www.facebook.com/events/383010169068048/"><strong
                  class="text-muted">&#x2192; <?php echo $collab_body_button_text5; ?></strong></a>
            </div>
          </div>
          <div class="card">
            <img src="<?php echo base_url(); ?>assets\img\collaborateurs\ww.jpg" class="card-img-top" alt="Cité Carter">
            <div class="card-body">
              <h5 class="card-title">Cité Carter</h5>
              <p class="card-text">
                <?php echo $collab_body_text6; ?>
              </p>
              <a class="card-text link" href="https://www.facebook.com/events/2441237112758468/">
                <strong class="text-muted">&#x2192; <?php echo $collab_body_button_text6; ?></strong>
              </a>
            </div>
          </div>

          <!-- fin div col 2 -->
        </div>
        <!-- fin row beta 2 -->
      </div>
      <!-- fin row alpha -->
    </div>

    <!-- -le mois des violences faites aux femmes 2017 page facebook Amiens non aux violences faite aux femmes  -->

    <!-- debut Merci de votre confiance et de votre chaleureux acceuil -->
    <div class="row shadow">
      <div class="col-md-12">
        <br><br>
        <h4 id="titre"><?php echo $collab_thank; ?>:</h4>
        <br>

        <div class="row">

        <div class="col-lg-12 pt-5 pb-5">            
            <ul>

            <?php if(!empty($collab)){ 
                   
                   foreach($collab as $row){ 
                           ?>

              <div class="col-lg-3 float-left">

              <li><a class="text-dark" href="<?php echo $row['collab_link'] ?>"><?php echo $row['collab_name']; ?></a></li>

              </div>
              
              <?php }}
              ?>


            </ul>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</div>
<!-- fin Merci de votre confiance et de votre chaleureux acceuil -->