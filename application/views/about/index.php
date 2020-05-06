
<div class="col-lg-12 ombre pt-5 pb-5 ">
  <div class="container">
    <div class="row">
      <?php// if($lang == 'fr'){ ?>
      <img src="<?php echo base_url(); ?>assets\img\banniere\about.png"
        alt="banniere qui sommes nous pour décrire les bavardes, leurs origines et leurs actions"
        class="img-fluid pb-3">
      <?php/* } else { 
        echo 'who are we?';
      }*/
      ?>
    </div>

            <div class="row">
              <div class="col-lg-12 p-0">
                <img src="<?php echo base_url(); ?>assets\img\seminaire.jpg" alt="l'équipe bénévoles bavardes" class="d-block w-100 shadow">     
              </div>
            </div>


            <div class="row">
              <div class="col-lg-12 mx-auto text-left">

                <div class="text-center my-5 px-5">
                <div class="col-lg-5  col-md-12 m-auto lignefooter mb-5 "></div><br>
                    <?php echo $about_body_text1; ?>
                    <br><br>
                    <div class="col-lg-5  col-md-12 m-auto lignefooter  "></div><br>
                    <?php echo $about_body_text2; ?>
                    <br><br>
                    <div class="col-lg-5  col-md-12 m-auto lignefooter  "></div>
                  
                      <!-- <p>Les Bavardes collectif féministe et lesbien créé en 2017 à Amiens par 5 meufs voulant rendre visible
                      la lutte pour les droits de toutes les femmes, et des personnes LBTQI+, en proposant un espace à
                      toutes pour partager, échanger et s'émanciper. <br><br>

                      Au fil des mois voyant de plus en plus de personnes à nos événements, nous avons été sollicités pour
                      de nombreuses actions, le collectif s'est constitué en association et à rapidement recueilli une
                      quarantaine de bénévoles actives. <br><br>

                      Les manifestations dans l'espace public et la dimension de désobéissance civile ont rapidement pris
                      le pas et à rendre visibles nos actions et partenariats.<br>
                      Deux ans après la sororité est tel que le patriarcat et le capitalisme tremblent ! <br><br>

                      Aujourd'hui nous sommes fières de voir qu' Amiens rassemble la Picardie autour de nos idées et que
                      l'ensemble de nos actions nous mènent à Paris, Lille, et à l'international Brighton, Le Bénin...
                      </p> -->
                </div>

                <div class="row">
                <div class="col-0 col-sm-3"></div>
                  <div class="embed-responsive embed-responsive-16by9 col-sm-6">
                    <iframe src="https://www.youtube.com/embed/pcDgFROzY44" frameborder="0"
                      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                <div class="col-0 col-sm-3"></div>
                </div>



                <div class="row">
                  <div class="col-lg-12 ombre pt-5 ">  
                    <div class="container">
                      <div class="row">
                      <?php// if($lang == 'fr'){ ?>
                        <img src="<?php echo base_url(); ?>assets\img\banniere\presse.png"
                          alt="liste des articles de presses ou les bavardes sont Jeanne Magazine Courrier picard france bleu"
                          class="img-fluid pb-3">
                      <?php/* } else { 
                      echo 'The Press';
                      }*/
                      ?>
                </div>





                <div class="row">
                  <div class="col-lg-12 shadow p-3 mt-5">

                    <h2> Jeanne Magazine </h2>
                    <ul>

                        <?php if(!empty($presse)){ 
                              
                              foreach($presse as $row){
                                  
                                  if($row['presse_cat'] == 'Jeanne Magazine'){ ?>
              
              
                                    <li>
                                        <a class="nav-link link" target="_blank" href="<?php echo $row['presse_link'] ?>">
                                            <?php echo $row['presse_name']; ?>
                                        </a>
                                    </li>

                        <?php }}}?>
                      
                    </ul>

                  </div>
                </div>




                <div class="row">
                  <div class="col-lg-12 shadow p-3 mt-5">

                    <h2> Courrier Picard </h2>
                    <ul>

                        <?php if(!empty($presse)){ 
                              
                              foreach($presse as $row){
                                  
                                  if($row['presse_cat'] == 'Courrier Picard'){ ?>
              
              
                                    <li>
                                        <a class="nav-link link" target="_blank" href="<?php echo $row['presse_link'] ?>">
                                            <?php echo $row['presse_name']; ?>
                                        </a>
                                    </li>

                        <?php }}}?>
                      
                    </ul>

                  </div>
                </div>




                <div class="row">
                  <div class="col-lg-12 shadow p-3 mt-5 mb-5">

                    <h2> <?php echo $presse_cat3; ?> </h2>
                    <ul>

                        <?php if(!empty($presse)){ 
                              
                              foreach($presse as $row){
                                  
                                  if($row['presse_cat'] == 'Luttes LGBTQI+'){ ?>
              
              
                                    <li>
                                        <a class="nav-link link" target="_blank" href="<?php echo $row['presse_link'] ?>">
                                            <?php echo $row['presse_name']; ?>
                                        </a>
                                    </li>

                        <?php }}}?>
                      
                    </ul>

                  </div>
                </div>




                <div class="row">
                  <div class="col-lg-12 shadow p-3 mt-1 mb-5">

                    <h2> <?php echo $presse_cat4; ?> </h2>
                    <ul>

                        <?php if(!empty($presse)){ 
                              
                              foreach($presse as $row){
                                  
                                  if($row['presse_cat'] == 'Divers'){ ?>
              
              
                                    <li>
                                        <a class="nav-link link" target="_blank" href="<?php echo $row['presse_link'] ?>">
                                            <?php echo $row['presse_name']; ?>
                                        </a>
                                    </li>

                        <?php }}}?>
                      
                    </ul>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
