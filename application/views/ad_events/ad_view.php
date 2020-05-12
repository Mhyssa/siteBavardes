


<div class="container">
    <div class="row">
        <div class="col-md-12">




        
            
        
        
        
        
        </div>
        <a href="<?php echo base_url().'event/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
    </div>
</div>



<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 mt-3 bg-danger p-2 rounded">
        <h3 class="bg-light p-2 rounded text-center text-dark"><?php echo $events['event_name']; ?></h3>
        <div class>



        
       
           <?php if(!empty($events['file_name'])){ ?>

            <div class="text-center">
            <img src="<?php echo base_url('uploads/events_img/'.$events['file_name']); ?>" width="300" class="img-thumbnail">
            </div>

           <?php } ?>




<div class="row">
    <div class="col-8">
           <p class="text-light">Quand? 
                <?php
                if(!empty($events['event_date'])){

                    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);

                            $date = $events['event_date'];
                            $date = strtotime($date);           
                            $date_fr = strftime('%A %d %B %Y', $date);

                            echo ucfirst($date_fr);
                } 

                if(!empty($events['event_heure'])){
                    echo " à ".$events['event_heure'];
                }?>
            </p>
    </div>
    <div class="col-4">
           <p class="text-light">
            <?php if(!empty($events['event_inscription'])){ 
 
                    if($events['event_inscription'] == "Sur Inscription" && !empty($events['event_link'])){ ?>
                        <a href="<?php echo $events['event_link'] ?>" class="btn btn-dark btn-sm text-light"><?php echo $events['event_inscription']; ?></a>
                   <?php } ?>
                
            <?php } ?>
            </p>
            <p>Catégorie : <?php echo $events['event_cat']; ?></p>
    </div>
</div>








                  <?php  if(!empty($events['event_lieu'])){ ?>

            <p class="text-light">Où? 
                <?php

                        echo $events['event_lieu'];
                    }

                    if(!empty($events['event_adresse'])){
                        echo " - ".$events['event_adresse'];
                    }
                ?>
            </p>


            <?php if(!empty($events['event_description'])){ ?>
                <p class="text-light">Description : <?php echo $events['event_description']; ?></p>
            <?php } ?>

            <?php if(!empty($events['event_nombre_pers'])){ ?>
                <p class="text-light">Nombre de personne : <?php echo $events['event_nombre_pers']; ?></p>
            <?php } ?>


            <?php if(!empty($events['event_non_mix'])){ ?>
                <p class="text-light"><?php echo $events['event_non_mix']; ?></p>
            <?php } ?>

           


        
        </div>






    </div>
</div>
</div>