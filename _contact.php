<?php  
$ma_pages = 'contact';
require("header.php");


?>
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!--  -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<div class="col-lg-12 ombre pt-5 ">
<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form method="POST" action="traitement.php">
        <div class="form-group">
          <!--Champ nom-->
          <label for="nom">Votre Nom *:</label>
          <span id="missNom"></span><br>
          <input type="text" class="form-control" name="nom" id="nom" maxlength="20" required>


          <br>

          <!--Champ prenom-->

          <label for="prenom">Votre Prénom * :</label>
          <span id="missPrenom"></span><br>
          <input type="text" class="form-control" name="prenom" id="prenom" required="">
          <br>
 

          <!--Champ adresse mail-->
          <label for="mail">Adresse mail *: </label>
          <span id="missMail"></span><br>
          <input type="email" class="form-control" name="mail" id="mail" placeholder="simone.veil@bavardes.fr" required>


          <br>

          <!--Champ Zone De Texte-->
          <label for="question">Votre question :</label>
          <span id="missQuestion"></span><br>
          <textarea name="question" id="question"  class="form-control" required></textarea>


          <br>

          <!--Champ checkbox-->
          <p> Pour en savoir plus sur le traitement de vos données personnelles vous pouvez consulter les <a href="mentions.php"> Mentions légales</a>. </p>
          


          <br>

          <input type="submit" name="submit" value="Envoyer !" id="bouton_envoi" class="btn btn-warning" />
          <input type="reset" name="reset" value="Annuler !" id="bouton_annuler" class="btn btn-dark"/>
        </div>
        <div class="g-recaptcha" data-sitekey="sitekey"></div>
      </form>


      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 pb-5">
      <div>
        <img class="d-block w-100" src="assets/img/ban_yt.JPG" alt="banniere">

      </div>

    </div>
  </div>
  <!-- ------------------------------------------------------------------------------------------------------------------------ -->
  <!-- Footer -->
  <!-- ------------------------------------------------------------------------------------------------------------------------ -->
  <!-- Logo -->
  <!-- Contact -->
  <!-- copiright Mentions légales -->
  <!-- Cookies -->
</div>

<script src="assets\js\javascript.js"></script>

<?php  
require("footer.php")
?>