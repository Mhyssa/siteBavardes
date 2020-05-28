

<div class="container">
       <!-- Display status message -->
       <?php if(!empty($success_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-success"><?php echo $success_msg; ?></div>
    </div>
    <?php }elseif(!empty($error_msg)){ ?>
    <div class="col-xs-12">
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    </div>
    <?php } ?>
   
   

           <div class="container">
     


        <div class="row">
        <div class="col-md-12 head">
            <h3>Liste des Artistes et Intervenant.es</h3>
            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" name="searchKeywordAdmin" class="form-control" placeholder="Nom d'un artiste/intervenant" value="<?php echo $searchKeywordAdmin; ?>">
                    <div class="input-group-append">
                        <input type="submit" name="submitSearch" class="btn btn-sm btn-outline-secondary" value="Rechercher">
                        <input type="submit" name="submitSearchReset" class="btn btn-sm btn-outline-secondary" value="Retour">
                    </div>
                </div>
            </form>
            <!-- Add link -->
            <div class="float-right">
                <a href="<?php echo base_url(); ?>people/add_people" class="btn btn-sm btn-success"><i class="fas fa-user-plus"></i></a>
            </div>
        </div>




   
        <!-- Data list table --> 
        <table class="table table-responsive table-boredered table-striped">
            <thead>
            <tr>
                <th>N°</th>
                <th>Photo</th>
                <th>Nom</th>
                <th>Lien</th>
                <th>Status</th>
                <th>Titre</th>


                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
                <?php if(!empty($people)){ 
                        
                    foreach($people as $row){ 

                        $image = !empty($row['file_name'])?'<img src="'.base_url().'uploads/people_img/'.$row['file_name'].'" width="150" class="thumbnail" id="img" />':''; 
                ?>
                <tr>
                    <td><?php echo $row['people_id']; ?></td>
                    <td><?php echo $image; ?></td>
                    <td><?php echo ucfirst($row['people_name']); ?></td>
                    <td><a href="<?php echo $row['people_link']; ?>" class="btn btn-sm btn-info">Ici</a></td>
                    <td><?php echo ucfirst($row['people_status']); ?></td>
                    <td><?php echo ucfirst($row['people_title']); ?></td>

                    <td>
                        <a href="<?php echo base_url().'people/ad_view_people/'.$row['people_id']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-asterisk"></i></a>
                        <a href="<?php echo base_url().'people/edit_people/'.$row['people_id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-user-edit"></i></a>
                        <a href="<?php echo base_url().'people/delete_people/'.$row['people_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')"><i class="fas fa-user-minus"></i></a>
                    </td>
                </tr>
                <?php }}else{ ?>
                    <tr><td colspan="6">Aucune donnée(s) trouvée(s)...</td></tr>
                <?php } ?>
            </tbody>
        </table>


  



   <div>
        <?php echo $this->pagination->create_links(); ?>
   </div>


   </div>  
</div>
</div>
