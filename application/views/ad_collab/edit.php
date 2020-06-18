<div class="container">
    <h1>Modification d'une Collaboration</h1>
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
                            <label for="collab_cat">Catégorie: </label> <br>
                            <input type="radio" name="collab_cat" id="collab_cat" value="Financiers" <?php if($collab['collab_cat'] == "Financiers"){echo "checked";}?>> Financiers <br>  
                            <input type="radio" name="collab_cat" id="collab_cat" value="Collaborations" <?php if($collab['collab_cat'] == "Collaborations"){echo "checked";}?>> Collaborations <br>
                            <input type="radio" name="collab_cat" id="collab_cat" value="Lieux" <?php if($collab['collab_cat'] == "Lieux"){echo "checked";}?>> Lieux <br>
                            <?php echo form_error('collab_cat','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label>Nom : </label>
                            <input type="text" name="collab_name" class="form-control" value="<?php echo !empty($collab['collab_name'])?$collab['collab_name']:''; ?>" >
                            <?php echo form_error('collab_name','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
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
                    <?php if(!empty($collab['file_name'])){ ?>
                            <div class="img-box">
                                <img src="<?php echo base_url().'uploads/collab_img/'.$collab['file_name']; ?>" class = "thumbnail" width="150" id="img">
                            </div>
                    <?php } ?>
                </div>
                

                <div class="form-group">
                        <a href="<?php echo base_url().'index.php/collab/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
                        <input type="hidden" name="collab_id" value="<?php echo !empty($collab['collab_id'])?$collab['collab_id']:''; ?>">

                        <input type="submit" name="collab_edit" class="btn btn-sm btn-warning" value="Modifier">
                    </div>


                <?php echo form_close(); ?>


        </div>
    </div>
</div>
