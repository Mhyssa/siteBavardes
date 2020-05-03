<div class="col-lg-12 ombre pt-5 ">
    <div class="container">


            <div class="row">
            <?php// if($lang == 'fr'){ ?>
                  <img src="<?php echo base_url(); ?>assets\img\banniere\podcasts.png" alt="banniere artistes et intervenants"
                        class="img-fluid pb-3">
            <?php/* } else { 
              echo 'Podcast';
            }*/
            ?>
            </div>

<div class="row">
<div class="col-sm-12">


            <?php if(!empty($podcast)){ 
                   
                   foreach($podcast as $row){ ?>
                       
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo $row['podcast_link'] ?>"></iframe>
                <?php //!empty($row['file_name'])?'<img src="'.base_url().'uploads/podcast_img/'.$row['file_name'].'" width="150" class="thumbnail" id="img" />':'';?> 

            <?php }
            } ?>



</div>
</div>


    </div>
</div>