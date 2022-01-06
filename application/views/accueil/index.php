<!-- 
<div class="row m-0 mt-4">
  <div class="col-md-12 p-0">
    <a href="https://www.instagram.com/les.bavardes/" class="yellow float-left col-lg-3 col-sm-12">
      <div class="text-center">
        <img src="<?php echo base_url();?>assets/img/navbar/instagram.png" class="imgSocialmedia">
      </div>
    </a>
    <a href="https://fr-fr.facebook.com/bavardes/" class="black float-left col-lg-3 col-sm-12">
      <div class="text-center">
        <img src="<?php echo base_url();?>assets/img/navbar/facebook.png" class="imgSocialmedia">
      </div>
    </a>
    <a href="https://twitter.com/lesbavardes_" class="yellow float-left col-lg-3 col-sm-12">
      <div class="text-center">
        <img src="<?php echo base_url();?>assets/img/navbar/twitter.png" class="imgSocialmedia">
      </div>
    </a>
    <a href="https://www.youtube.com/channel/UCqYtRC_VtIqcB9snDMf78Dw" class="black float-left col-lg-3 col-sm-12">
      <div class="text-center">
        <img src="<?php echo base_url();?>assets/img/navbar/youtube.png" class="imgSocialmedia">
      </div>
    </a>
  </div>
</div> -->


<!-- ------------------------------------------------------------------------
------------------   A LA UNE ------------------------------------------
------------------------------------------------------------------------ -->

<div class="row yellow mt-1 mx-0">
  <div class="col-12 col-sm-12">
    <h2 class="text-center text-white text-uppercase"><?php echo $header_acc;?></h2>
  </div>
</div>

  <div class="col-12 col-sm-12 p-0">
    <a href="<?php echo base_url(); ?>assets/img/index/alaune/Bon-de-commandev3.pdf">
  <img src="<?php echo base_url(); ?>assets\img\index\alaune\08032021\livret_pedago.png" class="d-block w-100" alt="le bon de commande pour le dvd livret pédagogique à destination des colléges et des lycées">
</a>
  
</div>




<!-- ------------------------------------------------------------------------
------------------  FIN DE A LA UNE ------------------------------------------
------------------------------------------------------------------------ -->


  <!-- First Parallax Section -->
  <div class="jumbotron paral paralsec">
    <!-- <h2 class="display-3">Here is a heading 1</h2> -->
    
    <div class="col-lg-12 col-sm-12">
      <a class="button btn-block col-lg-12 col-sm-12" href="<?php echo base_url().'index.php/about'; ?>" role="button"><div class="text-center"><?php echo $acc_button_about; ?></div></a>
      <blockquote class="d-flex align-items-center lead sur-noir text-center m-5 p-5">"<?php echo $acc_body_text1; ?>" 
        <br> [...]</blockquote>
      <a class="button btn-block col-lg-12 col-sm-12" href="<?php echo base_url().'index.php/team';?>" role="button"><div class="text-center">&#10150;<?php echo $acc_button_team; ?></div></a>
</div>
      
      
  </div>

  <!-- Second Parallax Section -->
  <div class="jumbotron paral paralsec1">
    <h2>OVAIRES BOOKÉES</h2>
    <p class="lead sur-orange"><?php echo $acc_body_text2; ?></p>
    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
      src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/774191071&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
    <p class="lead">
      <a class="mt-5 button" href="<?php echo base_url().'index.php/podcast'?>" role="button"><?php echo $acc_button_pod; ?></a>
    </p>
  </div>

  <!-- Third Parallax Section -->
  <!-- <div class="jumbotron paral paralsec2">
    <h3 class="sur-noir m-3 p-3 text-center"><?php echo $acc_titre2; ?></h3>
    <div>

      <p class="sur-noir"><?php echo $acc_titre2_p1; ?> <a id="titre" href="https://www.jeanne-magazine.com/?s=les+bavardes" target="_blank">Jeanne-magazine.com</a></p>
      <p><a class="sur-noir" href="<?php echo base_url().'index.php/about';?>">&#10150; <?php echo $acc_titre2_button_p2; ?></a></p>
    </div>
  </div> -->

  <!-- Fourth Parallax Section -->
  <div class="jumbotron paral paralsec3">
    <h3 class="sur-orange m-5 p-5"><?php echo $acc_titre3; ?></h3>
    <p><a class="livretlink" href="<?php echo base_url().'index.php/people';?>" role="button"> &#10150; <?php echo $acc_titre3_button_p1; ?></a></p>
  </div> 
  <!-- Add More Parallax Sections Here -->
</div>


</div>
</div>