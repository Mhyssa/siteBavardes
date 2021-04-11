<div class="col-lg-12 ombre pt-5 ">
    <div class="container">

    <div class="row">
            <?php if($lang == 'fr'){ ?>
                <img src="<?php echo base_url(); ?>assets\img\banniere\fr\videos.png" alt="banniere videos en français" class="img-fluid pb-3">
            <?php } else { ?>
                <img src="<?php echo base_url(); ?>assets\img\banniere\eng\videos.png" alt="banniere videos en anglais" class="img-fluid pb-3">
            <?php } ?>
        </div> <!-- Fin de la div row -->

      <div class="row">

        <div class="embed-responsive embed-responsive-16by9 float-left col-lg-3 col-sm-4 col-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ab63RONbG44" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="embed-responsive embed-responsive-16by9 float-left col-lg-3 col-sm-4 col-6">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/IF5S3l4SeHA" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <div class="embed-responsive embed-responsive-16by9 float-left col-lg-3 col-sm-4 col-6">
            <iframe src="https://www.youtube.com/embed/pcDgFROzY44" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class="embed-responsive embed-responsive-16by9 float-left col-lg-3 col-sm-4 col-6">
            <iframe src="https://www.youtube.com/embed/NtttY9GAaAg" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class="embed-responsive embed-responsive-16by9 float-left col-lg-3 col-sm-4 col-6">
            <iframe src="https://www.youtube.com/embed/IFvYv6seJMU" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class="embed-responsive embed-responsive-16by9 float-left col-lg-3 col-sm-4 col-6">
            <iframe src="https://www.youtube.com/embed/akLfSOXkd1Y" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class="embed-responsive embed-responsive-16by9 float-left col-lg-3 col-sm-4 col-6">
            <iframe src="https://www.youtube.com/embed/qa1qlgrZrWE" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class="embed-responsive embed-responsive-16by9 float-left col-lg-3 col-sm-4 col-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/vZffbZZD4wQ" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

      </div>

      

      <div class="row mt-3">
          
            <?php if($lang == 'fr'){ ?>
                <img src="<?php echo base_url(); ?>assets\img\banniere\fr\podcasts.png" alt="banniere podcasts en français" class="img-fluid pb-3">
              <?php } else { ?> 
                <img src="<?php echo base_url(); ?>assets\img\banniere\eng\podcasts.png" alt="banniere podcasts en anglais" class="img-fluid pb-3">
              <?php } ?>
          </div>
          <div class="col-sm-12">

            <?php if(!empty($podcast)){ ?>
                     
                   <?php   foreach($podcast as $row){ ?>
                                            
                <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="<?php echo $row['podcast_link'] ?>"></iframe>

            <?php }
            } ?>



      </div>
      </div>


    </div>
</div>
