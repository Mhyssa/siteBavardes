<div class="container">
    <h1 class="text-center">Modification d'une Reservation</h1>
    <hr>

    <!-- Display status message -->
    <?php if (!empty($error_msg)) { ?>
        <div class="col-xs-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
    <?php } ?>

    <div class="row d-flex justify-content-center">

        <?php echo form_open('Reservation/edit_reservation'); ?>
        <div class="form-group ">
            <label for="us_id">Utilisateur :</label>
            <select name="us_id">
                <option></option>
                <?php foreach ($users as $user) {
                    if ($reservation['us_id'] == $user['us_id']) { ?>
                        <option value="<?= $user['us_id'] ?>"
                                selected="selected"><?= $user['us_fname'] . ' ' . $user['us_lname'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $user['us_id'] ?>"><?= $user['us_fname'] . ' ' . $user['us_lname'] ?></option>

                    <?php }
                } ?>
            </select>
            <?php echo form_error('us_id', '<div class="alert alert-danger">', '</div>');?>
        </div>
        <div class="form-group ">
            <label for="poster_id">Affiche :</label>
            <select name="poster_id">
                <option></option>
                <?php foreach ($posters as $poster) {
                    if ($reservation['poster_id'] == $poster->poster_id) { ?>
                        <option value="<?= $poster->poster_id ?>"
                                selected="selected"><?= $poster->poster_name ?></option>
                    <?php } else { ?>
                        <option value="<?= $poster->poster_id ?>"><?= $poster->poster_name ?></option>

                    <?php }
                } ?>

            </select>
            <?php echo form_error('poster_id', '<div class="alert alert-danger">', '</div>');?>
        </div>
        <div class="form-group ">
            <label for="event">Evenement :</label>
            <select name="event" >
                <option></option>
                <?php foreach ($events as $event) {
                    if ($reservation['event_id'] == $event->event_id) {
                        ?>
                        <option value="<?= $event->event_id ?>" selected="selected"><?= $event->event_name ?></option>
                    <?php } else { ?>
                        <option value="<?= $event->event_id ?>"><?= $event->event_name ?></option>

                    <?php }
                } ?>
            </select>
            <?php echo form_error('event', '<div class="alert alert-danger">', '</div>');?>
        </div>
        <div class="form-group ">
            <label for="res_preparation">Préparée:</label>
            <select name="res_preparation">

                <option></option>
                <?php if ($reservation['res_preparation'] == 'Non') { ?>
                    <option value="Non" selected="selected">Non</option>
                <?php } else { ?>
                    <option value="Non">Non</option>
                <?php }
                if ($reservation['res_preparation'] == 'Encours') {
                    ?>
                    <option value="Encours" selected="selected">Encours</option>
                <?php } else { ?>
                    <option value="Encours">Encours</option>
                <?php }
                if ($reservation['res_preparation'] == 'Encours') {
                    ?>
                    <option value="Oui" selected="selected">Oui</option>
                <?php } else { ?>
                    <option value="Oui">Oui</option>
                <?php } ?>
            </select>
            <?php echo form_error('res_preparation', '<div class="alert alert-danger">', '</div>');?>
        </div>
        <div class="form-group ">
            <label for="res_livraison">Livrée :</label>
            <select name="res_livraison">

                <option></option>
                <?php if ($reservation['res_livraison'] == 'Non') { ?>
                    <option value="Non" selected="selected">Non</option>
                <?php } else { ?>
                    <option value="Non">Non</option>
                <?php }
                if ($reservation['res_livraison'] == 'Encours') {
                    ?>
                    <option value="Encours" selected="selected">Encours</option>
                <?php } else { ?>
                    <option value="Encours">Encours</option>
                <?php }
                if ($reservation['res_livraison'] == 'Encours') {
                    ?>
                    <option value="Oui" selected="selected">Oui</option>
                <?php } else { ?>
                    <option value="Oui">Oui</option>
                <?php } ?>
            </select>
            <?php echo form_error('res_livraison', '<div class="alert alert-danger">', '</div>');?>
        </div>


        <div class="row d-flex justify-content-center my-3">
            <?php echo form_hidden('res_id', $reservation['res_id']);?>
            <a href="<?php echo base_url().'index.php/reservation/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
            <button type="submit" name="add_reservation" class="btn bg-info text-white mx-2">Modifier</button>
            <?php echo form_close(); ?>


        </div>
    </div>
</div>

