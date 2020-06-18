

<div class="container">
    <h1>Ajout d'un membre Admin</h1>
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
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nom : </label>
                            <input type="text" name="us_lname" class="form-control" value="<?php echo !empty($admin['us_lname'])?$admin['us_lname']:''; ?>" >
                            <?php echo form_error('us_lname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Prénom : </label>
                            <input type="text" name="us_fname" class="form-control" value="<?php echo !empty($admin['us_fname'])?$admin['us_fname']:''; ?>" >
                            <?php echo form_error('us_fname','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                </div>
               
               <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <label>N° Téléphone : </label>
                            <input type="text" name="us_phone" class="form-control" value="<?php echo !empty($admin['us_phone'])?$admin['us_phone']:''; ?>" >
                            <?php echo form_error('us_phone','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="form-group">
                            <label>Adresse E-mail : </label>
                            <input type="text" name="us_email" class="form-control" value="<?php echo !empty($admin['us_email'])?$admin['us_email']:''; ?>" >
                            <?php echo form_error('us_email','<p class="help-block text-danger">','</p>'); ?>
                        </div>
                    </div>
               </div>


                <div class="form-group">
                    <label>Mot de Passe : </label>
                    <input type="password" name="us_password" class="form-control" value="<?php echo !empty($admin['us_password'])?$admin['us_password']:''; ?>" >
                    <?php echo form_error('us_password','<p class="help-block text-danger">','</p>'); ?>
                </div>



                <div class="form-group">
                    <label>Images (.jpg .jpeg .png .gif) :</label>
                    <input type="file" name="image" class="form-control" value="<?php echo !empty($admin['file_name'])?$admin['file_name']:''; ?>">
                    <?php echo form_error('image','<p class="help-block text-danger">','</p>'); ?>
                </div>


                <div class="form-group">
                    <label for="us_status">Status: </label> <br>
                    <input type="checkbox" name="us_status" id="us_status" value="1"> Admin  
                    <?php echo form_error('us_status','<p class="help-block text-danger">','</p>'); ?>
                </div>


                
                <div class="form-group">
                    <a href="<?php echo base_url().'index.php/users/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
                    <input type="submit" name="admin_add" class="btn btn-success btn-sm" value="Ajouter">
                </div>


                <?php echo form_close(); ?>


        </div>
    </div>
</div>








