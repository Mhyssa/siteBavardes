<div class="container"> <!-- div ouvrante container n°1 -->
    
    <div class="row"> <!-- div ouvrante row -->
        <div class="col-md-12"> <!-- div ouvrante col-md-12 -->
            <a href="<?php echo base_url().'about/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
        </div> <!-- div fermante col-md-12 -->
    </div> <!-- div fermante row -->
    
    <div class="container"> <!-- div ouvrante container n°2 -->
        <div class="row"> <!-- div ouvrante row -->
            <div class="col-sm-12 mt-5 mb-5"> <!-- div ouvrante col-sm-12 mt-5 mb-5 -->
                <?php if(!empty($presse['presse_link'])){ ?>
                    <a class="nav-link link" target="_blank" href="<?php echo $presse['presse_link'] ?>">
                        <?php echo $presse['presse_name']; ?>
                    </a>
                <?php } ?>
            </div>  <!-- div fermante col-sm-12 mt-5 mb-5 -->
        </div> <!-- div fermante row -->
    </div> <!-- div fermante container n°2 -->

</div> <!-- div fermante container n°1 -->