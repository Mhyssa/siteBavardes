




<div class="col-lg-12 ombre pt-5 "><!-- div ouvrante col-lg-12 ombre pt-5 ligne 6 -->
    <div class="container"> <!-- div ouverte container ligne 7 -->


    <div class="row">
      <?php// if($lang == 'fr'){ ?>
        <img src="<?php echo base_url(); ?>assets\img\banniere\event.png" alt="banniere evenements" class="img-fluid pb-3">
      <?php/* } else { 
      echo 'events';
      }*/
      ?>
    </div>




    <div class="row justify-content-center"> <!-- div ouverte row justify-content-center ligne 13 -->
        
        
    </div> <!-- div ouverte ligne 16 -->




            <?php if(!empty($event)){ 
                    foreach($event as $row){ 
                ?>
            <div class="card shadow mt-4"> <!-- div ouvrante card shadow mt-4 ligne 24 -->
                <div class="inner"> <!-- div ouvrante inner ligne 25 -->



                <img class="card-img-top" src="<?php if(!empty($row['file_name'])){echo base_url().'uploads/events_img/'.$row['file_name'];} ?>" class="" srcset="">


                    
                </div> <!-- div fermante inner ligne 25 -->
                <div class="card-body"> <!-- div ouvrante body-card ligne 34 -->
                <h4 class="card-title"><?php echo ucfirst($row['event_name']); ?></h4>

                <?php
                if(!empty($row['event_date'])){

                    if($lang == 'fr'){
                            setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);

                            $date = $row['event_date'];
                            $date = strtotime($date);           
                            $date_fr = strftime('%A %d %B %Y', $date);

                            echo ucfirst($date_fr);
                    } else {
                            $date = $row['event_date'];
                            $date = strtotime($date);
                            $date_en = date('l jS F Y', $date);
                            
                            echo $date_en;
                    }

                } 

                if(!empty($row['event_heure'])){

                    if($lang == 'fr'){
                            echo " à ".$row['event_heure'];
                    } else {
                        $heure = $row['event_heure'];
                        $heure = strtotime($heure);
                        $heure_en = date('g:iA', $heure);

                        echo " at ".$heure_en;
                    }
                }?>

                <p class="card-text">

                </p>
                <a href="<?php echo $row['event_link']; ?>" class="btn btn-sm btn-primary"><?php echo $event_button_det; ?></a>
                </div> <!-- div fermante body-card ligne 34 -->

            </div> <!-- div ouvrante card shadow mt-4 ligne 24 -->


      
            
            <?php }
            } ?>


          </div> <!-- div fermante ligne 16 -->


    </div> <!-- div fermante row justify-content-center ligne 13 -->


    </div> <!-- div fermante container ligne 7 -->
</div> <!-- div fermante col-lg-12 ombre pt-5 ligne 6 -->