<div class="container"> <!-- div ouvrante n°1 -->

    <div class="row"> <!-- div ouvrante row -->
        <div class="col-md-12"> <!-- div ouvrante col-md-12 -->       
            <a href="<?php echo base_url().'podcast/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
        </div> <!-- div fermante col-md-12 -->
    </div> <!-- div fermante row --> 

    <div class="container"> <!-- div ouvrante n°2 -->
        <div class="row"> <!-- div ouvrante row -->
            <div class="col-sm-12 mt-5 mb-5"> <!-- div ouvrante col-sm-12 -->
                <?php if(!empty($podcast)){ ?>
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo $podcast['podcast_link']; ?>" ></iframe>
                <?php } ?>
            </div> <!-- div fermante col-sm-12 -->        
        </div> <!-- div fermante row -->
    </div> <!-- div fermante container n°2 -->

</div> <!-- div fermante container n°1 -->