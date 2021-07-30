
    <h3 class=" m-4">
        <p class="text-center text-white">
            <?php echo $account_wlc; ?> <?php echo $user['us_fname']; ?> <?php echo $account_wlc_p2; ?>.
        </p>
        <p class="text-center text-white">
            <?php echo $account_btn_event; ?> <a href="<?php echo base_url().'index.php/event/index'; ?>" class="btn btn-dark"><?php echo $account_btn_event_ici; ?> <i class="fa fa-calendar" aria-hidden="true"></i></a>
        </p>
        <p class="text-center text-white">
            <?php echo $account_asso; ?> <a href="https://www.helloasso.com/associations/les-bavardes/adhesions/adhesion-2020" class="link" target="_blank"><i class="fas fa-donate"></i></a>
        </p>
        <p class="text-center text-white">
            <?php echo $account_poster_ad; ?>
        </p>
        <?php if ($this->session->flashdata('poster_booked')){ ?>
            <div class="p-3 mb-2 bg-success text-white"><?php echo $this->session->flashdata('poster_booked')?></div>
        <?php }
        ?>
        <?php if ($this->session->flashdata('poster_not_booked')){ ?>
            <div class="p-3 mb-2 bg-success text-white"><?php echo $this->session->flashdata('poster_not_booked')?></div>
        <?php }
        ?>
    </h3>

    <div class="row d-flex justify-content-center ">
        <?php foreach ($posters as $poster) { ?>
        <div class="col-sm-5 mt-3 mx-1">
            <div class="row">
                <img src="<?php echo base_url(); ?>assets\img\affiches\<?php echo $poster->poster_id ?>.png"  class="img-fluid" alt="<?php echo $poster->poster_name ?>" >
            </div>
            <div class="row d-flex justify-content-center">
                <a class="btn btn-primary bg-info" href="<?php echo base_url().'index.php/users/book/'.$poster->poster_id.'/'.$lang; ?>" role="button"><?php echo $account_poster_booking ?></a>
            </div>

        </div>
        <?php } ?>
    </div>


</div>

</div>

