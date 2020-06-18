<div class="container"> <!-- div ouvrante container n°1 -->
    
    <div class="row"> <!-- div ouvrante row n°1 -->
        <div class="col-md-12"> <!-- div ouvrante col-md-12 -->
            <a href="<?php echo base_url().'index.php/event/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
        </div> <!-- div fermante col-md-12 -->
    </div> <!-- div fermante row n°1 -->

    <div class="container"> <!-- div ouvrante container n°2 -->
        <div class="row"> <!-- div ouvrante row n°2 -->
            <div class="col-sm-12 mt-5 mb-5"> <!-- div ouvrante col-sm-12 mt-5 mb-5 -->
              
                <section>
                    <div class="container"> <!-- div ouvrante container n°3 -->

                        <div class="card"> <!-- div ouvrante card -->
                            <div class="img"> <!-- div ouvrante img -->
                                <img src="<?php echo base_url().'uploads/events_img/'.$events['file_name']; ?>" alt="img event">
                            </div> <!-- div fermante img -->
                            <div class="top-text"> <!-- div ouvrante top-text -->
                                <div class="name"><?php echo $events['event_name']; ?></div>
                                <div class="name_date">
                                <?php
                                    if(!empty($events['event_date'])){
                                        setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
                                        $date = $events['event_date'];
                                        $date = strtotime($date);
                                        $date_fr = strftime('%A %d %B %Y', $date);
                                        echo 'Le '.ucfirst($date_fr);
                                    }
                                    if(!empty($events['event_heure'])){
                                        echo " à ".$events['event_heure'];
                                    }
                                ?>
                                </div>
                            </div> <!-- div fermante top-text -->
                            <div class="bottom-text"> <!-- div ouvrante bottom-text -->
                                <div class="btn"> <!-- div ouvrante btn -->
                                    <a href="<?php echo $events['event_link'] ?>">Détails</a>
                                    <?php if($events['event_inscription'] == 'Sur Inscription'){ ?>
                                        <a href="mailto:contact@lesbavardes.org">Sur Inscription</a>
                                    <?php } ?>
                                </div> <!-- div fermante btn -->
                            </div> <!-- div fermante bottom-text -->
                        </div> <!-- div fermante card -->

                    </div> <!-- div fermante container n°3 -->        
                </section>

            </div> <!-- div fermante col-sm-12 mt-5 mb-5 -->
        </div> <!-- div fermante row n°2 -->
    </div> <!-- div fermante container n°2 -->

</div> <!-- div fermante container n°1 -->