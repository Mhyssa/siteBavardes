




<div class="col-lg-12 ombre pt-5 "><!-- div ouvrante col-lg-12 ombre pt-5 ligne 6 -->
    <div class="container mb-5"> <!-- div ouverte container ligne 7 -->


    <div class="row"> <!-- div ouvrante row ligne 10 -->
      <?php// if($lang == 'fr'){ ?>
        <img src="<?php echo base_url(); ?>assets\img\banniere\event.png" alt="banniere evenements" class="img-fluid pb-3">
      <?php/* } else { 
      echo 'events';
      }*/
      ?>
    </div> <!-- div fermante row ligne 10 -->

      <hr class="mt-3">

        <ul class="btn-group simplefilter d-flex p-2">
            <li class="btn btn-dark m-1 filtr-controls badge-pill" data-filter="all"><?php echo $event_badge_all; ?></li> 
            <li class="btn btn-dark m-1 filtr-controls badge-pill" data-filter="1"><?php echo $event_badge_fest; ?></li>
            <li class="btn btn-dark m-1 filtr-controls badge-pill" data-filter="2"><?php echo $event_badge_SO; ?></li>
            <li class="btn btn-dark m-1 filtr-controls badge-pill" data-filter="3"><?php echo $event_badge_bb; ?></li>
            <li class="btn btn-dark m-1 filtr-controls badge-pill" data-filter="4"><?php echo $event_badge_div; ?></li>    
        </ul>

    <div class="row justify-content-center"> <!-- div ouvrante row justify-content-center ligne 29 -->  


            <div class="container"> <!-- div ouvrante container ligne 32 -->
                <div class="filtr-container"> <!-- div ouvrante filtr-container ligne 33 -->
                    <?php if(!empty($event)){ ?>
                        
                    
                    <?php
                            foreach($event as $row){ 
                        ?>
                        
                            <div class="card shadow mt-2 col-12 filtr-item" data-category="<?php if($row['event_cat'] == 'Festivals'){echo '1';} elseif($row['event_cat'] == 'Scènes ouvertes'){echo '2';} elseif($row['event_cat'] == 'Bla bla'){echo '3';} elseif($row['event_cat'] == 'Divers'){echo '4';}?>"> <!-- div ouvrante card shadow mt-4 col-12 ligne 54 -->
                            
                                <div class="inner"> <!-- div ouvrante inner ligne 55 -->

                                    <img class="card-img-top" src="<?php if(!empty($row['file_name'])){echo base_url().'uploads/events_img/'.$row['file_name'];} ?>" class="" srcset="">
                                    
                                </div> <!-- div fermante inner ligne 55 -->
                        
                        
                                <div class="card-body"> <!-- div ouvrante body-card ligne 64 -->
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

                                        <a href="<?php echo $row['event_link']; ?>" class="btn btn-sm btn-primary float-right"><?php echo $event_button_det; ?></a>

                                    </div> <!-- div fermante body-card ligne 64 -->

                            </div> <!-- div fermante card shadow mt-4 col-12 filtr-item ligne 54 -->
          

                
                        
                        <?php } // ferme foreach ligne 38 ?>
                        <?php } //ferme if ligne 37 ?>

                    </div> <!-- div ouvrante filtr-container ligne 33 -->
            </div> <!-- div container row ligne 32 -->

        </div> <!-- div fermante row justify-content-center ligne 29 -->


    </div> <!-- div fermante container ligne 7 -->
</div> <!-- div fermante col-lg-12 ombre pt-5 ligne 6 -->