




<div class="container">






    <div class="row justify-content-center">
        
        
        <div>
            <?php if(!empty($event)){ 
                    foreach($event as $row){ 
                ?>
            <div class="card shadow mt-4">
                <div class="inner">



                <img class="card-img-top" src="<?php if(!empty($row['file_name'])){echo base_url().'uploads/events_img/'.$row['file_name'];} ?>" class="" srcset="">


                    
                </div>
                <div class="card-body">
                <h4 class="card-title"><?php echo ucfirst($row['event_name']); ?></h4>

                <?php
                if(!empty($row['event_date'])){

                    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);

                            $date = $row['event_date'];
                            $date = strtotime($date);           
                            $date_fr = strftime('%A %d %B %Y', $date);

                            echo ucfirst($date_fr);
                } 

                if(!empty($row['event_heure'])){
                    echo " à ".$row['event_heure'];
                }?>

                <p class="card-text">

                </p>
                <a href="<?php echo $row['event_link']; ?>" class="btn btn-sm btn-primary">en savoir plus</a>
                </div>

            </div>


      
            
            <?php } }else{ ?>
                <tr><td colspan="6">Aucun(s) évènement(s) trouvé(s)...</td></tr>
                <?php } ?>
          </div>
    </div>
</div>