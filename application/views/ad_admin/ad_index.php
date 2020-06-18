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
         <h3>Liste des Admins</h3>
         <form method="post">
            <div class="input-group mb-3">
                <input type="text" name="searchKeywordAdmin" class="form-control" placeholder="Nom d'un admin" value="<?php echo $searchKeywordAdmin; ?>">
                <div class="input-group-append">
                    <input type="submit" name="submitSearch" class="btn btn-sm btn-outline-secondary" value="Rechercher">
                    <input type="submit" name="submitSearchReset" class="btn btn-sm btn-outline-secondary" value="Retour">
                </div>
            </div>
         </form>
         <!-- Add link -->
         <div class="float-right">
             <a href="<?php echo base_url(); ?>index.php/users/add_admin" class="btn btn-sm btn-success mb-2"><i class="fas fa-user-plus"></i></a>
         </div>
     </div>     


            <!-- Data list table --> 
            <table class="table table-responsive table-boredered table-striped">
                <thead>
                <tr>
                        <th>N°</th>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse Email</th>
                        <th>N° de Téléphone</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(!empty($admin)){ 
                            foreach($admin as $row){ 
                                if($row['us_status'] == 1){
                                    $image = !empty($row['file_name'])?'<img src="'.base_url().'uploads/admin_img/'.$row['file_name'].'" width="150" class="thumbnail" id="img" />':'';                               
                               ?>

                            <tr>
                                <td><?php echo $row['us_id']; ?></td>
                                <td><?php echo $image; ?></td>
                                <td><?php echo $row['us_lname']; ?></td>
                                <td><?php echo $row['us_fname']; ?></td>
                                <td><?php echo $row['us_email']; ?></td>
                                <td><?php echo $row['us_phone']; ?></td>
                                <td>
                                    <a href="<?php echo base_url().'index.php/users/edit_admin/'.$row['us_id'];?>" class="btn btn-sm btn-warning"><i class="fas fa-user-edit"></i></a>
                                    <a href="<?php echo base_url().'index.php/users/delete_admin/'.$row['us_id'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')"><i class="fas fa-user-minus"></i></a>
                                </td>
                            </tr>

                    <?php   }}} else { ?>

                            <tr>
                                <td colspan="5">Records not found</td>
                            </tr>

                    <?php   } ?>

                    </tbody>
                </table>

                <div>
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
        

    </div>
    

