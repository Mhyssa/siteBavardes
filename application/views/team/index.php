

<div class="row m-0">
  <div class="col-lg-12 ombre pt-5 ">
    <!-- Team -->
    <section id="team" class="">
      <div class="container">
        <div class="row m-0">
          <div class="col-md-12 pb-2">
            <div class="row">
            <?php if($lang == 'fr'){ ?>
              <img src="<?php echo base_url(); ?>assets\img\banniere\staff.png"
                alt="banniere l'équipe pour décrire les bénévoles bavardes, leurs origines et leurs actions "
                class="img-fluid pb-3">
            <?php } else { ?> 
              <img src="<?php echo base_url(); ?>assets\img\banniere\staff_en.jpg"
                alt="banniere l'équipe pour décrire les bénévoles bavardes, leurs origines et leurs actions "
                class="img-fluid pb-3">
            <?php } ?>
            </div>
          </div>
        </div>
        <!-- Section Title -->
        <!-- <h5 class="section-title h1">Le staff</h5> -->
        <div class="row m-0">
          

        <?php if(!empty($team)){ 
                    foreach($team as $row){ 
                    
                ?>

          <!-- Team member 1 -->
          <div class="col-12 col-xs-12 col-lg-6 col-xl-4">
            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
              <div class="mainflip">
                <!-- Front side of the card -->
                <div class="frontside">
                  <div class="card">
                    <div class="card-body text-center">
                      <p><img class="img-fluid" src="<?php echo base_url().'uploads/team_img/'.$row['file_name'] ?>" alt="Photo d'une Bavardes">
                      </p>
                      <h4 class="card-title"><?php echo ucfirst($row['team_name']); ?></h4>
                      <p class="card-text"><?php echo ucfirst($row['team_title']); ?></p>
                      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                    </div>
                  </div>
                </div>
                <!-- Back side of the card -->
                <div class="backside">
                  <div class="card">
                    <div class="card-body text-center mt-4">
                      <h4 class="card-title"><?php echo $row['team_name']; ?></h4>
                      <p class="card-text">
                      <?php echo $row['team_description']; ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php }
          } ?>
        </div>
      </div>
    </section>
  </div>
</div> <!-- Fin de la div row -->
