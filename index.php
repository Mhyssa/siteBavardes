<?php
$ma_pages = 'index';
require("header.php");

?>


<div class="row m-0 mt-4">
  <div class="col-md-12 p-0">
    <a href="https://www.instagram.com/les.bavardes/" class="yellow float-left col-lg-3 col-sm-12">
      <div class="text-center">
        <img src="assets/img/navbar/instagram.png" class="imgSocialmedia">
      </div>
    </a>
    <a href="https://fr-fr.facebook.com/bavardes/" class="black float-left col-lg-3 col-sm-12">
      <div class="text-center">
        <img src="assets/img/navbar/facebook.png" class="imgSocialmedia">
      </div>
    </a>
    <a href="https://twitter.com/lesbavardes_" class="yellow float-left col-lg-3 col-sm-12">
      <div class="text-center">
        <img src="assets/img/navbar/twitter.png" class="imgSocialmedia">
      </div>
    </a>
    <a href="https://www.youtube.com/channel/UCqYtRC_VtIqcB9snDMf78Dw" class="black float-left col-lg-3 col-sm-12">
      <div class="text-center">
        <img src="assets/img/navbar/youtube.png" class="imgSocialmedia">
      </div>
    </a>
  </div>
</div>


<div class="container-fluid">

  <!-- First Parallax Section -->
  <div class="jumbotron paral paralsec">
    <!-- <h2 class="display-3">Here is a heading 1</h2> -->
    
    <div class="col-lg-12 col-sm-12">
      <a class="button btn-block col-lg-12 col-sm-12" href="About.php" role="button"><div class="text-center">qui sommes nous ?</div></a>
      <blockquote class="d-flex align-items-center lead sur-noir text-center m-5 p-5">" Les bavardes, c'est un collectif lesbien, bi, trans, queer et hétéro féministe engagé pour la visibilité de toutes les femmes, au travers d’espaces et d’actions culturelles et artistiques, ouvert à toutes et tous, visant à agir, se rencontrer, s’interroger et faire la fête. Radio, atelier, débat, cinéma, soirée… Retrouvons-nous, interrogeons-nous et émancipons-nous ! " 
        <br> [...]</blockquote>
      <a class="button btn-block col-lg-12 col-sm-12" href="equipe.php" role="button"><div class="text-center">&#10150;qui sont-elles ?</div></a>
</div>
      
      
  </div>

  <!-- Second Parallax Section -->
  <div class="jumbotron paral paralsec1">
    <h2>OVAIRES BOOKÉES</h2>
    <p class="lead sur-orange">Retrouvez notre émission spéciale 10 ans de Radio Campus Amiens diffusée le 8 mars dernier, <br> à l'occasion de la journée internationale des droits des femmes et dans le cadre du Festival J'en(c)rêve.</p>
    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay"
      src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/774191071&color=%23ffad3f&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
    <p class="lead">
      <a class="mt-5 button" href="podcasts.php" role="button">et L'ensemble de Nos Podcasts ici !</a>
    </p>
  </div>

  <!-- Third Parallax Section -->
  <div class="jumbotron paral paralsec2">
    <h2 class="sur-noir m-5 p-5">LES BAVARDES DANS LA PRESSE</h2>
    <div>

      <p class="sur-noir">Découvre notre dernier article sur <a id="titre" href="https://www.jeanne-magazine.com/le-magazine/2020/04/04/les-bavardes-a-la-rencontre-du-collectif-lesbien-les-immedianes_19268/" target="_blank">Jeanne-magazine.com</a></p>
      <p><a class="sur-noir" href="presse.php">&#10150; Consulte les 30 articles parlant de nous au fil de notre histoire !</a></p>
    </div>
  </div>

  <!-- Fourth Parallax Section -->
  <div class="jumbotron paral paralsec3">
    <h2 class="sur-orange m-5 p-5">RENCONTRES D'ARTISTES</h2>
    <p><a class="button2" href="artistes.php" role="button"> &#10150; Lumiere sur ces femmes incroyables qui ont croisées nos routes au cours de nos évènements</a></p>
  </div>
  <!-- Add More Parallax Sections Here -->
</div>


</div>
</div>



<!-- <div class="elfsight-app-64be235b-928e-4da1-8c53-ad8aeb5c55dc"></div>
<script src="https://apps.elfsight.com/p/platform.js" defer></script> -->
<?php
require("footer.php")
?>