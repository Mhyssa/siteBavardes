<div class="col-lg-12 ombre pt-5 ">


  <div class="container">


    <!-- debut banniere collaboration  /!\ A MODIFIER-->
    <div class="row">
    <?php if($lang == 'fr'){ ?>
      <img src="<?php echo base_url(); ?>assets\img\banniere\fr\collaborations.png" alt="banniere collaboration en français" class="img-fluid pb-3">
    <?php } else { ?>
      <img src="<?php echo base_url(); ?>assets\img\banniere\eng\collaborations.png" alt="banniere collaboration en anglais" class="img-fluid pb-3">
    <?php } ?>
    </div>
    <!-- fin banniere collaboration -->

<!--Début du formulaire de contact-->
    <?php echo form_open(); ?>

<div class="form-group">

   <label for="nom"><?= $form_name ?></label>
   <input type="text" name="nom" id="nom" class="form-control">
</div> 

<div class="form-group">
   <label for="prenom"><?= $form_firstname ?></label>
   <input type="text" name="prenom" id="prenom" class="form-control">
</div> 

<div class="form-group">
   <label for="mail"><?= $form_mail ?></label>
   <input type="email" name="mail" id="mail" class="form-control">
</div> 

<div class="form-group">
   <label for="ville"><?= $form_city?></label>
   <input type="text" name="ville" id="ville" class="form-control">
</div> 

<div class="form-group">
   <label for="objet"><?= $form_object ?></label>
   <input type="text" name="objet" id="objet" class="form-control">
</div> 

<div class="form-group">
   <label for="message"><?= $form_message?></label>
   <input type="textarea" name="message" id="message" style= 'height : 200px' class="form-control"> <!--Penser à définir la taille avec textarea-->
</div> 

<!--Essai Bootstrap
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Vive les petits lapin</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div> -->


<!--Envoi du formulaire-->
<button type="submit" class="btn btn-warning"><?= $form_submit?></button>    
 
</form>