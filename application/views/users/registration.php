<div class="container">
    <h2>Inscription</h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Registration form -->
    <div>
        <?php echo form_open(); ?>
            <div class="form-group">
                <label for="us_fname">Prénom* :</label>
                <input type="text" name="us_fname" id="us_fname" class="form-control" value="<?php echo !empty($user['us_fname'])?$user['us_fname']:''; ?>">
                <?php echo form_error('us_fname','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label for="us_lname">Nom* :</label>
                <input type="text" name="us_lname" id="us_lname" class="form-control" value="<?php echo !empty($user['us_lname'])?$user['us_lname']:''; ?>">
                <?php echo form_error('us_lname','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label for="us_email">Adresse e-mail* :</label>
                <input type="email" name="us_email" id="us_email" class="form-control" value="<?php echo !empty($user['us_email'])?$user['us_email']:''; ?>">
                <?php echo form_error('us_email','<p class="help-block text-danger">','</p>'); ?>
            </div>

            <div class="form-group">
                    <label id="us_gender">Genre* : </label>
                    <?php
                        $options = array(
                            ""=>"Choisir dans la liste déroulante",
                            "Femme"=>"Féminin",
                            "Homme"=>"Masculin",
                            "Non"=>"Ne se prononce pas"
                        );
                    ?>
                    <?php echo form_dropdown('us_gender',$options,set_value('us_gender'), array("class"=>"form-control")) ?>
                    <?php echo form_error('us_gender','<p class="help-block text-danger">','</p>'); ?>
            </div>

            <div class="form-group">
                <label for="us_phone">Numéro de Téléphone :</label>
                <input type="text" name="us_phone" class="form-control" value="<?php echo !empty($user['us_phone'])?$user['us_phone']:''; ?>">
                <?php echo form_error('us_phone','<p class="help-block text-danger">','</p>'); ?>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="us_password">Mot de Passe* :</label>
                        <input type="password" name="us_password" id="us_password" class="form-control" >
                        <?php echo form_error('us_password','<p class="help-block text-danger">','</p>'); ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="us_conf_password">Mot de Passe* (à confirmer) :</label>
                        <input type="password" class="form-control" id="us_conf_password" name="us_conf_password" >
                        <?php echo form_error('us_conf_password','<p class="help-block text-danger">','</p>'); ?>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <input type="reset" class="btn btn-secondary" value="Annuler">
                <input type="submit" name="signupSubmit" class="btn btn-primary" value="S'inscrire">
            </div>
        <?php echo form_close(); ?>
        <p>Tu possèdes déjà un compte? <a href="<?php echo base_url('users/login'); ?>">Cliques ici</a></p>
    </div>
</div>