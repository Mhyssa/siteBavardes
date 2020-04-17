


<div class="container">
    <div class="row">
        <div class="col-md-12">




        
            
        
        
        
        
        </div>
        <a href="<?php echo base_url().'collaboration/ad_index'; ?>" >Retour</a>
    </div>
</div>



<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 mt-3 bg-danger p-2 rounded">
        <h3 class="bg-light p-2 rounded text-center text-dark"><?php echo $collab['collab_name']; ?></h3>
        <div class>



        
       
           <?php if(!empty($collab['file_name'])){ ?>

            <div class="text-center">
            <img src="<?php echo base_url('uploads/collab_img/'.$collab['file_name']); ?>" width="300" class="img-thumbnail">
            </div>

           <?php } ?>


           <?php if(!empty($collab['collab_name'])){ ?>
                <p class="text-light">Nom : <?php echo $collab['collab_name']; ?></p>
            <?php } ?>

            <?php if(!empty($collab['collab_link'])){ ?>
                <p class="text-light">Vous pouvez la retrouver par <a href="<?php echo $collab['collab_link']; ?>">ce lien</a></p>
            <?php } ?>


          


        
        </div>






    </div>
</div>
</div>