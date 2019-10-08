
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
                  <section id="contact"> 
                      <div class="wraper">
                        <h1>Contactez-nous</h1>
                        
            
                        <form>
                          <label for="name">Nom</label>
                          <input type="text" id="name" placeholder="Votre Nom">
                          <label for="email">Email</label>
                          <input type="mail" id="email" placeholder="Votre email">
                          <div>
                              <label for="msg">Message :</label>
                              <textarea id="msg" name="user_message"></textarea>
                          </div>
                          <input type="submit" value="OK" class="button-3">
                        </form>
                        <p>Ou directement par mail : <a href="mailto:lesbavardesamiens@gmail.com">lesbavardesamiens@gmail.com</a></p>
                      </div>
                  </section>
                
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