<div class="col-lg-12 ombre pt-5">

    <div class="container">

    <div class="row">
            <?php if($lang == 'fr'){ ?>
                <img src="<?php echo base_url(); ?>assets\img\banniere\fr\evenements.png" alt="banniere evenement en français" class="img-fluid pb-3">
            <?php } else { ?>
                <img src="<?php echo base_url(); ?>assets\img\banniere\eng\events.png" alt="banniere evenement en anglais" class="img-fluid pb-3">
            <?php } ?>
        </div> <!-- Fin de la div row -->

        <section>
            <div class="container">

            <form method="post">
                <div class="input-group mb-3">
                    <select name="searchKeyword" class="form-control">
                        <option value=""><?php echo $event_badge_all; ?></option>
                        <option value="<?php $searchKeyword = 'Festivals'; echo $searchKeyword; ?>" <?php if($this->session->userdata('searchKeyword') == 'Festivals') echo 'selected="selected"'; ?>><?php echo $event_badge_fest; ?></option>
                        <option value="<?php $searchKeyword = 'Scènes ouvertes'; echo $searchKeyword; ?>" <?php if($this->session->userdata('searchKeyword') == 'Scènes ouvertes') echo 'selected="selected"'; ?>><?php echo $event_badge_SO; ?></option>
                        <option value="<?php $searchKeyword = 'Bla-bla'; echo $searchKeyword; ?>" <?php if($this->session->userdata('searchKeyword') == 'Bla-bla') echo 'selected="selected"'; ?>><?php echo $event_badge_bb; ?></option>
                        <option value="<?php $searchKeyword = 'Divers'; echo $searchKeyword; ?>" <?php if($this->session->userdata('searchKeyword') == 'Divers') echo 'selected="selected"'; ?>><?php echo $event_badge_div; ?></option>
                    </select>
                    <div class="input-group-append">
                        <input type="submit" name="submitSearch" class="btn btn-outline-dark" value="<?php echo $event_button_cat; ?>">
                    </div>
                </div>
            </form>


                <?php if(!empty($event)){ ?>
                    <?php foreach($event as $row){ ?>
                        <?php $image = '<img src="'.base_url().'uploads/events_img/'.$row['file_name'].'" />'; ?>

                        <div class="card">
                            <div class="img">
                                <?php echo $image; ?>
                            </div>
                            <div class="top-text">
                                <div class="name"><?php echo $row['event_name']; ?></div>
                                <div class="name_date">
                                <?php
                                    if(!empty($row['event_date'])){
                                        if($lang == 'fr'){
                                            $date = $row['event_date'];
                                            $date_fr = strtotime($date);
						                    $date_fr = date('d/m/Y', $date_fr);
                                            echo ($date_fr);
                                        } else {
                                            $date = $row['event_date'];
                                            $date_en = strtotime($date);
						                    $date_en = date('m/d/Y', $date_en);
                                            echo ($date_en);
                                        }
                                    }
                                    if(!empty($row['event_heure'])){
                                        if($lang == 'fr'){
                                            echo " - ".$row['event_heure'];
                                        } else {
                                            $heure = $row['event_heure'];
                                            $heure = strtotime($heure);
                                            $heure_en = date('g:iA', $heure);
                                            echo " - ".$heure_en;
                                        }
                                    }
                                ?>
                                </div>
                            </div>
                            <div class="bottom-text">
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
        </section>
        
    </div> <!-- Fin de la div container -->

</div> <!-- Fin de la div col-lg-12 ombre pt-5 -->