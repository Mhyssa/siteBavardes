<div class="container"> <!-- div ouvrante container n°1 -->
    
    <div class="row"> <!-- div ouvrante row n°1 -->
        <div class="col-md-12"> <!-- div ouvrante col-md-12 -->
            <a href="<?php echo base_url().'index.php/collab/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
        </div> <!-- div fermante col-md-12 -->
    </div> <!-- div fermante row n°1 -->

    <div class="container"> <!-- div ouvrante container n°2 -->
        <div class="row"> <!-- div ouvrante row n°2 -->
            <div class="col-sm-12 mt-5 mb-5"> <!-- div ouvrante col-sm-12 mt-5 mb-5 -->
                <?php if(!empty($collab['collab_link'])){ ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 text-center"> <!-- div ouvrante col-lg-3 col-md-4 col-sm-6 text-center -->
                        <a class="text-dark" class="img-fluid" href="<?php echo $collab['collab_link']; ?>">
                            <img src="<?php echo base_url().'uploads/collab_img/'.$collab['file_name']; ?>" alt="img collab">
                        </a>
                    </div> <!-- div fermante col-lg-3 col-md-4 col-sm-6 text-center -->
                <?php } ?>                     
            </div> <!-- div fermante col-sm-12 mt-5 mb-5 -->
        </div> <!-- div fermante row n°2 -->
    </div> <!-- div fermante container n°2 -->

</div> <!-- div fermante container n°1 -->