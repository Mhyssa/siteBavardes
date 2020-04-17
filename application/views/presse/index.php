

<div class="col-lg-12 ombre pt-5 ">
  <div class="container">
    <div class="row">
      <img src="<?php echo base_url(); ?>assets\img\banniere\presse.png"
        alt="liste des articles de presses ou les bavardes sont Jeanne Magazine Courrier picard france bleu"
        class="img-fluid pb-3">
    </div>





    <div class="row">
      <div class="col-lg-12 shadow p-3 mt-5">

        <h2> Jeanne Magazine </h2>
        <ul>

            <?php if(!empty($presse)){ 
                   
                   foreach($presse as $row){
                       
                       if($row['presse_cat'] == 'Jeanne Magazine'){ ?>
  
  
                        <li>
                            <a class="nav-link link" target="_blank" href="<?php echo $row['presse_link'] ?>">
                                <?php echo $row['presse_name']; ?>
                            </a>
                        </li>

            <?php }}}else{ ?>
                Aucune(s) donnée(s) trouvée(s)...
            <?php } ?>
           
        </ul>

      </div>
    </div>




    <div class="row">
      <div class="col-lg-12 shadow p-3 mt-5">

        <h2> Courrier Picard </h2>
        <ul>

            <?php if(!empty($presse)){ 
                   
                   foreach($presse as $row){
                       
                       if($row['presse_cat'] == 'Courrier Picard'){ ?>
  
  
                        <li>
                            <a class="nav-link link" target="_blank" href="<?php echo $row['presse_link'] ?>">
                                <?php echo $row['presse_name']; ?>
                            </a>
                        </li>

            <?php }}}else{ ?>
                Aucune(s) donnée(s) trouvée(s)...
            <?php } ?>
           
        </ul>

      </div>
    </div>




    <div class="row">
      <div class="col-lg-12 shadow p-3 mt-5 mb-5">

        <h2> Luttes LGBTQI+ </h2>
        <ul>

            <?php if(!empty($presse)){ 
                   
                   foreach($presse as $row){
                       
                       if($row['presse_cat'] == 'Luttes LGBTQI+'){ ?>
  
  
                        <li>
                            <a class="nav-link link" target="_blank" href="<?php echo $row['presse_link'] ?>">
                                <?php echo $row['presse_name']; ?>
                            </a>
                        </li>

            <?php }}}else{ ?>
                Aucune(s) donnée(s) trouvée(s)...
            <?php } ?>
           
        </ul>

      </div>
    </div>




    <div class="row">
      <div class="col-lg-12 shadow p-3 mt-1 mb-5">

        <h2> Divers </h2>
        <ul>

            <?php if(!empty($presse)){ 
                   
                   foreach($presse as $row){
                       
                       if($row['presse_cat'] == 'Divers'){ ?>
  
  
                        <li>
                            <a class="nav-link link" target="_blank" href="<?php echo $row['presse_link'] ?>">
                                <?php echo $row['presse_name']; ?>
                            </a>
                        </li>

            <?php }}}else{ ?>
                Aucune(s) donnée(s) trouvée(s)...
            <?php } ?>
           
        </ul>

      </div>
    </div>





  </div>
</div>

</div>
</div>
