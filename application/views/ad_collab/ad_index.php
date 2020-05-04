


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
            <h3>Liste des Collaborations</h3>
            <!-- Add link -->
            <div class="float-right">
                <a href="<?php echo base_url(); ?>collab/add_collab" class="btn btn-sm btn-success">Ajouter</a>
            </div>
        </div>



            
            <!-- Data list table --> 
            <table class="table table-responsive table-boredered table-striped">
                <thead>
                <tr>
                    <th>N°</th>
                    <th>Photo</th>
                    <th>Nom</th>
                    <th>Catégorie</th>
                    <th>Lien</th>

                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php if(!empty($collab)){ 
                            
                        foreach($collab as $row){ 
                            $image = !empty($row['file_name'])?'<img src="'.base_url().'uploads/admin_img/'.$row['file_name'].'" width="150" class="thumbnail" id="img" />':''; 

                    ?>
                    <tr>
                        <td><?php echo $row['collab_id']; ?></td>
                        <td><?php echo $image; ?></td>
                        <td><?php echo ucfirst($row['collab_name']); ?></td>
                        <td><?php echo $row['collab_cat']; ?></td>
                        <td><a href="<?php echo $row['collab_link']; ?>" class="btn btn-sm btn-info">Ici</a></td>             

                        <td>
                            <a href="<?php echo base_url().'collab/ad_view_collab/'.$row['collab_id']; ?>" class="btn btn-sm btn-primary">en savoir plus</a>
                            <a href="<?php echo base_url().'collab/edit_collab/'.$row['collab_id']; ?>" class="btn btn-sm btn-warning">modifier</a>
                            <a href="<?php echo base_url().'collab/delete_collab/'.$row['collab_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">supprimer</a>
                        </td>
                    </tr>
                    <?php }}else{ ?>
                    <tr><td colspan="6">Aucune(s) donnée(s) trouvée(s)...</td></tr>
                    <?php } ?>
                </tbody>
            </table>

   


        </div>  
    </div>
</div>


