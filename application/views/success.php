<div class="col-lg-12 ombre pt-5 ">


  <div class="container">


    <!-- debut banniere collaboration-->
    <div class="row">
    <?php if($lang == 'fr'){ ?>
      <img src="<?php echo base_url(); ?>assets\img\banniere\fr\contact.png" alt="banniere collaboration en français" class="img-fluid pb-3">
    <?php } else { ?>
      <img src="<?php echo base_url(); ?>assets\img\banniere\eng\contact.png" alt="banniere collaboration en anglais" class="img-fluid pb-3">
    <?php } ?>
    </div>
    <!-- fin banniere collaboration -->

    <div class="text-center my-5 px-5">
    <span class="border border-dark"> <!-- /!\ A modifier -> cadre plus grand + version mobile-->
      <?=$form_success; ?> <!--appelle le texte dans fichier lang.php-->
    </span>
    </div>

    </div> <!--fin div class container-->

</div> <!--fin div class global-->