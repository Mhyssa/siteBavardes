<div class="col-lg-12 ombre pt-5 ">
    <div class="container">


            <div class="row">
                  <img src="<?php echo base_url(); ?>assets\img\banniere\podcasts.png" alt="banniere artistes et intervenants"
                        class="img-fluid pb-3">
            </div>

<div class="row">
<div class="col-sm-12">


            <?php if(!empty($pod)){ 
                   
                   foreach($pod as $row){ ?>
                       
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo $row['podcast_link'] ?>"></iframe>

            <?php }}else{ ?>
                Aucune(s) donnée(s) trouvée(s)...
            <?php } ?>



</div>
</div>


    </div>
</div>