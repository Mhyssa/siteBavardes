
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
<input type="text" name="nom" id="nom"><br>

<label for="prenom">Prenom</label>
<input type="text" name="prenom" id="prenom"><br>

<label for="mail">Adresse e-mail</label>
<input type="mail" name="mail" id="mail"><br>

<label for="message">Votre Message</label>
<textarea name="message" id="message" ></textarea> <br>

<input type="submit" value="Envoyer">
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

<?php  
require("footer.php")
?>