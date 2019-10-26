
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
                        
            
                        <div class="form-style-2">

<form action="" method="post">
<label for="field1"><span>Name <span class="required">*</span></span><input type="text" class="input-field" name="field1" value="" /></label>
<label for="field2"><span>Email <span class="required">*</span></span><input type="text" class="input-field" name="field2" value="" /></label>
<label><span>Telephone</span><input type="text" class="tel-number-field" name="tel_no_1" value="" maxlength="4" />-<input type="text" class="tel-number-field" name="tel_no_2" value="" maxlength="4"  />-<input type="text" class="tel-number-field" name="tel_no_3" value="" maxlength="10"  /></label>
<label for="field4"><span>Regarding</span><select name="field4" class="select-field">
<option value="General Question">General</option>
<option value="Advertise">Advertisement</option>
<option value="Partnership">Partnership</option>
</select></label>
<label for="field5"><span>Message <span class="required">*</span></span><textarea name="field5" class="textarea-field"></textarea></label>

<label><span> </span><input type="submit" value="Submit" /></label>
</form>
</div>
                        <!-- <form>
                          <label for="name">Nom</label>
                          <input type="text" id="name" placeholder="Votre Nom">
                          <label for="email">Email</label>
                          <input type="mail" id="email" placeholder="Votre email">
                          <div>
                              <label for="msg">Message :</label>
                              <textarea id="msg" name="user_message"></textarea>
                          </div>
                          <input type="submit" value="OK" class="button-3">
                        </form> -->
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