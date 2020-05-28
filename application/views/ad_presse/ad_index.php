
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
                <h3>La presse</h3>
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="searchKeywordAdmin" class="form-control" placeholder="Nom d'un article de presse" value="<?php echo $searchKeywordAdmin; ?>">
                        <div class="input-group-append">
                            <input type="submit" name="submitSearch" class="btn btn-sm btn-outline-secondary" value="Rechercher">
                            <input type="submit" name="submitSearchReset" class="btn btn-sm btn-outline-secondary" value="Retour">
                        </div>
                    </div>
                </form>
                <!-- Add  -->
                <div class="float-right">
                    <a href="<?php echo base_url(); ?>About/add_presse" class="btn btn-sm btn-success"><i class="fas fa-folder-plus"></i></a>
                </div>
        </div>



   
   <!-- Data list table --> 
   <table class="table table-responsive table-boredered table-striped">
       <thead>
       <tr>
           <th>N°</th>
           <th>Photo</th>
           <th>Catégorie</th>
           <th>Nom</th>
           <th>Lien</th>
           <th>Description</th>

           <th colspan="3">Action</th>
       </tr>
       </thead>
       <tbody>
           <?php if(!empty($presse)){ 
                   
               foreach($presse as $row){ 

                   $image = !empty($row['file_name'])?'<img src="'.base_url().'uploads/presse_img/'.$row['file_name'].'" width="150" class="thumbnail" id="img" />':''; 
           ?>
           <tr>
               <td><?php echo $row['presse_id']; ?></td>
               <td><?php echo $image; ?></td>
               <td><?php echo ($row['presse_cat']); ?></td>
               <td><?php echo ucfirst($row['presse_name']); ?></td>
               <td><a href="<?php echo $row['presse_link']; ?>" class="btn btn-sm btn-info">Ici</a></td>
               <td><?php echo ucfirst($row['presse_description']); ?></td>
               

               <td>
                   <a href="<?php echo base_url().'About/ad_view_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-asterisk"></i></a>
                   <a href="<?php echo base_url().'About/edit_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-pencil-alt"></i></a>
                   <a href="<?php echo base_url().'About/delete_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')"><i class="fas fa-folder-minus"></i></a>
               </td>
           </tr>
           <?php }}else{ ?>
           <tr><td colspan="6">Aucune(s) donnée(s) trouvée(s)...</td></tr>
           <?php } ?>
       </tbody>
   </table>

        <div>
            <?php echo $this->pagination->create_links(); ?>
        </div>

   </div>  
</div>


</div>