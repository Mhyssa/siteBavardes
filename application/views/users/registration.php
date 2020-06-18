<div class="col-lg-12 ombre pt-5">
<div class="container">
        <div class="row">
            <?php if($lang == 'fr'){ ?>
                <img src="<?php echo base_url(); ?>assets\img\banniere\fr\inscription.png" alt="banniere inscription en français" class="img-fluid pb-3">
            <?php } else { ?>
                <img src="<?php echo base_url(); ?>assets\img\banniere\eng\register.png" alt="banniere inscription en anglais" class="img-fluid pb-3">
            <?php } ?>
        </div> <!-- Fin de la div row -->		
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg; 
            ?> - <a href="<?php echo base_url().'index.php/users/login/'.$lang; ?>"><?php echo $create_clk; ?></a>
            </p>
            <?php
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>


    <!-- Registration form -->
        <div class="container mb-5">
            <div class="row justify-content-md-center mt-5">
                <div class="col-lg-9 col-md-12">
                    <div class="form-bg">
                        <div class="form-container">
                            <div class="form-horizontal">
                            <?php echo form_open(); ?>
                                <h3 class="title"><?php echo $create_name; ?></h3>
                                <div class="lignefooter"> </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="us_fname" id="us_fname" class="form-control"  placeholder="<?php echo $create_fname; ?>*" value="<?php echo !empty($user['us_fname'])?$user['us_fname']:''; ?>" required>
                                    <?php echo form_error('us_fname','<p class="help-block text-danger">','</p>'); ?>
                                    <span class="missPrenom form-control" id="missPrenom"></span>
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input type="text" name="us_lname" id="us_lname" class="form-control" placeholder="<?php echo $create_lname; ?>*" value="<?php echo !empty($user['us_lname'])?$user['us_lname']:''; ?>" required>
                                    <?php echo form_error('us_lname','<p class="help-block text-danger">','</p>'); ?>
                                    <span class="missNom form-control" id="missNom"></span>
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                    <input type="email" name="us_email" id="us_email" class="form-control" placeholder="<?php echo $create_mail; ?>*" value="<?php echo !empty($user['us_email'])?$user['us_email']:''; ?>" required>
                                    <span class="missMail form-control" id="missMail"></span><?php echo form_error('us_email','<p class="help-block text-danger">','</p>'); ?>
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fas fa-phone"></i></span>
                                    <input type="text" name="us_phone" id="us_phone" placeholder="<?php echo $create_phone; ?>*" class="form-control" value="<?php echo !empty($user['us_phone'])?$user['us_phone']:''; ?>" required>
                                    <span class="form-control missPhone" id="missPhone"></span><?php echo form_error('us_phone','<p class="help-block text-danger">','</p>'); ?>
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="us_password" id="us_password" class="form-control" placeholder="<?php echo $create_psw; ?>*" required>
                                    <?php echo form_error('us_password','<p class="help-block text-danger">','</p>'); ?>
                                    <span class="missPsw" id="missPsw"></span>
                                </div>
                                <div class="form-group ">
                                    <span class="input-icon"><i class="fa fa-lock"></i></span>
                                    <input type="password" class="form-control" id="us_conf_password" placeholder="<?php echo $create_psw_cf; ?>*" name="us_conf_password" required>
                                    <?php echo form_error('us_conf_password','<p class="help-block text-danger">','</p>'); ?>
                                    <span class="missConfPsw" id="missConfPsw"></span>
                                </div>

                                <fieldset>
                                  <legend><?php echo $create_captcha_legend; ?></legend>
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="form-group">
                                                <input type="text" name="user_captcha" id="user_captcha" placeholder="<?php echo $create_captcha_text; ?>*" class="form-control" value="<?php if(!empty($user_captcha)){echo $user_captcha;} ?>" required>
                                                <?php echo form_error('user_captcha','<p class="help-block text-danger">','</p>'); ?>
                                                <span class="captchaCheck" id="captchaCheck"></span>
                                            </div>  
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <span><?php echo $captcha['image']; ?></span>
                                            </div>
                                        </div>
                                    </div>   
                                </fieldset>
                                <input type="submit" name="signupSubmit" class="btn signup" value="<?php echo $create_submit; ?>">
                            <?php echo form_close(); ?>
                            </div>
                            <div class="form-icon">
                                <i class="fa fa-user-circle"></i>
                                <span class="signin" >
                                    <p><?php echo $create_act; ?> <a href="<?php echo base_url().'index.php/users/login/'.$lang; ?>"><?php echo $create_clk; ?></a></p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        




    </div>
</div>
</div>