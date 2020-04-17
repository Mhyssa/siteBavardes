

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
            <h3>Les Utilisateurs</h3>
            <!-- Add link -->
            <div class="float-right">
                <a href="<?php echo base_url(); ?>team/add_team" class="btn btn-sm btn-success">Ajouter</a>
            </div>
        </div>




   
        <!-- Data list table --> 
        <table class="table table-responsive table-boredered table-striped">
            <thead>
            <tr>
                <th>N°</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Adresse e-Mail</th>
                <th>Genre</th>
                <th>Numéro de Téléphone</th>
                <th>Status</th>

                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
                <?php if(!empty($admin)){ 
                        
                    foreach($admin as $row){ 

                ?>
                <tr>
                    <td><?php echo ucfirst($row['us_id']); ?></td>
                    <td><?php echo ucfirst($row['us_fname']); ?></td>
                    <td><?php echo ucfirst($row['us_lname']); ?></td>
                    <td><?php echo $row['us_email']; ?></td>
                    <td><?php echo ucfirst($row['us_gender']); ?></td>
                    <td><?php echo ucfirst($row['us_phone']); ?></td>
                    <td><?php echo $row['us_status']; ?></td>


                    <td>
                        <a href="<?php echo base_url().'team/ad_view_users/'.$row['us_id']; ?>" class="btn btn-sm btn-primary">en savoir plus</a>
                        <a href="<?php echo base_url().'team/edit_users/'.$row['us_id']; ?>" class="btn btn-sm btn-warning">modifier</a>
                        <a href="<?php echo base_url().'team/delete_users/'.$row['us_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">supprimer</a>
                    </td>
                </tr>
                <?php }}else{ ?>
                    <tr><td colspan="6">Aucune donnée(s) trouvée(s)...</td></tr>
                <?php } ?>
            </tbody>
        </table>


        </div>  
    </div>
</div>

