<div class="container">
    <h1 class="text-center">Ajout d'un emprunt</h1>
    <hr>

    <!-- Display status message -->
    <?php if (!empty($error_msg)) { ?>
        <div class="col-xs-12">
            <div class="alert alert-danger"><?php echo $error_msg; ?></div>
        </div>
    <?php } ?>

    <div class="row d-flex justify-content-center">

        <?php echo form_open('Borrowing/add_borrowing'); ?>
        <div class="form-group ">
            <label for="us_id">Utilisateur :</label>
            <select name="us_id">
                <option></option>
                <?php foreach ($users as $user) {
                    if (set_value('us_id') == $user['us_id']) { ?>
                        <option value="<?= $user['us_id'] ?>"
                                selected="selected"><?= $user['us_fname'] . ' ' . $user['us_lname'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $user['us_id'] ?>"><?= $user['us_fname'] . ' ' . $user['us_lname'] ?></option>

                    <?php }
                } ?>
            </select>
            <?php echo form_error('us_id', '<div class="alert alert-danger">', '</div>'); ?>
        </div>
        <div class="form-group ">
            <label for="article_id">Article :</label>
            <select name="article_id">
                <option></option>
                <?php foreach ($articles as $article) {
                    if (set_value('article_id') == $article['article_id']) { ?>
                        <option value="<?= $article['article_id'] ?>"
                                selected="selected"><?= $article['article_name'] ?></option>
                    <?php } else { ?>
                        <option value="<?= $article['article_id'] ?>"><?= $article['article_name'] ?></option>

                    <?php }
                } ?>

            </select>
            <?php echo form_error('article_id', '<div class="alert alert-danger">', '</div>'); ?>
        </div>
        <div class="form-group ">
            <label for="event">Evenement :</label>
            <select name="event">
                <option></option>
                <?php foreach ($events as $event) {
                    if (set_value('event') == $event->event_id) {
                        ?>
                        <option value="<?= $event->event_id ?>" selected="selected"><?= $event->event_name ?></option>
                    <?php } else { ?>
                        <option value="<?= $event->event_id ?>"><?= $event->event_name ?></option>

                    <?php }
                } ?>
            </select>
            <?php echo form_error('event', '<div class="alert alert-danger">', '</div>'); ?>
        </div>

        <div class="row d-flex justify-content-center my-3">
            <a href="<?php echo base_url().'index.php/borrowing/ad_index'; ?>" class="btn btn-sm btn-secondary"><i class="fas fa-backspace"></i></a>
            <button type="submit" name="add_reservation" class="btn bg-info text-white mx-2">Ajouter</button>
            <?php echo form_close(); ?>


        </div>
    </div>
</div>
