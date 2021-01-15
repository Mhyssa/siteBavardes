<div class="col-lg-12 ombre pt-5 ">


  <div class="container">


    <!--debut banniere collaboration-->
    <div class="row">
    <?php if($lang == 'fr'){ ?>
      <img src="<?php echo base_url(); ?>assets\img\banniere\fr\contact.png" alt="banniere contact en français" class="img-fluid pb-3">
    <?php } else { ?>
      <img src="<?php echo base_url(); ?>assets\img\banniere\eng\contact.png" alt="banniere contact en anglais" class="img-fluid pb-3">
    <?php } ?>
    </div>
    <!-- fin banniere collaboration -->

<!--Début du formulaire de contact-->
    <?php echo validation_errors(); ?>
    <?php echo form_open('form'); ?>
    
<!--
<div class="form-group">
   <label for="nom"><?= $form_name ?></label>
   <input type="text" name="nom" id="nom" class="form-control">
</div> -->

<!--Utilisation de Bootstrap pour mise en page--> 
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm"><?= $form_name ?></span>
  <input type="text" class="form-control" name='nom' id='nom' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
  <span id='missNom'></span><br/>
</div>

<!--
<div class="form-group">
   <label for="prenom"><?= $form_firstname ?></label>
   <input type="text" name="prenom" id="prenom" class="form-control">
</div> -->

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm"><?= $form_firstname ?></span>
  <input type="text" class="form-control" name='prenom' id ='prenom' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <span id='missPrenom'></span><br/>
</div>

<!--
<div class="form-group">
   <label for="mail"><?= $form_mail ?></label>
   <input type="email" name="mail" id="mail" class="form-control">
</div> -->

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm"><?= $form_mail ?></span>
  <input type="email" class="form-control" name='mail' id ='mail' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
  <span id='missMail'></span><br/>
</div>

<!--
<div class="form-group">
   <label for="ville"><?= $form_city?></label>
   <input type="text" name="ville" id="ville" class="form-control">
</div> -->

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm"><?= $form_city ?></span>
  <input type="text" class="form-control" name='ville' id ='ville' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
  <span id='missVille'></span><br/>
</div>

<!--
<div class="form-group">
   <label for="objet"><?= $form_object ?></label>
   <input type="text" name="objet" id="objet" class="form-control">
</div> -->

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm"><?= $form_object ?></span>
  <input type="text" class="form-control" name='objet' id ='objet' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
  <span id='missObjet'></span><br/>
</div>

<!--
<div class="form-group">
   <label for="message"><?= $form_message?></label>
   <input type="textarea" name="message" id="message" style= 'height : 200px' class="form-control"> 
</div> -->

<div class="input-group input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm"><?= $form_message ?></span>
  <input type="textarea" class="form-control" name='message' id ='message' rows ="3" required>
  <span id='missMessage'></span><br/>
</div>

<!--Essai Bootstrap
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Vive les petits lapin</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div> -->


<!--Envoi du formulaire-->
<button type="submit" id="submit" name="contactForm" class="btn btn-warning mb-5"><?= $form_submit?></button>    

<!-- Chargement du fichier JavaScript-->

<?php echo form_close(); ?>



