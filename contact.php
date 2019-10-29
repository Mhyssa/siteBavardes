<?php  
$ma_pages = 'contact';
require("header.php");


?>
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!--  -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->

<div class="container">
  <div class="row">
    <div class="col-md-12">

      <form action="traitement.php" method="post">

        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required><br>
        <span id="missNom"></span><br>


        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom"><br>
        <span id="missPrenom"></span><br>


        <label for="mail">Adresse e-mail</label>
        <input type="email" name="mail" id="mail" required><br>
        <span id="missMail"></span><br>


        <label for="">Votre Message</label>
        <textarea name="message" id="message" required></textarea> <br>
        <span id="missMessage"></span><br>

        <input type="submit" value="Envoyer" id="bouton_envoi">
        <input type="reset" value="Annuler">


      </form>



    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
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