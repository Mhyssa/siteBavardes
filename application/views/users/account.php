<div class="container">
    <h2><?php echo $account_wlc; ?> <?php echo $user['us_fname']; ?>!</h2>
    <a href="<?php echo base_url('users/logout'); ?>"><?php echo $account_logout; ?></a>
    <div class="regisFrm">
        <p><b><?php echo $account_name; ?>: </b><?php echo $user['us_fname'].' '.$user['us_lname']; ?></p>
        <p><b><?php echo $account_mail; ?>: </b><?php echo $user['us_email']; ?></p>
        <p><b><?php echo $account_phone; ?>: </b><?php echo $user['us_phone']; ?></p>
    </div>
</div>