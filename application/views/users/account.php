<div class="container">    
    <a class="mb-4" href="<?php echo base_url('users/logout'); ?>" class="float-right"><?php echo $account_logout; ?></a>
    <h3 class=" m-4">
        <p class="text-center">
            <?php echo $account_wlc; ?> <?php echo $user['us_fname']; ?> <?php echo $account_wlc_p2; ?>.
        </p>
        <p class="text-center">
            <?php echo $account_btn_event; ?> <a href="<?php echo base_url().'event/index'; ?>" class="btn btn-dark"><?php echo $account_btn_event_ici; ?> <i class="fa fa-calendar" aria-hidden="true"></i></a>
        </p>
        <p class="text-center">
            <?php echo $account_asso; ?> <a href="https://www.helloasso.com/associations/les-bavardes/adhesions/adhesion-2020" class="link" target="_blank"><button class="button2 btn-block mt-3"><?php echo $account_asso_ici; ?></button></a>
        </p>
    </h3>
    <h4><?php echo $account_info ?> : </h4>
    <div class="mb-5">
        <p class="mb-4"><b><?php echo $account_name; ?>: </b><?php echo $user['us_fname'].' '.$user['us_lname']; ?></p>
        <p class="mb-4"><b><?php echo $account_mail; ?>: </b><?php echo $user['us_email']; ?></p>
        <p class="mb-4"><b><?php echo $account_phone; ?>: </b><?php echo $user['us_phone']; ?></p>
    </div>

    
</div>
