


<div class="container">
    <div class="row">
        <div class="col-md-12">




        
            
        
        
        
        
        </div>
        <a href="<?php echo base_url().'podcast/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
    </div>
</div>



<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 mt-3 bg-danger p-2 rounded">
        <h3 class="bg-light p-2 rounded text-center text-dark"><?php echo $podcast['podcast_name']; ?></h3>
        <div class>



        
       
           <?php if(!empty($podcast['file_name'])){ ?>

            <div class="text-center">
            <img src="<?php echo base_url('uploads/podcast_img/'.$podcast['file_name']); ?>" width="300" class="img-thumbnail">
            </div>

           <?php } ?>


           <?php if(!empty($podcast['podcast_name'])){ ?>
                <p class="text-light">Nom : <?php echo $podcast['podcast_name']; ?></p>
            <?php } ?>

            <?php if(!empty($podcast['podcast_link'])){ ?>
                <p class="text-light">Vous pouvez la retrouver par <a href="<?php echo $podcast['podcast_link']; ?>">ce lien</a></p>
            <?php } ?>


          


        
        </div>






    </div>
</div>
</div>