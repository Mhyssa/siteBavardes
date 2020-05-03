<div class="container">
    <h2>Bienvenue <?php echo $user['us_fname']; ?>!</h2>
    <a href="<?php echo base_url('users/logout'); ?>">Déconnexion</a>
    <div class="regisFrm">
        <p><b>Nom: </b><?php echo $user['us_fname'].' '.$user['us_lname']; ?></p>
        <p><b>Adresse E-mail: </b><?php echo $user['us_email']; ?></p>
        <p><b>Numéro de Téléphone: </b><?php echo $user['us_phone']; ?></p>
    </div>
</div>