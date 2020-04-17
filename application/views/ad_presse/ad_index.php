


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
<h3>Liste des Articles de Presse</h3>
            <!-- Add link -->
            <div class="float-right">
                <a href="<?php echo base_url(); ?>presse/add_presse" class="btn btn-sm btn-success">Ajouter</a>
            </div>
        </div>



<h4>Jeanne Magazine</h4>
   
 
   <!-- Data list table --> 
   <table class="table table-responsive table-boredered table-striped">
       <thead>
       <tr>
           <th>N°</th>
           <th>Catégorie</th>
           <th>Nom</th>
           <th>Lien</th>

           <th colspan="3">Action</th>
       </tr>
       </thead>
       <tbody>
           <?php if(!empty($presse)){ 
                   
               foreach($presse as $row){ 
                if($row['presse_cat'] == 'Jeanne Magazine'){                             
           ?>
           <tr>
               <td><?php echo $row['presse_id']; ?></td>
               <td><?php echo ucfirst($row['presse_cat']); ?></td>
               <td><?php echo ucfirst($row['presse_name']); ?></td>
               <td><a href="<?php echo $row['presse_link']; ?>" class="btn btn-sm btn-info">Ici</a></td>             

               <td>
                   <a href="<?php echo base_url().'presse/ad_view_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-primary">en savoir plus</a>
                   <a href="<?php echo base_url().'presse/edit_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-warning">modifier</a>
                   <a href="<?php echo base_url().'presse/delete_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">supprimer</a>
               </td>
           </tr>
           <?php }}}else{ ?>
           <tr><td colspan="6">Aucune(s) donnée(s) trouvée(s)...</td></tr>
           <?php } ?>
       </tbody>
   </table>

   <h4>Courrier Picard</h4>
   
 
   <!-- Data list table --> 
   <table class="table table-responsive table-boredered table-striped">
       <thead>
       <tr>
           <th>N°</th>
           <th>Catégorie</th>
           <th>Nom</th>
           <th>Lien</th>

           <th colspan="3">Action</th>
       </tr>
       </thead>
       <tbody>
           <?php if(!empty($presse)){ 
                   
               foreach($presse as $row){  
                   if($row['presse_cat'] == 'Courrier Picard'){                       
           ?>
           <tr>
               <td><?php echo $row['presse_id']; ?></td>
               <td><?php echo ucfirst($row['presse_cat']); ?></td>
               <td><?php echo ucfirst($row['presse_name']); ?></td>
               <td><a href="<?php echo $row['presse_link']; ?>" class="btn btn-sm btn-info">Ici</a></td>             

               <td>
                   <a href="<?php echo base_url().'presse/ad_view_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-primary">en savoir plus</a>
                   <a href="<?php echo base_url().'presse/edit_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-warning">modifier</a>
                   <a href="<?php echo base_url().'presse/delete_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">supprimer</a>
               </td>
           </tr>
           <?php }}}else{ ?>
           <tr><td colspan="6">Aucune(s) donnée(s) trouvée(s)...</td></tr>
           <?php } ?>
       </tbody>
   </table>

   <h4>Luttes LGBTQI+</h4>
   
 
   <!-- Data list table --> 
   <table class="table table-responsive table-boredered table-striped">
       <thead>
       <tr>
           <th>N°</th>
           <th>Catégorie</th>
           <th>Nom</th>
           <th>Lien</th>

           <th colspan="3">Action</th>
       </tr>
       </thead>
       <tbody>
           <?php if(!empty($presse)){ 
                   
               foreach($presse as $row){ 
                if($row['presse_cat'] == 'Luttes LGBTQI+'){                             
           ?>
           <tr>
               <td><?php echo $row['presse_id']; ?></td>
               <td><?php echo ucfirst($row['presse_cat']); ?></td>
               <td><?php echo ucfirst($row['presse_name']); ?></td>
               <td><a href="<?php echo $row['presse_link']; ?>" class="btn btn-sm btn-info">Ici</a></td>             

               <td>
                   <a href="<?php echo base_url().'presse/ad_view_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-primary">en savoir plus</a>
                   <a href="<?php echo base_url().'presse/edit_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-warning">modifier</a>
                   <a href="<?php echo base_url().'presse/delete_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">supprimer</a>
               </td>
           </tr>
           <?php }}}else{ ?>
           <tr><td colspan="6">Aucune(s) donnée(s) trouvée(s)...</td></tr>
           <?php } ?>
       </tbody>
   </table>

   <h4>Divers</h4>
   
 
   <!-- Data list table --> 
   <table class="table table-responsive table-boredered table-striped">
       <thead>
       <tr>
           <th>N°</th>
           <th>Catégorie</th>
           <th>Nom</th>
           <th>Lien</th>

           <th colspan="3">Action</th>
       </tr>
       </thead>
       <tbody>
           <?php if(!empty($presse)){ 
                   
               foreach($presse as $row){  
                   if($row['presse_cat'] == 'Divers'){                       
           ?>
           <tr>
               <td><?php echo $row['presse_id']; ?></td>
               <td><?php echo ucfirst($row['presse_cat']); ?></td>
               <td><?php echo ucfirst($row['presse_name']); ?></td>
               <td><a href="<?php echo $row['presse_link']; ?>" class="btn btn-sm btn-info">Ici</a></td>             

               <td>
                   <a href="<?php echo base_url().'presse/ad_view_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-primary">en savoir plus</a>
                   <a href="<?php echo base_url().'presse/edit_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-warning">modifier</a>
                   <a href="<?php echo base_url().'presse/delete_presse/'.$row['presse_id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Voulez vous vraiment supprimer cette donnée?')">supprimer</a>
               </td>
           </tr>
           <?php }}}else{ ?>
           <tr><td colspan="6">Aucune(s) donnée(s) trouvée(s)...</td></tr>
           <?php } ?>
       </tbody>
   </table>



        </div>  
    </div>
</div>


