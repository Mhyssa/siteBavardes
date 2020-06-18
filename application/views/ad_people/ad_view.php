<div class="container"> <!-- div ouvrante container n°1 -->
    
    <div class="row"> <!-- div ouvrante row n°1 -->
        <div class="col-md-12"> <!-- div ouvrante col-md-12 -->
            <a href="<?php echo base_url().'people/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
        </div> <!-- div fermante col-md-12 -->
    </div> <!-- div fermante row n°1 -->

    <div class="container"> <!-- div ouvrante container n°2 -->
        <div class="row"> <!-- div ouvrante row n°2 -->
            <div class="col-sm-12 mt-5 mb-5"> <!-- div ouvrante col-sm-12 mt-5 mb-5 -->

                <div class="col-lg-3 text-center">
                    <a href="<?php echo $people['people_link'] ?>" class="col-lg-12 link" target="_blank">
                        <img src="<?php echo base_url().'uploads/people_img/'.$people['file_name'] ?>" class="Artiste" alt="img artiste">
                    </a>
                    <br>
                    <a href="<?php echo $people['people_link'] ?>" class="col-lg-12 link" target="_blank"><?php echo $people['people_name']; ?></a>
                </div>
                             
            </div> <!-- div fermante col-sm-12 mt-5 mb-5 -->
        </div> <!-- div fermante row n°2 -->
    </div> <!-- div fermante container n°2 -->

</div> <!-- div fermante container n°1 -->