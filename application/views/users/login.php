<div class="container">
    <h2>Connexion</h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    
    
    ?>
	


    <!-- Login form -->
    <div class="regisFrm">
        <form action="" method="post">
            <div class="form-group">
                <label for="us_email">Adresse e-mail :</label>
                <input type="email" name="us_email" class="form-control" >
                <?php echo form_error('us_email','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label for="us_password">Mot de Passe :</label>
                <input type="password" name="us_password" class="form-control">
                <?php echo form_error('us_password','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="send-button">
                <input type="reset" class="btn btn-secondary" value="Annuler">
                <input type="submit" name="loginSubmit" class="btn btn-primary" value="Se Connecter">
            </div>
        </form>
        <p>Tu n'as toujours pas de compte? <a href="<?php echo base_url('users/registration'); ?>">Cliques ici</a></p>
    </div>
</div>