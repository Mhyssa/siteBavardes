

<div class="col-lg-12 ombre pt-5 ">
      <div class="container">


            <div class="row">
                  <img src="<?php echo base_url(); ?>assets\img\banniere\artistes.png" alt="banniere artistes et intervenants"
                        class="img-fluid pb-3">
            </div>

            <div class="row shadow pt-5 pb-4">

                  <div class="col-lg-12 pt-3 pb-3 text-center bgyellow">
                        <h2 class="">Artistes</h2>
                  </div>

                  <div class="col-lg-12 pt-5 pb-5">
                  <?php if(!empty($people)){ 
                        
                        foreach($people as $row){ 
    
                            if($row['people_status'] == 'Artiste'){ 

                                ?>

                        
                        <div class="col-lg-3 text-center float-left">
                              <a href="<?php echo $row['people_link']; ?>" class="col-lg-12 link"
                                    target="_blank">
                                    <img src="<?php echo base_url().'uploads/people_img/'.$row['file_name'];?> " class="Artiste" alt="img artiste">
                              </a>
                              <br>
                              <a href="<?php echo $row['people_link']; ?>" class="col-lg-12 link"
                                    target="_blank"><?php echo $row['people_name']; ?></a>
                        </div>

                        



                  <?php }}}else{ 
                    echo "Aucune donnée(s) trouvée(s)...";
                 } ?>

                  </div>

            </div>
<!-- -----------------------------------------------------------------Les Intervenant.es----------------------------------------------------------------------------- -->

            <div class="row  shadow pt-5 mt-4">
                  <div class="col-lg-12 pt-3 pb-3 text-center bgyellow">
                        <h2 class="">Intervenant.es</h2>
                  </div>



                  <div class="col-lg-12  pt-4 pb-5">

                
                  <?php if(!empty($people)){ 
                        
                        foreach($people as $row){ 
    
                            if($row['people_status'] == 'Intervenant.e'){ 

                                ?>

                        
                        <div class="col-lg-3 text-center float-left">
                              <a href="<?php echo $row['people_link']; ?>" class="col-lg-12 link"
                                    target="_blank">
                                    <img src="<?php echo base_url().'uploads/people_img/'.$row['file_name'];?> " class="Artiste" alt="img artiste">
                              </a>
                              <br>
                              <a href="<?php echo $row['people_link']; ?>" class="col-lg-12 link"
                                    target="_blank"><?php echo $row['people_name']; ?></a>
                        </div>

                        



                  <?php }}}else{ 
                    echo "Aucune donnée(s) trouvée(s)...";
                 } ?>



                  


            </div>
      </div>

      <!-- <div class="row">
                        <div class="col-md-12">
                              <div>
                                    <img class="d-block w-100" src="assets/img/ban_yt.JPG" alt="banniere">

                              </div>

                        </div>
                  </div> -->

</div>
</div>