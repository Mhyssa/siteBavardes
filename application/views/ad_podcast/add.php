

<div class="container">
    <h1>Ajout d'un Podcast</h1>
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
                            <input type="text" name="podcast_name" class="form-control" value="<?php echo !empty($pod['pod_name'])?$pod['pod_name']:''; ?>" >
                            <?php echo form_error('podcast_name','<p class="help-block text-danger">','</p>'); ?>
                        </div>


               

                <div class="form-group">
                    <label>Lien Podcast : </label>
                    <input type="text" name="podcast_link" class="form-control" value="<?php echo !empty($pod['pod_link'])?$pod['pod_link']:''; ?>" >
                    <?php echo form_error('podcast_link','<p class="help-block text-danger">','</p>'); ?>
                </div>



                
                <div class="form-group">
                    <a href="<?php echo base_url().'podcast/ad_index'; ?>" class="btn btn-sm btn-secondary">Retour</a>
                    <input type="submit" name="podcast_add" class="btn btn-success btn-sm" value="Ajouter">
                </div>


                <?php echo form_close(); ?>


        </div>
    </div>
</div>








