<div class="container"> <!-- div ouvrante container n°1 -->
    
    <div class="row"> <!-- div ouvrante row n°1 -->
        <div class="col-md-12"> <!-- div ouvrante col-md-12 -->         
            <a href="<?php echo base_url().'team/ad_index'; ?>" ><i class="fas fa-backspace"></i></a>
        </div> <!-- div fermante col-md-12 -->  
    </div> <!-- div fermante row n°1 -->

    <div class="container"> <!-- div ouvrante container n°2 -->
        <div class="row"> <!-- div ouvrante row n°2 -->
            <div class="col-sm-12 mt-5 mb-5"> <!-- div ouvrante col-sm-12 mt-5 mb-5 -->
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');"> <!-- div ouvrante image-flip -->
                    <div class="mainflip"> <!-- div ouvrante mainflip -->
                        <!-- Front side of the card -->
                        <div class="frontside"> <!-- div ouvrante frontside -->
                            <div class="card"> <!-- div ouvrante card n°1 -->
                                <div class="card-body text-center"> <!-- div ouvrante card-body text-center -->
                                    <p>
                                        <img class="img-fluid" src="<?php echo base_url().'uploads/team_img/'.$team['file_name']; ?>" alt="Photo d'une Bavardes">
                                    </p>
                                    <h4 class="card-title"><?php echo ucfirst($team['team_name']); ?></h4>
                                    <p class="card-text"><?php echo ucfirst($team['team_title']); ?></p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div> <!-- div fermante card-body text-center -->
                            </div> <!-- div fermante card n°1 -->
                        </div> <!-- div fermante frontside -->
                        <!-- Back side of the card -->
                        <div class="backside"> <!-- div ouvrante backside -->
                            <div class="card"> <!-- div ouvrante card n°2 -->
                                <div class="card-body text-center mt-4"> <!-- div ouvrante card-body text-center mt-4 -->
                                    <h4 class="card-title"><?php echo ucfirst($team['team_name']); ?></h4>
                                    <p class="card-text">
                                        <?php echo $team['team_description']; ?>
                                    </p>
                                </div> <!-- div fermante card-body text-center mt-4 -->
                            </div> <!-- div fermante card n°2 -->
                        </div> <!-- div fermante backside -->
                    </div> <!-- div fermante mainflip -->
                </div> <!-- div fermante image-flip -->
            </div> <!-- div fermante col-sm-12 mt-5 mb-5 -->
        </div> <!-- div fermante row n°2 -->
    </div> <!-- div fermante container n°2 -->

</div> <!-- div fermante container n°1 -->