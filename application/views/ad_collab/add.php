

<div class="container">
    <h1>Ajout d'une Collaboration</h1>
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
                    <label>Nom : </label>
                    <input type="text" name="collab_name" class="form-control" value="<?php echo !empty($collab['collab_name'])?$collab['collab_name']:''; ?>" >
                    <?php echo form_error('collab_name','<p class="help-block text-danger">','</p>'); ?>
                </div>

               
                <div class="form-group">
                    <label>Lien Internet : </label>
                    <input type="text" name="collab_link" class="form-control" value="<?php echo !empty($collab['collab_link'])?$collab['collab_link']:''; ?>" >
                    <?php echo form_error('collab_link','<p class="help-block text-danger">','</p>'); ?>
                </div>


                <div class="form-group">
                    <label>Images (.jpg .jpeg .png .gif) :</label>
                    <input type="file" name="image" class="form-control" value="<?php echo !empty($collab['file_name'])?$collab['file_name']:''; ?>">
                    <?php echo form_error('image','<p class="help-block text-danger">','</p>'); ?>
                </div>
                
                <div class="form-group">
                    <a href="<?php echo base_url().'collaboration/ad_index'; ?>" class="btn btn-sm btn-secondary">Retour</a>
                    <input type="submit" name="collab_add" class="btn btn-success btn-sm" value="Ajouter">
                </div>


                <?php echo form_close(); ?>


        </div>
    </div>
</div>








