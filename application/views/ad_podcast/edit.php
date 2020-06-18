

<div class="container">
    <h1>Modification d'un Podcast</h1>
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
                            <input type="text" name="podcast_name" class="form-control" value="<?php echo !empty($podcast['podcast_name'])?$podcast['podcast_name']:''; ?>" >
                            <?php echo form_error('podcast_name','<p class="help-block text-danger">','</p>'); ?>
                        </div>


               

                <div class="form-group">
                    <label>Lien Podcast : </label>
                    <input type="text" name="podcast_link" class="form-control" value="<?php echo !empty($podcast['podcast_link'])?$podcast['podcast_link']:''; ?>" >
                    <?php echo form_error('podcast_link','<p class="help-block text-danger">','</p>'); ?>
                </div>

                <div class="form-group">
                    <label>Images (.jpg .jpeg .png .gif) :</label>
                    <input type="file" name="image" class="form-control" value="<?php echo !empty($podcast['file_name'])?$podcast['file_name']:''; ?>">
                    <?php if(!empty($podcast['file_name'])){ ?>
                            <div class="img-box">
                                <img src="<?php echo base_url().'uploads/podcast_img/'.$podcast['file_name']; ?>" class = "thumbnail" width="150" id="img">
                            </div>
                    <?php } ?>
                </div>


                
                <div class="form-group">
                    <a href="<?php echo base_url().'index.php/podcast/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
                    <input type="hidden" name="podcast_id" value="<?php echo !empty($podcast['podcast_id'])?$podcast['podcast_id']:''; ?>">
                    <input type="submit" name="podcast_edit" class="btn btn-warning btn-sm" value="Modification">
                </div>


                <?php echo form_close(); ?>


        </div>
    </div>
</div>
