
<!-- Footer -->
<!-- ------------------------------------------------------------------------------------------------------------------------ -->
<!-- Logo -->
<!-- Contact -->
<!-- copiright Mentions légales -->
<!-- Cookies -->

<div class="row m-0 p-0">

  <a href="https://www.instagram.com/les.bavardes/" class="yellow float-left col-lg-3 col-sm-12 px-0">
    <div class="text-center">
      <img src="<?php echo base_url(); ?>assets/img/navbar/instagram.png" class="imgSocialmedia">
    </div>
  </a>
  <a href="https://fr-fr.facebook.com/bavardes/" class="black float-left col-lg-3 col-sm-12 px-0">
    <div class="text-center">
      <img src="<?php echo base_url(); ?>assets/img/navbar/facebook.png" class="imgSocialmedia">
    </div>
  </a>

<!-- <div class="text-center" ><a href="https://linktr.ee/les.bavardes"> <img src="assets/img/navbar/suivez_nous.png" class="imgAbsolu disap"> </a></div> -->

  <a href="https://twitter.com/lesbavardes_" class="yellow float-left col-lg-3 col-sm-12 px-0">
    <div class="text-center">
      <img src="<?php echo base_url(); ?>assets/img/navbar/twitter.png" class="imgSocialmedia">
    </div>
  </a>
  <a href="https://www.youtube.com/channel/UCqYtRC_VtIqcB9snDMf78Dw" class="black float-left col-lg-3 col-sm-12 px-0">
    <div class="text-center">
      <img src="<?php echo base_url(); ?>assets/img/navbar/youtube.png" class="imgSocialmedia">
    </div>
  </a>

</div>


      <footer class="pt-2 m-0">
<div class="row m-0">

      <div class="col-sm-3 col-12">      
          <h3 class="colorpolice text-center mt-3">Les bavardes </h3>  
      </div>

      <div class="col-sm-9 col-12 d-inline mb-3">
        
          <img src="<?php echo base_url(); ?>assets/img/logocouleur.png" height="70" >
        
      <span class="font-weight-bold colorpolice2 pl-3 ml-4"><?php echo $footer_line1; ?></span>
      </div>

        
        <div class="col-lg-5  col-md-12 m-auto lignefooter  "></div>
</div>      

<div class="row m-0 pt-4">
  <div class="col-lg-3 col-sm-12">       
    <p class="colorpolice2 text-center"><?php echo $footer_line2; ?></p>            
    <a href="mailto:contact@lesbavardes.org" class="link"><p class="colorpolice link text-center">contact@lesbavardes.org</p></a> 
  </div>
              <div class="col-lg-6 col-sm-12">     
                <p class="colorpolice2 col-lg-12 text-center"><?php echo $footer_body_text; ?></p>
              </div>
    <div class="col-lg-3 col-sm-12">    
      <a href="https://www.helloasso.com/associations/les-bavardes/adhesions/adhesions-2022" class="link" target="_blank"> <button class="button2 btn-block"><?php echo $footer_button_support;?></button> </a>          
        <p class="colorpolice2 text-center pt-2"><?php echo $footer_line3; ?></p>
  </div>
  
  <div class="col-lg-12 col-md-12 pt-2 m-auto">
    <div class="col-lg-5  col-md-12 m-auto lignefooter  "></div>

    <div class=" pt-4 pb-3 m-auto   d-flex justify-content-around">
      <p class=""> <a href="<?php echo base_url().'index.php/mentions/index/'.$lang;?>" class="footlink"> <?php echo $footer_mentions; ?> </a></p>
      <p class="footlink disap">I</p>
      <p class=" "> <a href="<?php echo base_url().'index.php/politique/index/'.$lang;?>" class="footlink"> <?php echo $footer_rgpd; ?></a></p>
      <p class="footlink disap">I</p>
      <p class=""><a href="<?php echo base_url().'index.php/politique/index/'.$lang;?>" class="footlink"> Cookies </a></p>
      <p class="footlink disap">I</p>
      <p class=""><a href="<?php echo base_url().'index.php/users/registration/'.$lang; ?>" class="footlink"><?php echo $footer_esmem; ?></a></p>
    </div>
    </div>

  </div>
</footer>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-151775781-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-151775781-1');
</script>

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
  window.cookieconsent.initialise({
    "palette": {
      "popup": {
        "background": "#000",
        "text": "#ffffff"
      },
      "button": {
        "background": "#ffad3f"
      }
    },
    "theme": "classic",
    "content": {
      "message": "Ce site utilise des cookies pour vous garantir la meilleure expérience sur notre site.",
      "dismiss": "J'accepte",
      "link": "En savoir plus",
      "href": "<?php echo base_url().'index.php/politique';?>"
    }
  });
</script>

</body>

</html>