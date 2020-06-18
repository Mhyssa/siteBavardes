



<div class="container">
    <h1>Modification d'un.e Artiste/Intervenant.e</h1>
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
                    <input type="text" name="people_name" class="form-control" value="<?php echo !empty($people['people_name'])?$people['people_name']:''; ?>" >
                    <?php echo form_error('people_name','<p class="help-block text-danger">','</p>'); ?>
                </div>

               
                <div class="form-group">
                    <label>Lien Internet : </label>
                    <input type="text" name="people_link" class="form-control" value="<?php echo !empty($people['people_link'])?$people['people_link']:''; ?>" >
                    <?php echo form_error('people_link','<p class="help-block text-danger">','</p>'); ?>
                </div>


                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="people_status">Status: </label> <br>
                            <input type="radio" name="people_status" id="people_status" value="Artiste" <?php if($people['people_status'] == "Artiste"){echo "checked";}?>> Artiste  
                            <input type="radio" name="people_status" id="people_status" value="Intervenant.e" <?php if($people['people_status'] == "Intervenant.e"){echo "checked";}?>> Intervenant.e
                            <?php echo form_error('people_status','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="form-group">
                            <label>Titre : </label>
                            <input type="text" name="people_title" class="form-control" value="<?php echo !empty($people['people_title'])?$people['people_title']:''; ?>" >
                            <?php echo form_error('people_title','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label>Images (.jpg .jpeg .png .gif) :</label>
                    <input type="file" name="image" class="form-control" value="<?php echo !empty($people['file_name'])?$people['file_name']:''; ?>">
                    <?php echo form_error('image','<p class="help-block text-danger">','</p>'); ?>
                    <?php if(!empty($people['file_name'])){ ?>
                            <div class="img-box">
                                <img src="<?php echo base_url().'uploads/people_img/'.$people['file_name']; ?>" class = "thumbnail" width="150" id="img">
                            </div>
                    <?php } ?>
                </div>
                

                <div class="form-group">
                        <a href="<?php echo base_url().'index.php/people/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
                        <input type="hidden" name="people_id" value="<?php echo !empty($people['people_id'])?$people['people_id']:''; ?>">

                        <input type="submit" name="people_edit" class="btn btn-sm btn-warning" value="Modifier">
                    </div>


                <?php echo form_close(); ?>


        </div>
    </div>
</div>








