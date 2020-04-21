


<div class="container">
    <h1>Ajout au sein de l'Equipe</h1>
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
                    <label>Prènom : </label>
                    <input type="text" name="team_name" class="form-control" value="<?php echo !empty($team['team_name'])?$team['team_name']:''; ?>" >
                    <?php echo form_error('team_name','<p class="help-block text-danger">','</p>'); ?>
                </div>


                <div class="form-group">
                    <label>Titre : </label>
                    <input type="text" name="team_title" class="form-control" value="<?php echo !empty($team['team_title'])?$team['team_title']:''; ?>" >
                    <?php echo form_error('team_title','<p class="help-block text-danger">','</p>'); ?>
                </div>
               

                <div class="form-group">
                    <label>Description : </label>
                    <textarea name="team_description" class="form-control" id="team_description" cols="30" rows="10" value="<?php echo !empty($team['team_description'])?$team['team_description']:''; ?>"></textarea>
                    <?php echo form_error('team_description','<p class="help-block text-danger">','</p>'); ?>
                </div>


                <div class="form-group">
                    <label>Images (.jpg .jpeg .png .gif) :</label>
                    <input type="file" name="image" class="form-control" value="<?php echo !empty($team['file_name'])?$team['file_name']:''; ?>">
                    <?php echo form_error('image','<p class="help-block text-danger">','</p>'); ?>
                </div>
                
                <div class="form-group">
                    <a href="<?php echo base_url().'team/ad_index'; ?>" class="btn btn-sm btn-secondary">Retour</a>
                    <input type="submit" name="team_add" class="btn btn-success btn-sm" value="Ajouter">
                </div>


                <?php echo form_close(); ?>


        </div>
    </div>
</div>








