<div class="col-lg-12 ombre pt-5">
<div class="container">
    <h2><?php echo $create_title; ?></h2>
	
    <!-- Status message -->
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg; 
            ?> - <a href="<?php echo base_url().'Users/login/'.$lang; ?>"><?php echo $create_clk; ?></a>
            </p>
            <?php
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
	
    <!-- Registration form -->
    <div>
        <?php echo form_open(); ?>
            <div class="form-group">
                <label for="us_fname"><?php echo $create_fname; ?>* :</label>
                <input type="text" name="us_fname" id="us_fname" class="form-control" value="<?php echo !empty($user['us_fname'])?$user['us_fname']:''; ?>">
                <?php echo form_error('us_fname','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label for="us_lname"><?php echo $create_lname ?>* :</label>
                <input type="text" name="us_lname" id="us_lname" class="form-control" value="<?php echo !empty($user['us_lname'])?$user['us_lname']:''; ?>">
                <?php echo form_error('us_lname','<p class="help-block text-danger">','</p>'); ?>
            </div>
            <div class="form-group">
                <label for="us_email"><?php echo $create_mail ?>* :</label>
                <input type="email" name="us_email" id="us_email" class="form-control" value="<?php echo !empty($user['us_email'])?$user['us_email']:''; ?>">
                <?php echo form_error('us_email','<p class="help-block text-danger">','</p>'); ?>
            </div>


            <div class="form-group">
                <label for="us_phone"><?php echo $create_phone; ?> :</label>
                <input type="text" name="us_phone" class="form-control" value="<?php echo !empty($user['us_phone'])?$user['us_phone']:''; ?>">
                <?php echo form_error('us_phone','<p class="help-block text-danger">','</p>'); ?>
            </div>

            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="us_password"><?php echo $create_psw; ?>* :</label>
                        <input type="password" name="us_password" id="us_password" class="form-control" >
                        <?php echo form_error('us_password','<p class="help-block text-danger">','</p>'); ?>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="us_conf_password"><?php echo $create_psw_cf; ?>* :</label>
                        <input type="password" class="form-control" id="us_conf_password" name="us_conf_password" >
                        <?php echo form_error('us_conf_password','<p class="help-block text-danger">','</p>'); ?>
                    </div>
                </div>
            </div>
            <fieldset>
            <legend><?php echo $create_captcha_legend; ?></legend>
                <div class="row">
                    <div class="col-5">
                        <div class="form-group">
                            <input type="text" name="user_captcha" placeholder="<?php echo $create_captcha_text; ?>" class="form-control" value="<?php if(!empty($user_captcha)){echo $user_captcha;} ?>">
                            <?php echo form_error('user_captcha','<p style= "color: #F83A18">','</p>'); ?>
                        </div>  
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <span><?php echo $captcha['image']; ?></span>
                        </div>
                    </div>
                </div>      
            </fieldset>
   

            <div class="form-group">
                <input type="reset" class="btn btn-secondary" value="<?php echo $create_reset; ?>">
                <input type="submit" name="signupSubmit" class="btn btn-primary" value="<?php echo $create_submit; ?>">
            </div>
        <?php echo form_close(); ?>
        <p><?php echo $create_act; ?> <a href="<?php echo base_url().'Users/login/'.$lang; ?>"><?php echo $create_clk; ?></a></p>
    </div>
</div>
</div>