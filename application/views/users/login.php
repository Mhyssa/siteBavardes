<div class="col-lg-12 ombre pt-5">
<div class="container">

        <div class="row">
            <?php if($lang == 'fr'){ ?>
                <img src="<?php echo base_url(); ?>assets\img\banniere\fr\connexion.png" alt="banniere connexion en français" class="img-fluid pb-3">
            <?php } else { ?>
                <img src="<?php echo base_url(); ?>assets\img\banniere\eng\login.png" alt="banniere connexion en anglais" class="img-fluid pb-3">
            <?php } ?>
        </div> <!-- Fin de la div row -->		
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    
    
    ?>
	
    <div class="form-bg">
        <div class="container mb-5">
            <div class="row justify-content-md-center mt-5">
                <div class="col-lg-9 col-md-12">
                    <div class="form-container">
                        <div class="form-icon">
                            <!-- <i class="fab fa-suse"></i> -->
                            <i class="fa fa-user-circle"></i>
                            <p><?php echo $login_act; ?> <a href="<?php echo base_url().'index.php/users/registration/'.$lang; ?>"><?php echo $login_clk; ?></a></p>
                        </div>
                        <div class="form-horizontal">
                            <?php echo form_open(); ?>
                            <h3 class="title"><?php echo $login_name; ?></h3>
                            <div class="lignefooter"> </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                <input type="email" name="us_email" class="form-control"  placeholder="<?php echo $login_mail; ?>*">
                                <?php echo form_error('us_email','<p class="help-block text-danger">','</p>'); ?>
                            </div>
                            <div class="form-group">
                                <span class="input-icon"><i class="fa fa-lock"></i></span>
                                <input type="password" name="us_password" class="form-control" placeholder="<?php echo $login_psw; ?>*">
                                <?php echo form_error('us_password','<p class="help-block text-danger">','</p>'); ?>
                            </div>
                            <input type="submit" name="loginSubmit" class="btn btn-primary" value="<?php echo $login_submit; ?>">   
                            <?php echo form_close(); ?>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Login form -->

</div>
</div>
