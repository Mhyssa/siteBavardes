
<div class="container">
    <h1>Modification d'un évènement</h1>
    <hr>
    
    <!-- Display status message -->
    <?php if(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
    
    
    <div class="row">
    <div class="col-9 container-fluid">
        <?php echo form_open_multipart() ;?>

                    
                    <div class="form-group">
                        <label>Nom de l'évènement : </label>
                        <input type="text" name="event_name" class="form-control" value="<?php echo !empty($events['event_name'])?$events['event_name']:''; ?>" >
                        <?php echo form_error('event_name','<p class="help-block text-danger">','</p>'); ?>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label>Date : </label>           
                                <input type="date" name="event_date" class="form-control" value="<?php echo !empty($events['event_date'])?$events['event_date']:''; ?>" >               
                                <?php echo form_error('event_date','<p class="help-block text-danger">','</p>'); ?>
                            </div>
                            <div class="col-6">
                                <label>Heure : </label>
                                <input type="time" name="event_heure" class="form-control" value="<?php echo !empty($events['event_heure'])?$events['event_heure']:''; ?>" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label>Lieu : </label>
                                <input type="text" name="event_lieu" class="form-control" value="<?php echo !empty($events['event_lieu'])?$events['event_lieu']:''; ?>" >
                            </div>
                            <div class="col-8">
                                <label>Adresse : </label>
                                <input type="text" name="event_adresse" class="form-control" value="<?php echo !empty($events['event_adresse'])?$events['event_adresse']:''; ?>" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Lien Internet : </label>
                        <input type="text" name="event_link" class="form-control" value="<?php echo !empty($events['event_link'])?$events['event_link']:''; ?>" >
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label>Nombre de personne : </label>
                                <input type="text" name="event_nombre_pers" class="form-control" value="<?php echo !empty($events['event_nombre_pers'])?$events['event_nombre_pers']:''; ?>" >
                            </div>
                            <div class="col-4">
                                <label for="event_inscription">Sur Inscription : </label> <br>
                                <input type="radio" name="event_inscription" id="event_inscription" value="Sur Inscription" <?php if($events['event_inscription'] == "Sur Inscription"){echo "checked";}?>>Oui <br>
                                <input type="radio" name="event_inscription" id="event_inscription" value="Sans Inscription" <?php if($events['event_inscription'] == "Sans Inscription"){echo "checked";}?>>Non
                            </div>
                            <div class="col-4">
                                <label for="event_non_mix">Non mixité choisie : </label> <br>
                                <input type="radio" name="event_non_mix" id="event_non_mix" value="Non Mixité Choisie" <?php if($events['event_non_mix'] == "Non Mixité Choisie"){echo "checked";}?>>Oui <br>
                                <input type="radio" name="event_non_mix" id="event_non_mix" value="Pour Tout le Monde" <?php if($events['event_non_mix'] == "Pour Tout le Monde"){echo "checked";}?>>Non
                            </div> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Description : </label>
                        <textarea name="event_description" class="form-control" id="event_description" cols="30" rows="10" placeholder="<?php echo $events['event_description']; ?>" value="<?php echo !empty($events['event_description'])?$events['event_description']:'';?>" ></textarea>
                    </div>

                    <div class="form-group">
                        <label>Images (.jpg .jpeg .png .gif) :</label>
                        <input type="file" name="image" class="form-control" value="<?php echo !empty($events['file_name'])?$events['file_name']:''; ?>">
                        <?php echo form_error('image','<p class="help-block text-danger">','</p>'); ?>

                            <?php if(!empty($events['file_name'])){ ?>
                            <div class="img-box">
                                <img src="<?php echo base_url().'uploads/events_img/'.$events['file_name']; ?>" class = "thumbnail" width="150" id="img">
                            </div>
                            <?php } ?>
                    </div>

                    <div class="form-group">
                        <a href="<?php echo base_url().'/event/ad_index'; ?>" class="btn btn-sm btn-secondary">Retour</a>
                        <input type="hidden" name="event_id" value="<?php echo !empty($events['event_id'])?$events['event_id']:''; ?>">

                        <input type="submit" name="event_edit" class="btn btn-sm btn-warning" value="Modifier">
                    </div>


        <?php echo form_close(); ?>

        </div>
    </div>
</div>