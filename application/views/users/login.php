<div class="col-lg-12 ombre pt-5">
<div class="container">

    <h2><?php echo $login_title; ?></h2>
	
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
                <label for="us_email"><?php echo $login_mail; ?> :</label>
                <input type="email" name="us_email" class="form-control" >
                <?php echo form_error('us_email','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label for="us_password"><?php echo $login_psw; ?> :</label>
                <input type="password" name="us_password" class="form-control">
                <?php echo form_error('us_password','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="send-button">
                <input type="reset" class="btn btn-secondary" value="<?php echo $login_reset; ?>">
                <input type="submit" name="loginSubmit" class="btn btn-primary" value="<?php echo $login_submit; ?>">
            </div>
        </form>
        <p><?php echo $login_act; ?> <a href="<?php echo base_url().'Users/registration/'.$lang; ?>"><?php echo $login_clk; ?></a></p>
    </div>
</div>
</div>
