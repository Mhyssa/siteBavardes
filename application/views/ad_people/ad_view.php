


<div class="container">
    <div class="row">
        <div class="col-md-12">




        
            
        
        
        
        
        </div>
        <a href="<?php echo base_url().'people/ad_index'; ?>" >Retour</a>
    </div>
</div>



<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 mt-3 bg-danger p-2 rounded">
        <h3 class="bg-light p-2 rounded text-center text-dark"><?php echo $people['people_name']; ?></h3>
        <div class>



        
       
           <?php if(!empty($people['file_name'])){ ?>

            <div class="text-center">
            <img src="<?php echo base_url('uploads/people_img/'.$people['file_name']); ?>" width="300" class="img-thumbnail">
            </div>

           <?php } ?>


           <?php if(!empty($people['people_status'])){ ?>
                <h4 class="text-light"><?php echo $people['people_status']; ?></h4>
            <?php } ?>
            
           <?php if(!empty($people['people_title'])){ ?>
                <h5 class="text-light"><?php echo $people['people_title']; ?></h5>
            <?php } ?>

            <?php if(!empty($people['people_link'])){ ?>
                <p class="text-light">Vous pouvez la retrouver par <a href="<?php echo $people['people_link']; ?>">ce lien</a></p>
            <?php } ?>


          


        
        </div>






    </div>
</div>
</div>