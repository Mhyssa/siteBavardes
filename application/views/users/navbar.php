<div class="container bg-rose">
    <!-- navbar account -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link pr-4  pl-4 text-white" href="<?php echo base_url().'index.php/users/posters/'.$lang; ?>"> <?php echo $account_navlink_posters ?> </a>
                </li>
                <li class="nav-item pr-4  pl-4 dropdown ">
                    <a class="nav-link dropdown-toggle text-white" href="<?php echo base_url().'index.php/users/libraryBooks/'.$lang; ?>" id="navbarDropdownLibrairy" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $account_navlink_librairy ?>
                    </a>
                    <div class="dropdown-menu bg-primary " aria-labelledby="navbarDropdownLibrairy">
                        <a class="dropdown-item text-white " href="<?php echo base_url().'index.php/users/libraryBooks/'.$lang; ?>"><?php echo $librairy_book ?></a>
                        <a class="dropdown-item text-white" href="<?php echo base_url().'index.php/users/libraryMagasines/'.$lang; ?>"><?php echo $librairy_magasines ?></a>
                        <a class="dropdown-item text-white" href="#"><?php echo $librairy_games ?></a>
                        <a class="dropdown-item text-white" href="#"><?php echo $librairy_dvd ?></a>
                        <a class="dropdown-item text-white" href="#"><?php echo $librairy_comic ?></a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="https://www.helloasso.com/associations/les-bavardes/adhesions/adhesion-2020" class="nav-link pr-4  pl-4 text-white" target="_blank"> <?php echo $account_navlink_member ?></a>
                </li>
                <li class="nav-item pr-4  pl-4 dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $account_navlink_acount ?>
                    </a>
                    <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item text-white" href="#"><?php echo $account_info ?></a>
                        <a class="dropdown-item text-white" href="#"><?php echo $account_reservation ?></a>
                        <a class="dropdown-item text-white" href="#"><?php echo $account_borrowing ?></a>
                        <a class="dropdown-item text-white" href="<?php echo base_url().'index.php/users/logout/'.$lang; ?>"><?php echo $account_logout ?></a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End navbar -->
