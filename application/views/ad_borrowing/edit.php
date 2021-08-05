<div class="container">
    <h1 class="text-center">Modification d'un emprunt</h1>
    <hr>

    <!-- Display status message -->
    <?php if (!empty($error_msg)) { ?>
        <div class="col-xs-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
    <?php } ?>

    <div class="row d-flex justify-content-center">

        <?php echo form_open('Borrowing/edit_borrowing'); ?>
        <div class="form-group ">
            <label for="us_id">Utilisateur :</label>
            <select name="us_id">
                <option></option>
                <?php foreach ($users as $user) {
                    if ($emprunt['us_id'] == $user['us_id']) { ?>
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
            <label for="article_id">Article :</label>
            <select name="article_id">
                <option></option>
                <?php foreach ($articles as $article) {
                    if ($emprunt['article_id'] == $article['article_id']) { ?>
                        <option value="<?= $article['article_id'] ?>"
                                selected="selected"><?= $article['article_name'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $article['article_id'] ?>"><?= $article['article_name'] ?></option>

                    <?php }
                } ?>

            </select>
            <?php echo form_error('article_id', '<div class="alert alert-danger">', '</div>');?>
        </div>
        <div class="form-group ">
            <label for="event">Evenement :</label>
            <select name="event" >
                <option></option>
                <?php foreach ($events as $event) {
                    if ($emprunt['event_id'] == $event->event_id) {
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
            <label for="borrowing_return">Retour :</label>
            <select name="borrowing_return" >
                <option></option>
                <?php if (set_value('borrowing_return') == 'Non') { ?>
                    <option value="Non" selected="selected">Non</option>
                <?php } else { ?>
                    <option value="Non">Non</option>
                <?php }
                if (set_value('borrowing_return') == 'Oui') {
                    ?>
                    <option value="Oui" selected="selected">Oui</option>
                <?php } else { ?>
                    <option value="Oui">Oui</option>
                <?php } ?>
            </select>
            <?php echo form_error('event', '<div class="alert alert-danger">', '</div>');?>
        </div>


        <div class="row d-flex justify-content-center my-3">
            <?php echo form_hidden('borrowing_id', $emprunt['borrowing_id']);?>
            <a href="<?php echo base_url().'index.php/borrowing/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
            <button type="submit" name="add_reservation" class="btn bg-info text-white mx-2">Modifier</button>
            <?php echo form_close(); ?>


        </div>
    </div>
</div>

