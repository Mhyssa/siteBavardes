<div>
    <p><?php echo $borrowing_notice ?></p>
    <?php
    switch ($article[0]->type_id) {
        // livres
        case '1': ?>
            <div class="col-md-12">
                <a href="<?php echo base_url() . 'index.php/users/article/1/' . $lang; ?>"><i
                            class="fas fa-backspace"></i></a>
            </div>
            <div class="row d-flex justify-content-center ">
                <table class="table table-striped table-dark">
                    <thead>
                    <tr>
                        <th scope="col"><?php echo $book_title ?></th>
                        <th scope="col"><?php echo $book_author ?></th>
                        <th scope="col"> <?php echo $book_publication ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $article[0]->article_name ?></td>
                        <td><?php echo $article[0]->article_author ?></td>
                        <td><?php echo $article[0]->article_date_publication ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <?php
            break;
        // magasines
        case '4':
            ?>
            <div class="col-md-12">
                <a href="<?php echo base_url() . 'index.php/users/article/4/' . $lang; ?>"><i
                            class="fas fa-backspace"></i></a>
            </div>
            <div class="row d-flex justify-content-center ">
                <table class="table table-striped table-dark">
                    <thead>
                    <tr>
                        <th scope="col"><?php echo $magasine_name ?></th>
                        <th scope="col"><?php echo $magasine_numero ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $article[0]->article_name ?></td>
                        <td><?php echo $article[0]->article_number ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <?php
            break;
        // dvd
        case '2':
            ?>
            <div class="col-md-12">
                <a href="<?php echo base_url() . 'index.php/users/article/2/' . $lang; ?>"><i
                            class="fas fa-backspace"></i></a>
            </div>
            <?php
            echo $article['article_name'];
            break;
        //jeux
        case '3':
            ?>
            <div class="col-md-12">
                <a href="<?php echo base_url() . 'index.php/users/article/3/' . $lang; ?>"><i
                            class="fas fa-backspace"></i></a>
            </div>

            <div class="row d-flex justify-content-center ">

                <div class="col-sm-3 mt-3 mx-1">
                    <p><?php echo $article[0]->article_name ?></p>
                    <div class="row">
                        <img src="<?php echo base_url(); ?>assets\img\games\game.png" class="img-fluid"
                             alt="<?php echo $article[0]->article_name ?>">
                    </div>
                </div>
            </div>
            <?php
            break;
        //BD
        case '5':
            ?>
            <div class="col-md-12">
                <a href="<?php echo base_url() . 'index.php/users/article/5/' . $lang; ?>"><i
                            class="fas fa-backspace"></i></a>
            </div>
            <?php
            echo $article['article_name'];
            break;
    } ?>
</div>
<div class="row d-flex justify-content-center">
    <?php
    $hidden = array(
        'article_id' => $article_id,
        'us_id' => $user['us_id'],
        'type' => $article[0]->type_id,
        'lang' => $lang
    );
    echo form_open('Users/borrowing', '', $hidden); ?>
    <p class="mt-3"> <?php echo $msg_to_get_the_article; ?></p>
    <?php $options = array();
    foreach ($event_to_get_the_article as $option) {
        $date = new DateTime($option->event_date);
        $format = $date->format('d/m/Y');
        $options[$option->event_id] = $option->event_name . " à " . $option->event_lieu . " le " . $format;
    } ?>
    <div class="row d-flex justify-content-center">
        <?php echo form_dropdown('event', $options); ?>
    </div>

    <div class="row d-flex justify-content-center my-3">
        <button type="submit" name="reservation"
                class="btn bg-info text-white mx-2"><?php echo $validate_borrowing ?></button>
        <?php echo form_close(); ?>

    </div>
</div>
</div>

</div>
