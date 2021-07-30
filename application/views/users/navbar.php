<div class="container bg-rose">
    <!-- navbar account -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <?php if ($account_navbar == 'posters') { ?>
                    <li class="nav-item active">
                        <a class="nav-link pr-4  pl-4 text-white"
                           href="<?php echo base_url() . 'index.php/users/posters/' . $lang; ?>"> <?php echo $account_navlink_posters ?> </a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link pr-4  pl-4 text-white"
                           href="<?php echo base_url() . 'index.php/users/posters/' . $lang; ?>"> <?php echo $account_navlink_posters ?> </a>
                    </li>
                <?php }
                if ($account_navbar == 'library') { ?>
                    <li class="nav-item active pr-4  pl-4 dropdown ">
                        <a class="nav-link dropdown-toggle text-white"
                           href="<?php echo base_url() . 'index.php/users/libraryBooks/' . $lang; ?>"
                           id="navbarDropdownLibrairy" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <?php echo $account_navlink_librairy ?>
                        </a>
                        <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdownLibrairy">
                            <a class="dropdown-item text-white "
                               href="<?php echo base_url() . 'index.php/users/article/1/' . $lang; ?>"><?php echo $librairy_book ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/article/4/' . $lang; ?>"><?php echo $librairy_magasines ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/article/3/' . $lang; ?>"><?php echo $librairy_games ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/article/2/' . $lang; ?>"><?php echo $librairy_dvd ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/article/5/' . $lang; ?>"><?php echo $librairy_comic ?></a>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item pr-4  pl-4 dropdown ">
                        <a class="nav-link dropdown-toggle text-white"
                           href="<?php echo base_url() . 'index.php/users/libraryBooks/' . $lang; ?>"
                           id="navbarDropdownLibrairy" role="button" data-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="false">
                            <?php echo $account_navlink_librairy ?>
                        </a>
                        <div class="dropdown-menu bg-dark " aria-labelledby="navbarDropdownLibrairy">
                            <a class="dropdown-item text-white "
                               href="<?php echo base_url() . 'index.php/users/article/1/' . $lang; ?>"><?php echo $librairy_book ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/article/4/' . $lang; ?>"><?php echo $librairy_magasines ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/article/3/' . $lang; ?>"><?php echo $librairy_games ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/article/2/' . $lang; ?>"><?php echo $librairy_dvd ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/article/5/' . $lang; ?>"><?php echo $librairy_comic ?></a>
                        </div>
                    </li>
                <?php } ?>
                <li class="nav-item">
                    <a href="https://www.helloasso.com/associations/les-bavardes/adhesions/adhesion-2021"
                       class="nav-link pr-4  pl-4 text-white" target="_blank"> <?php echo $account_navlink_member ?></a>
                </li>
                <?php if ($account_navbar == 'account') { ?>
                    <li class="nav-item active pr-4  pl-4 dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $account_navlink_acount ?>
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/account/' . $lang; ?>"><?php echo $account_info ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/logout/' . $lang; ?>"><?php echo $account_logout ?></a>
                        </div>
                    </li>
                <?php } else { ?>
                    <li class="nav-item pr-4  pl-4 dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                           role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $account_navlink_acount ?>
                        </a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/account/' . $lang; ?>"><?php echo $account_info ?></a>
                            <a class="dropdown-item text-white"
                               href="<?php echo base_url() . 'index.php/users/logout/' . $lang; ?>"><?php echo $account_logout ?></a>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <!-- End navbar -->
