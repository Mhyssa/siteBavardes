<div class="col-lg-12 ombre pt-5">

    <div class="container">

        <div class="row">
            <?php// if($lang='fr){ ?>
            <img src="<?php echo base_url(); ?>assets\img\banniere\event.png" alt="banniere evenement" class="img-fluid pb-3">
            <?php/* } else {
                echo 'our collaborations';
            }*/
            ?>
        </div> <!-- Fin de la div row -->

        <section>
            <div class="container">

                <div class="controls">
                    <button type="button" data-filter="all"><?php echo $event_badge_all; ?></button>
                    <button type="button" data-filter="1"><?php echo $event_badge_fest; ?></button>
                    <button type="button" data-filter="2"><?php echo $event_badge_SO; ?></button>
                    <button type="button" data-filter="3"><?php echo $event_badge_bb; ?></button>
                    <button type="button" data-filter="4"><?php echo $event_badge_div; ?></button>
                </div>
            
                    <div class="filtr-container">

                        <?php if(!empty($event)){ ?>
                            <?php foreach($event as $row){ ?>
                                <?php $image = '<img src="'.base_url().'uploads/events_img/'.$row['file_name'].'" />'; ?>

                                <div class="filtr-item" data-category="<?php if($row['event_cat'] == 'Festivals'){echo "1";} elseif($row['event_cat'] == 'Scènes ouvertes'){echo "2";} elseif($row['event_cat'] == 'Bla-bla'){echo "3";} elseif($row['event_cat'] == 'Divers'){echo "4";} ?>">
                                    <div class="img">
                                        <?php echo $image; ?>
                                    </div>
                                    <div class="top-text">
                                        <div class="name"><?php echo $row['event_name']; ?></div>
                                        <p>
                                        <?php
                                            if(!empty($row['event_date'])){
                                                if($lang == 'fr'){
                                                    setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
                                                    $date = $row['event_date'];
                                                    $date = strtotime($date);
                                                    $date_fr = strftime('%A %d %B %Y', $date);
                                                    echo 'Le '.ucfirst($date_fr);
                                                } else {
                                                    $date = $row['event_date'];
                                                    $date = strtotime($date);
                                                    $date_en = date('l jS F Y', $date);
                                                    echo 'On '.ucfirst($date_en);
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
                                            }
                                        ?>
                                        </p>
                                        <div class="btn">
                                            <a href="<?php echo $row['event_link']; ?>"><?php echo $event_button_det; ?></a>
                                            <?php if($row['event_inscription'] == 'Sur Inscription'){ ?>
                                                <a href="mailto:contact@lesbavardes.org"><?php echo $event_button_inscription; ?></a>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        <?php } ?>

                    </div>

            </div>
        </section>
        
    </div> <!-- Fin de la div container -->

</div> <!-- Fin de la div col-lg-12 ombre pt-5 -->