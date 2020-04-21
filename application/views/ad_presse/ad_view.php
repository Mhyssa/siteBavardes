


<div class="container">
    <div class="row">
        <div class="col-md-12">




        
            
        
        
        
        
        </div>
        <a href="<?php echo base_url().'p2/ad_index'; ?>" >Retour</a>
    </div>
</div>



<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8 mt-3 bg-danger p-2 rounded">
        <h3 class="bg-light p-2 rounded text-center text-dark"><?php echo $p2['presse_name']; ?></h3>
        <div class>



        
        <?php if(!empty($p2['file_name'])){ ?>

<div class="text-center">
<img src="<?php echo base_url('uploads/presse_img/'.$p2['file_name']); ?>" width="300" class="img-thumbnail">
</div>

<?php ;} ?>



           <?php if(!empty($p2['presse_name'])){ ?>
                <h4 class="text-light">ID : <?php echo $p2['presse_id']; ?></h4>
            <?php } ?>
            
           <?php if(!empty($p2['presse_cat'])){ ?>
                <h5 class="text-light">Catégorie : <?php echo $p2['presse_cat']; ?></h5>
            <?php } ?>

            <?php if(!empty($p2['presse_link'])){ ?>
                <p class="text-light">Vous pouvez la retrouver par <a href="<?php echo $p2['presse_link']; ?>">ce lien</a></p>
            <?php } ?>


          


        
        </div>






    </div>
</div>
</div>