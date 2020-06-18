

<div class="container">
    <h1>Modeification d'un article de presse</h1>
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

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="presse_cat">Catégorie: </label> <br>
                            <input type="radio" name="presse_cat" id="presse_cat" value="Jeanne Magazine" <?php if($presse['presse_cat'] == "Jeanne Magazine"){echo "checked";}?>> Jeanne Magazine <br>  
                            <input type="radio" name="presse_cat" id="presse_cat" value="Courrier Picard" <?php if($presse['presse_cat'] == "Courrier Picard"){echo "checked";}?>> Courrier Picard <br>
                            <input type="radio" name="presse_cat" id="presse_cat" value="Luttes LGBTQI+" <?php if($presse['presse_cat'] == "Luttes LGBTQI+"){echo "checked";}?>> Luttes LGBTQI+ <br>
                            <input type="radio" name="presse_cat" id="presse_cat" value="Divers" <?php if($presse['presse_cat'] == "Divers"){echo "checked";}?>> Divers
                            <?php echo form_error('presse_cat','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label>Nom : </label>
                            <input type="text" name="presse_name" class="form-control" value="<?php echo !empty($presse['presse_name'])?$presse['presse_name']:''; ?>" >
                            <?php echo form_error('presse_name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                </div>

               
                <div class="form-group">
                    <label>Lien Internet : </label>
                    <input type="text" name="presse_link" class="form-control" value="<?php echo !empty($presse['presse_link'])?$presse['presse_link']:''; ?>" >
                    <?php echo form_error('presse_link','<p class="help-block text-danger">','</p>'); ?>
                </div>


                <div class="form-group">
                    <label>Description : </label>
                    <textarea name="presse_description" class="form-control" id="presse_description" cols="30" rows="10" value="<?php echo !empty($presse['presse_description'])?$presse['presse_description']:''; ?>"><?php echo !empty($presse['presse_description'])?$presse['presse_description']:''; ?></textarea>
                </div>



                <div class="form-group">
                    <label>Images (.jpg .jpeg .png .gif) :</label>
                    <input type="file" name="image" class="form-control" value="<?php echo !empty($presse['file_name'])?$presse['file_name']:''; ?>">
                    <?php if(!empty($presse['file_name'])){ ?>
                            <div class="img-box">
                                <img src="<?php echo base_url().'uploads/presse_img/'.$presse['file_name']; ?>" class = "thumbnail" width="150" id="img">
                            </div>
                    <?php } ?>
                </div>
                
                <div class="form-group">
                    <a href="<?php echo base_url().'index.php/about/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
                    <input type="hidden" name="presse_id" value="<?php echo !empty($presse['presse_id'])?$presse['presse_id']:''; ?>">
                    <input type="submit" name="presse_edit" class="btn btn-warning btn-sm" value="Modifier">
                </div>


                <?php echo form_close(); ?>


        </div>
    </div>
</div>








