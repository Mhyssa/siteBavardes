<div class="container bg-rose">
    <!-- navbar account -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link pr-4  pl-4 text-white" href="#"> <?php echo $account_navlink1 ?> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link pr-4  pl-4 text-white" href="#"> <?php echo $account_navlink2 ?></a>
                </li>
                <li class="nav-item">
                    <a href="https://www.helloasso.com/associations/les-bavardes/adhesions/adhesion-2020" class="nav-link pr-4  pl-4 text-white" target="_blank"> <?php echo $account_navlink3 ?></a>
                </li>
                <li class="nav-item pr-4  pl-4 dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $account_navlink4 ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#"><?php echo $account_info ?></a>
                        <a class="dropdown-item" href="<?php echo base_url().'index.php/users/logout/'.$lang; ?>"><?php echo $account_logout ?></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End navbar -->
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
    </h3>
    <!--
    <h4><?php //echo $account_info ?> : </h4>
    <div class="mb-5">
        <p class="mb-4"><b><?php //echo $account_name; ?>: </b><?php //echo $user['us_fname'].' '.$user['us_lname']; ?></p>
        <p class="mb-4"><b><?php// echo $account_mail; ?>: </b><?php //echo $user['us_email']; ?></p>
        <p class="mb-4"><b><?php//echo $account_phone; ?>: </b><?php //echo $user['us_phone']; ?></p>
    </div>
   -->
    <div class="row d-flex ">
        <?php foreach ($posters as $poster) { ?>
        <div class="col-sm-5 mt-3 mx-1">
            <div class="row">
                <img src="<?php echo base_url(); ?>assets\img\affiches\<?php echo $poster->poster_id ?>.png"  class="img-fluid" alt="<?php echo $poster->poster_name ?>" >
            </div>
            <div class="row d-flex justify-content-center">
                <a class="btn btn-primary" id="white_on_blue" href="#" role="button"><?php echo $account_poster_book ?></a>
            </div>

        </div>
        <?php } ?>
    </div>


</div>

</div>

